<?php $sport="The Dark Knight";
      $sport2="darkknight";

$this->pageTitle="Candidates Tournament - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
  <ol class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li>Clubs</li>
      <li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
      <li class="active">Tournaments</li>
            <li class="active">Candidates Tournament</li>
    </ol>

<div class="row">
      
      <!-- Sidebar -->
      <?php include 'sidebar.php'; ?>
      <!-- /Sidebar -->

    <article class="col-md-10 maincontent">
      <header class="page-header">
        <h1 class="page-title">Candidates Tournament</h1>
      </header>

<p>Refistrations not open yet</p>
<ul>
  <li><b>Date</b> - 27th March, 2016 </li>
  <li><b>Venue</b> - 2nd floor, New SAC (opp. Hostel-11), IIT Bombay, Powai 400076 </li>
  <li><b>Time Control</b> - 15 minutes plus 10 second increment from 1st move  </li>
</ul>

<p>Only for selected players of IITB</p>
      


</article>
</div> 
</div>