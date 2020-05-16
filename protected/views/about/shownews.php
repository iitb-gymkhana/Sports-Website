<?php
/* @var $this SidebarrightController */

$id=$_GET["id"];
foreach($news as $item) { if($item['id']==$id) {
  $this->pageTitle=$item['title']. " - ". Yii::app()->name;
  $msg = ($item['msg']);

?>

<div class="fh5co-overlay" style=" height: 80px;"></div>
<div id="fh5co-blog-section" class="fh5co-section-gray">
  <div class="container" style="margin-top:60px;">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
        <h3><?php echo $item['title']; ?></h3>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
        <?php if(isset($item['img'])){?>

        <div class="col-md-5 col-md-5" style="padding:10px ">

        <img style="width:100%" src="<?php echo $item['img']; ?>" />
        </div>
      <?php } ?>
        <div  class="col-md-5 col-md-5"style="padding:10px; float:right ">
          <p style="font-size:15px"><?php echo $msg;?></p>
          <?php if(!Yii::app()->user->isGuest)
            {
              if(Yii::app()->user->post!='user')
              { ?>
                <a href="index.php?r=about/editnews&id=<?php echo $item['id']; ?>" class="btn btn-primary">EDIT NEWS</a>
                <a href="index.php?r=about/deletenews&id=<?php echo $item['id']; ?>" class="btn btn-primary" style="float:right">DELETE NEWS</a>
                <?php
              }
            }?>
        </div>
      </div>
        </div>
      </div>
      <?php }
    } ?>
