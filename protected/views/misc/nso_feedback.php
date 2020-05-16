<?php
/* @var $this SidebarleftController */

$this->pageTitle="NSO Feedback Form - ". Yii::app()->name;
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
			<li class="active">Misc</li>
			<li class="active">NSO Feedback Form</li>
		</ol>

		<div class="row">

			<!-- Article main content -->
			<article class="col-md-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">NSO Feedback Form</h1>
				</header>

			<?php if(!Yii::app()->user->isGuest) { ?>

			<div class="col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							
							<form method="post" id="nso" action="index.php?r=misc/submit6">
								<div class="top-margin">
									<label>Roll Number</label>
									<input style="background-color:lightgrey;" type="text" name="roll" value="<?php echo Yii::app()->user->rollno ?>" readonly class="form-control">
								</div>
								<div class="top-margin">
									<label>Your NSO Sport <span class="text-danger">*</span></label>
									<select name="sport" class="form-control">
									  <option value="Aerobics">Aerobics</option>
									  <option value="Athletics (Group A)">Athletics (Group A)</option>
									  <option value="thletics (Group B)">Athletics (Group B)</option>
									  <option value="Badminton">Badminton</option>
									  <option value="Basketball">Basketball</option>
									  <option value="Cricket">Cricket</option>
									  <option value="Football">Football</option>
									  <option value="Hockey">Hockey</option>
									  <option value="Lawn Tennis">Lawn Tennis</option>
									  <option value="Kho Kho">Kho Kho</option>
									  <option value="Squash">Squash</option>
									  <option value="Swimming">Swimming</option>
									  <option value="Football">Table Tennis</option>
									  <option value="Volleyball (Group A)">Volleyball (Group A)</option>
									  <option value="Volleyball (Group B)">Volleyball (Group B)</option>
									  <option value="Weight Lifting">Weight Lifting</option>
									  <option value="Yoga">Yoga</option>
									  <option value="Drama">Drama</option>
									  <option value="Music (Vocals)">Music (Vocals)</option>
									  <option value="Music (Tabla)">Music (Tabla)</option>
									  <option value="Music (Keyboard)">Music (Keyboard)</option>
									  <option value="Music (Guitar)">Music (Guitar)</option>
									  <option value="Music (Violin)">Music (Violin)</option>
									</select>	
								</div>
								<div class="top-margin">
									<label>1) The instructor has displayed a wide range of knowledge of the sport; attending his sessions has been a good learning experience
							  		<span class="text-danger">*</span></label>
									<div class="row">
										<div class="col-xs-2" style="text-align:center"><input type="radio" name="1" value="5"> Strongly Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="1" value="4"> Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="1" value="3"> Neutral</div>
  										<div class="col-xs-3" style="text-align:center"><input type="radio" name="1" value="2"> Disagree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="1" value="1"> Strongly Disagree</div>
  									</div>
								</div>
								<div class="top-margin">
									<label>2) The sessions were delivered with authority and excellent communication skills 
		 							<span class="text-danger">*</span></label>
									<div class="row">
										<div class="col-xs-2" style="text-align:center"><input type="radio" name="2" value="5"> Strongly Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="2" value="4"> Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="2" value="3"> Neutral</div>
  										<div class="col-xs-3" style="text-align:center"><input type="radio" name="2" value="2"> Disagree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="2" value="1"> Strongly Disagree</div>
  									</div>
								</div>
								<div class="top-margin">
									<label>3) The instructor has encouraged co-operative learning in the class
									<span class="text-danger">*</span></label>
									<div class="row">
										<div class="col-xs-2" style="text-align:center"><input type="radio" name="3" value="5"> Strongly Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="3" value="4"> Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="3" value="3"> Neutral</div>
  										<div class="col-xs-3" style="text-align:center"><input type="radio" name="3" value="2"> Disagree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="3" value="1"> Strongly Disagree</div>
  									</div>
								</div>
								<div class="top-margin">
									<label>4) The instructor has always been accessible for discussing and sharing his skills/knowledge about the sport
									<span class="text-danger">*</span></label>
									<div class="row">
										<div class="col-xs-2" style="text-align:center"><input type="radio" name="4" value="5"> Strongly Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="4" value="4"> Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="4" value="3"> Neutral</div>
  										<div class="col-xs-3" style="text-align:center"><input type="radio" name="4" value="2"> Disagree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="4" value="1"> Strongly Disagree</div>
  									</div>
								</div>
								<div class="top-margin">
									<label>5) The NSO objectives had been set with clarity and sessions were well organized to realise the objectives
									<span class="text-danger">*</span></label>
									<div class="row">
										<div class="col-xs-2" style="text-align:center"><input type="radio" name="5" value="5"> Strongly Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="5" value="4"> Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="5" value="3"> Neutral</div>
  										<div class="col-xs-3" style="text-align:center"><input type="radio" name="5" value="2"> Disagree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="5" value="1"> Strongly Disagree</div>
  									</div>
								</div>
								<div class="top-margin">
									<label>6) The sessions consisted of novel and interesting demo of skills enhancing my interest in the sport 
									<span class="text-danger">*</span></label>
									<div class="row">
										<div class="col-xs-2" style="text-align:center"><input type="radio" name="6" value="5"> Strongly Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="6" value="4"> Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="6" value="3"> Neutral</div>
  										<div class="col-xs-3" style="text-align:center"><input type="radio" name="6" value="2"> Disagree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="6" value="1"> Strongly Disagree</div>
  									</div>
								</div>
								<div class="top-margin">
									<label>7) The instructor has the ability to come up with credible and lucid display of even the most complex skills in the sport
									<span class="text-danger">*</span></label>
									<div class="row">
										<div class="col-xs-2" style="text-align:center"><input type="radio" name="7" value="5"> Strongly Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="7" value="4"> Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="7" value="3"> Neutral</div>
  										<div class="col-xs-3" style="text-align:center"><input type="radio" name="7" value="2"> Disagree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="7" value="1"> Strongly Disagree</div>
  									</div>
								</div>
								<div class="top-margin">
									<label>8) The instructor has laid sufficient emphasis on the learning of basic skills - my understanding of the same has been thorough
									<span class="text-danger">*</span></label>
									<div class="row">
										<div class="col-xs-2" style="text-align:center"><input type="radio" name="8" value="5"> Strongly Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="8" value="4"> Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="8" value="3"> Neutral</div>
  										<div class="col-xs-3" style="text-align:center"><input type="radio" name="8" value="2"> Disagree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="8" value="1"> Strongly Disagree</div>
  									</div>
								</div>
								<div class="top-margin">
									<label>9) The instructor has respected students as co-learners and responded positively to their learning needs
									<span class="text-danger">*</span></label>
									<div class="row">
										<div class="col-xs-2" style="text-align:center"><input type="radio" name="9" value="5"> Strongly Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="9" value="4"> Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="9" value="3"> Neutral</div>
  										<div class="col-xs-3" style="text-align:center"><input type="radio" name="9" value="2"> Disagree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="9" value="1"> Strongly Disagree</div>
  									</div>
								</div>
								<div class="top-margin">
									<label>10) The instructor has provided quality equipment and used innovative coaching aids to facilitate better practice
									<span class="text-danger">*</span></label>
									<div class="row">
										<div class="col-xs-2" style="text-align:center"><input type="radio" name="10" value="5"> Strongly Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="10" value="4"> Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="10" value="3"> Neutral</div>
  										<div class="col-xs-3" style="text-align:center"><input type="radio" name="10" value="2"> Disagree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="10" value="1"> Strongly Disagree</div>
  									</div>
								</div>
								<div class="top-margin">
									<label>11) The sessions comprised of exercises/ physical education practice specific to that sport which helped in overall learning 
									<span class="text-danger">*</span></label>
									<div class="row">
										<div class="col-xs-2" style="text-align:center"><input type="radio" name="11" value="5"> Strongly Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="11" value="4"> Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="11" value="3"> Neutral</div>
  										<div class="col-xs-3" style="text-align:center"><input type="radio" name="11" value="2"> Disagree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="11" value="1"> Strongly Disagree</div>
  									</div>
								</div>
								<div class="top-margin">
									<label>12) The instructor provided his/her personal attention to each student pertaining to students’ capabilities
									<span class="text-danger">*</span></label>
									<div class="row">
										<div class="col-xs-2" style="text-align:center"><input type="radio" name="12" value="5"> Strongly Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="12" value="4"> Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="12" value="3"> Neutral</div>
  										<div class="col-xs-3" style="text-align:center"><input type="radio" name="12" value="2"> Disagree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="12" value="1"> Strongly Disagree</div>
  									</div>
								</div>
								<div class="top-margin">
									<label>13) The zeal, enthusiasm and the energy shown by the instructor has helped in creating a vibrant atmosphere in the class
									<span class="text-danger">*</span></label>
									<div class="row">
										<div class="col-xs-2" style="text-align:center"><input type="radio" name="13" value="5"> Strongly Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="13" value="4"> Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="13" value="3"> Neutral</div>
  										<div class="col-xs-3" style="text-align:center"><input type="radio" name="13" value="2"> Disagree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="13" value="1"> Strongly Disagree</div>
  									</div>
								</div>
								<div class="top-margin">
									<label>14) The examination encouraged creativity and tested learning, thus, complementing what was taught in the NSO 
									<span class="text-danger">*</span></label>
									<div class="row">
										<div class="col-xs-2" style="text-align:center"><input type="radio" name="14" value="5"> Strongly Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="14" value="4"> Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="14" value="3"> Neutral</div>
  										<div class="col-xs-3" style="text-align:center"><input type="radio" name="14" value="2"> Disagree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="14" value="1"> Strongly Disagree</div>
  									</div>
								</div>
								<div class="top-margin">
									<label>15) Evaluated examination provided prompt, constructive feedback enabling the students to understand the criteria & standards against which they are being evaluated
									<span class="text-danger">*</span></label>
									<div class="row">
										<div class="col-xs-2" style="text-align:center"><input type="radio" name="15" value="5"> Strongly Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="15" value="4"> Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="15" value="3"> Neutral</div>
  										<div class="col-xs-3" style="text-align:center"><input type="radio" name="15" value="2"> Disagree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="15" value="1"> Strongly Disagree</div>
  									</div>
								</div>
								<div class="top-margin">
									<label>16) The instructor had motivated me by words of encouragement and constructive criticism
									<span class="text-danger">*</span></label>
									<div class="row">
										<div class="col-xs-2" style="text-align:center"><input type="radio" name="16" value="5"> Strongly Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="16" value="4"> Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="16" value="3"> Neutral</div>
  										<div class="col-xs-3" style="text-align:center"><input type="radio" name="16" value="2"> Disagree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="16" value="1"> Strongly Disagree</div>
  									</div>
								</div>
								<div class="top-margin">
									<label>17) My interest in the sport has grown with continued exposure by the instructor
									<span class="text-danger">*</span></label>
									<div class="row">
										<div class="col-xs-2" style="text-align:center"><input type="radio" name="17" value="5"> Strongly Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="17" value="4"> Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="17" value="3"> Neutral</div>
  										<div class="col-xs-3" style="text-align:center"><input type="radio" name="17" value="2"> Disagree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="17" value="1"> Strongly Disagree</div>
  									</div>
								</div>
								<div class="top-margin">
									<label>18) My confidence in the instructor has grown so much that I often think of him/her as the best person to give me guidance on physical education
									<span class="text-danger">*</span></label>
									<div class="row">
										<div class="col-xs-2" style="text-align:center"><input type="radio" name="18" value="5"> Strongly Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="18" value="4"> Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="18" value="3"> Neutral</div>
  										<div class="col-xs-3" style="text-align:center"><input type="radio" name="18" value="2"> Disagree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="18" value="1"> Strongly Disagree</div>
  									</div>
								</div>
								<div class="top-margin">
									<label>19) In my opinion the instructor should be considered for an award for excellence in coaching
									<span class="text-danger">*</span></label>
									<div class="row">
										<div class="col-xs-2" style="text-align:center"><input type="radio" name="19" value="5"> Strongly Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="19" value="4"> Agree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="19" value="3"> Neutral</div>
  										<div class="col-xs-3" style="text-align:center"><input type="radio" name="19" value="2"> Disagree</div>
  										<div class="col-xs-2" style="text-align:center"><input type="radio" name="19" value="1"> Strongly Disagree</div>
  									</div>
								</div>
								<br><br>
							<!--WYSIWYG editor Starts Here -->
							<div class="top-margin">
									<label>Any other Suggestions/Feedback/Comments</label>
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
								
    								<div id="editor">
    								</div>
    								<script>
    								    $('#editor').wysiwyg();
    								</script>
									<textarea id="feedback" name="feedback" style="display:none"></textarea>
								</div>
    						<!--WYSIWYG editor Ends Here -->

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
				<?php }  else echo "<p>Please Login</p>";
				?>
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->


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
$('#nso').submit(function(){
    // Snatch the markup
    var feedback = $('#editor', '#nso').html(); 
    // Place it into the textarea
    $('#feedback', '#nso').html( feedback );
    // Move on
    return true;
});

</script>

