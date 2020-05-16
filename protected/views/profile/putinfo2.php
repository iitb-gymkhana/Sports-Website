<?php
/* @var $this ProfileController */

$this->pageTitle="Edit Profile - ". Yii::app()->name;
?>
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/prettify.css">
    <link href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.hotkeys.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/prettify.js"></script>
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/wysiwyg.css">
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-wysiwyg.js"></script>


    <div class="fh5co-overlay" style=" height: 80px;"></div>
    <div id="fh5co-blog-section" class="fh5co-section-gray">
      <div class="container" style="margin-top:60px;">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
    					<h2>EDIT YOUR PROFILE</h2>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-md-6 council" style="left:25%;">
          <figure>
            <img src="<?php echo $photo; ?>" />
          </figure>
        </div>

        <form action="index.php?r=profile/pic" method="post" enctype="multipart/form-data">
            <p>SELECT IMAGE TO UPLOAD: (Less than 500 kB, Square pics are recommended)</p>
              <input name="id" type="hidden" value="<?php echo $id; ?>">
              <input type="file" name="fileToUpload" id="fileToUpload">
              <input type="submit" value="Upload Image" name="submit">
        </form>

<h3 align="center">Personal Details</h3>
<div class="container animate-box" style="margin-top:30px">
<form method="post" id="personal" action="index.php?r=profile/personal">
<input name="id" type="hidden" value="<?php echo $id; ?>">
<table width="100%" border="0" cellspacing="1" cellpadding="2">
<tr>
<td style="text-transform:uppercase">width="100">Name</td>
<td><input style="background-color:lightgrey;" name="name" type="text" id="name" value="<?php echo Yii::app()->user->id ?>" readonly></td>
</tr>
<tr>
<td style="text-transform:uppercase" width="100">Roll Number</td>
<td><input style="background-color:lightgrey;" name="roll" type="text" id="roll" value="<?php echo Yii::app()->user->rollno ?>" readonly></td>
</tr>
<tr>
<td style="text-transform:uppercase" width="100">Hostel</td>
<td><input name="Hostel" type="text" id="Hostel" value="<?php echo $hostel; ?>"></td>
</tr>
<tr>
<td style="text-transform:uppercase" width="100">Room Number</td>
<td><input name="RoomNo" type="text" id="RoomNo" value="<?php echo $roomno; ?>"></td>
</tr>
<tr>
<td style="text-transform:uppercase" width="100">Phone Number</td>
<td><input name="PhoneNumber" type="text" id="PhoneNumber" value="<?php echo $PhoneNumber; ?>"></td>
</tr>
<tr>
<td style="text-transform:uppercase" width="100">Favourite Sport(s)</td>
<td><input name="sports" type="text" id="sports" value="<?php echo $sports; ?>"></td>
</tr>
<tr>
<td style="text-transform:uppercase" width="100">Email</td>
<td><input name="Email" type="email" id="Email" value="<?php echo $Email; ?>"></td>
</tr>
<tr>
<td style="text-transform:uppercase" width="100">Facebook Profile</td>
<td><input name="fb" type="text" id="fb" value="<?php echo $fb; ?>"></td>
</tr>
<tr>
<td style="text-transform:uppercase" width="100">Google Plus</td>
<td><input name="gmail" type="text" id="gmail" value="<?php echo $gmail; ?>"></td>
</tr>
<tr>
<td style="text-transform:uppercase" width="100">Twitter Profile</td>
<td><input name="twitter" type="text" id="twitter" value="<?php echo $twitter; ?>"></td>
</tr>
<tr>
<td style="text-transform:uppercase" width="100">About Me</td>
<td>
</div>
<br>
<h3>GC Achievements</h3>

<h4>Select the ones you want to delete</h4>
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

<br>
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

<br>
<h3>Inter IIT Achievements</h3>

<h4>Select the ones you want to delete</h4>
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

<br>
<h4>Add new Achievements</h4>
<form method="post" action="index.php?r=profile/interiit">
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

<br>
<h3>Other Achievements</h3>

<h4>Select the ones you want to delete</h4>
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

<br>
<h4>Add new Achievements</h4>
<form method="post" action="index.php?r=profile/other">
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
</article>
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
