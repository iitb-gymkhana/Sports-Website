<?php
/* @var $this SidebarrightController */

$this->pageTitle="Surveys - ". Yii::app()->name;

$id=$_GET["formno"];

foreach($surv as $item) {
    if($item['id']==$id)
      { $form=$item; }
  }

?>

<header id="head" class="secondary"></header>

  <!-- container -->
  <div class="container">

    <ol class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li>Misc</li>
      <li><a href="index.php?r=misc/survey">Surveys</a></li>
      <li class="active"><?php echo $form['title'] ?></li>
    </ol>

    <div class="row">
      
      <!-- Article main content -->
      <article class="maincontent">
        <header class="page-header">
          <h1 class="page-title"><?php echo $form['title'] ?></h1>
        </header>

<?php echo $form['msg'] ?>
<br>
<?php echo $form['url'] ?>




</article></div></div>