<?php $sport="The Dark Knight";
      $sport2="darkknight";

$this->pageTitle="Register - IIT Bombay Rapid Chess Open Tournament - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
  <ol class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li>Clubs</li>
      <li><a href="index.php?r=<?php echo $sport2;?>"><?php echo $sport; ?></a></li>
      <li>Tournaments</li>
      <li class="active"><a href="index.php?r=darkknight/page&view=rapidopen">IIT Bombay Rapid Chess Open Tournament</a></li>
      <li class="active">Registered Players</li>
    </ol>

<div class="row">
      
      <!-- Sidebar -->
      <?php include 'sidebar.php'; ?>
      <!-- /Sidebar -->

    <article class="col-md-10 maincontent">
      <header class="page-header">
        <h1 class="page-title">Registered Players</h1>
      </header>

<iframe src="https://docs.google.com/spreadsheets/d/1s_KwcjVURiTCHp0lkr1zGw7f3gzz0TZYgEz9jE2KvnY/edit" width="750" height="800" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>

</article>
</div> 
</div>