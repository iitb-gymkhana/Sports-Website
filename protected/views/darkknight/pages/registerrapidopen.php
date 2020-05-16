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
      <li class="active">Registrations</li>
    </ol>

<div class="row">
      
      <!-- Sidebar -->
      <?php include 'sidebar.php'; ?>
      <!-- /Sidebar -->

    <article class="col-md-10 maincontent">
      <header class="page-header">
        <h1 class="page-title">Registrations</h1>
      </header>

<p>Please fill in this form to register. Note that registration is <b>NOT</b> complete until payment</p>
<p>Payment link: </p>
<ul>
  <li><a href="http://imojo.in/blfm5o" target="_blank">IITB Students</a> - Fees: ₹250</p></li>
  <li><a href="https://www.instamojo.com/IITB_Sports/rapid-open-chess-tournament-4e6a9/?ref=store" target="_blank">Non IITB Students</a> - Fees: ₹500</p></li>
</ul>
<p>On the spot payments also available</p>
<iframe src="https://docs.google.com/forms/d/1TtZ1j0kj-v97uahsyJ4ZeQYll2GF3LSKHpXtM9AF4Zk/viewform" width="750" height="800" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>


</article>
</div> 
</div>