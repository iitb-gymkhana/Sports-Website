<?php
/* @var $this SidebarrightController */

$id=$_GET["id"];
foreach($news as $item) { if($item['id']==$id) { 
  $this->pageTitle=$item['title']. " - ". Yii::app()->name;

?>

  <header id="head" class="secondary"></header>

  <!-- container -->
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li>About</li>
      <li><a href="index.php?r=about/news">News</a></li>
      <li class="active"><?php echo $item['title'];?></li>
    </ol>

    <div class="row">
      
      <!-- Article main content -->
      <article class="maincontent">
        <header class="page-header">
          <h1 class="page-title"><?php echo $item['title'];?></h1>
        </header>
        <?php echo "<h3>".$item['sport'].',  '.$item['date'].'</h3>'; ?>
        <br>
        <?php if(isset($item['img'])){?>
        <div class="col-md-5" style="float:right; padding:10px ">
        <img src="<?php echo $item['img']; ?>" /> 
        </div><?php } ?>

        <div style="padding:10px ">
          <p><?php echo $item['msg']; ?></p>
        </div>

      </article>
    </div>
  </div>
<?php } } ?>
