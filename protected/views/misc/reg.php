<?php
/* @var $this SidebarrightController */

$this->pageTitle="Registrations - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

  <!-- container -->
  <div class="container">

    <ol class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li class="active">Misc</li>
      <li class="active">Registrations</li>
    </ol>

    <div class="row">
      
      <!-- Article main content -->
      <article class="maincontent">
        <header class="page-header">
          <h1 class="page-title">Registrations</h1>
        </header>

<?php if(!Yii::app()->user->isGuest) 
{
  if(Yii::app()->user->post!='user')
  { ?>

    <h3 style="text-align:right"><a href="index.php?r=misc/newreg"> Add New Form? </a></h3>
  
<?php }
}
?>

<?php

foreach($reg as $item) { if($item['active']==0) {?>
  <a href="index.php?r=misc/showreg&formno=<?php echo $item['id'] ?>" > <?php echo "<h4>".$item['title']."</h4>"; ?> </a>
  
<?php } }

foreach($reg as $item) { if($item['active']==1) {?>
  <?php echo "<h4>".$item['title']."</h4>"; ?>
  
<?php } }

?>


</article></div></div>