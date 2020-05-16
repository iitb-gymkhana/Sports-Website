<?php $sport="The Dark Knight";
      $sport2="darkknight";

$this->pageTitle="Institute Blitz Championship - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
  <ol class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li>Clubs</li>
      <li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
      <li class="active">Tournaments</li>
            <li class="active">Institute Blitz Championship</li>
    </ol>

<div class="row">
      
      <!-- Sidebar -->
      <?php include 'sidebar.php'; ?>
      <!-- /Sidebar -->

    <article class="col-md-10 maincontent">
      <header class="page-header">
        <h1 class="page-title">Institute Blitz Championship</h1>
      </header>

<p>Registrations not open yet</p>
<ul>
  <li><b>Date</b> - 12th March, 2016 </li>
  <li><b>Venue</b> - 2nd floor, New SAC (opp. Hostel-11), IIT Bombay, Powai 400076 </li>
  <li><b>Time Control</b> - 3 minutes plus 2 second increment from 1st move  </li>
</ul>

<p>Only for IITB staff and students</p>
      


</article>
</div> 
</div>