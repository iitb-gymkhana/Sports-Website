<?php
	if(!current_user_can('manage_options'))
	{
		die('Access Denied');
	}
	global $wpdb;

	$table_name  =  $wpdb->prefix . "calendar_manager";
	
	if (isset ($_POST['save_submit'])){
		
		//$a11 = strlen(is_int($_POST['default_year']));
		if(strlen($_POST['default_month'])>0 && strlen($_POST['calendar_title'])>0 && strlen($_POST['myRadio'])>0 && $_POST['default_year']>0){
			$a1 = sanitize_text_field($_POST['calendar_title']);
			$a2 = sanitize_text_field($_POST['default_year']);
			$a3 = sanitize_text_field($_POST['default_month']);
			$a4 = sanitize_text_field($_POST['myRadio']);
			
			$wpdb->query($wpdb->prepare("INSERT INTO $table_name (id, Calendar_title, Default_year, Default_month, Published) VALUES (%d, %s, %s , %s, %s)", '', $a1, $a2, $a3, $a4 ));
		}
		else {
			echo '<h4 class = "error_form_calendar_manager" >* you incorrectly filled out a form </h4>';
		}
	} 
		$Calendars_Title=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name WHERE id > %d ", 0));
		if(count($Calendars_Title)==1)
		{
			$item='1 item';
		}
		else
		{
			$item=count($Calendars_Title) . " " . 'items';
		}
		$Title=$wpdb->get_results($wpdb->prepare("SELECT Calendar_title FROM $table_name WHERE id > %d ", 0));
		$table_name2 =  $wpdb->prefix . "add_an_event";
		$calendarid = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE CalendarId = %d",$id));

	if (isset($_POST['sev_event_set1'])){
		if(strlen($_POST['Title_category1'])>0 && strlen($_POST['Select_ctegory1'])>0 && strlen($_POST['date1'])>0 && strlen($_POST['time1'])>0 && strlen($_POST['time2'])>0 && strlen($_POST['time3'])>0 && strlen($_POST['time4'])>0 && strlen($_POST['description1'])>0  &&  strlen($_POST['option_repeat_event'])>0 && strlen($_POST['radio_sev'])>0 && strlen($_POST['input_hidden_id'])>0){
			$a = sanitize_text_field($_POST['Title_category1']); 
			$b = sanitize_text_field($_POST['Select_ctegory1']) ;
			$c = sanitize_text_field($_POST['date1']);
			$z =  str_replace('-', '.', $c);
			$d = sanitize_text_field($_POST['time1']) ;
			$e = sanitize_text_field($_POST['time2']) ;
			$k = $d.':'.$e;
			$m = sanitize_text_field($_POST['time3']);
			$n = sanitize_text_field($_POST['time4']);
			$l = $m.':'.$n;
			$f = sanitize_text_field($_POST['description1']) ;
			$t = sanitize_text_field($_POST['option_repeat_event']);
			$j = sanitize_text_field($_POST['radio_sev']) ;
			$cid = sanitize_text_field($_POST['input_hidden_id']);

			$wpdb->query($wpdb->prepare("INSERT INTO $table_name2  (id, Event_title,Select_category,Data,Time_from,Time_to,File,Note,Repeat_event,Published,CalendarId) VALUES (%d,%s,%s,%s,%s,%s,%s,%s,%s,%s,%d)",'', $a,$b,$z,$k,$l,'',$f,$t,$j,$cid));
		}
		else {
			echo '<h4 class = "error_form_calendar_manager" >* you incorrectly filled out a form </h4>';
		}
		

	}

	$Event_Title=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE id > %d ", 0));
	$table_name3 =  $wpdb->prefix . "add_category";
	$Events_submenu = $wpdb->get_results($wpdb->prepare("SELECT Category_title FROM $table_name3 WHERE id > %d ", 0));

	$table_name2 =  $wpdb->prefix . "add_an_event";
	
	if(isset($_POST['confirm_selection1'])){
		if(strlen($_POST['title12'])>0 && strlen($_POST['select12'])>0 && strlen($_POST['data3312'])>0 && strlen($_POST['time112'])>0 && strlen($_POST['time212'])>0 && strlen($_POST['time312'])>0 && strlen($_POST['time412'])>0 && strlen($_POST['description112'])>0  &&  strlen($_POST['repeat_ev12'])>0 && strlen($_POST['key12'])>0 && strlen($_POST['hidden12'])>0){
				
			$expansion=array('png','gif','jpg','jpeg');
			$exp=explode('.',$_FILES['select_file_pc1']['name']);
			$choice=end($exp);
			$name = $_FILES['select_file_pc1']['name'];
			$arr = explode($choice, $name);
			$filename=str_replace($arr[0],uniqid().'.',$name);
			if($_FILES['select_file_pc1']['size']<300000000000 && in_array($choice,$expansion)){
			  
			    $wp_filetype = wp_check_filetype( basename($filename), null );
			    $wp_upload_dir = wp_upload_dir();

			   
			    move_uploaded_file( $_FILES['select_file_pc1']['tmp_name'], $wp_upload_dir['path']  . '/' . $filename );

			    $attachment = array(
			        'guid' => $wp_upload_dir['url'] . '/' . basename( $filename ), 
			        'post_mime_type' => $wp_filetype['type'],
			        'post_title' => preg_replace( '/\.[^.]+$/', '', basename( $filename ) ),
			        'post_content' => '',
			        'post_status' => 'inherit'
			    );

			    $filename = $wp_upload_dir['path']  . '/' . $filename;

			    $attach_id = wp_insert_attachment( $attachment, $filename, 37 );
			    require_once( ABSPATH . 'wp-admin/includes/image.php' );
			    $attach_data = wp_generate_attachment_metadata( $attach_id, $filename );
			    wp_update_attachment_metadata( $attach_id, $attach_data );  
			    $image1 = explode('uploads/',$filename);
			    $image = end($image1);
			    if(strlen($_POST['image12'])){
			    	$image1 =  explode('uploads/',$_POST['image12']);  
			    	$image =  end($image1);
			    	return $image;
			    }
				$id = $_POST['id12'];
				$Event_Title=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE id = %d ", $id));	
				if(count($Event_Title)>0){
				
					$id1 = $Event_Title[0]->id;
				//	$image = uniqid().'.'.$choice;	
				 	$a = sanitize_text_field($_POST['title12']);
				 	$b = sanitize_text_field($_POST['select12']);
				 	$c = sanitize_text_field($_POST['data3312']);
				 	$z = str_replace('-', '.', $c);
				 	$k = sanitize_text_field($_POST['time112']).':'.sanitize_text_field($_POST['time212']);
				 	$l = sanitize_text_field($_POST['time312']).':'.sanitize_text_field($_POST['time412']);
				 	$f = sanitize_text_field($_POST['description112']);
				 	$t = sanitize_text_field($_POST['repeat_ev12']);
				 	$j = sanitize_text_field($_POST['key12']);
				 	$cid = sanitize_text_field($_POST['hidden12']);

					$wpdb->replace( $table_name2, array(
			 			'id' => $id1, 
			 			'Event_title' => $a,
			 			'Select_category'=> $b,
			 			'Data' => $z,
			 			'Time_from'=>$k,
			 			'Time_to'=>$l,
			 			'File'=>$image,
			 			'Note'=>$f,
			 			'Repeat_event'=>$t,
			 			'Published'=>$j,
			 			'CalendarId'=>$cid,
			 			),
			 			 array( 
			 			 	'%d',
			 			 	'%s',
			 			 	'%s',
			 			 	'%s',
			 			 	'%s',
			 			 	'%s',
			 			 	'%s',
			 			 	'%s',
			 			 	'%s',
			 			 	'%s',
			 			 	'%d',
			 			 )
					 	);
				}else if($_POST['id12']==''){

					
				 	
				 	$a = sanitize_text_field($_POST['title12']);
				 	$b= sanitize_text_field($_POST['select12']);
				 	$c= sanitize_text_field($_POST['data3312']);
				 	$z =str_replace('-', '.', $c);
				 	$k= sanitize_text_field($_POST['time112']).':'.sanitize_text_field($_POST['time212']);
				 	$l= sanitize_text_field($_POST['time312']).':'.sanitize_text_field($_POST['time412']);
				 	$f= sanitize_text_field($_POST['description112']);
				 	$t= sanitize_text_field($_POST['repeat_ev12']);
				 	$j= sanitize_text_field($_POST['key12']);
				 	$cid= sanitize_text_field($_POST['hidden12']);

				 	$wpdb->query($wpdb->prepare("INSERT INTO $table_name2  (id, Event_title,Select_category,Data,Time_from,Time_to,File,Note,Repeat_event,Published,CalendarId) VALUES (%d,%s,%s,%s,%s,%s,%s,%s,%s,%s,%d)",'', $a,$b,$z,$k,$l,$image,$f,$t,$j,$cid));
				}
			 }
	  	}
	}
 	
?>
<div id = 'display_media_button1' >
	<span id = 'close_display_media_button' ></span>
	<h2 id = 'h2_1'>Вставить медиафайл</h2>
	<div  class = 'border_bottom_none' id = 'select-file-pc' >
		Загрузить файлы
	</div>
	<div  class = 'border_bottom' id ='select-file-library'>
		Библиотека файлов
	</div>
	<div  id= 'display_for_selected_file'>
		<form action='' method='post' enctype='multipart/form-data'>
			<input type = 'hidden' name  ='id12' id = 'id12'>
			<input type = 'hidden' name = 'title12' id = 'title12'>
			<input type = 'hidden' name = 'select12' id = 'select12'>
			<input type = 'hidden' name = 'data3312' id = 'data3312'>
			<input type = 'hidden' name = 'time112' id = 'time112'>
			<input type = 'hidden' name = 'time212' id = 'time212'>
			<input type = 'hidden' name = 'time312' id = 'time312'>
			<input type = 'hidden' name = 'time412' id = 'time412'>
			<input type = 'hidden' name = 'description112' id = 'description112'>
			<input type = 'hidden' name = 'repeat_ev12' id = 'repeat_ev12'>
			<input type = 'hidden' name = 'hidden12' id = 'hidden12'>
			<input type = 'hidden' name = 'key12' id = 'key12'>
			<input type = 'hidden' name = 'image12' id = 'image12'>
			<input type = 'file'  id = 'select_file_pc' name = 'select_file_pc1'>
			<input type = 'text'  id = 'alt_file_pc'  placeholder ='Добавить атрибут alt'>
			<div  id = 'select_file_library'>
				<div id = 'select_file_library2'>
					<?php 
				
						global $wpdb;
	
						$table_name3 =  $wpdb->prefix . "add_category";
						$table_name2 =  $wpdb->prefix . "add_an_event";

						$yupi=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE id>%d",0));
						$hoplo=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE id>%d",0));
							for($i=0;$i<count($hoplo);$i++)
							{
								echo '<img src="' .esc_url( wp_upload_dir()['baseurl']) .'/' . $hoplo[$i]->File .'" class = "image_select_file_library" >';
							}	
							for($i=0;$i<count($yupi);$i++)
							{
								echo '<img src="' .esc_url( wp_upload_dir()['baseurl']) .'/' . $yupi[$i]->File .'" class = "image_select_file_library" >';
							}		
					?>
				</div>
			</div>
			<input type ='submit'  name = 'confirm_selection1' id = 'confirm_selection' value = 'Save'>
		</form>	
	</div>
</div>
<div id = 'content_settings_category1' >
	<div id = 'top_content_settings1'>
			<h2 id='Event_Menager'>Event Menager for calendar-<i id = 'text_1'></i></h2>
		<a href = ''><input type="button" name='Back' id = 'Back' value = 'Back' ></a>
		<button type="button" name='Add_an_event' id = 'Add_an_event'>Add an Event</button>			
	</div>
	<div id = 'middle_content_settings1'>
		
		<label class = 'form_item1'>Title:</label>
		<input type='text' name = 'title'  class = 'form_item2'>
		<input type = 'button' name = 'add_title' value='Search' class = 'form_item' id = 'datedate'>
		<input type = 'button' name = 'reset' class = 'form_item' value='Reset' id = 'reset'>
		<span id='error_text2'></span>	
		<span id = 'item_0'><?php echo count($Event_Title); ?> items</span>
	</div>
	<table id = 'bottom_content_settings'>
		<tr class="row_tr">
			<td class='main_id_item1'><B><I>ID</I></B></td>
			<td class='main_title_item1'><B><I>Title &#9660</I></B></td>
			<td class='main_date_item1'><B><I>Date</I></B></td>
			<td class='main_time_item1'><B><I>Time</I></B></td>
			<td class='main_category_item1'><B><I>Category</I></B></td>
			<td class='main_published_item1'><B><I>Published</I></B></td>
			<td class='main_delete_item1'><B><I>Delete</I></B></td>
		</tr>
		<?php foreach ($Event_Title as $key ): ?>
			<tr class = 'tr_color' >
				<td class='id_item1' name ='<?php echo  $key->CalendarId ?>'><?php echo $key->id?></td>
				<td class='title_item1' name = '<?php echo $key->Event_title?>' id ='<?php echo $key->id?>' ><?php echo $key->Event_title?></td>
				<td class='date_item1'><?php echo $key->Data ?></td>
				<td class='time_item1' ><?php echo $key->Time_from.'-'. $key->Time_to?></td>
				<td class='category_item1'><?php echo $key->Select_category?></td>	
				<td class='published_item1' name = '<?php echo $key->id ?>' ><ins ><?php echo $key->Published?></ins></td>
				<td class='delete_item1'id ="<?php echo $key->id?>" ><ins>Delete</ins></td>	
			</tr>
		<?php endforeach ?>
	</table>
</div>
	<form action="" method="post" name="Add_Category_Form" id="adminForm">
			<div id = 'block_it'>
				<div id = 'hover_click'>Click to add</div>
			</div>
			<div id = 'repeat_event'>
				<input type = 'hidden' id = 'input_hidden_id' name = 'input_hidden_id'>	
				<h4 id = 'h4_repeat_event'>Repeat Event</h4><br>
				<input type="checkbox"  checked id = 'option_10' class = 'option_repeat_event' name = 'option_repeat_event' value= "Don't repeat this event" > Don't repeat this event <br>
				<input type="checkbox"  id = 'option_11' class = 'option_repeat_event' name = 'option_repeat_event' value= "Repeat daily"> Repeat daily  <br>
				<input type="checkbox"  id = 'option_12' class = 'option_repeat_event' name = 'option_repeat_event' value = '' > Repeat weekly <br>
				<div  id ='option_click'>
					<div id = 'Repeat_until2'>
						<label>Repeat every</label>
						<div style = 'padding-top:10px';>
							<input type = 'checkbox' value = 'Monday' class = 'Week_days' ><span>Monday</span>
							<input type = 'checkbox' value = 'Tuesday' class = 'Week_days' ><span>Tuesday</span>
							<input type = 'checkbox' value = 'Wednesday' class = 'Week_days' ><span>Wednesday</span>
							<input type = 'checkbox' value = 'Thursday' class = 'Week_days'><span>Thursday</span>
							<input type = 'checkbox' value = 'Friday' class = 'Week_days'><span>Friday</span>
							<input type = 'checkbox' value = 'Saturday' class = 'Week_days'><span>Saturday</span>
							<input type = 'checkbox' value = 'Sunday' class = 'Week_days'><span>Sunday</span>
						</div>	
					</div>
				</div> 
				<div id = 'Click_to_go_sev' > Click to save</div>
			</div>
		<div id = 'add_category_page1' >
			<div id = 'display_repeat_event'>
			</div>	
			<div id = 'link_page'>
		<div id="link-backdrop1" class = 'link_backdrop1' >
			<div id="link-wrap1"   >
					<div id="link-modal-title1">
						<h3>Вставить/изменить ссылку</h3><button type="button" id="wp-link-close"></button>
				 	</div>
					<div id="link-selector1">
						<div id="link-options1">
							<p class="howto">Введите адрес назначения (URL)</p>
							<div>
								<label><span>URL</span><input id="url-field1" type="text" name="url_field1"></label>
							</div>
							<div>
								<label><span>Заголовок</span><input id="link-title-field1" type="text" name="link_title_field1"></label>
							</div>
							<div class="link-target1">
								<label><span id= 'check_add'>&nbsp;</span><input type="checkbox" id="link-target-checkbox1" name = 'target_blanck1'> Открывать в новом окне/вкладке</label>
							</div>
						</div>
					</div>
					<div class="submitbox">
						<div id="wp-link-update">
							<input type="submit" value="Добавить ссылку" class="button button-primary" id="wp-link-submit1" name="wp-link-submit1">
						</div>
					</div>
			</div>
		</div>
	</div>	
		<div id="wpbody-content" aria-label="Основное содержимое" tabindex="0">
			<div class="undefined_div">
				<a href='http://juna-it.com/' target="_blank"><img src="http://juna-it.com/image/logo-white.png" class="image_logo" <abbr  title='Click to visit..'></a>
				<h3 id="Event_Detal">Events Detalls</h3>
			</div>	
				<div id="widh">
					<fieldset class="adminform">
					<table class="admintable">
				    <tbody>
				        <tr>
				            <td class="Title_category1"><label for="message">Title:</label></td>
				            <td><input type="text" name="Title_category1" value="" id="Title_category1" placeholder = 'Event'></td>
				        </tr>
				        <tr>
							<td class="Select_ctegory1"><label for="message">Select category:</label></td>
				            <td>	
				            	<select name="Select_ctegory1" id="Select_ctegory1" >
				            		<option  name = 'add_category_title_name' id = 'selected_select'> --Select category-- </option>
				            		<?php foreach ($Events_submenu as $title) :?>
					       				 <option value='<?php echo $title->Category_title ?>' > <?php echo $title->Category_title   ?> </option>
						        	<?php endforeach ?>	
				            	</select>

				            </td>
				        </tr>
				         <tr>
							<td class="date1"><label for="message">Date:</label></td>
				            <td>	
				            	<input type = 'text' class="date3" name='date1' value = '' id ='data33' >
				            </td>
				        </tr>
				         <tr>
							<td class="Time_class"><label for="message">Time:</label></td>
				            <td>	
				            	<input type='text' class = 'time1' name='time1'><span class = 'time1_1'>:</span><input type='text' class = 'time2' name='time2'><span class = 'time2_1'>-</span><input type='text' class = 'time3' name='time3'><span class = 'time3_1'>:</span><input type='text' class = 'time4' name='time4'>
				            </td>
				        </tr>
					    <tr>
							<td class="key"><label for="message"> Note:</label></td>
							<td>
												<div id="poststuff">
								<div id="wp-description-wrap" class="wp-core-ui wp-editor-wrap html-active"><link rel="stylesheet" id="editor-buttons-css" href="<?php echo includes_url() .'/css/editor.min.css?ver=4.1.5 '?>" type="text/css" media="all">
									<div id="wp-description-editor-tools" class="wp-editor-tools hide-if-no-js">
										
										<div class="wp-editor-tabs">
											<button type="button" id="description-tmce" class="wp-switch-editor switch-tmce" >Visual</button>
											<button type="button" id="description-html" class="wp-switch-editor switch-html" >Text</button>
										</div>
									</div>
									<div id="wp-description-editor-container" class="wp-editor-container">
										<input type="button" class = 'h3_button'     value="h3" >
										<input type="button" class = 'b_button'      value="b"  >
										<input type="button" class = 'i_button'      value="i"   >
										<input type="button" class = 'link_button'   value="link"  >
										<input type="button" class = 'b-quote'       value="b-quote" >
										<input type="button" class = 'del_button'    value="del"    >
										<input type="button" class = 'ins_button'    value="ins"  >
										<input type="button" class = 'ul_button'     value="ul"   >
										<input type="button" class = 'ol_button'     value="ol" >
										<input type="button" class = 'li_button'     value="li">
										<input type="button" class = 'code_button'   value="code">
										<input type="button" class = 'pre_button'    value="pre" >
										<input type="button" class = 'more_button'   value="more" >
										<input type="button" class = 'hr_button'   id="qt_description_eg_hr" class="ed_button button button-small"  value="hr" class = 'add_new_color'>
									</div>
									<div id="buttons_title"  role="group">
										<div id="mceu_40-body">
											<button role="presentation" type="button" ><i class="mce-ico mce-i-bold"           id='i-bold'></i></button>
											<button role="presentation" type="button" ><i class="mce-ico mce-i-italic"         id='i-italic'></i></button>
											<button role="presentation" type="button" ><i class="mce-ico mce-i-strikethrough"  id = 'i-through'></i></button>
											<button role="presentation" type="button" ><i class="mce-ico mce-i-bullist"        id='i-ul-li'></i></button>
											<button role="presentation" type="button" ><i class="mce-ico mce-i-numlist"        id = 'i-ol-li'></i></button>
											<button role="presentation" type="button" ><i class="mce-ico mce-i-blockquote"     id= 'i-blockquote'></i></button>
											<button role="presentation" type="button" ><i class="mce-ico mce-i-hr"             id = 'i-hr'></i></button>
											<button role="presentation" type="button" ><i class="mce-ico mce-i-alignleft"      id = 'i-align-left'></i></button>
											<button role="presentation" type="button" ><i class="mce-ico mce-i-aligncenter"    id = 'i-align-center'></i></button>
											<button role="presentation" type="button" ><i class="mce-ico mce-i-alignright"     id = 'i-align-right'></i></button>
											<button role="presentation" type="button" ><i class="mce-ico mce-i-link"           id = 'i-add-link' ></i></button>
											<button role="presentation" type="button" ><i class="mce-ico mce-i-unlink"         id = 'i-remove-link'></i></button>
										</div>
									</div>
									<textarea class="wp-editor-area" rows="20"  cols="120" name="description1" id="description1"></textarea>
									<div id = 'visually'></div>
								</div>
							</div>
				            </td>	
						</tr>
						<tr>
							<td></td>	
							<td><input type = 'radio' id="media-button1"><span id="images_question">Do You Want To Add Image?</span></td>
						</tr>		
						<tr class = 'confirm_changes'>
							<td class="key"><label>Published:</label></td>
				            <td>
				                <input type="radio" name = 'radio_sev' value = 'No' class ='Published_key' >
				                <label class="key">No</label>
				                <input type="radio" name = 'radio_sev' value = 'Yes'  class ='Published_key'  >
				                <label class="key">Yes</label>
				            </td>
			       		 </tr> 		
			    </table>
			    </fieldset>  
			</div>
			<table style ='margin:-40px 0 0 822px'>
				<tbody>
					<tr>
						<td align="right"><input type="submit" name ='sev_event_set1' value="Save" id= 'sev_event_set1' class ='cancel_add_category_page1'></td>
						<td align="right" ><input type="button"  value="Cancel" id = 'cancel_add_category_page1' ></td>   
				 	</tr>
			    </tbody>
			</table>		
		</form>
		</div>
		</div>
<form  method='POST' name='' >
	<div id = 'Add_Calendar_div'>
		<div id ='main' >
			<div id = 'main_menu'>
				<h3 id='Add_calendar'>Add Calendar</h3>
			</div>
			<table id = 'table_add_calendar'>
				<tr>	
					<td class='hoplo'><label class="yupi">Title:</label></td>
					<td><input type='text' id='title_item' name="calendar_title"></td> 
					<td></td>
				</tr>
				<tr>	
					<td class='hoplo'><label class="yupi">Default Year:</label></td>
					<td><input type='text' id='Default_item' name="default_year"></td>
					<td></td>
				</tr>
				<tr>	
					<td class='hoplo'><label class="yupi">Default Month:</label></td>
				    <td>
				    	<select id="def_month" name="default_month">  <option selected="selected" value="">Current</option>
						    <?php
						        $month_array = array(
						           '01' => 'January',
						           '02' => 'February',
						           '03' => 'March',
						           '04' => 'April',
						           '05' => 'May',
						           '06' => 'June',
						           '07' => 'July',
						           '08' => 'August',
						           '09' => 'September',
						           '10' => 'October',
						           '11' => 'November',
						           '12' => 'December',
						        );
						        foreach ($month_array as $key => $def_month) {
						    ?>
						    <option value="<?php echo $def_month;?>"><?php echo $def_month;?></option>
						    <?php
						         }
						     ?>
			        	</select>
			        </td>
				</tr>
				<tr> 
					<td class='hoplo'><label class="yupi">Published:</label></td>
					<td class = 'td_no'>
					    <input type='radio' name="myRadio" id="radio" class="radio" value="No"><label>No</label>
						<input type='radio' name="myRadio" id="radio" class="radio" value="Yes" checked = 'checked' ><label>Yes</label><br>
					</td>
				</tr> 
			</table>
				<input type='submit' id = 'save_submit' name = 'save_submit' value='Save'>
				<input type='button' id = 'Cancel' value='Cancel'>
				<input type="text" id="hidden_button" style="display:none">
		</div>    
	</div>	
</form>
<div id = 'content_settings' >
	<div id = 'top_content_settings'>
		<h2 id='Calendar_Manager'> Calendar Menager</h2>
		<button type="button" name='Add_a_Calendar' id = 'Add_a_Calendar'>Add a Calendar</button>
	</div>
	<div id = 'middle_content_settings'>
		<label class = 'form_item'>Title</label>
		<input type='text' name = 'title'  class = 'form_item3'> 
		<input type = 'button' name = 'add_title' value='Search' class = 'form_item' id = 'add_title1'>
		<input type = 'button' name ='reset' class = 'form_item' value='Reset' id = 'reset1'>
		<span id='error_text1'></span>
		<span id = 'item_01'><?php echo $item; ?></span>
	</div>
	<table id = 'bottom_content_settings'>
		<tr class="row_tr">
			<td class='main_id_item'><B><I>ID</I></B></td>
			<td class='main_title_item'><B><I>Title &#9660</I></B></td>
			<td class='main_man_ev'><B><I>Manage Events</I></B></td>
			<td class='main_published_item'><B><I>Published</I></B></td>
			<td class='main_delete_item'><B><I>Delete</I></B></td>
		</tr>
	<?php $Calendars_Title=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name WHERE id > %d ", 0)); ?>
			<?php foreach ($Calendars_Title as $key ): ?>
			<tr class = 'tr_color' id = '<?php echo $key->id ?> '>
				<td class='id_item' id="<?php echo $key->id  ?>"><?php echo $key->id ?> </td>
				<td class='title_item' class = 'title_1' id="<?php echo $key->id ?>"  name='<?php echo $key->Calendar_title ?>'><?php echo $key->Calendar_title ?> </td>
				<td class= 'man_ev'  id = "<?php echo 'm'.$key->id ?>" >Manage Events</td>
				<td class='published_item2' name = '<?php echo $key->id ?>' ><?php echo $key->Published ?></td>
				<td class='delete_item2' id ="<?php echo $key->id?>" >Delete</td>	
			</tr>
		<?php endforeach ?>
	</table>
</div>