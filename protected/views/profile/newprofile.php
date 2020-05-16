<?php
/* @var $this ProfileController */

$this->pageTitle="Setup Profile - ". Yii::app()->name;
$about="";
?>
<header id="head" class="secondary"></header>

<!-- All of these are required for WYSIWYG only -->
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/prettify.css">
    <!-- <link href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" rel="stylesheet"> -->
    <!-- <link href="https://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.hotkeys.js"></script>
    <!-- <script src="<?php //echo Yii::app()->request->baseUrl; ?>/js/prettify.js"></script> -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/wysiwyg.css">
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-wysiwyg.js"></script>

 <!-- container -->
  <div class="container">

    <ol class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li><a href="index.php?r=profile&letter=A">Profiles</a> </li>
      <li class="active">Set Up Profile</li>
    </ol>

    <div class="row">
      <!-- Article main content -->
      <article class="maincontent">
        <header class="page-header">
          <h1 class="page-title">Set Up Profile</h1>
        </header>

<p>Please create your profile with your personal details first. After creation, you can come back to upload 
your picture and update all other information.</p>

        <p><b>NOTE:</b> Please give FB, Google Plus, Twitter ID etc as <b>http://www.xyz.com/userid</b>. Else copy it from the URL of the respective pages</p>

<h3>Personal Details</h3>
<form method="post" action="index.php?r=profile/new">
<input name="image" type="hidden" id="image" value="images/profile.png">
<table width="100%" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100">Name</td>
<td><input style="background-color:lightgrey;" name="name" type="text" id="name" value="<?php echo Yii::app()->user->id ?>" readonly></td>
</tr>
<tr>
<td width="100">Roll Number</td>
<td><input style="background-color:lightgrey;" name="roll" type="text" id="roll" value="<?php echo Yii::app()->user->rollno ?>" readonly></td>
</tr>
<tr>
<td width="100">Hostel</td>
<td><input name="Hostel" type="text" id="Hostel" ></td>
</tr>
<tr>
<td width="100">Room Number</td>
<td><input name="RoomNo" type="text" id="RoomNo" ></td>
</tr>
<tr>
<td width="100">Phone Number</td>
<td><input name="PhoneNumber" type="text" id="PhoneNumber" ></td>
</tr>
<tr>
<td width="100">Favourite Sports</td>
<td><input name="sports" type="text" id="sports"></td>
</tr>
<tr>
<td width="100">Email</td>
<td><input name="Email" type="email" id="Email" ></td>
</tr>
<td width="100">Facebook</td>
<td><input name="fb" type="text" id="fb" ></td>
</tr>
<tr>
<td width="100">Google Plus</td>
<td><input name="gmail" type="text" id="gmail"></td>
</tr>
<tr>
<td width="100">Twitter</td>
<td><input name="twitter" type="text" id="twitter"></td>
</tr>
<tr>
<td width="100">About Me</td>
<td> 
                        <!--WYSIWYG editor Starts Here -->
    <div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">
      <!--<div class="btn-group">
        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="icon-font"></i><b class="caret"></b></a>
          <ul class="dropdown-menu">
          </ul>
        </div>-->
      <div class="btn-group">
        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="icon-text-height"></i>&nbsp;<b class="caret"></b></a>
          <ul class="dropdown-menu">
          <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
          <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
          <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
          </ul>
      </div>
      <div class="btn-group">
        <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>
        <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i></a>
        <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="icon-strikethrough"></i></a>
        <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="icon-underline"></i></a>
      </div>
      <div class="btn-group">
        <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="icon-list-ul"></i></a>
        <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="icon-list-ol"></i></a>
        <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="icon-indent-left"></i></a>
        <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="icon-indent-right"></i></a>
      </div>
      <div class="btn-group">
        <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="icon-align-left"></i></a>
        <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="icon-align-center"></i></a>
        <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="icon-align-right"></i></a>
        <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="icon-align-justify"></i></a>
      </div>
      <div class="btn-group">
      <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="icon-link"></i></a>
        <div class="dropdown-menu input-append">
          <input class="span2" placeholder="URL" type="text" data-edit="createLink"/>
          <button class="btn" type="button">Add</button>
        </div>
        <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="icon-cut"></i></a>
      </div>
      <div class="btn-group">
        <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="icon-undo"></i></a>
        <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="icon-repeat"></i></a>
      </div>
    </div>
    <div id="editor"><?php echo $about ?></div>
    <script>
        $('#editor').wysiwyg();
    </script><textarea id="About" name="About" style="display:none"></textarea>
                        <!--WYSIWYG editor Ends Here -->
</td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="updateBasicInfo" type="submit" id="updateBasicInfo" value="Create Profile">
</td>
</tr>
</table>
</form>

</article>
</div>
</div>
	
