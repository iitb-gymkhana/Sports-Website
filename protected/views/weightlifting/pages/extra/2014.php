<?php
$sport="Weightlifting";
$sport2="weightlifting";
$year = 2014;
$this->pageTitle="InterIIT 2014 - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">InterIIT</li>
            <li class="active">InterIIT <?php echo $year; ?></li>
          </ol>

      <div class="row">

            <!-- Sidebar -->
            <?php include 'sidebar.php'; ?>
            <!-- /Sidebar -->

          <article class="col-md-10 maincontent">
            <header class="page-header">
              <h1 class="page-title">InterIIT <?php echo $year; ?> </h1>
            </header>

          <div>
            <h3 align ="center">Team
            <div style="text-align:center"><img src="images/weightlifting/<?php echo $year; ?>.jpg" ></div>
            <table width = 100% border = 1px>
              <tr>
              <td align = "center"><b>CATEGORY</b></td>
              <td align = "center"><b>PLAYER</b></td>
              <td align = "center"><b>AWARD</b></td>
            </tr>
            <tr>
            <td align = "center">Akshay Khadse</td>
            <td align = "center"></td>
            <td align = "center"></td>
          </tr>
            <tr>
            <td align = "center">CATEGORY</td>
            <td align = "center">Sumit Bhagat</td>
            <td align = "center"><b>AWARD</b></td>
          </tr>
          <tr>
          <td align = "center"><b>CATEGORY</b></td>
          <td align = "center"><b>Rakesh Kumar</b></td>
          <td align = "center"><b>AWARD</b></td>
        </tr>
        <tr>
        <td align = "center">77</td>
        <td align = "center">Varun Bairabonia</td>
        <td align = "center"><b>AWARD</b></td>
      </tr>
      <tr>
        <td align = "center">77</td>
        <td align = "center">Suraj Kumar Sahoo</td>
        <td align = "center"><b>AWARD</b></td>
      </tr>
      <tr>
      <td align = "center">77</td>
      <td align = "center">Deepak Chaudhary</td>
      <td align = "center"><b>AWARD</b></td>
    </tr>
  </table>
</article>
</div>
