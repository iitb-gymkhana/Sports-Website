<?php
if(!current_user_can('manage_options'))
{
	die('Access Denied');
}

global $wpdb;
$table_name4 =  $wpdb->prefix . "calendar_other_parameters";

$JI_demo_ev=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE id > %d ", 0));

	if(count($JI_demo_ev)==1)
	{
		$item='1 item';
	}
	else
	{
		$item=count($JI_demo_ev) . " " . 'items';
	}
	$table_name1 =  $wpdb->prefix ."add_an_event";
	$JI_demo  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE id > %d ", 0));
?>
<div id = 'JI_hover'>
					<?php echo $JI_demo_ev[0]->st_hover_image ;?>

				</div>
				<div id = 'JI_hover1'>
				<style>
					}
					.JI_calendar1:hover .JI_h3_image{
						color:<?php echo $JI_demo_ev[0]->st_color_hover_titele_ev ?> !important;
					}
				</style>
				</div>
				<div id = 'JI_hover2'>					
				</div>
				<style>
					.JI_image_for_event{
						border-radius:<?php echo $JI_demo_ev[0]->st_radius_image ?>;
						transition-duration:1s;
					}
					.JI_arrow:hover{
						color:<?php echo  $JI_demo_ev[0]->st_JI_color_hover_arow?>;
					}
					JI_hedaer{
					/*	background:<?php echo $JI_demo_ev[0]->st_JI_background_header; ?>;*/
					}
				</style>
<div id = 'href_Themes1'>
	<!-- thems -->
	<div id = 'top_content_settings'>
		<h2 id='Calendar_Manager'>Themes</h2>
		<input type='button' value='Add a Theme' id ='Add_a_Theme1'><a target="_blank" href="http://juna-it.com/index.php/juna-event-calendar/" <abbr  title='Click to buy..'><span id="free_version1"></span></a>
	</div>
	<div id = 'middle_content_settings'>
		<label>Title:</label>
		<input type='text' id='input_of_title1' name='input_of_title1'>
		<input type='button' value='Search' name = 'search_them1' id = 'search_them1' onclick="Search_button_clicked1()">
		<input type='button' value='Reset' class='res_item' onclick="Reset_clicked1()">
		<span class="span_for_errors1" id="span_id_errors1"></span>
		<span id='items1'><?php echo $item; ?></span>
	</div>
		<table id = 'bottom_content_settings'>
			<tr class="row_tr">
				<td class='main_id_item'><B><I>ID</I></B></td>
				<td class='main_title_item'><B><I>Title &#9660</I></B></td>
				<td class='main_published_item'><B><I>Edit</I></B></td>
				<td class='main_delete_item'><B><I>Delete</I></B></td>
			</tr>
		<?php for($i=0;$i<count($JI_demo_ev);$i++) { ?>
			<tr class = 'tr_color' >
				<td class='id_item'> <?php echo $JI_demo_ev[$i]->id; ?> </td>
				<td class='title_item4'id ='<?php echo $JI_demo_ev[$i]->id?>'> <?php echo $JI_demo_ev[$i]->st_JI_setting_title; ?> </td>
				<td class='published_item title_item4' id = '<?php echo $JI_demo_ev[$i]->id ?>'>Edit</td>
				<td class='delete_item' id ="<?php echo $JI_demo_ev[$i]->id?>" onclick="Delete_Settings(<?php echo $JI_demo_ev[$i]->id?>)">Delete</td>
			</tr>
		<?php } ?>
			<tr class = 'tr_color1'>
				<td class='id_item'></td>
				<td class='title_item'></td>
				<td class='published_item'></td>
				<td class='delete_item'></td>
			</tr>
		</table>
</div>
<div id = 'settings_page' style = 'scrol:auto;'>
	<?php $m = explode(' ', $JI_demo[0]->Data); ?>
	<!-- Popup window parameters -->
	<form  method='POST' id='form_popup'>
	<div id='Popup'>
		<section style = 'position:absolute;width:400px;right:20px;top:50px;' id = 'JI_demo_section'   class = 'JI_demo_section'>
			<div id = 'JI_hedaer' style = 'width:400px;border:<?php echo $JI_demo_ev[0]->st_JI_border_width_header?>;border-color:<?php echo $JI_demo_ev[0]->st_JI_border_color_header?>;' >
				<div id = 'JI_event_search' style = 'width:185px '>
					
					<input type ='text'  placeholder="search" id = 'JI_event_search1'  style = 'float:left;width:100px;background:<?php echo $JI_demo_ev[0]->st_JI_color_backgr_search?>' >
					<img src = '<?php echo plugins_url('/Image/111.png',__FILE__)?>' id = 'JI_closs_serch' style = 'margin:15px 0 0 0;float:left;'>
				</div>			
				<div id = 'JI_right_in_header' style = 'float:right;width:200px'>
					<span style = 'font-weight:900;cursor:pointer;display:block;float:left;margin:-10px 5px 0 0;color:<?php echo $JI_demo_ev[0]->st_JI_arow_color?>;font-size:<?php echo $JI_demo_ev[0]->st_size_arow_header?>' class = 'JI_arrow'><</span>
					<input type = 'text' value = '<?php echo $m[0]; ?>' id = 'JI_date_event' style = 'float:left;text-align:center;background:<?php echo $JI_demo_ev[0]->st_JI_color_backgr_date?>;color:<?php echo $JI_demo_ev[0]->st_JI_color_text_date_header ?>;margin:-15px 5px 0 0;'>
					<span style = 'font-weight:900;cursor:pointer;display:block;float:left; margin:-10px 5px 0 0;;color:<?php echo $JI_demo_ev[0]->st_JI_arow_color?>;font-size:<?php echo $JI_demo_ev[0]->st_size_arow_header?>' class = 'JI_arrow'>></span>
				</div>
			</div>
			<div id = 'JI_calendars_content' style = 'width:400px;background:<?php echo $JI_demo_ev[0]->st_JI_background_cont_page?>;border:<?php echo $JI_demo_ev[0]->st_JI_border_width_cont_page.' solid '.$JI_demo_ev[0]->st_JI_border_color_cont_page?>;border-radius:<?php echo $JI_demo_ev[0]->st_JI_radius_cont_page?>'>
				<div style = ' width:400px;height:50px; margin:30px 0 0 20px; position:relative;'>					
					<h1  style = 'text-shadow:<?php echo $JI_demo_ev[0]->st_shadow_header ?>;font-size:<?php echo  $JI_demo_ev[0]->st_size_header?>;font-family:<?php echo $JI_demo_ev[0]->st_famely_header?>;' id = 'JI_event_title' class = 'in_page_setting'>Events From <?php echo $m[0];?></h1>
				</div>
					<div  class = 'JI_calendar1' style = 'background:<?php echo $JI_demo_ev[0]->st_background_cont?>;border:<?php echo $JI_demo_ev[0]->st_br_width_cont.' solid'.$JI_demo_ev[0]->st_br_color_cont ?>;border-radius:<?php echo $JI_demo_ev[0]->st_radius_cont?>;width:<?php echo $JI_demo_ev[0]->st_width_cont?>;height:<?php echo $JI_demo_ev[0]->st_height_cont?>;'>
						<img src = '<?php if(esc_url( wp_upload_dir()['baseurl']) .'/'. $JI_demo[0]->File !='') { echo esc_url( wp_upload_dir()['baseurl']) .'/'. $JI_demo[0]->File ;} else{ echo 'http://juna-it.com/image/logo-orange.png';}?>'  class  = 'JI_image_for_event' style = 'border:<?php echo $JI_demo_ev[0]->st_border_image.' color'. $JI_demo_ev[0]->st_br_color_image; ?>;width:<?php echo  $JI_demo_ev[0]->st_width_image?>;height:<?php echo  $JI_demo_ev[0]->st_height_image?>;'>
						<p style = 'margin-left:40px;color:<?php echo $JI_demo_ev[0]->st_color_date?>;text-shadow:<?php echo $JI_demo_ev[0]->st_box_date?>;font-size:<?php echo $JI_demo_ev[0]->st_size_date?>;font-family:<?php echo $JI_demo_ev[0]->st_font_date?>' class= 'JI_date'> <?php echo $JI_demo[0]->Data.'     '. $JI_demo[0]->Time_from.'-'. $JI_demo[0]->Time_to;?> </p>
						<div style = 'width:200px;height:50px;'>
							<h3  class = 'JI_h3_image' style = 'color:<?php echo $JI_demo_ev[0]->st_color_title_ev?>;text-shadow:<?php echo $JI_demo_ev[0]->st_box_title_ev?>;font-size:<?php echo $JI_demo_ev[0]->st_size_title_ev?>;font-family:<?php echo $JI_demo_ev[0]->st_famely_title_ev?>;'><?php echo $JI_demo[0]->Event_title; ?></h3>
						</div>
						<div style = 'width:200px;overflow:hidden;'>
							<p style = 'margin:5px 5px 5px 10px;text-align:justify;color:<?php echo $JI_demo_ev[0]->st_color_desc?>;text-shadow:<?php echo $JI_demo_ev[0]->st_box_desc?>;font-size:<?php echo $JI_demo_ev[0]->st_size_desc?>;font-family:<?php echo $JI_demo_ev[0]->st_famely_desc?>' class = 'JI_desc_con'>
								<?php $string =  $JI_demo[0]->Note ?>
								<span style = 'font-size:<?php echo $JI_demo_ev[0]->st_size_first_latter?>;font-weight:800;' class = 'JI_first'><?php echo  $string{0}?></span><?php echo  substr($string,1)?>
							</p>
						</div>
					</div>	
			</div>
		</section>
		<fieldset  class='fieldset_pop'>
			<legend>Popup window parameters for Event header</legend>
			 <table>
				<tr>
					<td class='title'>Settings title:</td>
					<td><input type = 'text' style = 'width:170px;' id = 'action50' required name = 'JI_setting_title'> </td>
				</tr>
				<tr>
					<td class='title'>Color of Event header:</td>
					<td><input type = 'text' style = 'width:170px;' id = 'action2' required name = 'JI_color_header'><input type='color' style = 'margin-left:20px;' required id = 'action2_1'> </td>
				</tr>
				<tr>
					<td class='title'>Box_shadow of Event header:</td>
					<td><input type = 'number' style = 'width:69px;' max = '10' Placeholder="1" id ='action3' required name = 'text_shadow_header1'>px<input type = 'number' style = 'width:69px;'max = '10' Placeholder="1" id ='action3_1' required name = 'text_shadow_header2'>px<input type = 'color' style = 'margin-left:20px;' id ='action3_2' required name = 'text_shadow_header3'> </td>
				</tr>
				<tr>
					<td class='title'>Font_size of Event header:</td>
					<td><input type="range" min='25' max='100' value="12" step='1' id ='action4'  style = 'width:171px;'><input type = 'number' style = 'width:40px;margin-left:20px;width:44px;' Placeholder="25" id ='action4_1' required name = 'font_size_header'>px</td>
				</tr>
				<tr>
					<td class='title'>Font_family of Event header:</td>
					<?php
						$table_name5 =  $wpdb->prefix . "font_family"; 
						$JI_famely = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name5 WHERE id > %d ", 0));?>
					<td>
						<select type='text' style = 'width:170px;' id ='action5' required name = 'font_famely_header'>
						<?php  foreach ($JI_famely as $Font_famely) :?>
							<option value ='<?php echo $Font_famely->Font_family?>' style = 'width:170px;'><?php echo $Font_famely->Font_family ?></option>
						 <?php endforeach ?>
						</select>
					</td>
				</tr>
			</table>
	</fieldset>	
	<fieldset  class='fieldset_pop'>
	<legend>Popup window parameters for image</legend>
		<table>	
			<tr>
				<td class='title'>Animation for image in Event:</td>
				<td><select type='text' style = 'width:170px; ' id ='action7' name = 'hover_animation' required>
						<option value ='none' >none</option>
						<option value ='scale+'>scale+</option>
						<option value ='scale-'  >scale-</option>
						<option value ='opacity' >opacity</option>
						<option value ='rotate' >rotate</option>
						<option value ='translate'>translate</option>
					</select>	
				</td>
			</tr>
			<tr>
				<td class='title'>Border radius for image in Event:</td>
				<td><input type="range" min='0' max='' value="0" step='1' id ='action8'  style = 'width:171px;' ><input type = 'number' style = 'width:40px;margin-left:20px;width:44px;' Placeholder="0" id ='action8_1' required name = 'JI_border_radius_image'>px
					<input type = 'hidden' id = 'JI_hidden_val'>
				</td>
			</tr>
			<tr>
				<td class='title'>Border weight for image in Event:</td>
				<td><input type="range" min='0' max='50' value="0" step='1' id ='action9' style = 'width:171px;'><input type = 'number' style = 'width:40px;margin-left:20px;width:44px;' Placeholder="0" id ='action9_1' required name = 'JI_border_image'>px
				</td>
			</tr>
			<tr>
				<td class='title'>Width for image in Event:</td>
				<td><input type="range" min='50' max='1000' value="0" step='1' id ='action10'  style = 'width:171px;'><input type = 'number' style = 'width:40px;margin-left:20px;width:44px;' Placeholder="200" id ='action10_1' required name = 'JI_width_image' >px
				</td>
			</tr>
			<tr>
				<td class='title'>Height for image in Event:</td>
				<td><input type="range" min='50' max='1000' value="0" step='1' id ='action11'  style = 'width:171px;'><input type = 'number' style = 'width:40px;margin-left:20px;width:44px;' Placeholder="200" id ='action11_1' required name = 'JI_height_image' >px
				</td>
			</tr>
			<tr>
				<td class='title'>Border_color for image:</td>
				<td><input type = 'text' style = 'width:170px;' id = 'action6' required name = 'border_color_image'><input type='color' style = 'margin-left:20px;' required id = 'action6_1'> </td>
			</tr>
		</table>
	</fieldset>
	<fieldset  class='fieldset_pop'>
	<legend>Popup window parameters for Date and Time</legend>
		<table>
				<tr>
					<td class='title'>Color of Date and Time:</td>
					<td><input type = 'text' style = 'width:170px;' id ='action13' required name = 'color_date_time'><input type='color' style = 'margin-left:20px;'  id ='action13_1' required> </td>
				</tr>
				<tr>
					<td class='title'>Box_shadow of Date and Time:</td>
					<td><input type = 'number' style = 'width:69px;' max = '10' Placeholder="1" id ='action14' name = 'box_date_time1'>px<input type = 'number' max = '10' style = 'width:69px;' Placeholder="1" id ='action14_1' required name = 'box_date_time2'>px<input type = 'color' style = 'margin-left:20px;' id ='action14_2' required name = 'box_date_time3'> </td>
				</tr>
				<tr>
					<td class='title'>Font_size of Date and Time:</td>
					<td><input type="range" min='12' max='100' value="" step='1' id ='action15' style = 'width:171px;' required name = 'size_date_time'><input type = 'number' style = 'width:40px;margin-left:20px;width:44px;' Placeholder="12" id ='action15_1'>px</td>
				</tr>
				<tr>
					<td class='title'>Font_family of Date and Time:</td>
					<?php
						$table_name5 =  $wpdb->prefix . "font_family"; 
						$JI_famely = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name5 WHERE id > %d ", 0));?>
					<td>
						<select type='text' style = 'width:170px;' id ='action16'  required name = 'font_date_time'>
						<?php  foreach ($JI_famely as $Font_famely) :?>
							<option value ='<?php echo $Font_famely->Font_family?>' style = 'width:170px;'><?php echo $Font_famely->Font_family ?></option>
						 <?php endforeach ?>
						</select>
					</td>
				</tr>
			</table>
		</fieldset>
		<fieldset  class='fieldset_pop'>
		<legend>Popup window parameters for Event Title</legend>
			<table>
				<tr>
					<td class='title'>Color of Event Title:</td>
					<td><input type = 'text' style = 'width:170px;' id ='action19'  required name = 'color_titele_ev'><input type='color' style = 'margin-left:20px;' id ='action19_1' required> </td>
				</tr>
				<tr>
					<td class='title'>Box_shadow of Event  Title:</td>
					<td><input type = 'number' max = '10' style = 'width:69px;' Placeholder="1" id ='action20'  required name = 'box_titele_ev1'>px<input type = 'number' max = '10' style = 'width:69px;' Placeholder="1" id ='action20_1' required name = 'box_titele_ev2'>px<input type = 'color' style = 'margin-left:20px;' id ='action20_2' required name = 'box_titele_ev3'> </td>
				</tr>
				<tr>
					<td class='title'>Color in hover of Event Title:</td>
					<td><input type = 'text' style = 'width:170px;' id ='action35'  required name = 'color_hover_titele_ev'><input type='color' style = 'margin-left:20px;' id ='action35_1' required> </td>
				</tr>
				<tr>
					<td class='title'>Font_size of Event  Title:</td>
					<td><input type="range" min='20' max='100' value="20" step='1' id ='action21'  style = 'width:171px;'><input type = 'number' style = 'width:40px;margin-left:20px;width:44px;' id ='action21_1' Placeholder="20" required name = 'size_titele_ev1'>px</td>
				</tr>
				<tr>
					<td class='title'>Font_family of Event  Title:</td>
					<?php
						$table_name5 =  $wpdb->prefix . "font_family"; 
						$JI_famely = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name5 WHERE id > %d ", 0));?>
					<td>
						<select type='text' style = 'width:170px;' id ='action22' required name = 'famely_titele_ev1'>
						<?php  foreach ($JI_famely as $Font_famely) :?>
							<option value ='<?php echo $Font_famely->Font_family?>' style = 'width:170px;'><?php echo $Font_famely->Font_family ?></option>
						 <?php endforeach ?>
						</select>
					</td>
				</tr>
			</table>
		</fieldset>
		<fieldset  class='fieldset_pop'>
		<legend>Popup window parameters for Event Description</legend>
				<table>
					<tr>
						<td class='title'>Color of Event Description:</td>
						<td><input type = 'text' style = 'width:170px;' id ='action24' required name = 'JI_color_desc'><input type='color' style = 'margin-left:20px;' id ='action24_1' required> </td>
					</tr>
					<tr>
						<td class='title'>Box_shadow of Description:</td>
						<td><input type = 'number' style = 'width:69px;' Placeholder="1" max = '10' id ='action25' required name = 'JI_box_desc1'>px<input type = 'number' style = 'width:69px;' Placeholder="1" id ='action25_1' max = '10' required name = 'JI_box_desc2'>px<input type = 'color' style = 'margin-left:20px;' id ='action25_2' required name = 'JI_box_desc3'> </td>
					</tr>
					<tr>
						<td class='title'>Font_size of Description:</td>
						<td><input type="range" min='12' max='100' value="12" step='1' id ='action26'  style = 'width:171px;' ><input type = 'number' style = 'width:40px;margin-left:20px;width:44px;' id ='action26_1' Placeholder="12" required name = 'JI_size_desc'>px</td>
					</tr>
					<tr>
						<td class='title'>Font_family of Description:</td>
						<?php
							$table_name5 =  $wpdb->prefix . "font_family"; 
							$JI_famely = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name5 WHERE id > %d ", 0));?>
						<td>
							<select type='text' style = 'width:170px;' id ='action27' required name = 'JI_famely_desc'>
							<?php  foreach ($JI_famely as $Font_famely) :?>
								<option value ='<?php echo $Font_famely->Font_family?>' style = 'width:170px;'><?php echo $Font_famely->Font_family ?></option>
							 <?php endforeach ?>
							</select>
						</td>
					</tr>
					<tr>
						<td class='title'>Font_size of first latter Description:</td>
						<td><input type="range" min='12' max='100' value="12" step='1' id ='action28'  style = 'width:171px;'><input type = 'number' style = 'width:40px;margin-left:20px;width:44px;' id ='action28_1' Placeholder="12" required name = 'JI_size_first_desc'>px</td>
					</tr>
				</table>	
			</fieldset>
			<fieldset  class='fieldset_pop'>
			<legend>Popup window parameters for Event Content</legend>
				<table>
					<tr>
						<td class='title'>Background of Event Content:</td>
						<td><input type = 'text' style = 'width:170px;' id ='action29' required name = 'JI_background_cont'><input type='color' style = 'margin-left:20px;' required id ='action29_1'> </td>
					</tr>
					<tr>
						<td class='title'>Border_width of Event Content:</td>
						<td><input type="range" min='0' max='' value="" step='1'id ='action30' style = 'width:171px;'><input type = 'number' style = 'width:40px;margin-left:20px;width:44px;' Placeholder="0" id ='action30_1' required name = 'JI_border_width_cont'>px</td>
					</tr>
					<tr>
						<td class='title'>Border_color of Event Content:</td>
						<td><input type="text" value="" id ='action31' style = 'width:171px;' required name = 'JI_border_color_cont'><input type = 'color' style = 'width:40px;margin-left:20px;width:44px;' Placeholder="0" id ='action31_1' ></td>
					</tr>
					<tr>
						<td class='title'>Border radius of Event Content:</td>
						<td>	<input type="range" min='' max='' value="12" step='1' id ='action32'  style = 'width:171px;'><input type = 'number' style = 'width:40px;margin-left:20px;width:44px;' Placeholder="0" id ='action32_1' required name = 'JI_radius_cont'>px</td>
					</tr>
					<tr>
						<td class='title'>Width of Event Content:</td>
						<td>	<input type="range" min='150' max='999' value="" step='1' id ='action33'  style = 'width:171px;'><input type = 'number' style = 'width:50px;margin-left:20px;' Placeholder="0" id ='action33_1' required name = 'JI_width_cont'  min='150' max='999'>px</td>
					</tr>
					<tr>
						<td class='title'>Height of Event Content:</td>
						<td>	<input type="range" min='150' max='999' value="" step='1' id ='action34'  style = 'width:171px;'><input type = 'number' style = 'width:50px;margin-left:20px;' Placeholder="0" id ='action34_1' required name = 'JI_height_cont'  min='150' max='999'>px</td>
					</tr>
				</table>	
			</fieldset>
			<fieldset  class='fieldset_pop'>
			<legend>Popup window parameters for page header</legend>
				<table>
					<tr>
						<td class='title'>Background of Event Header:</td>
						<td><input type = 'text' style = 'width:170px;' id ='action36' required name = 'JI_background_header'><input type='color' style = 'margin-left:20px;' required id ='action36_1'> </td>
					</tr>
					<tr>
						<td class='title'>Border_width of Event Header:</td>
						<td><input type="range" min='0' max='' value="" step='1'id ='action37' style = 'width:171px;'><input type = 'number' style = 'width:40px;margin-left:20px;width:44px;' Placeholder="0" id ='action37_1' required name = 'JI_border_width_header'>px</td>
					</tr>
					<tr>
						<td class='title'>Border_color of Event Header:</td>
						<td><input type="text" value="" id ='action38' style = 'width:171px;' required name = 'JI_border_color_header'><input type = 'color' style = 'width:40px;margin-left:20px;width:44px;' Placeholder="0" id ='action38_1' ></td>
					</tr>
					<tr>
						<td class='title'>Border radius of Event Header:</td>
						<td>	<input type="range" min='' max='' value="12" step='1' id ='action39'  style = 'width:171px;'><input type = 'number' style = 'width:40px;margin-left:20px;width:44px;' Placeholder="0" id ='action39_1' required name = 'JI_radius_header'>px
					</tr>
					<tr>
						<td class='title'>Color box-shadow of search:</td>
						<td><input type="text" value="" id ='action40' style = 'width:171px;' required name = 'JI_box_header'><input type = 'color' style = 'width:40px;margin-left:20px;width:44px;' Placeholder="0" id ='action40_1' ></td>
					</tr>
					<tr>
						<td class='title'>Color  of arrows in  Header Event page:</td>
						<td><input type="text" value="" id ='action41' style = 'width:171px;' required name = 'JI_arow_color'><input type = 'color' style = 'width:40px;margin-left:20px;width:44px;' Placeholder="0" id ='action41_1' ></td>
					</tr>
					<tr>
						<td class='title'>Background Color of search:</td>
						<td><input type="text" value="" id ='action49' style = 'width:171px;' required name = 'JI_color_backgr_search'><input type = 'color' style = 'width:40px;margin-left:20px;width:44px;' Placeholder="0" id ='action49_1' ></td>
					</tr>
					<tr>
						<td class='title'>Hover Color of arrows in  Header Event page:</td>
						<td><input type="text" value="" id ='action42' style = 'width:171px;' required name = 'JI_color_hover_arow'><input type = 'color' style = 'width:40px;margin-left:20px;width:44px;' Placeholder="0" id ='action42_1' ></td>
					</tr>
					<tr>
						<td class='title'>Color in date Event page:</td>
						<td><input type="text" value="" id ='action43' style = 'width:171px;' required name = 'JI_color_text_date_header'><input type = 'color' style = 'width:40px;margin-left:20px;width:44px;' Placeholder="0" id ='action43_1' ></td>
					</tr>
					<tr>
						<td class='title'>Background Color of date Event page:</td>
						<td><input type="text" value="" id ='action51' style = 'width:171px;' required name = 'JI_color_backgr_date'><input type = 'color' style = 'width:40px;margin-left:20px;width:44px;' Placeholder="0" id ='action51_1' ></td>
					</tr>
					<tr>
					<td class='title'>Size arrows in  Event page:</td>
					<td><input type="range" min='12' max='35' value="" step='1' id ='action44' style = 'width:171px;' required name = 'size_arow_header'><input type = 'number' style = 'width:40px;margin-left:20px;width:44px;' Placeholder="12" id ='action44_1'>px</td>
				</tr>
				</table>	
			</fieldset>
			<fieldset  class='fieldset_pop'>
			<legend>Popup window parameters for Event Content Page</legend>
				<table>
					<tr>
						<td class='title'>Background of Content Page:</td>
						<td><input type = 'text' style = 'width:170px;' id ='action45' required name = 'JI_background_cont_page'><input type='color' style = 'margin-left:20px;' required id ='action45_1'> </td>
					</tr>
					<tr>
						<td class='title'>Border_width of Content Page:</td>
						<td><input type="range" min='0' max='' value="" step='1'id ='action46' style = 'width:171px;'><input type = 'number' style = 'width:40px;margin-left:20px;width:44px;' Placeholder="0" id ='action46_1' required name = 'JI_border_width_cont_page'>px</td>
					</tr>
					<tr>
						<td class='title'>Border_color of Content Page:</td>
						<td><input type="text" value="" id ='action47' style = 'width:171px;' required name = 'JI_border_color_cont_page'><input type = 'color' style = 'width:40px;margin-left:20px;width:44px;'  id ='action47_1' ></td>
					</tr>
					<tr>
						<td class='title'>Border radius of Content Page:</td>
						<td>	<input type="range" min='' max='' value="12" step='1' id ='action48'  style = 'width:171px;'><input type = 'number' style = 'width:40px;margin-left:20px;width:44px;' Placeholder="0" id ='action48_1' required name = 'JI_radius_cont_page'>px
					</tr>
				</table>	
					<tr>
						<td><a href = ''><input type="button" value="Cancel" class="Theme_sub_cancel_button" id ='Theme_sub_cancel_button' ></a></td>
					</tr>
				</table>	
			</fieldset>
			<input type = 'hidden' value = '<?php echo $JI_demo_ev[0]->st_JI_box_header?>' id = 'JI_code'>
		</div>
			</select>	
	</form>
</div>