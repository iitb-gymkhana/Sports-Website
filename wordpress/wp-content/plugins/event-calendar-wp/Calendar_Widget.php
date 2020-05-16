<?php
	
	class  Juna_IT_Calendar extends WP_Widget
	{
		function __construct()
	 	  {
	 			$params=array('name'=>'Juna_IT_Calendar','description'=>'This is the widget of Juna_IT_Calendar plugin');
				parent::__construct('Juna_IT_Calendar','',$params);
	 	  }


	 	 function form($instance)
 		 {
 		 		$defaults = array('Calendar_Title'=>'', 'Theme_Title'=>'', 'Setting_Title'=>'');
			    $instance = wp_parse_args((array)$instance, $defaults);

			   	$Calendar = $instance['Calendar_Title'];
			   	$Theme    = $instance['Theme_Title'];
			   	$Setting  = $instance['st_JI_setting_title'];

			   	?>
			   	<div>			  
				   	<p>
				   		Calendar Title:
				   		<select name="<?php echo $this->get_field_name('Calendar_Title'); ?>" class="widefat">
					   		<?php
					   			global $wpdb;
								$table_name  =  $wpdb->prefix . "calendar_manager";
								$Calendar_Title=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name WHERE id > %d", 0));
					   			
					   			foreach ($Calendar_Title as $Title1)
					   			{
					   				if($Title1->Published == 'Yes')
					   				{
					   					?> <option value="<?php echo $Title1->Calendar_title; ?>"> <?php echo $Title1->Calendar_title; ?> </option> <?php 
					   				}
					   			}
					   		?>
				   		</select>
				   	</p>
				   	<p>
				   		Theme Title:
				   		<select name="<?php echo $this->get_field_name('Name_of_theme'); ?>" class="widefat">
				   			<?php
				   				global $wpdb;
				   				$table_name1 =  $wpdb->prefix . "calendar_settings";
				   				$Theme_Title = $wpdb->get_results($wpdb->prepare("SELECT Name_of_theme FROM $table_name1 WHERE id > %d", 0));

				   				foreach ($Theme_Title as $Title2)
					   			{
					   				?> <option value="<?php echo $Title2->Name_of_theme; ?>"> <?php echo $Title2->Name_of_theme; ?> </option> <?php 
					   			}
				   			?>
				   		</select>
				   	</p>
				   	<p>
				   		Settings Title:
				   		<select name="<?php echo $this->get_field_name('st_JI_setting_title'); ?>" class="widefat">
				   		<?php
				   			global $wpdb;
							$table_name4 =  $wpdb->prefix . "calendar_other_parameters";
							$Setting_Title = $wpdb->get_results($wpdb->prepare("SELECT st_JI_setting_title FROM $table_name4 WHERE id > %d", 0));

							foreach ($Setting_Title as $Title3)
					   		{
					   			?> <option value="<?php echo $Title3->st_JI_setting_title; ?>"> <?php echo $Title3->st_JI_setting_title; ?> </option> <?php 
					   		}
				   		?>
				   		</select>
				   	</p>
			   	</div>
			   	<?php
 		 }
 		function widget($args,$instance)
 		{
 			extract($args);
 		  	$Calendar = empty($instance['Calendar_Title']) ? '' : $instance['Calendar_Title'];
 		  	$Theme    = empty($instance['Name_of_theme']) ? '' : $instance['Name_of_theme'];
 		 	$Setting  = empty($instance['st_JI_setting_title']) ? '' : $instance['st_JI_setting_title'];
 		 
 		 	echo $before_widget;
 		 	?>
 		 	<input type="hidden" id="selected_calendar" value="<?php echo $Calendar; ?>">
 		 	<input type="hidden" id="selected_theme" value="<?php echo $Theme; ?>">
 		 	<input type="hidden" id="selected_setting" value="<?php echo $Setting; ?>">
 		 	<input type="hidden" id="hidden_text">
 		 	<input type="hidden" id="images_src" value="<?php echo  esc_url( wp_upload_dir()['baseurl']); ?>">
 		 	<table id="calendar1">
		  		<thead>
 		 			<tr><td id='title_name' colspan="7" style="text-align:center;"><?php echo $Calendar; ?></td></tr>
		    		<tr><td class='prev1'>‹</td><td class='month1' id='month1' colspan="5"></td><td class='next1'>›</td></tr>
		   			<tr class='week_day1'><td class='week_day1'>Mo<td class='week_day1'>Tu<td class='week_day1'>We<td class='week_day1'>Th<td class='week_day1'>Fr<td id='sat1' class='week_day1'>Sa<td  id='sun1' class='week_day1'>Su
		  		<tbody>
			</table>

			 <div id="category_legend"></div>
 		 	<?php
 		 	echo $after_widget;
			global $wpdb;
			$table_name1 =  $wpdb->prefix ."add_an_event";
			$JI_demo1  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE id > %d ", 0 ));
			$table_name4 =  $wpdb->prefix . "calendar_other_parameters";
			$table_name6 =  $wpdb->prefix . "widget_id";
			$W_id  = $wpdb->get_results($wpdb->prepare("SELECT w_id FROM $table_name6 WHERE id = %d ",1 ));
			$JI_demo_ev  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE id = %d ",$W_id[0]->w_id ));
		 	$m = explode(' ', $JI_demo1->Data);
	

 		 	?>
 	<div id = 'popup_window' class='popup_window' >
		<div id = 'JI_hover'>
			<?php echo $JI_demo_ev[0]->st_hover_image ;?>

		</div>
		<div id = 'JI_hover1'>
			<style>
			
			
				.JI_calendar1:hover .JI_h3_image{
						
					color:<?php echo $JI_demo_ev[0]->st_color_hover_titele_ev; ?> !important;
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
				color:<?php echo  $JI_demo_ev[0]->st_JI_color_hover_arow?> !important;
				
			}
			.JI_hedaer{
				background:<?php echo $JI_demo_ev[0]->st_JI_background_header; ?>;
			}


		</style>
		<section style = 'position:absolute;width:100%;right:20px;top:50px;background:rgba(255,255,255,0.6);'   class = 'JI_demo_section' >
			<div class = 'JI_hedaer' style = 'border:<?php echo $JI_demo_ev[0]->st_JI_border_width_header?>;border-color:<?php echo $JI_demo_ev[0]->st_JI_border_color_header?>;background:<?php echo $JI_demo_ev[0]->st_JI_background_header;?>;' >
				<div  class = 'JI_event_search'style = 'width:100px ;float:left'>
					
					<input type ='text'  placeholder="search" class = 'JI_event_search1'  style = 'width:100px;background:<?php echo $JI_demo_ev[0]->st_JI_color_backgr_search?>' >
					<img src = '<?php echo plugins_url('/Image/111.png',__FILE__)?>'  class ='JI_closs_serch'>
				</div>			
				<div  style = 'float:right;width:300px;height:100%;margin-right:5px;'>
					<span id = 'arrow_left' style = 'font-weight:900;cursor:pointer;display:block;float:left;margin:10px 5px 0 0;color:<?php echo $JI_demo_ev[0]->st_JI_arow_color?>;font-size:<?php echo $JI_demo_ev[0]->st_size_arow_header?>' class = 'JI_arrow'><</span>
					<input type = 'text' value = '<?php echo $m[0]; ?>' id = 'JI_date_event' style = 'margin-top:15px;text-align:center;background:<?php echo $JI_demo_ev[0]->st_JI_color_backgr_date?>;color:<?php echo $JI_demo_ev[0]->st_JI_color_text_date_header ?>;float:left;'>
					<span id = 'arrow_right' style = 'font-weight:900;cursor:pointer;display:block;float:left; margin:10px 5px 0 0;color:<?php echo $JI_demo_ev[0]->st_JI_arow_color?>;font-size:<?php echo $JI_demo_ev[0]->st_size_arow_header?>' class = 'JI_arrow'>></span>
					<div style = 'float:left;height:100%;width:50px;text-decoration:underline;color:#61E3FF;cursor:pointer;float:right;text-shadow:1px 1px #fff;padding-top:15px;z-index:100000;' class = 'JI_back'>Back</div>
				</div>
				
			</div>
			<div  class = 'JI_calendars_content'style = 'width:1000px;background:<?php echo $JI_demo_ev[0]->st_JI_background_cont_page?>;border:<?php echo $JI_demo_ev[0]->st_JI_border_width_cont_page.' solid '.$JI_demo_ev[0]->st_JI_border_color_cont_page?>;border-radius:<?php echo $JI_demo_ev[0]->st_JI_radius_cont_page?>'>
				<div style = ' width:980px;height:50px; margin:30px 0 0 20px; position:relative;'>
					
					<h1  style = 'color:<?php echo $JI_demo_ev[0]->st_color_header ?>;text-shadow:<?php echo $JI_demo_ev[0]->st_shadow_header ?>;font-size:<?php echo  $JI_demo_ev[0]->st_size_header?>;font-family:<?php echo $JI_demo_ev[0]->st_famely_header?>;'  class = 'in_page_setting'>Events From <?php echo $m[0];?></h1>
				</div>
				<?php foreach ($JI_demo1 as $JI_demo[0]): ?>
					<?php $m = explode(' ', $JI_demo[0]->Data);	?>
					<div  class = 'JI_calendar1' style = 'float:left;background:<?php echo $JI_demo_ev[0]->st_background_cont;?>;border:<?php echo $JI_demo_ev[0]->st_br_width_cont.' solid '. $JI_demo_ev[0]->st_br_color_cont?>;border-radius:<?php echo $JI_demo_ev[0]->st_radius_cont?>;width:<?php echo $JI_demo_ev[0]->st_width_cont?>;height:<?php echo $JI_demo_ev[0]->st_height_cont?>;' id = '<?php echo $m[0]?>'>
						<img src = '<?php if(esc_url( wp_upload_dir()['baseurl']) .'/'. $JI_demo[0]->File !='') { echo esc_url( wp_upload_dir()['baseurl']) .'/'. $JI_demo[0]->File ;} else{ echo plugins_url('/Image/2222(9).jpg',__FILE__);}?>'  class  = 'JI_image_for_event' style = 'border:<?php echo $JI_demo_ev[0]->st_border_image.' solid'.$JI_demo_ev[0]->st_br_color_image;?>;width:<?php echo  $JI_demo_ev[0]->st_width_image?>;height:<?php echo  $JI_demo_ev[0]->st_height_image?>;'>
						<p style = 'margin-left:30px;color:<?php echo $JI_demo_ev[0]->st_color_date?>;text-shadow:<?php echo $JI_demo_ev[0]->st_box_date?>;font-size:<?php echo $JI_demo_ev[0]->st_size_date?>;font-family:<?php echo $JI_demo_ev[0]->st_font_date?>' class= 'JI_date'> <?php echo $JI_demo[0]->Data.'     '. $JI_demo[0]->Time_from.'-'. $JI_demo[0]->Time_to;?> </p>
						<div style = 'width:95%;height:50px;'>
							<h3  class = 'JI_h3_image' style = 'text-align:center;width:100%;color:<?php echo $JI_demo_ev[0]->st_color_title_ev?>;text-shadow:<?php echo $JI_demo_ev[0]->st_box_title_ev?>;font-size:<?php echo $JI_demo_ev[0]->st_size_title_ev?>;font-family:<?php echo $JI_demo_ev[0]->st_famely_title_ev?>;'><?php echo $JI_demo[0]->Event_title; ?></h3>
						</div>
						<div style = 'width:95%;overflow:hidden;'>
							<?php $string =  $JI_demo[0]->Note ?>
							<p style = 'width:99%;color:<?php echo $JI_demo_ev[0]->st_color_desc?>;text-shadow:<?php echo $JI_demo_ev[0]->st_box_desc?>;font-size:<?php echo $JI_demo_ev[0]->st_size_desc?>;font-family:<?php echo $JI_demo_ev[0]->st_famely_desc?>' id = '<?php echo $string ;?>' class = 'JI_desc_con'>
								<input type = 'hidden' value = '<?php echo  $JI_demo[0]->Event_title; ?>' class = 'hid_title'>
								<span style = 'font-size:<?php echo $JI_demo_ev[0]->st_size_first_latter?>;font-weight:800;' class = 'JI_first'><?php echo  $string{0}?></span ><span class = 'JI_span2'> <?php echo  substr($string,1)?></span>
								
							</p>
						</div>

					</div>
				<?php endforeach ?>	
			</div>
				
			<input type = 'hidden'  id = 'JI_code' value = '<?php echo $JI_demo_ev[0]->st_JI_box_header ?>'>
			<input type = 'hidden'  id = 'first_l' value = '<?php echo $JI_demo_ev[0]->st_size_first_latter ?>'>
		</section>
		
		<div class = 'My_event' style = 'background:<?php echo $JI_demo_ev[0]->st_background_cont; ?>'>
			<h1  style = 'color:<?php echo $JI_demo_ev[0]->st_color_header ?>;text-shadow:<?php echo $JI_demo_ev[0]->st_shadow_header ?>;font-size:<?php echo  $JI_demo_ev[0]->st_size_header?>;font-family:<?php echo $JI_demo_ev[0]->st_famely_header?>;' class = 'my_ev2'>Events From <?php echo $m[0];?> </h1>
			
			<img id = 'image_day' crs = ''style = 'border:6px double #979265;'>

			<p id = 'JI_date' style = 'color:<?php echo $JI_demo_ev[0]->st_color_date?>;text-shadow:<?php echo $JI_demo_ev[0]->st_box_date?>;font-size:<?php echo $JI_demo_ev[0]->st_size_date?>;font-family:<?php echo $JI_demo_ev[0]->st_font_date?>'>  </p>
			<h3  class = 'MY_ev3' style = 'color:<?php echo $JI_demo_ev[0]->st_color_title_ev?>;text-shadow:<?php echo $JI_demo_ev[0]->st_box_title_ev?>;font-size:<?php echo $JI_demo_ev[0]->st_size_title_ev?>;font-family:<?php echo $JI_demo_ev[0]->st_famely_title_ev?>;'></h3>
			
			<p class = 'JI_desc_con1' style = 'text-align:justify;color:<?php echo $JI_demo_ev[0]->st_color_desc?>;text-shadow:<?php echo $JI_demo_ev[0]->st_box_desc?>;font-size:<?php echo $JI_demo_ev[0]->st_size_desc?>;font-family:<?php echo $JI_demo_ev[0]->st_famely_desc?>' ></p>

			<span style =  "text-decoration:underline;color:#61E3FF;cursor:pointer;float:right;text-shadow:1px 1px #fff;" class = "JI_back1" >Back</span>
		</div>
		
	</div>	
	
<?php
 		}
	}
?>	

 <script type = 'javascript' text = 'javascript'>
// 	jQuery(document).ready(function(){
// 		serch_animation();
// 	})
// 	function serch_animation(){
// 		var box = jQuery('#JI_code').val();
// 		jQuery(".JI_event_search1").focus(function(){
			
// 				jQuery(this)
// 					.animate({"width":"250px",},500)
// 					.css("box-shadow","1px 1px 30px "+box)
// 					.val("");
// 					jQuery('.JI_event_search').animate({"width":"280px","background":"#777,"},500);
// 					jQuery('.JI_closs_serch').fadeIn(500);
			
// 			})
// 			jQuery(".JI_event_search1").blur(function(){
			
// 				jQuery(this)
// 					.animate({"width":"170px",},500)
// 					.css("box-shadow","none")
// 					.val("search event");
// 					jQuery('.JI_event_search').animate({"width":"199px",},500)
// 					jQuery('.JI_closs_serch').fadeOut(500);
			
// 			})
			
// 	}

 </script>
 	