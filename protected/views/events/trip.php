<?php
/* @var $this SidebarrightController */

$this->pageTitle="Upcoming Treks and Trips - ". Yii::app()->name;

?>

<div class="fh5co-overlay" style=" height: 80px;"></div>
<div id="fh5co-blog-section" class="fh5co-section-gray">
  <div class="container" style="margin-top:60px;">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
        <h3>UPCOMING TREKS</h3>
      </div>
    </div>
  </div>

<?php if(!Yii::app()->user->isGuest)
{
  if(Yii::app()->user->post!='user')
  { ?>

    <button style="margin-left:80%; margin-bottom:5px;"><a href="index.php?r=events/puttrip"> ADD TRIP </a></button>

<?php }
}
?>

<div class="container">
  <div class="row">
     <?php $count=0; foreach($trip as $item) {
      $count++;
      if($count%3==1 && $count!=1)
      {
        ?> </div> <div class="row" > <?php } ?>
      <?php $string = strip_tags($item['descr']);
        if (strlen($string) > 100) {
          $stringCut = substr($string, 0, 100);
          $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
        } ?>
      <div class="col-md-4 col-md-4" >
          <div class="fh5co-blog animate-box">
            <a href="index.php?r=events/showtrip&id=<?php echo $item['id']; ?>" style="color:inherit"><?php echo "<h3 style=\"font-size:18px;margin-bottom:10px\">".$item['title']."</h3>"; ?> </a>
			<?php echo "<p style=\"font-size:16px;color:inherit;margin-bottom:5px;display:inline;\">".date("d/m/y",strtotime($item['date']));
			  if(strtotime($item['date'])<strtotime(date("m/d/y")))
			  echo 	"</p><span style=\"font-size:20px;display:inline;color:green\">"."     &#10004</span>";?>
            <?php echo "<p style=\"font-size:15px;margin-bottom:10px\">".$string.'</p>'; ?>
            <a href="index.php?r=events/showtrip&id=<?php echo $item['id']; ?>" class="btn btn-primary">Read More</a>
          </div>
      </div>
      <?php } ?>
  </div>
</div>
</div>