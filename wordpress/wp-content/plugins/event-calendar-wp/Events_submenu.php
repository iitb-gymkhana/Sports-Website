<?php
	if(!current_user_can('manage_options'))
	{
		die('Access Denied');
	}
	global $wpdb;
	
	$table_name3 =  $wpdb->prefix . "add_category";
	
	$Categories_Title=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE id > %d ", 0));	

	if (isset($_POST['sev_event_set'])){
		if(strlen($_POST['cat_title'])>0 && strlen($_POST['color_color_category'])>0 && strlen($_POST['description1'])>0 && strlen($_POST['Published_key'])>0 ){
			$t =  sanitize_text_field ($_POST['cat_title'] ); 
			$c =  sanitize_text_field ($_POST['color_color_category']);
			$d =  sanitize_text_field($_POST['description1']) ;
			$p =  sanitize_text_field($_POST['Published_key'])  ;
			
			$wpdb->query($wpdb->prepare("INSERT INTO $table_name3 (id, Category_title, Category_color, File, Description,Published) VALUES (%d, %s, %s , %s, %s, %s)", '', $t, $c,'',$d , $p ));
		}
		else {
			echo '<h4 class = "error_form_calendar_manager" >* you incorrectly filled out a form </h4>';
		}
	
	}
	

	$Categories_Title=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE id > %d ", 0));
	
	if(count($Categories_Title)==1)
	{
		$item='1 item';
	}
	else
	{
		$item=count($Categories_Title) . " " . 'items';
	}
	if (isset($_POST['delete_tr']))
	{
		$wpdb->query($wpdb->prepare("DELETE FROM $table_name3 WHERE id= %d", $id));
	}
	if(isset($_POST['confirm_selection'])){
		$expansion=array('png','gif','jpg','jpeg');
		$exp=explode('.',$_FILES['select_file_pc2']['name']);
		$choice=end($exp);
		$name = $_FILES['select_file_pc2']['name'];
		$arr = explode($choice, $name);
		$filename=str_replace($arr[0],uniqid().'.',$name);
		if($_FILES['select_file_pc2']['size']<300000000000 && in_array($choice,$expansion)){
		  
		    $wp_filetype = wp_check_filetype( basename($filename), null );
		    $wp_upload_dir = wp_upload_dir();

		   
		    move_uploaded_file( $_FILES['select_file_pc2']['tmp_name'], $wp_upload_dir['path']  . '/' . $filename );

		    $attachment = array(
		        'guid' => $wp_upload_dir['url'] . '/' . basename( $filename ), 
		        'post_mime_type' => $wp_filetype['type'],
		        'post_title' => preg_replace( '/\.[^.]+$/', '', basename( $filename ) ),
		        'post_content' => '',
		        'post_status' => 'inherit'
		    );

		    $filename = $wp_upload_dir['path']  . '/' . $filename;

		    
		    wp_update_attachment_metadata( $attach_id, $attach_data );  
		    $image1 = explode('uploads/',$filename);
		    $image = end($image1);
			 
			 	if(strlen($_POST['id11'])>0){

						$id1 = sanitize_text_field($_POST['id11']);
						$id = $id1;
						$title = sanitize_text_field($_POST['title11']);
						$color = sanitize_text_field($_POST['color11']);
						//$image = 'Juna_'.$i.'.'.$choice;
						$Description = sanitize_text_field($_POST['description11']);
						$Published = sanitize_text_field($_POST['Published11']);
						$wpdb->replace( $table_name3, array(
				 			'id' => $id, 
				 			'Category_title' => $title,
				 			'Category_color'=> $color,
				 			'File' => $image,
				 			'Description'=> $Description,
				 			'Published'=> $Published),
				 			 array( 
				 			 	'%d',
				 			 	'%s',
				 			 	'%s',
				 			 	'%s',
				 			 	'%s',
				 			 	'%s',
				 			 )
		 			 	);
					}else if($_POST['id11'] == ''){

						//$image ='Juna_'.$i.'.'.$choice;
					 	$t = sanitize_text_field($_POST['title11']);
					 	$c = sanitize_text_field($_POST['color11']);
					 	$d = sanitize_text_field($_POST['description11']);
					 	$p = sanitize_text_field($_POST['Published11']);
					 	$wpdb->query($wpdb->prepare("INSERT INTO $table_name3 (id, Category_title, Category_color, File, Description,Published) VALUES (%d, %s, %s , %s, %s, %s)", '', $t, $c,$image,$d , $p ));
					}

	 			}
		}
		
	
?>
<div id = 'content_settings_category' >
	<div id = 'top_content_settings'>
		<h2 id='Calendar_Manager'> Event Category</h2>
		<input type="button" name='Add_a_Category' id = 'Add_a_Category' value = 'Add a Category' >				
	</div>
	<div id = 'middle_content_settings'>
		<label class = 'form_item'>Title</label>
		<input type='text' name = 'title'  class = 'form_item3'> 
		<input type = 'submit' name = 'add_title' value='Search' class = 'form_item' id = 'add_title'>
		<input type = 'button' name = 'reset' class = 'form_item' value='Reset' id = 'reset3'>
		<span id='error_text'></span>	
		<span id = 'item_0'><?php echo $item; ?></span>
	</div>
	<table id = 'bottom_content_settings'>
		<tr class="row_tr" >
			<td class='main_id_item'><B><I>ID</I></B></td>
			<td class='main_title_item'><B><I>Title &#9660</I></B></td>
			<td class='main_description_item'><B><I>Description</I></B></td>
			<td class='main_published_item'><B><I>Published</I></B></td>
			<td class='main_delete_item'><B><I>Delete</I></B></td>
		</tr>
		<?php $Categories_Title=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE id > %d ", 0)); ?>
		<?php foreach ($Categories_Title as $value ): ?>
			<tr  class = 'tr_color'  id = '<?php echo $value->id ?> '>
				<td class='id_item' ><?php echo $value->id?></td>
				<td class='title_item'  id ='<?php echo $value->id ?>' name='<?php echo $value->Category_title?>' ><ins id = 'hover_edit' ><?php echo $value->Category_title?></ins></td>
				<td class='description_item'><center><?php if($value->File!=''){echo '<img src ="'.esc_url( wp_upload_dir()['baseurl']) .'/'.$value->File.'" class = "image_description_item">'; }?> <?php echo $value->Description ?></center></td>
				<td class='published_item' name = '<?php echo $value->id ?>' ><a href="admin.php?page=Calendars_Event_Menu" ><?php echo $value->Published ?></a></td>
				<td class='delete_item' name = 'delete_tr' id ='<?php echo $value->id ?>' ><a href="admin.php?page=Calendars_Event_Menu" >Delete</a></td>	
			</tr>
		<?php endforeach ?>
	</table>
</div>
	<div id = 'display_media_button' >
		<span id = 'close_display_media_button' ></span>
		<h2 id = 'h2_1'>Вставить медиафайл</h2>
		<form action='' method='post' enctype='multipart/form-data' id = 'form_upload'>
			<div  class = 'border_bottom_none' id = 'select-file-pc' >
				Загрузить файлы
				<input type = 'hidden' name  ='id11' id = 'id11'>
				<input type = 'hidden' name = 'title11' id = 'title11'>
				<input type = 'hidden' name = 'color11' id = 'color11'>
				<input type = 'hidden' name = 'description11' id = 'description11'>
				<input type = 'hidden' name = 'Published11' id = 'Published11'>
			</div>
			<div  class = 'border_bottom' id ='select-file-library'>
				Библиотека файлов
			</div>
			<div  id= 'display_for_selected_file'>
				<input type = 'file'  id = 'select_file_pc' name = 'select_file_pc2' >
				<input type = 'text'  id = 'alt_file_pc'  placeholder ='Добавить атрибут alt'>
				<div  id = 'select_file_library'>
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
				<input type = 'submit' id = 'confirm_selection' value = 'Save'  name = 'confirm_selection'  >
			</div>
		</form>
	</div>
<div id = 'add_category_page' >	
	<div id = 'link_page'>
		<div id="link-backdrop1" class = 'link_backdrop1' >
			<div id="link-wrap1"   >
					<input type="hidden"  value="5cc5562a09">		
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
			<h3 id="category_detal">Add Category</h3>	
		</div>
		<form action="" method="post" name="Add_Category_Form" id="adminForm">
			<div id='category_widt'>
				<fieldset class="adminform">
				<table class="admintable">
			        <tr>
			            <td class="key"><label for="message">Category title:</label></td>
			            <td><input type="text" name="cat_title" value="" id="cat_title" placeholder = 'Calendar'></td>
			        </tr>
			        <tr>
						<td class="key"><label for="message">Category Color:</label></td>
			            <td><input type='text' value = ''   id = 'category_color_1' onchange="change('24',false)"><input type="color" name="color_color_category"   id ='color_color_category' onchange="change('24',true)"></td>
			        </tr> 
				    <tr>
						<td class="key"><label for="message"> Description:</label></td>
						<td>
							<div id="poststuff">
								<div id="wp-description-wrap" class="wp-core-ui wp-editor-wrap html-active"><link rel="stylesheet" id="editor-buttons-css" href="<?php echo includes_url() .'/css/editor.min.css?ver=4.1.5 '?>" type="text/css" media="all">
									<div id="wp-description-editor-tools" class="wp-editor-tools hide-if-no-js">
										<div class="wp-editor-tabs">
											<button type="button" id="description-tmce"class="wp-switch-editor switch-tmce" >Visual</button>
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
			</div>
			            </td>	
					</tr>
					<tr>
						<td></td>	
						<td><input type = 'radio' id="media-button"><span id='image_question'>Do You Want To Add Image?</span></td>
					</tr>		
					<tr class = 'confirm_changes'>
						<td class="key"><label>Published:</label></td>
			            <td>
			                <input type="radio"  value = 'No'  name = 'Published_key'class = 'Published_key'>
			                <label class="key">No</label>
			                <input type="radio"  value = 'Yes'  name = 'Published_key' class = 'Published_key'>
			                <label class="key">Yes</label>
			            </td>
			        </tr> 		
			    </table>
			    </fieldset>  
			</div>
			<table style ='margin:-40px 0 0 822px'>
				<tbody>
					<tr> 
						<td align="right"><input type="submit"  value="Save" id = 'sev_event_set' name = 'sev_event_set' ></td>
						<td align="right" ><input type="button"  value="Cancel"  id = 'Cancel_page'></td>   
				 	</tr>
			    </tbody>
			</table>				
		</form>
	</div>
</div>