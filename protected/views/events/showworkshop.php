<?php
/* @var $this SidebarrightController */

$id=$_GET["id"];
foreach($workshop as $item) { if($item['id']==$id) {
  $this->pageTitle=$item['title']. " - ". Yii::app()->name;

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
          <p><b><?php echo date("M d, Y",strtotime($item['date'])); ?></b></p>
          <p style="font-size:15px"><?php echo $item['descr'];?></p>
          <?php if($item['reg_link']!=""){
            ?>
          <p><b>REGISTER NOW @ </b> <a href="<?php echo $item['reg_link']; ?>"><?php echo $item['reg_link']; ?></a></p>
          <?php
        }
        ?>
         <?php if(!Yii::app()->user->isGuest)
            {
              if(Yii::app()->user->post!='user')
              { ?>
            <p>
            <b>POSTED BY</b>
            <?php echo '<br>The '.$item['post'];
                echo '<br>'.date("H:i",strtotime($item['published'])).'<br>'.date("M d,Y",strtotime($item['published']));?>
                </p>
                <a href="index.php?r=events/deleteworkshop&id=<?php echo $item['id']; ?>" class="btn btn-primary">DELETE WORKSHOP?</a>
                <?php
              }
            }?>
        </div>
      </div>
        </div>
      </div>
      <?php }
    } ?>
