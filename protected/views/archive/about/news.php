<?php
/* @var $this SidebarrightController */

$this->pageTitle="News - ". Yii::app()->name;

?>

  <header id="head" class="secondary"></header>

  <!-- container -->
  <div class="container">

    <ol class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li class="active">About</li>
      <li class="active">News</li>
    </ol>

    <div class="row">
      
      <!-- Article main content -->
      <article class="maincontent">
        <header class="page-header">
          <h1 class="page-title">News</h1>
        </header>

<?php if(!Yii::app()->user->isGuest) 
{
  if(Yii::app()->user->post!='user')
  { ?>

    <h3 style="text-align:right"><a href="index.php?r=about/putnews"> Add News? </a></h3>
  
<?php }
}
?>

<?php

foreach($news as $item) { ?>
  <div class="row" style="height:115px; overflow:hidden">
  <a href="index.php?r=about/shownews&id=<?php echo $item['id']; ?>"><?php echo "<h3>".$item['title']."</h3>";?></a><?php
  echo "<h4>".$item['sport'].',  '.$item['date'].'</h4>';
  echo $item['msg'].'<br />';
  ?> </div> 
  <?php }

?>


</article></div></div>