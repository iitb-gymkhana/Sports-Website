<?php
/* @var $this SidebarrightController */

$this->pageTitle="Ground Booking Requests - ". Yii::app()->name;
?>

<header id="head" class="secondary"></header>

  <!-- container -->
  <div class="container">

    <ol class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li>Misc</li>
      <li><a href="index.php?r=misc/ground">Ground Book</a></li>
      <li class="active">Approval</li>
    </ol>

    <div class="row">
      
      <!-- Article main content -->
      <article class="maincontent">
        <header class="page-header">
          <h1 class="page-title">Ground Booking Requests</h1>
        </header>
<?php $date=date('Y-m-d'); ?>

        <!--Cricket -->
    <div class="col-md-12">
        <h2 class="text-center top-space">Cricket</h2>  
        
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
          <div class="panel panel-default">
            <div class="panel-body">
        <?php 
          foreach($book as $item) { 
            if($item['approved']==0&&$item['date']>=$date&&$item['sport']=='Cricket') { ?>
                  <div class="col-md-6"> <?php
                  echo nl2br("\n\nName: ". $item['user'].
                        "\nDate - ". $item['date']. 
                        "\nTimings - ". $item['from']. " - ". $item['to']); ?> 
                  </div> <?php
        ?>
          <div class="col-md-6">
              <form method="post" action="index.php?r=misc/submit4">
              <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
              <input type="hidden" name="name" value="<?php echo $item['user']; ?>">
              <input type="hidden" name="ldap" value="<?php echo $item['ldap']; ?>">
              <input type="hidden" name="sport" value="<?php echo $item['sport']; ?>">
              <input type="hidden" name="date" value="<?php echo $item['date']; ?>">
                <div class="top-margin">
                  <label>From <span class="text-danger">*</span></label>
                  <input type="time" name="from" class="form-control">
                </div>
                <div class="top-margin">
                  <label>To <span class="text-danger">*</span></label>
                  <input type="time" name="to" class="form-control">
                </div>

                <hr>

                <div class="row">
                  <div class="col-lg-6 text-right">
                    <button class="btn" name="reject" type="submit" value="1">Reject</button>
                  </div>
                  <div class="col-lg-6 text-right">
                    <button class="btn btn-action" name="accept" type="submit" value="1">Accept</button>
                  </div>
                </div>
              </form>
            </div> <?php } } ?>
          </div>

        </div>
</div>
</div>


        <!--Football -->
<div class="col-md-12">
        <h2 class="text-center top-space">Football</h2>  
        
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
          <div class="panel panel-default">
            <div class="panel-body">
        <?php 
          foreach($book as $item) { 
            if($item['approved']==0&&$item['date']>=$date&&$item['sport']=='Football') { ?>
                  <div class="col-md-6"> <?php
                  echo nl2br("\n\nName: ". $item['user'].
                        "\nDate - ". $item['date']. 
                        "\nTimings - ". $item['from']. " - ". $item['to']); ?> 
                  </div> <?php
        ?>
          <div class="col-md-6">
              <form method="post" action="index.php?r=misc/submit4">
              <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
              <input type="hidden" name="name" value="<?php echo $item['user']; ?>">
              <input type="hidden" name="ldap" value="<?php echo $item['ldap']; ?>">
              <input type="hidden" name="sport" value="<?php echo $item['sport']; ?>">
                <div class="top-margin">
                  <label>From <span class="text-danger">*</span></label>
                  <input type="time" name="from" class="form-control">
                </div>
                <div class="top-margin">
                  <label>To <span class="text-danger">*</span></label>
                  <input type="time" name="to" class="form-control">
                </div>

                <hr>

                <div class="row">
                  <div class="col-lg-6 text-right">
                    <button class="btn" name="reject" type="submit" value="1">Reject</button>
                  </div>
                  <div class="col-lg-6 text-right">
                    <button class="btn btn-action" name="accept" type="submit" value="1">Accept</button>
                  </div>
                </div>
              </form>
            </div> <?php } } ?>
          </div>

        </div>
</div>
</div>


</article></div></div>