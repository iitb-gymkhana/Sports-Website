<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle="New Registration Form - ". Yii::app()->name;


?>

<header id="head" class="secondary"></header>


<!-- All of these are required for WYSIWYG only -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/prettify.css">
    <link href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.hotkeys.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/prettify.js"></script>
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/wysiwyg.css">
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-wysiwyg.js"></script>


	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Misc</li>
      		<li><a href="index.php?r=misc/reg">Registrations</a></li>
      		<li class="active">New Registration</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">New Registration Form</h1>
				</header>

			<?php if(Yii::app()->user->post!='user') {
			?>
			<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
					<div class="panel panel-default">
						<div class="panel-body">
							
							<form method="post" id="registration" action="index.php?r=misc/submit">
								<div class="top-margin">
									<label>Title <span class="text-danger">*</span></label>
									<input type="text" name="title" class="form-control">
								</div>
								<div class="top-margin">
									<label>iframe Code <span class="text-danger">*</span></label>
									<textarea rows="10" name="url" class="form-control"></textarea>
								</div>
								<div class="top-margin">
									<label>Text</label>
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
									
    									<div id="editor" class="form-control">
    									</div>
    									<script>
    									    $('#editor').wysiwyg();
    									</script>
									<textarea id="msg" name="msg" style="display:none"></textarea>
                        <!--WYSIWYG editor Ends Here -->
								</div>

								<hr>

								<div class="row">
									
									<div class="col-lg-12 text-right">
										<button class="btn btn-action" type="submit">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				<?php }  else echo "<p>Not Authorised</p>";
				?>
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
$('#registration').submit(function(){
    // Snatch the markup
    var msg = $('#editor', '#registration').html(); 
    // Place it into the textarea
    $('#msg', '#registration').html( msg );
    // Move on
    return true;
});

</script>