<?php
	add_action( 'wp_ajax_Selected_calendar', 'Selected_calendar_Callback' );
	add_action( 'wp_ajax_nopriv_Selected_calendar', 'Selected_calendar_Callback' );
	
	function Selected_calendar_Callback()
	{
		$Selected_calendar = sanitize_text_field($_POST['foobar']);

		global $wpdb;
		$table_name  =  $wpdb->prefix . "calendar_manager";
		$table_name2 =  $wpdb->prefix . "add_an_event";

		$Selected_params=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name WHERE Calendar_title=%s", $Selected_calendar));
		$Selected_cal_event_date=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE CalendarId=%d", $Selected_params[0]->id));
		
		echo $Selected_params[0]->Calendar_title . '$#$' . $Selected_params[0]->Default_year . '$#$' . $Selected_params[0]->Default_month . '$#$' . count($Selected_cal_event_date) . '$#$' . $Selected_data;

		for($i=0; $i<count($Selected_cal_event_date); $i++)
		{
			$Selected_data=$Selected_cal_event_date[$i]->Data  . '*&^%^&*' . $Selected_cal_event_date[$i]->Published . '^*^'; 
			echo $Selected_data;
		}

		die();
	}

	add_action( 'wp_ajax_Selected_theme', 'Selected_theme_Callback' );
	add_action( 'wp_ajax_nopriv_Selected_theme', 'Selected_theme_Callback' );

	function Selected_theme_Callback()
	{
		$Selected_theme = sanitize_text_field($_POST['foobar']);

		global $wpdb;
		$table_name1 =  $wpdb->prefix . "calendar_settings";
		$Theme_params=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE Name_of_theme=%s", $Selected_theme));

		echo $Theme_params[0]->Name_of_theme . '$#$' . $Theme_params[0]->Calendar_Width . '$#$' . 
			 $Theme_params[0]->Calendar_Height . '$#$' . $Theme_params[0]->Main_border_color . '$#$' . $Theme_params[0]->Main_border_radius . '$#$' . 
			 $Theme_params[0]->Main_border_width . '$#$' . $Theme_params[0]->Current_month_height . '$#$' . $Theme_params[0]->Current_month_border_width . '$#$' . 
			 $Theme_params[0]->Current_month_border_radius . '$#$' . $Theme_params[0]->Current_month_border_color . '$#$' . $Theme_params[0]->Current_month_background_color . '$#$' . 
			 $Theme_params[0]->Current_month_color . '$#$' . $Theme_params[0]->Current_month_font_family . '$#$' . $Theme_params[0]->Current_month_font_size . '$#$' . 
			 $Theme_params[0]->Arrow_size . '$#$' . $Theme_params[0]->Arrow_border_width . '$#$' . $Theme_params[0]->Arrow_border_radius . '$#$' . 
			 $Theme_params[0]->Arrow_border_color . '$#$' . $Theme_params[0]->Arrow_background_color . '$#$' . $Theme_params[0]->Arrow_color . '$#$' . 
			 $Theme_params[0]->Calendar_title_height . '$#$' . $Theme_params[0]->Calendar_title_border_width . '$#$' . $Theme_params[0]->Calendar_title_border_radius . '$#$' . 
			 $Theme_params[0]->Calendar_title_border_color . '$#$' . $Theme_params[0]->Calendar_title_background_color . '$#$' . $Theme_params[0]->Calendar_title_color . '$#$' . 
			 $Theme_params[0]->Calendar_title_font_family . '$#$' . $Theme_params[0]->Calendar_title_font_size . '$#$' . $Theme_params[0]->Weekday_names_height . '$#$' . 
			 $Theme_params[0]->Weekday_names_border_width . '$#$' . $Theme_params[0]->Weekday_names_border_radius . '$#$' . $Theme_params[0]->Weekday_names_border_color . '$#$' . 
			 $Theme_params[0]->Font_size_of_weekday_names . '$#$' . $Theme_params[0]->Color_of_weekday_names . '$#$' . $Theme_params[0]->Bg_color_of_weekday_names . '$#$' . 
			 $Theme_params[0]->Saturday_border_width . '$#$' . $Theme_params[0]->Saturday_border_radius . '$#$' . $Theme_params[0]->Saturday_border_color . '$#$' . 
			 $Theme_params[0]->Saturday_font_size . '$#$' . $Theme_params[0]->Saturday_bg_color . '$#$' . $Theme_params[0]->Saturday_color . '$#$' . 
			 $Theme_params[0]->Sunday_border_width . '$#$' . $Theme_params[0]->Sunday_border_radius . '$#$' . $Theme_params[0]->Sunday_border_color . '$#$' . 
			 $Theme_params[0]->Sunday_font_size . '$#$' . $Theme_params[0]->Sunday_bg_color . '$#$' . $Theme_params[0]->Sunday_color . '$#$' . 
			 $Theme_params[0]->Bg_color . '$#$' . $Theme_params[0]->Current_day_text_color . '$#$' . $Theme_params[0]->Current_day_background_color . '$#$' . 
			 $Theme_params[0]->Current_day_font_size . '$#$' . $Theme_params[0]->Current_day_border_width . '$#$' . $Theme_params[0]->Current_day_border_radius . '$#$' . 
			 $Theme_params[0]->Current_day_border_color . '$#$' . $Theme_params[0]->Cell_text_color_without_events . '$#$' . $Theme_params[0]->Cell_background_color_without_events . '$#$' . 
			 $Theme_params[0]->Cell_font_size_without_events . '$#$' . $Theme_params[0]->Cell_border_width_without_event . '$#$' . $Theme_params[0]->Cell_border_radius_without_event . '$#$' . 
			 $Theme_params[0]->Cell_border_color_without_event . '$#$' . $Theme_params[0]->Cell_text_color_with_events . '$#$' . $Theme_params[0]->Cell_bg_color_with_events . '$#$' . 
			 $Theme_params[0]->Cell_font_size_with_events . '$#$' . $Theme_params[0]->Cell_border_width_with_event . '$#$' . $Theme_params[0]->Cell_border_radius_with_event . '$#$' . 
			 $Theme_params[0]->Cell_border_color_with_event . '$#$' . $Theme_params[0]->Sundays_text_color . '$#$' . $Theme_params[0]->Sundays_bg_color . '$#$' . 
			 $Theme_params[0]->Sundays_font_size . '$#$' . $Theme_params[0]->Sundays_border_width . '$#$' . $Theme_params[0]->Sundays_border_radius . '$#$' . 
			 $Theme_params[0]->Sundays_border_color . '$#$' . $Theme_params[0]->Saturdays_text_color . '$#$' . $Theme_params[0]->Saturdays_bg_color . '$#$' . 
			 $Theme_params[0]->Saturdays_font_size . '$#$' . $Theme_params[0]->Saturdays_border_width . '$#$' . $Theme_params[0]->Saturdays_border_radius . '$#$' . 
			 $Theme_params[0]->Saturdays_border_color . '$#$' . $Theme_params[0]->Hover_text_color . '$#$' . $Theme_params[0]->Hover_bg_color . '$#$' .
			 $Theme_params[0]->Hover_border_color ;

		die();
	}

	add_action( 'wp_ajax_Selected_setting', 'Selected_setting_Callback' );
	add_action( 'wp_ajax_nopriv_Selected_setting', 'Selected_setting_Callback' );

	function Selected_setting_Callback()
	{
		$Selected_setting = $_POST['foobar'];
		$Data = explode('%^&^%', $Selected_setting);

		global $wpdb;
		
		$table_name  =  $wpdb->prefix . "calendar_manager";
		$table_name2 =  $wpdb->prefix . "add_an_event";
		$table_name4 =  $wpdb->prefix . "calendar_other_parameters";

		$Setting_params=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE Setting_title=%s", $Data[0]));
		$Selected_params=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name WHERE Calendar_title=%s", $Data[1]));
		$Selected_cal_event_date=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE CalendarId=%d", $Selected_params[0]->id));

		echo $Setting_params[0]->Setting_title . '$#$' . $Setting_params[0]->Date_format_in_popup . '$#$' . $Setting_params[0]->Event_title_color_in_popup . '$#$' . $Setting_params[0]->Event_title_font_size_in_popup . '$#$' . 
			 $Setting_params[0]->Event_title_font_family_in_popup . '$#$' . $Setting_params[0]->Event_title_font_style_in_popup . '$#$' . $Setting_params[0]->Date_color_in_popup . '$#$' . $Setting_params[0]->Date_font_size_in_popup . '$#$' . 
			 $Setting_params[0]->Date_font_family_in_popup . '$#$' . $Setting_params[0]->Date_style_in_popup . '$#$' . $Setting_params[0]->Popup_border_radius . '$#$' . $Setting_params[0]->Image_border_radius . '$#$' . 
			 $Setting_params[0]->Popup_bg_color . '$#$' . $Setting_params[0]->Popup_width . '$#$' . $Setting_params[0]->Popup_height . '$#$' . $Setting_params[0]->Image_width . '$#$' . $Setting_params[0]->Image_height . '$#$' . 
			 $Setting_params[0]->Show_the_repeat_rate . '$#$' . $Setting_params[0]->Popup_border_radius . '$#$' . $Setting_params[0]->Image_border_radius . '$#$' . count($Selected_cal_event_date) . '*&^%' . $Selected_data;	 
		
		for($i=0; $i<count($Selected_cal_event_date); $i++)
		{
			$Selected_data=$Selected_cal_event_date[$i]->Event_title . '+-*-+' . $Selected_cal_event_date[$i]->Select_category. '+-*-+' . $Selected_cal_event_date[$i]->Data . '+-*-+' . $Selected_cal_event_date[$i]->File . '+-*-+' . $Selected_cal_event_date[$i]->Note . '$#$'; 
			echo $Selected_data;
		}
		die();
	}
	add_action( 'wp_ajax_Category_settings', 'Category_settings_Callback' );
	add_action( 'wp_ajax_Category_settings', 'Category_settings_Callback' );

	function Category_settings_Callback()
	{	
		$Event = sanitize_text_field($_POST['foobar']);
		$Pars=explode('~!#$@#$',$Event);

		global $wpdb;
		$table_name2 =  $wpdb->prefix . "add_an_event";
		$table_name3 =  $wpdb->prefix . "add_category";
		$table_name4 =  $wpdb->prefix . "calendar_other_parameters";

		$Selected_event=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE Event_title=%s",$Pars[1]));
		$Selected_category=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE Category_title=%s",$Selected_event[0]->Select_category));
		$Selected_other=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE Setting_title=%s",$Pars[0]));

		echo $Selected_category[0]->Category_title . '*&^%^&*' . $Selected_category[0]->Category_color . '*&^%^&*' . 
			 $Selected_category[0]->File . '*&^%^&*' . $Selected_category[0]->Description . '*&^%^&*' . 
			 $Selected_other[0]->Event_title_font_size_in_popup . '*&^%^&*' . $Selected_other[0]->Popup_width . '*&^%^&*' . 
			 $Selected_other[0]->Popup_height . '*&^%^&*' . $Selected_other[0]->Image_width . '*&^%^&*' . 
			 $Selected_other[0]->Image_height . '*&^%^&*' . $Selected_other[0]->Event_title_color_in_popup . '*&^%^&*' . 
			 $Selected_other[0]->Event_title_font_family_in_popup . '*&^%^&*' . $Selected_other[0]->Popup_border_radius . '*&^%^&*' . $Selected_other[0]->Image_border_radius;
			 
		die();
	}

	add_action( 'wp_ajax_Category_colors', 'Category_colors_Callback' );
	add_action( 'wp_ajax_Category_colors', 'Category_colors_Callback' );

	function Category_colors_Callback()
	{
		global $wpdb;

		$table_name3 =  $wpdb->prefix . "add_category";
		$Colors=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE id>%d",0));

		for($i=0;$i<count($Colors);$i++)
		{
			if($Colors[$i]->Published=='Yes')
			{
				echo $Colors[$i]->Category_color . '%^%';
			}
		}
		die();
	}	

	add_action( 'wp_ajax_published_item1', 'published_item1' );
	add_action( 'wp_ajax_nopriv_published_item1', 'published_item1' );

	function published_item1()
	{	
		$val = sanitize_text_field($_POST['x']);
		$id = sanitize_text_field($_POST['y']);

	 	global $wpdb;
		$table_name3  =  $wpdb->prefix . "add_an_event";

		if($val =='Yes')
		{
			$wpdb->query($wpdb->prepare("UPDATE  $table_name3 set Published= %s WHERE  id= %d ",'No',$id));
	 		die();
		}
		else if($val =='No')
		{
			$wpdb->query($wpdb->prepare("UPDATE  $table_name3 set Published= %s WHERE  id= %d ",'Yes',$id));
	 		die();
		}
	}
	add_action( 'wp_ajax_published_item2', 'published_item2' );
	add_action( 'wp_ajax_nopriv_published_item2', 'published_item2' );

	function published_item2()
	{	
		$val = sanitize_text_field($_POST['x']);
		$id = sanitize_text_field($_POST['y']);

	 	global $wpdb;
		$table_name3  =  $wpdb->prefix . "calendar_manager";

		if($val =='Yes')
		{
			$wpdb->query($wpdb->prepare("UPDATE  $table_name3 set Published= %s WHERE  id= %d ",'No',$id));
	 		die();
		}
		else if($val =='No')
		{
			$wpdb->query($wpdb->prepare("UPDATE  $table_name3 set Published= %s WHERE  id= %d ",'Yes',$id));
	 		die();
		}
	}

	add_action( 'wp_ajax_delete_item1', 'Delete_tr_in_table1' );
	add_action( 'wp_ajax_nopriv_delete_item2', 'Delete_tr_in_table1' );

	function Delete_tr_in_table1()
	{
	 	$id = sanitize_text_field($_POST['x']);

	 	global $wpdb;
		$table_name3  =  $wpdb->prefix . "add_an_event";

		$wpdb->query($wpdb->prepare("DELETE FROM $table_name3 WHERE id= %d", $id));
		die();
	}

	add_action( 'wp_ajax_delete_item2', 'Delete_tr_in_table2' );
	add_action( 'wp_ajax_nopriv_delete_item2', 'Delete_tr_in_table2' );

	function Delete_tr_in_table2()
	{
	 	$id = sanitize_text_field($_POST['x']);

	 	global $wpdb;
		$table_name3  =  $wpdb->prefix . "calendar_manager";

		$wpdb->query($wpdb->prepare("DELETE FROM $table_name3 WHERE id= %d", $id));
		die();
	}

	add_action( 'wp_ajax_delete_item', 'Delete_tr_in_table' );
	add_action( 'wp_ajax_nopriv_delete_item', 'Delete_tr_in_table' );

	function Delete_tr_in_table()
	{
	 	$id = sanitize_text_field($_POST['x']);

	 	global $wpdb;
		$table_name3  =  $wpdb->prefix . "add_category";

		$wpdb->query($wpdb->prepare("DELETE FROM $table_name3 WHERE id= %d", $id));
		die();
	}

	add_action( 'wp_ajax_published_item', 'published_item' );
	add_action( 'wp_ajax_nopriv_published_item', 'published_item' );

	function published_item()
	{	
		$val = sanitize_text_field($_POST['x']);
		$id = sanitize_text_field($_POST['y']);
	 	
	 	global $wpdb;
		$table_name3  =  $wpdb->prefix . "add_category";
		if($val =='Yes')
		{
			$wpdb->query($wpdb->prepare("UPDATE  $table_name3 set Published= %s WHERE  id= %d ",'No',$id));
	 		die();
		}
		else if($val =='No')
		{
			$wpdb->query($wpdb->prepare("UPDATE  $table_name3 set Published= %s WHERE  id= %d ",'Yes',$id));
	 		die();
		}
	}

	add_action( 'wp_ajax_edit_data', 'edit_data_tr' );
	add_action( 'wp_ajax_nopriv_edit_data', 'edit_data_tr' );

	function edit_data_tr()
	{	
		$id = sanitize_text_field($_POST['x']);
		
	 	global $wpdb;
		$table_name3  =  $wpdb->prefix . "add_category";
		
		$date_category = $wpdb->get_var($wpdb->prepare("SELECT * FROM  $table_name WHERE id= %d", $id));
		$date = $date_category['Category_title'].'.'.$date_category['Category_color'].'.'.$date_category['Description'].'.'.$date_category['Published'];
		die();
	}

	add_action( 'wp_ajax_Delete_Theme_Click', 'Delete_Theme_Click_Callback' );
	add_action( 'wp_ajax_nopriv_Delete_Theme_Click', 'Delete_Theme_Click_Callback' );

	function Delete_Theme_Click_Callback()
	{
		$Delete_id = sanitize_text_field($_POST['foobar']);
		
		global $wpdb;
		$table_name1 =  $wpdb->prefix . "calendar_settings";

		$wpdb->query($wpdb->prepare("DELETE FROM $table_name1 WHERE id= %d", $Delete_id));
		die();
	}

	add_action( 'wp_ajax_Delete_Setting_Click', 'Delete_Setting_Click_Callback' );
	add_action( 'wp_ajax_nopriv_Delete_Setting_Click', 'Delete_Setting_Click_Callback' );

	function Delete_Setting_Click_Callback()
	{
		$Delete_id = sanitize_text_field($_POST['foobar']);
		
		global $wpdb;
		$table_name4 =  $wpdb->prefix . "calendar_other_parameters";

		$wpdb->query($wpdb->prepare("DELETE FROM $table_name4 WHERE id= %d", $Delete_id));
		die();
	}

	add_action( 'wp_ajax_Edit_Theme_Click', 'Edit_Theme_Click_Callback' );
	add_action( 'wp_ajax_nopriv_Edit_Theme_Click', 'Edit_Theme_Click_Callback' );

	function Edit_Theme_Click_Callback()
	{
		$Edit_id = sanitize_text_field($_POST['foobar']);

		global $wpdb;
		$table_name1 =  $wpdb->prefix . "calendar_settings";

		$Theme_params=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE id=%d", $Edit_id));
		
		echo $Theme_params[0]->id . '$#$' . $Theme_params[0]->Name_of_theme . '$#$' . $Theme_params[0]->Calendar_Width . '$#$' . 
			 $Theme_params[0]->Calendar_Height . '$#$' . $Theme_params[0]->Main_border_color . '$#$' . $Theme_params[0]->Main_border_radius . '$#$' . 
			 $Theme_params[0]->Main_border_width . '$#$' . $Theme_params[0]->Current_month_height . '$#$' . $Theme_params[0]->Current_month_border_width . '$#$' . 
			 $Theme_params[0]->Current_month_border_radius . '$#$' . $Theme_params[0]->Current_month_border_color . '$#$' . $Theme_params[0]->Current_month_background_color . '$#$' . 
			 $Theme_params[0]->Current_month_color . '$#$' . $Theme_params[0]->Current_month_font_family . '$#$' . $Theme_params[0]->Current_month_font_size . '$#$' . 
			 $Theme_params[0]->Arrow_size . '$#$' . $Theme_params[0]->Arrow_border_width . '$#$' . $Theme_params[0]->Arrow_border_radius . '$#$' . 
			 $Theme_params[0]->Arrow_border_color . '$#$' . $Theme_params[0]->Arrow_background_color . '$#$' . $Theme_params[0]->Arrow_color . '$#$' . 
			 $Theme_params[0]->Calendar_title_height . '$#$' . $Theme_params[0]->Calendar_title_border_width . '$#$' . $Theme_params[0]->Calendar_title_border_radius . '$#$' . 
			 $Theme_params[0]->Calendar_title_border_color . '$#$' . $Theme_params[0]->Calendar_title_background_color . '$#$' . $Theme_params[0]->Calendar_title_color . '$#$' . 
			 $Theme_params[0]->Calendar_title_font_family . '$#$' . $Theme_params[0]->Calendar_title_font_size . '$#$' . $Theme_params[0]->Weekday_names_height . '$#$' . 
			 $Theme_params[0]->Weekday_names_border_width . '$#$' . $Theme_params[0]->Weekday_names_border_radius . '$#$' . $Theme_params[0]->Weekday_names_border_color . '$#$' . 
			 $Theme_params[0]->Font_size_of_weekday_names . '$#$' . $Theme_params[0]->Color_of_weekday_names . '$#$' . $Theme_params[0]->Bg_color_of_weekday_names . '$#$' . 
			 $Theme_params[0]->Saturday_border_width . '$#$' . $Theme_params[0]->Saturday_border_radius . '$#$' . $Theme_params[0]->Saturday_border_color . '$#$' . 
			 $Theme_params[0]->Saturday_font_size . '$#$' . $Theme_params[0]->Saturday_bg_color . '$#$' . $Theme_params[0]->Saturday_color . '$#$' . 
			 $Theme_params[0]->Sunday_border_width . '$#$' . $Theme_params[0]->Sunday_border_radius . '$#$' . $Theme_params[0]->Sunday_border_color . '$#$' . 
			 $Theme_params[0]->Sunday_font_size . '$#$' . $Theme_params[0]->Sunday_bg_color . '$#$' . $Theme_params[0]->Sunday_color . '$#$' . 
			 $Theme_params[0]->Bg_color . '$#$' . $Theme_params[0]->Current_day_text_color . '$#$' . $Theme_params[0]->Current_day_background_color . '$#$' . 
			 $Theme_params[0]->Current_day_font_size . '$#$' . $Theme_params[0]->Current_day_border_width . '$#$' . $Theme_params[0]->Current_day_border_radius . '$#$' . 
			 $Theme_params[0]->Current_day_border_color . '$#$' . $Theme_params[0]->Cell_text_color_without_events . '$#$' . $Theme_params[0]->Cell_background_color_without_events . '$#$' . 
			 $Theme_params[0]->Cell_font_size_without_events . '$#$' . $Theme_params[0]->Cell_border_width_without_event . '$#$' . $Theme_params[0]->Cell_border_radius_without_event . '$#$' . 
			 $Theme_params[0]->Cell_border_color_without_event . '$#$' . $Theme_params[0]->Cell_text_color_with_events . '$#$' . $Theme_params[0]->Cell_bg_color_with_events . '$#$' . 
			 $Theme_params[0]->Cell_font_size_with_events . '$#$' . $Theme_params[0]->Cell_border_width_with_event . '$#$' . $Theme_params[0]->Cell_border_radius_with_event . '$#$' . 
			 $Theme_params[0]->Cell_border_color_with_event . '$#$' . $Theme_params[0]->Sundays_text_color . '$#$' . $Theme_params[0]->Sundays_bg_color . '$#$' . 
			 $Theme_params[0]->Sundays_font_size . '$#$' . $Theme_params[0]->Sundays_border_width . '$#$' . $Theme_params[0]->Sundays_border_radius . '$#$' . 
			 $Theme_params[0]->Sundays_border_color . '$#$' . $Theme_params[0]->Saturdays_text_color . '$#$' . $Theme_params[0]->Saturdays_bg_color . '$#$' . 
			 $Theme_params[0]->Saturdays_font_size . '$#$' . $Theme_params[0]->Saturdays_border_width . '$#$' . $Theme_params[0]->Saturdays_border_radius . '$#$' . 
			 $Theme_params[0]->Saturdays_border_color . '$#$' . $Theme_params[0]->Hover_text_color . '$#$' . $Theme_params[0]->Hover_bg_color . '$#$' .
			 $Theme_params[0]->Hover_border_color ;

		die();
	}

	// add_action( 'wp_ajax_Edit_Setting_Click', 'Edit_Setting_Click_Callback' );
	// add_action( 'wp_ajax_nopriv_Edit_Setting_Click', 'Edit_Setting_Click_Callback' );

	// function Edit_Setting_Click_Callback()
	// {
	// 	$Edit_id = sanitize_text_field($_POST['foobar']);

	// 	global $wpdb;
	// 	$table_name4 =  $wpdb->prefix . "calendar_other_parameters";
	// 	$Setting_params=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE id=%d", $Edit_id));

	// 	echo $Setting_params[0]->Setting_title . '$#$' . $Setting_params[0]->Date_format_in_popup . '$#$' . $Setting_params[0]->Event_title_color_in_popup . '$#$' . $Setting_params[0]->Event_title_font_size_in_popup . '$#$' . 
	// 		 $Setting_params[0]->Event_title_font_family_in_popup . '$#$' . $Setting_params[0]->Event_title_font_style_in_popup . '$#$' . $Setting_params[0]->Date_color_in_popup . '$#$' . $Setting_params[0]->Date_font_size_in_popup . '$#$' . 
	// 		 $Setting_params[0]->Date_font_family_in_popup . '$#$' . $Setting_params[0]->Date_style_in_popup . '$#$' . $Setting_params[0]->Popup_border_radius . '$#$' . $Setting_params[0]->Image_border_radius . '$#$' . 
	// 		 $Setting_params[0]->Popup_bg_color . '$#$' . $Setting_params[0]->Popup_width . '$#$' . $Setting_params[0]->Popup_height . '$#$' . $Setting_params[0]->Show_the_repeat_rate . '$#$' . 
	// 		 $Setting_params[0]->id . '$#$' . $Setting_params[0]->Image_width . '$#$' . $Setting_params[0]->Image_height;
	// 	die();
	// }

	// add_action( 'wp_ajax_Update_Setting_Click', 'Update_Setting_Click_Callback' );
	// add_action( 'wp_ajax_nopriv_Update_Setting_Click', 'Update_Setting_Click_Callback' );

	// function Update_Setting_Click_Callback()
	// {
	// 	$Updated = sanitize_text_field($_POST['foobar']);
	// 	$Update_settings=explode('$#$',$Updated);
		
	// 	global $wpdb;
	// 	$table_name4 =  $wpdb->prefix . "calendar_other_parameters";

	// 	$wpdb->query($wpdb->prepare("UPDATE $table_name4 set Setting_title=%s, Date_format_in_popup=%s, Event_title_color_in_popup=%s,
	// 								 Event_title_font_size_in_popup=%d, Event_title_font_family_in_popup=%s, Event_title_font_style_in_popup=%s,
	// 								 Date_color_in_popup=%s, Date_font_size_in_popup=%d, Date_font_family_in_popup=%s, Date_style_in_popup=%s,
	// 								 Popup_border_radius=%d, Image_border_radius=%d, Popup_bg_color=%s, Popup_width=%d, Popup_height=%d, Image_width=%s, Image_height=%s, Show_the_repeat_rate=%s
	// 								 WHERE id=%d", $Update_settings[0], $Update_settings[1], $Update_settings[2], $Update_settings[3], 
	// 								 $Update_settings[4], $Update_settings[5], $Update_settings[6], $Update_settings[7], $Update_settings[8], 
	// 								 $Update_settings[9], $Update_settings[10], $Update_settings[11], $Update_settings[12], $Update_settings[13], 
	// 								 $Update_settings[14], $Update_settings[17], $Update_settings[18], $Update_settings[15], $Update_settings[16]));
	// 	die();
	// }

	add_action( 'wp_ajax_Search_Theme_Click', 'Search_Theme_Click_Callback' );
	add_action( 'wp_ajax_nopriv_Search_Theme_Click', 'Search_Theme_Click_Callback' );

	function Search_Theme_Click_Callback()
	{
		$data = sanitize_text_field($_POST['foobar']);

		global $wpdb;
		$table_name1 =  $wpdb->prefix . "calendar_settings";
		$Searched_Theme=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE Theme_Title=%s",$data));

		if(count($Searched_Theme[0]->Theme_Title)!=0)
		{
			echo $Searched_Theme[0]->id . '$#$' . $Searched_Theme[0]->Theme_Title;
		}
		else
		{
			echo "Requested Theme does not exist!";
		}
		die();
	}

	add_action( 'wp_ajax_Search_Setting_Click', 'Search_Setting_Click_Callback' );
	add_action( 'wp_ajax_nopriv_Search_Setting_Click', 'Search_Setting_Click_Callback' );

	function Search_Setting_Click_Callback()
	{
		$data = sanitize_text_field($_POST['foobar']);

		global $wpdb;
		$table_name4 =  $wpdb->prefix . "calendar_other_parameters";
		$Searched_Setting=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE Setting_title=%s",$data));

		if(count($Searched_Setting[0]->Setting_title)!=0)
		{
			echo $Searched_Setting[0]->id . '$#$' . $Searched_Setting[0]->Setting_title;
		}
		else
		{
			echo "Requested Theme does not exist!";
		}
		die();
	}

	add_action( 'wp_ajax_edit_title', 'edit_title' );
	add_action( 'wp_ajax_nopriv_edit_title', 'edit_title' );
	
	function edit_title()
	{
		$id = sanitize_text_field($_POST['x']);
		
	 	global $wpdb;
	 	$table_name2  =  $wpdb->prefix . "add_category";
	 	$id_date= $wpdb->get_results($wpdb->prepare("SELECT * FROM  $table_name2 WHERE id= %d", $id));
	 	
	 	echo $id_date[0]->id.'(5551)'.$id_date[0]->Category_title.'(5551)'.$id_date[0]->Category_color.'(5551)'.$id_date[0]->File.'(5551)'.$id_date[0]->Description.'(5551)'.$id_date[0]->Published;
	 	die();
	}

	add_action( 'wp_ajax_edit_title1', 'edit_title1' );
	add_action( 'wp_ajax_nopriv_edit_title1', 'edit_title1' );
	
	function edit_title1()
	{
		$id = sanitize_text_field($_POST['x']);
		$title = sanitize_text_field($_POST['y']);
		$color = sanitize_text_field($_POST['a']);
		$Description = sanitize_text_field($_POST['b']);
		$Published=sanitize_text_field($_POST['c']);
		if(strlen($id)>0 && strlen($title)>0 && strlen($color)>0 && strlen($Description)>0 && strlen($Published)>0){
			global $wpdb;
		 	$table_name3  =  $wpdb->prefix . "add_category";
		 	$id_date= $wpdb->get_results($wpdb->prepare("SELECT * FROM  $table_name3 WHERE id= %d", $id));
		 	$wpdb->replace( $table_name3, array( 
	                'id' => $id,
					'Category_title' => $title, 
					'Category_color' => $color ,
					'File' => $id_date[0]->File, 
					'Description' => $Description ,
					'Published' => $Published 
			), 
			array( 
		        '%d',
				'%s', 
				'%s', 
				'%s', 
				'%s', 
				'%s', 
				) 
			);
		
		 	$id_date= $wpdb->get_results($wpdb->prepare("SELECT * FROM  $table_name3 WHERE id= %d", $id));
		 	echo $id_date[0]->id.'(5551)'.$id_date[0]->Category_title.'(5551)'.$id_date[0]->Category_color.'(5551)'.$id_date[0]->File.'(5551)'.$id_date[0]->Description.'(5551)'.$id_date[0]->Published;

		 	die();	
		}
		else {
			echo '<h4 class = "error_form_calendar_manager" >* you incorrectly filled out a form </h4>';
		}
	}
	add_action( 'wp_ajax_update_menager1', 'update_menager1' );
	add_action( 'wp_ajax_nopriv_update_menager1', 'update_menager1' );
	
	function update_menager1()
	{

	 	global $wpdb;
	 	
	 	$table_name2  =  $wpdb->prefix . "calendar_manager";
	 	
	 	$id = sanitize_text_field($_POST['x']);
		$Calendar_title = sanitize_text_field($_POST['y']);
		$Default_year = sanitize_text_field($_POST['z']);
		//$a11= strlen(is_int($_POST['z']));
		$Default_month = sanitize_text_field($_POST['a']);
		$Published = sanitize_text_field($_POST['b']);
		
 		if(strlen($id)>0 &&  strlen($Calendar_title)>0 && strlen($Default_year)>0 && strlen($Default_month)>0 && strlen($Published)>0){
		 	
			
		 	$wpdb->replace( $table_name2, array( 
	                'id' => $id,
					'Calendar_title' => $Calendar_title, 
					'Default_year' => $Default_year ,
					'Default_month' => $Default_month ,
					'Published' => $Published ,
			), 
			array( 
		        '%d',
				'%s', 
				'%s', 
				'%s', 
				'%s', 
				) 
			);
		 	
		 	die();
		 }	
	 	else {
			echo '<h4 class = "error_form_calendar_manager" >* you incorrectly filled out a form </h4>';
		}
	}
	
	add_action( 'wp_ajax_update_menager', 'update_menager' );
	add_action( 'wp_ajax_nopriv_update_menager', 'update_menager' );
	
	function update_menager()
	{
		$id=sanitize_text_field($_POST['x']);

	 	global $wpdb;
	 	$table_name2  =  $wpdb->prefix . "calendar_manager";
	 	$id_date= $wpdb->get_results($wpdb->prepare("SELECT * FROM  $table_name2 WHERE id= %d", $id));
	 	
	 	echo $id_date[0]->id.'(5551)'.$id_date[0]->Calendar_title.'(5551)'.$id_date[0]->Default_year.'(5551)'.$id_date[0]->Default_month.'(5551)'.$id_date[0]->Published;
	 	die();
	}

	add_action( 'wp_ajax_update_event', 'update_event' );
	add_action( 'wp_ajax_nopriv_update_event', 'update_event' );
	
	function update_event()
	{
		$id = sanitize_text_field($_POST['x']);

	 	global $wpdb;
	 	$table_name2  =  $wpdb->prefix . "add_an_event";
	 	$id_date= $wpdb->get_results($wpdb->prepare("SELECT * FROM  $table_name2 WHERE id= %d", $id));
	 	
	 	echo $id_date[0]->id.'(5551)'.$id_date[0]->Event_title.'(5551)'.$id_date[0]->Select_category.'(5551)'.$id_date[0]->Data.'(5551)'.$id_date[0]->Time_from.'(5551)'.$id_date[0]->Time_to.'(5551)'.$id_date[0]->File.'(5551)'.$id_date[0]->Note.'(5551)'.$id_date[0]->Repeat_event.'(5551)'.$id_date[0]->Published.'(5551)'.$id_date[0]->CalendarId;
	 	die();
	}
	add_action( 'wp_ajax_update_event1', 'update_event1' );
	add_action( 'wp_ajax_nopriv_update_event1', 'update_event1' );
	function update_event1()
	{
		
		
		$id = sanitize_text_field($_POST['x']);
		$a = sanitize_text_field($_POST['y']);
		$b = sanitize_text_field($_POST['z']);
		$z = sanitize_text_field($_POST['a']);
		$k = sanitize_text_field($_POST['b']);
		$l = sanitize_text_field($_POST['c']);
		$f = sanitize_text_field($_POST['d']);
		$t = sanitize_text_field($_POST['e']);
		$cid = sanitize_text_field($_POST['f']);
		$j = sanitize_text_field($_POST['k']);
		global $wpdb;
	 	$table_name2  =  $wpdb->prefix . "add_an_event";
		$image1 = $wpdb->get_results($wpdb->prepare("SELECT * FROM  $table_name2 WHERE id= %d", $id));

	 	$image = $image1[0]->File;
	 	
		 	$wpdb->replace( $table_name2, array(
	 			'id' => $id, 
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
		 	die();
			
	}
	add_action( 'wp_ajax_edit_set1', 'edit_set1' );
	add_action( 'wp_ajax_nopriv_edit_set1', 'edit_set1' );
	
	function edit_set1(){
		$id = sanitize_text_field($_POST['x']);
		global $wpdb;
	 	$table_name2  =  $wpdb->prefix . "calendar_other_parameters";
	 	$id_date= $wpdb->get_results($wpdb->prepare("SELECT * FROM  $table_name2 WHERE id= %d", $id));
	 	echo  '(8852)'.$id_date[0]->st_JI_setting_title.'(8852)'.$id_date[0]->st_color_header.'(8852)'.$id_date[0]->st_shadow_header.'(8852)'.$id_date[0]->st_size_header.'(8852)'.$id_date[0]->st_famely_header.'(8852)'.$id_date[0]->st_hover_image.'(8852)'.$id_date[0]->st_radius_image.'(8852)'.$id_date[0]->st_border_image.'(8852)'.$id_date[0]->st_width_image.'(8852)'.$id_date[0]->st_height_image.'(8852)'.$id_date[0]->st_br_color_image.'(8852)'.$id_date[0]->st_color_date.'(8852)'.$id_date[0]->st_box_date.'(8852)'.$id_date[0]->st_size_date.'(8852)'.$id_date[0]->st_font_date.'(8852)'.$id_date[0]->st_color_title_ev.'(8852)'.$id_date[0]->st_box_title_ev.'(8852)'.$id_date[0]->st_color_hover_titele_ev.'(8852)'.$id_date[0]->st_size_title_ev.'(8852)'.$id_date[0]->st_famely_title_ev.'(8852)'.$id_date[0]->st_color_desc.'(8852)'.$id_date[0]->st_box_desc.'(8852)'.$id_date[0]->st_size_desc.'(8852)'.$id_date[0]->st_famely_desc.'(8852)'.$id_date[0]->st_size_first_latter.'(8852)'.$id_date[0]->st_background_cont.'(8852)'.$id_date[0]->st_br_width_cont.'(8852)'.$id_date[0]->st_br_color_cont.'(8852)'.$id_date[0]->st_radius_cont.'(8852)'.$id_date[0]->st_width_cont.'(8852)'.$id_date[0]->st_height_cont.'(8852)'.$id_date[0]->st_JI_background_header.'(8852)'.$id_date[0]->st_JI_border_width_header.'(8852)'.$id_date[0]->st_JI_border_color_header.'(8852)'.$id_date[0]->st_JI_radius_header.'(8852)'.$id_date[0]->st_JI_box_header.'(8852)'.$id_date[0]->st_JI_arow_color.'(8852)'.$id_date[0]->st_JI_color_backgr_search.'(8852)'.$id_date[0]->st_JI_color_hover_arow.'(8852)'.$id_date[0]->st_JI_color_text_date_header.'(8852)'.$id_date[0]->st_JI_color_backgr_date.'(8852)'.$id_date[0]->st_size_arow_header.'(8852)'.$id_date[0]->st_JI_background_cont_page.'(8852)'.$id_date[0]->st_JI_border_width_cont_page.'(8852)'.$id_date[0]->st_JI_border_color_cont_page.'(8852)'.$id_date[0]->st_JI_radius_cont_page.'(8852)'.$id;
	
		die();
	}

	add_action( 'wp_ajax_edit_set2', 'edit_set2' );
	add_action( 'wp_ajax_nopriv_edit_set2', 'edit_set2' );
	
	function edit_set2(){
		$sett1 = sanitize_text_field($_POST['x']);
		$sett = explode('(77777)', $sett1);
		if($sett[5] =='scale+'){
			$st_hover_image = '<style>.JI_calendar1:hover .JI_image_for_event{-webkit-transform: scale(1.1); -ms-transform: scale(1.1); transform: scale(1.1) ; border-radius:20px;}</style>';
		}else if($sett[5] =='scale-'){
		    $st_hover_image = '<style>.JI_calendar1:hover .JI_image_for_event{-webkit-transform: scale(0.9); -ms-transform: scale(0.9); transform: scale(0.9) ; border-radius:20px;}</style>';
		}else if($sett[5] =='opasity'){
			$st_hover_image = '<style>.JI_calendar1:hover .JI_image_for_event{opacity:0.6;}</style>';
		}else if($sett[5]=='rotate'){
			$st_hover_image = '<style>.JI_calendar1:hover .JI_image_for_event{transform:rotate(20deg);border-radius:100px;}</style>';
		}else if($sett[5] =='translate'){
			$st_hover_image = '<style>.JI_calendar1:hover .JI_image_for_event{ transform:translate(0px,-10px);}</style>';
		}else if($sett[5] =='none'){
			$st_hover_image = '';
		}  
		global $wpdb;
	 	$table_name2  =  $wpdb->prefix . "calendar_other_parameters";
	 	if(strlen($sett[46])>0){
		 	$wpdb->replace( $table_name2, array(
		 			'id' => $sett[46], 
		 			'st_JI_setting_title' => $sett[0],
		 			'st_color_header'=> $sett[1],
		 			'st_shadow_header' => $sett[2],
		 			'st_size_header'=>$sett[3],
		 			'st_famely_header'=>$sett[4],
		 			'st_hover_image'=>$st_hover_image,
		 			'st_radius_image'=>$sett[6],
		 			'st_border_image'=>$sett[7],
		 			'st_width_image'=>$sett[8],
		 			'st_height_image'=>$sett[9],
		 			'st_br_color_image'=>$sett[10],
		 			'st_color_date'=>$sett[11],
		 			'st_box_date'=>$sett[12],
		 			'st_size_date'=>$sett[13],
		 			'st_font_date'=>$sett[14],
		 			'st_color_title_ev'=>$sett[15],
		 			'st_box_title_ev'=>$sett[16],
		 			'st_color_hover_titele_ev'=>$sett[17],
		 			'st_size_title_ev'=>$sett[18],
		 			'st_famely_title_ev'=>$sett[19],
		 			'st_color_desc'=>$sett[20],
		 			'st_box_desc'=>$sett[21],
		 			'st_size_desc'=>$sett[22],
		 			'st_famely_desc'=>$sett[23],
		 			'st_size_first_latter'=>$sett[24],
		 			'st_background_cont'=>$sett[25],
		 			'st_br_width_cont'=>$sett[26],
		 			'st_br_color_cont'=>$sett[27],
		 			'st_radius_cont'=>$sett[28],
		 			'st_width_cont'=>$sett[29],
		 			'st_height_cont'=>$sett[30],
		 			'st_JI_background_header'=>$sett[31],
		 			'st_JI_border_width_header'=>$sett[32],
		 			'st_JI_border_color_header'=>$sett[33],
		 			'st_JI_radius_header'=>$sett[34],
		 			'st_JI_box_header'=>$sett[35],
		 			'st_JI_arow_color'=>$sett[36],
		 			'st_JI_color_backgr_search'=>$sett[37],
		 			'st_JI_color_hover_arow'=>$sett[38],
		 			'st_JI_color_text_date_header'=>$sett[39],
		 			'st_JI_color_backgr_date'=>$sett[40],
		 			'st_size_arow_header'=>$sett[41],
		 			'st_JI_background_cont_page'=>$sett[42],
		 			'st_JI_border_width_cont_page'=>$sett[43],
		 			'st_JI_border_color_cont_page'=>$sett[44],
		 			'st_JI_radius_cont_page'=>$sett[45],
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
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 	'%s',
		 			 )
			 	);
			}
		echo 'ok';
	die();
	}

	add_action( 'wp_ajax_My_event_day', 'My_event_day' );
	add_action( 'wp_ajax_nopriv_My_event_day', 'My_event_day' );
	
	function My_event_day(){
		$title = $_POST['x'];
		global $wpdb;
		 $table_name1 =  $wpdb->prefix ."add_an_event";
		$JI_demo = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE Event_title = %s ",  $title));
		echo $JI_demo[0]->Event_title.(999999).$JI_demo[0]->Data.'       '.$JI_demo[0]->Time_from.'-'.$JI_demo[0]->Time_to.(999999).$JI_demo[0]->Note;
		die();
	}
	add_action( 'wp_ajax_W_id', 'W_id' );
	add_action( 'wp_ajax_nopriv_W_id', 'W_id' );
	
	function W_id(){
		$title = $_POST['x'];
			global $wpdb;
 		 	$table_name6 =  $wpdb->prefix . "widget_id";
 		 	$table_name4 =  $wpdb->prefix . "calendar_other_parameters";
			$JI_demo_ev  = $wpdb->get_results($wpdb->prepare("SELECT id FROM $table_name4 WHERE st_JI_setting_title = %s ",$title ));
			$id = 1;
			$wpdb->replace( $table_name6, array( 
	                'id' => $id,
					'w_id' => $JI_demo_ev[0]->id, 
					
			), 
			array( 
		        '%d',
				'%s', 
				) 
			);
			echo  $JI_demo_ev[0]->w_id;
			die();
	}
	add_action( 'wp_ajax_Event_day_select', 'Event_day_select' );
	add_action( 'wp_ajax_nopriv_Event_day_select', 'Event_day_select' );
	
	function Event_day_select(){
		$arrow = $_POST['x'];
		$date = $_POST['y'];
			global $wpdb;
 		 	$table_name1 =  $wpdb->prefix ."add_an_event";
			$JI_demo1  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE Data = %s ",$date ));
			$JI_demo2  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE ORDER BY id > %d DESC LIMIT 1",0));
			if($arrow =='arrow_left' ){
				if($JI_demo1[0]->id==1){
					
					$JI_demo3  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE id = %d ", $JI_demo2[0]->id ));
					$JI_demo = $JI_demo3[0]->Data;
				}else{
					$id = $JI_demo1[0]->id;
					$JI_demo3  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE id = %d ",$id-1 ));
					$JI_demo = $JI_demo3[0]->Data;
				}
				
			}else if ($arrow =='arrow_right'  ) {
				if($JI_demo1[0]->id == $JI_demo2[0]->id){
					
					$JI_demo3  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE id = %d ",1 ));
					$JI_demo = $JI_demo3[0]->Data;
				}else{
				$id = $JI_demo1[0]->id;
				$JI_demo3  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE id = %d ",$id+1 ));
				$JI_demo = $JI_demo3[0]->Data;
				}
			}
			echo '(52525)'.$JI_demo;
			die();
	}

?>