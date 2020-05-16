<?php
/* @var $this ProfileController */

$this->pageTitle="Edit Profile - ". Yii::app()->name;
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
 <div class="fh5co-overlay" style=" height: 80px;"></div>
<div id="fh5co-blog-section" class="fh5co-section-gray">
  <div class="container" style="margin-top:60px;">
    <div class="row text-center">
      <div class="col-md-8 col-md-offset-2  heading-section animate-box">
					<h2>Edit Profile</h2>
        </div>
      </div>
    </div>

    

        <p align="center"><b>NOTE:</b> Please give FB, Google Plus, Twitter ID etc as <b>http://www.xyz.com/userid</b>. Else copy it from the URL of the respective pages</p>
<div class="container"> 
	<div class="row  animate-box">
		<form action="index.php?r=profile/pic" method="post" enctype="multipart/form-data">
    Select image to upload: (Less than 500 kB)
    <input name="id" type="hidden" value="<?php echo $id; ?>">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
</div>

<div class="row  animate-box" style="margin-bottom:20px">
<h3 align="center">Personal Details</h3>
<form method="post" id="personal" action="index.php?r=profile/personal">
<input name="id" type="hidden" value="<?php echo $id; ?>">
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
<td><input name="Hostel" type="text" id="Hostel" value="<?php echo $hostel; ?>"></td>
</tr>
<tr>
<td width="100">Room Number</td>
<td><input name="RoomNo" type="text" id="RoomNo" value="<?php echo $roomno; ?>"></td>
</tr>
<tr>
<td width="100">Phone Number</td>
<td><input name="PhoneNumber" type="text" id="PhoneNumber" value="<?php echo $PhoneNumber; ?>"></td>
</tr>
<tr>
<td width="100">Favourite Sports</td>
<td><input name="sports" type="text" id="sports" value="<?php echo $sports; ?>"></td>
</tr>
<tr>
<td width="100">Email</td>
<td><input name="Email" type="email" id="Email" value="<?php echo $Email; ?>"></td>
</tr>
<tr>
<td width="100">Facebook</td>
<td><input name="fb" type="text" id="fb" value="<?php echo $fb; ?>"></td>
</tr>
<tr>
<td width="100">Google Plus</td>
<td><input name="gmail" type="text" id="gmail" value="<?php echo $gmail; ?>"></td>
</tr>
<tr>
<td width="100">Twitter</td>
<td><input name="twitter" type="text" id="twitter" value="<?php echo $twitter; ?>"></td>
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
    <div id="editor"><?php echo $about; ?></div>
    <script>
        $('#editor').wysiwyg();
    </script><textarea id="About" name="About" style="display:none"></textarea>
                        <!--WYSIWYG editor Ends Here -->
</td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="updateBasicInfo" type="submit" id="updateBasicInfo" value="Update">
</td>
</tr>
</table>
</form>
</div>
<div class="row  animate-box" style="margin-bottom:20px">
<div class="col-md-6">
<h3>GC Achievements</h3>
<p>Select the ones you want to delete</p>
<form method="post" action="index.php?r=profile/delgc">
<input name="id" type="hidden" value="<?php echo $id; ?>">
<input name="GCAch" type="hidden" value="<?php echo $GCAch; ?>">
<table width="100%" border="0" cellspacing="1" cellpadding="2">
<?php $GCList=explode("~",$GCAch); 
$GCitemcount=0;?>
<?php foreach ($GCList as $GCItem) { 
if($GCitemcount != count($GCList)-1){?>
<tr>
<td width="50"><input name="GCitemcount<?php echo $GCitemcount; ?>" type="checkbox" id="GCitemcount<?php echo $GCitemcount; ?>" value="Yes"></td>
<td><?php echo $GCItem; 
$GCitemcount+=1;?></td>
</tr>
<?php }} ?>
<tr>
<td width="50"> </td>
<td>
<input name="deleteGC" type="submit" id="deleteGC" value="Delete">
</td>
</tr>
</table>
</form>
</div>
<div class="col-md-6">
<h4>Add new Achievements</h4>

<form method="post" action="index.php?r=profile/gc">
<input name="id" type="hidden" value="<?php echo $id; ?>">
<input name="GCAch" type="hidden" value="<?php echo $GCAch; ?>">
<table width="100%" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="50">GC</td>
<td><input name="GCinfo" type="text" id="GCinfo"></td>
</tr>
<tr>
<td width="50"> </td>
<td>
<input name="addGC" type="submit" id="addGC" value="Add">
</td>
</tr>
</table>
</form>
</div>
</div>

<div class="row  animate-box">
<div class="col-md-6">
<h3>Inter IIT Achievements</h3>

<p>Select the ones you want to delete</p>
<form method="post" action="index.php?r=profile/delinteriit">
<input name="id" type="hidden" value="<?php echo $id; ?>">
<input name="InterIITAch" type="hidden" value="<?php echo $InterIITAch; ?>">
<table width="100%" border="0" cellspacing="1" cellpadding="2">
<?php $InterIITList=explode("~",$InterIITAch); 
$InterIITitemcount=0;?>
<?php foreach ($InterIITList as $InterIITItem) { 
if($InterIITitemcount != count($InterIITList)-1){?>
<tr>
<td width="50"><input name="InterIITitemcount<?php echo $InterIITitemcount; ?>" type="checkbox" id="InterIITitemcount<?php echo $InterIITitemcount; ?>" value="Yes"></td>
<td><?php echo $InterIITItem; 
$InterIITitemcount+=1;?></td>
</tr>
<?php }} ?>
<tr>
<td width="50"> </td>
<td>
<input name="deleteInterIIT" type="submit" id="deleteInterIIT" value="Delete">
</td>
</tr>
</table>
</form>
</div>

<div class="col-md-6">
<h4>Add new Achievements</h4><form method="post" action="index.php?r=profile/interiit">
<input name="id" type="hidden" value="<?php echo $id; ?>">
<input name="InterIITAch" type="hidden" value="<?php echo $InterIITAch; ?>">
<table width="100%" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="50">Inter IIT</td>
<td><input name="InterIITinfo" type="text" id="InterIITinfo"></td>
</tr>
<tr>
<td width="50"> </td>
<td>
<input name="addInterIIT" type="submit" id="addInterIIT" value="Update">
</td>
</tr>
</table>
</form>
</div>
</div>

<div class="row  animate-box">
<div class="col-md-6">
<h3>Other Achievements</h3>

<p>Select the ones you want to delete</p>
<form method="post" action="index.php?r=profile/delother">
<input name="id" type="hidden" value="<?php echo $id; ?>">
<input name="OthersAch" type="hidden" value="<?php echo $OthersAch; ?>">
<table width="100%" border="0" cellspacing="1" cellpadding="2">
<?php $OthersList=explode("~",$OthersAch); 
$Othersitemcount=0;?>
<?php foreach ($OthersList as $OthersItem) { 
if($Othersitemcount != count($OthersList)-1){?>
<tr>
<td width="50"><input name="Othersitemcount<?php echo $Othersitemcount; ?>" type="checkbox" id="Othersitemcount<?php echo $Othersitemcount; ?>" value="Yes"></td>
<td><?php echo $OthersItem; 
$Othersitemcount+=1;?></td>
</tr>
<?php }} ?>
<tr>
<td width="50"> </td>
<td>
<input name="deleteOthers" type="submit" id="deleteOthers" value="Delete">
</td>
</tr>
</table>
</form>
</div>

<div class="col-md-6">
<h4>Add new Achievements</h4><form method="post" action="index.php?r=profile/other">
<input name="id" type="hidden" value="<?php echo $id; ?>">
<input name="OthersAch" type="hidden" value="<?php echo $OthersAch; ?>">
<table width="100%" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="50">Others</td>
<td><input name="Othersinfo" type="text" id="Othersinfo"></td>
</tr>
<tr>
<td width="50"> </td>
<td>
<input name="addOthers" type="submit" id="addOthers" value="Update">
</td>
</tr>
</table>
</form>
</div>
</div>
</div>


</div>
 </div>
<script>
  $(function(){
    function initToolbarBootstrapBindings() {
      /*var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 
            'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
            'Times New Roman', 'Verdana'],
            fontTarget = $('[title=Font]').siblings('.dropdown-menu');*/
      $.each(fonts, function (idx, fontName) {
          fontTarget.append($('<li><a data-edit="fontName ' + fontName +'" style="font-family:\''+ fontName +'\'">'+fontName + '</a></li>'));
      });
      $('a[title]').tooltip({container:'body'});
      $('.dropdown-menu input').click(function() {return false;})
        .change(function () {$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');})
        .keydown('esc', function () {this.value='';$(this).change();});

      $('[data-role=magic-overlay]').each(function () { 
        var overlay = $(this), target = $(overlay.data('target')); 
        overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
      });
      if ("onwebkitspeechchange"  in document.createElement("input")) {
        var editorOffset = $('#editor').offset();
        $('#voiceBtn').css('position','absolute').offset({top: editorOffset.top, left: editorOffset.left+$('#editor').innerWidth()-35});
      } else {
        $('#voiceBtn').hide();
      }
  };
  function showErrorAlert (reason, detail) {
    var msg='';
    if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
    else {
      console.log("error uploading file", reason, detail);
    }
    $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+ 
     '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
  };
    initToolbarBootstrapBindings();  
  $('#editor').wysiwyg({ fileUploadError: showErrorAlert} );
    window.prettyPrint && prettyPrint();
  });
</script>

<script>
$('#personal').submit(function(){
    // Snatch the markup
    var About = $('#editor', '#personal').html(); 
    // Place it into the textarea
    $('#About', '#personal').html( About );
    // Move on
    return true;
});

</script>