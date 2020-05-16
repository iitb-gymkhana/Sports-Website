<?php $sport="The Dark Knight";
      $sport2="darkknight";

$this->pageTitle="IIT Bombay Rapid Chess Open Tournament - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
  <ol class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li>Clubs</li>
      <li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
      <li class="active">Tournaments</li>
            <li class="active">IIT Bombay Rapid Chess Open Tournament</li>
    </ol>

<div class="row">
      
      <!-- Sidebar -->
      <?php include 'sidebar.php'; ?>
      <!-- /Sidebar -->

    <article class="col-md-10 maincontent">
      <header class="page-header">
        <h1 class="page-title">IIT Bombay Rapid Chess Open Tournament</h1>
      </header>

<p>Click <a href="index.php?r=darkknight/page&view=registerrapidopen">here</a> for Registration </p>
<ul>
  <li><b>Date</b> - 5th March, 2016 </li>
  <li><b>Venue</b> - 3rd floor, New SAC (opp. Hostel-11), IIT Bombay, Powai 400076 </li>
  <li><b>Reporting Time</b> - 8:30 AM </li>
  <li><b>Time Control</b> - 15 minutes plus 3 second increment from 1st move </li>
</ul>

<p>Click <a href="index.php?r=darkknight/page&view=registeredrapidopen">here</a> to view registered players</p>
<p>For Information Brochure Click <a href="assets/view/RapidOpen.pdf" target="_blank">here</a> </p>
      


</article>
</div> 
</div>