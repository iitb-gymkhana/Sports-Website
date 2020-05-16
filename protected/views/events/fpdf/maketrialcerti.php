<?php
require('fpdf.php');
$roll_num = $_GET["rollnum"];

class PDF extends FPDF {
    const DPI = 96;
    const MM_IN_INCH = 25.4;
    const A4_HEIGHT = 297;
    const A4_WIDTH = 210;
    // tweak these values (in pixels)
    const MAX_WIDTH = 1100;
    const MAX_HEIGHT = 800;
    function pixelsToMM($val) {
        return $val * self::MM_IN_INCH / self::DPI;
    }
    function resizeToFit($imgFilename) {
        list($width, $height) = getimagesize($imgFilename);
        $widthScale = self::MAX_WIDTH / $width;
        $heightScale = self::MAX_HEIGHT / $height;
        $scale = min($widthScale, $heightScale);
        return array(
            round($this->pixelsToMM($scale * $width)),
            round($this->pixelsToMM($scale * $height))
        );
    }
    function centreImage($img) {
        list($width, $height) = $this->resizeToFit($img);
        // you will probably want to swap the width/height
        // around depending on the page's orientation
        $this->Image(
            $img, (self::A4_HEIGHT - self::A4_HEIGHT) / 2,
            (self::A4_WIDTH - self::A4_WIDTH) / 2,
            $width,
            $height
        );
    }
}

class NewPDF extends PDF {
    var $angle=0;

    function Rotate($angle,$x=-1,$y=-1)
    {
        if($x==-1)
            $x=$this->x;
        if($y==-1)
            $y=$this->y;
        if($this->angle!=0)
            $this->_out('Q');
        $this->angle=$angle;
        if($angle!=0)
        {
            $angle*=M_PI/180;
            $c=cos($angle);
            $s=sin($angle);
            $cx=$x*$this->k;
            $cy=($this->h-$y)*$this->k;
            $this->_out(sprintf('q %.5F %.5F %.5F %.5F %.2F %.2F cm 1 0 0 1 %.2F %.2F cm',$c,$s,-$s,$c,$cx,$cy,-$cx,-$cy));
        }
    }

    function _endpage()
    {
        if($this->angle!=0)
        {
            $this->angle=0;
            $this->_out('Q');
        }
        parent::_endpage();
    }

    function RotatedText($x, $y, $txt, $angle)
    {
        //Text rotated around its origin
        $this->Rotate($angle,$x,$y);
        $this->Text($x,$y,$txt);
        $this->Rotate(0);
    }
}

$pdf = new NewPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L',[290,164],0);
$pdf->centreImage('/home/sports/public_html/protected/views/events/fpdf/TRIALCERTI.jpg');

$connection = Yii::app()->db;

$roll=Yii::app()->user->rollno;
$certi_id = 'SAMPLECERTIIITBSPRT';
$event = 'BASEBALL GC';
$host = 'HOSTEL '.$connection->createCommand()->SELECT('Hostel')->FROM('profile')->WHERE("RollNumber = '$roll'")->queryScalar();
$pos = 'FIRST';
$name = $connection->createCommand()->SELECT('Name')->FROM('profile')->WHERE("RollNumber = '$roll'")->queryScalar();
$name = ucwords(strtolower($name));

$pdf->AddFont('Montserrat','B','Montserrat-Regular.php');
$pdf->SetFont('Montserrat','B',45);
$pdf->SetTextColor(200);
$pdf->RotatedText(90,140,'SAMPLE CERTIFICATE',45);

$pdf->SetXY(160,70);
$pdf->SetTextColor(0);
$pdf->AddFont('GreatVibes','','GreatVibes-Regular.php');
$pdf->SetFont('GreatVibes','',40);
$pdf->Cell(30,25,$name,0,1,'C');

$pdf->SetXY(160,25);
$pdf->AddFont('Montserrat','B','Montserrat-Regular.php');
$pdf->SetFont('Montserrat','B',40);
$pdf->Cell(30,25,'TRIAL CERTIFICATE',0,1,'C');

$pdf->SetXY(198,98.25);
$pdf->AddFont('Montserrat','B','Montserrat-Regular.php');
$pdf->SetFont('Montserrat','B',12);
$pdf->Cell(10,8,$event,0,1,'C');

$pdf->SetXY(125,98.25);
$pdf->AddFont('Montserrat','B','Montserrat-Regular.php');
$pdf->SetFont('Montserrat','B',12);
$pdf->Cell(10,8,$host,0,1,'C');

$pdf->SetXY(173.25,103.37);
$pdf->AddFont('Montserrat','B','Montserrat-Regular.php');
$pdf->SetFont('Montserrat','B',12);
$pdf->Cell(10,8,$pos,0,1,'C');

$pdf->SetXY(52.5,135);
$pdf->AddFont('Montserrat','B','Montserrat-Regular.php');
$pdf->SetFont('Montserrat','B',12);
$pdf->SetTextColor(235);
$pdf->RotatedText(289,120,$certi_id,90);
//$pdf->Cell(5,4,$certi_id,0,1,'C');
$pdf->SetTitle('TrialCertificate.pdf');
$pdf->Output('I','TrialCertificate.pdf');

?>