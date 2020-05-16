<?php

	global $wpdb;

		$table_name  =  $wpdb->prefix . "calendar_manager";
		$table_name1 =  $wpdb->prefix . "calendar_settings";
		$table_name2 =  $wpdb->prefix . "add_an_event";
		$table_name3 =  $wpdb->prefix . "add_category";
		$table_name4 =  $wpdb->prefix . "calendar_other_parameters";
		$table_name5 =  $wpdb->prefix . "font_family";
		$table_name6 =  $wpdb->prefix . "widget_id";
	
		if( $wpdb->get_var('SHOW TABLES LIKE' . $table_name) != $table_name )
		{
			$sql = 'CREATE TABLE ' .$table_name . '(
				id INTEGER(10) UNSIGNED AUTO_INCREMENT,
				Calendar_title VARCHAR(255) NOT NULL,
				Default_year INTEGER(10) NOT NULL,
				Default_month VARCHAR(255) NOT NULL,
				Published VARCHAR(255) NOT NULL,
				PRIMARY KEY  (id) )';

			$sql1 = 'CREATE TABLE ' .$table_name1 . '(
				id INTEGER(10) UNSIGNED AUTO_INCREMENT,
				Name_of_theme VARCHAR(255) NOT NULL,
				Calendar_Width INTEGER(10) UNSIGNED NOT NULL,
				Calendar_Height INTEGER(10) UNSIGNED NOT NULL,
				Main_border_color VARCHAR(255) NOT NULL,
				Main_border_radius INTEGER(10) NOT NULL,
				Main_border_width INTEGER(10) NOT NULL,
				Current_month_height INTEGER(10) UNSIGNED NOT NULL,
				Current_month_border_width INTEGER(10) UNSIGNED NOT NULL,
				Current_month_border_radius INTEGER(10) UNSIGNED NOT NULL,
				Current_month_border_color VARCHAR(255) NOT NULL,
				Current_month_background_color VARCHAR(255) NOT NULL,
				Current_month_color VARCHAR(255) NOT NULL,
				Current_month_font_family VARCHAR(255) NOT NULL,
				Current_month_font_size INTEGER(10) UNSIGNED NOT NULL,
				Arrow_size INTEGER(10) UNSIGNED NOT NULL,
				Arrow_border_width INTEGER(10) UNSIGNED NOT NULL,
				Arrow_border_radius INTEGER(10) UNSIGNED NOT NULL,
				Arrow_border_color VARCHAR(255) NOT NULL,
				Arrow_background_color VARCHAR(255) NOT NULL,
				Arrow_color VARCHAR(255) NOT NULL,
				Calendar_title_height INTEGER(10) UNSIGNED NOT NULL,
				Calendar_title_border_width INTEGER(10) UNSIGNED NOT NULL,
				Calendar_title_border_radius INTEGER(10) UNSIGNED NOT NULL,
				Calendar_title_border_color VARCHAR(255) NOT NULL,
				Calendar_title_background_color VARCHAR(255) NOT NULL,
				Calendar_title_color VARCHAR(255) NOT NULL,
				Calendar_title_font_family VARCHAR(255) NOT NULL,
				Calendar_title_font_size INTEGER(10) UNSIGNED NOT NULL,
				Weekday_names_height INTEGER(10) UNSIGNED NOT NULL,
				Weekday_names_border_width INTEGER(10) UNSIGNED NOT NULL,
				Weekday_names_border_radius INTEGER(10) UNSIGNED NOT NULL,
				Weekday_names_border_color VARCHAR(255) NOT NULL,
				Font_size_of_weekday_names INTEGER(10) UNSIGNED NOT NULL,
				Color_of_weekday_names VARCHAR(255) NOT NULL,
				Bg_color_of_weekday_names VARCHAR(255) NOT NULL,
				Saturday_border_width INTEGER(10) UNSIGNED NOT NULL,
				Saturday_border_radius INTEGER(10) UNSIGNED NOT NULL,
				Saturday_border_color VARCHAR(255) NOT NULL,
				Saturday_font_size INTEGER(10) UNSIGNED NOT NULL,
				Saturday_bg_color VARCHAR(255) NOT NULL,
				Saturday_color VARCHAR(255) NOT NULL,
				Sunday_border_width INTEGER(10) UNSIGNED NOT NULL,
				Sunday_border_radius INTEGER(10) UNSIGNED NOT NULL,
				Sunday_border_color VARCHAR(255) NOT NULL,
				Sunday_font_size INTEGER(10) UNSIGNED NOT NULL,
				Sunday_bg_color VARCHAR(255) NOT NULL,
				Sunday_color VARCHAR(255) NOT NULL,
				Bg_color VARCHAR(255) NOT NULL,
				Current_day_text_color VARCHAR(255) NOT NULL,
				Current_day_background_color VARCHAR(255) NOT NULL,
				Current_day_font_size INTEGER(10) UNSIGNED NOT NULL,
				Current_day_border_width INTEGER(10) UNSIGNED NOT NULL,
				Current_day_border_radius INTEGER(10) UNSIGNED NOT NULL,
				Current_day_border_color VARCHAR(255) NOT NULL,
				Cell_text_color_without_events VARCHAR(255) NOT NULL,
				Cell_background_color_without_events VARCHAR(255) NOT NULL,
				Cell_font_size_without_events INTEGER(10) UNSIGNED NOT NULL,
				Cell_border_width_without_event INTEGER(10) UNSIGNED NOT NULL,
				Cell_border_radius_without_event INTEGER(10) UNSIGNED NOT NULL,
				Cell_border_color_without_event VARCHAR(255) NOT NULL,
				Cell_text_color_with_events VARCHAR(255) NOT NULL,
				Cell_bg_color_with_events VARCHAR(255) NOT NULL,
				Cell_font_size_with_events INTEGER(10) UNSIGNED NOT NULL,
				Cell_border_width_with_event INTEGER(10) UNSIGNED NOT NULL,
				Cell_border_radius_with_event INTEGER(10) UNSIGNED NOT NULL,
				Cell_border_color_with_event VARCHAR(255) NOT NULL,
				Sundays_text_color VARCHAR(255) NOT NULL,
				Sundays_bg_color VARCHAR(255) NOT NULL,
				Sundays_font_size INTEGER(10) UNSIGNED NOT NULL,
				Sundays_border_width INTEGER(10) UNSIGNED NOT NULL,
				Sundays_border_radius INTEGER(10) UNSIGNED NOT NULL,
				Sundays_border_color VARCHAR(255) NOT NULL,
				Saturdays_text_color VARCHAR(255) NOT NULL,
				Saturdays_bg_color VARCHAR(255) NOT NULL,
				Saturdays_font_size INTEGER(10) UNSIGNED NOT NULL,
				Saturdays_border_width INTEGER(10) UNSIGNED NOT NULL,
				Saturdays_border_radius INTEGER(10) UNSIGNED NOT NULL,
				Saturdays_border_color VARCHAR(255) NOT NULL,
				Hover_text_color VARCHAR(255) NOT NULL,
				Hover_bg_color VARCHAR(255) NOT NULL,
				Hover_border_color VARCHAR(255) NOT NULL,
				PRIMARY KEY  (id) )';

			$sql2 = 'CREATE TABLE ' .$table_name2 . '(
				id INTEGER(10) UNSIGNED AUTO_INCREMENT,
				Event_title VARCHAR(255) NOT NULL,
				Select_category VARCHAR(255) NOT NULL,
				Data VARCHAR(255) NOT NULL,
				Time_from VARCHAR(255) NOT NULL,
				Time_to VARCHAR(255) NOT NULL,
				File VARCHAR(255) NOT NULL,
				Note VARCHAR(255) NOT NULL,
				Repeat_event VARCHAR(255) NOT NULL,
				Published VARCHAR(255) NOT NULL,
				CalendarId INTEGER(10) NOT NULL,
				PRIMARY KEY  (id) )';

			$sql3 = 'CREATE TABLE ' .$table_name3 . '(
				id INTEGER(10) UNSIGNED AUTO_INCREMENT,
				Category_title VARCHAR(255) NOT NULL,
				Category_color VARCHAR(255) NOT NULL,
				File VARCHAR(255) NOT NULL,
				Description VARCHAR(255) NOT NULL,
				Published VARCHAR(255) NOT NULL,
				PRIMARY KEY  (id) )';
			
			$sql4 = 'CREATE TABLE ' .$table_name4 . '(
				id INTEGER(10) UNSIGNED AUTO_INCREMENT,
				st_JI_setting_title VARCHAR(255) NOT NULL,
				st_color_header VARCHAR(255) NOT NULL,
				st_shadow_header VARCHAR(255) NOT NULL,
				st_size_header VARCHAR(255) NOT NULL,
				st_famely_header VARCHAR(255) NOT NULL,
				st_hover_image VARCHAR(255) NOT NULL,
				st_radius_image VARCHAR(255) NOT NULL,
				st_border_image VARCHAR(255) NOT NULL,
				st_width_image VARCHAR(255) NOT NULL,
				st_height_image VARCHAR(255) NOT NULL,
				st_br_color_image VARCHAR(255) NOT NULL,
				st_color_date VARCHAR(255) NOT NULL,
				st_box_date VARCHAR(255) NOT NULL,
				st_size_date VARCHAR(255) NOT NULL,
				st_font_date VARCHAR(255) NOT NULL,
				st_color_title_ev VARCHAR(255) NOT NULL,
				st_box_title_ev VARCHAR(255) NOT NULL,
				st_color_hover_titele_ev VARCHAR(255) NOT NULL,
				st_size_title_ev VARCHAR(255) NOT NULL,
				st_famely_title_ev VARCHAR(255) NOT NULL,
				st_color_desc VARCHAR(255) NOT NULL,
				st_box_desc VARCHAR(255) NOT NULL,
				st_size_desc VARCHAR(255) NOT NULL,
				st_famely_desc VARCHAR(255) NOT NULL,
				st_size_first_latter VARCHAR(255) NOT NULL,
				st_background_cont VARCHAR(255) NOT NULL,
				st_br_width_cont VARCHAR(255) NOT NULL,
				st_br_color_cont VARCHAR(255) NOT NULL,
				st_radius_cont VARCHAR(255) NOT NULL,
				st_width_cont VARCHAR(255) NOT NULL,
				st_height_cont VARCHAR(255) NOT NULL,
				st_JI_background_header VARCHAR(255) NOT NULL,
				st_JI_border_width_header VARCHAR(255) NOT NULL,
				st_JI_border_color_header VARCHAR(255) NOT NULL,
				st_JI_radius_header VARCHAR(255) NOT NULL,
				st_JI_box_header VARCHAR(255) NOT NULL,
				st_JI_arow_color VARCHAR(255) NOT NULL,
				st_JI_color_backgr_search VARCHAR(255) NOT NULL,
				st_JI_color_hover_arow VARCHAR(255) NOT NULL,
				st_JI_color_text_date_header VARCHAR(255) NOT NULL,
				st_JI_color_backgr_date VARCHAR(255) NOT NULL,
			 	st_size_arow_header VARCHAR(255) NOT NULL,
			 	st_JI_background_cont_page VARCHAR(255) NOT NULL,
			 	st_JI_border_width_cont_page VARCHAR(255) NOT NULL,
			 	st_JI_border_color_cont_page VARCHAR(255) NOT NULL,
			 	st_JI_radius_cont_page VARCHAR(255) NOT NULL,
				PRIMARY KEY  (id) )';

				$sql5 = 'CREATE TABLE ' .$table_name5 . '(
				id INTEGER(10) UNSIGNED AUTO_INCREMENT,
				Font_family VARCHAR(255) NOT NULL,
				PRIMARY KEY  (id) )';

				$sql6 = 'CREATE TABLE ' .$table_name6 . '(
				id INTEGER(10) UNSIGNED AUTO_INCREMENT,
				w_id VARCHAR(255) NOT NULL,
				PRIMARY KEY  (id) )';

			require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
			dbDelta($sql);
			dbDelta($sql1);
			dbDelta($sql2);
			dbDelta($sql3);
			dbDelta($sql4);
			dbDelta($sql5);
			dbDelta($sql6);
			
			DefaultData();
		}
		function DefaultData()
		{

		global $wpdb;

			$table_name1 =  $wpdb->prefix . "calendar_settings";

			$wpdb->query($wpdb->prepare("INSERT INTO $table_name1 (id, Name_of_theme, Calendar_Width, Calendar_Height, Main_border_color, Main_border_radius, Main_border_width, Current_month_height, 
							Current_month_border_width, Current_month_border_radius, Current_month_border_color, Current_month_background_color, Current_month_color, Current_month_font_family, 
							Current_month_font_size, Arrow_size, Arrow_border_width, Arrow_border_radius, Arrow_border_color, Arrow_background_color, Arrow_color, Calendar_title_height, 
							Calendar_title_border_width, Calendar_title_border_radius, Calendar_title_border_color, Calendar_title_background_color, Calendar_title_color, 
							Calendar_title_font_family, Calendar_title_font_size, Weekday_names_height, Weekday_names_border_width, Weekday_names_border_radius, Weekday_names_border_color, 
							Font_size_of_weekday_names, Color_of_weekday_names, Bg_color_of_weekday_names, Saturday_border_width, Saturday_border_radius, Saturday_border_color,
							Saturday_font_size, Saturday_bg_color, Saturday_color, Sunday_border_width, Sunday_border_radius, Sunday_border_color, Sunday_font_size, Sunday_bg_color, 
							Sunday_color, Bg_color, Current_day_text_color, Current_day_background_color, Current_day_font_size, Current_day_border_width, Current_day_border_radius, 
							Current_day_border_color, Cell_text_color_without_events, Cell_background_color_without_events, Cell_font_size_without_events, Cell_border_width_without_event, 
							Cell_border_radius_without_event, Cell_border_color_without_event, Cell_text_color_with_events, Cell_bg_color_with_events, Cell_font_size_with_events, 
							Cell_border_width_with_event, Cell_border_radius_with_event, Cell_border_color_with_event, Sundays_text_color, Sundays_bg_color, Sundays_font_size, 
							Sundays_border_width, Sundays_border_radius, Sundays_border_color, Saturdays_text_color, Saturdays_bg_color, Saturdays_font_size, Saturdays_border_width, 
							Saturdays_border_radius, Saturdays_border_color, Hover_text_color, Hover_bg_color, Hover_border_color)
							VALUES (%d, %s, %d, %d, %s, %d, %d, %d, %d, %d, %s, %s, %s, %s, %d, %d, %d, %d, %s, %s, %s, %d, %d, %d, %s, %s, %s, %s, %d, %d, %d, %d, %s, %d, %s, %s, %d, %d, %s, %d,
							%s, %s, %d, %d, %s, %d, %s, %s, %s, %s, %s, %d, %d, %d, %s, %s, %s, %d, %d, %d, %s, %s, %s, %d, %d, %d, %s, %s, %s, %d, %d, %d, %s, %s, %s, %d, %d, %d, %s, %s, 
							%s, %s)", 
							'', 'Green Theme', '280', '292', '#00ff00', '15', '4', '30', '2', '11', '#00ae57', '#00ae57', '#ffffff', 'Arial', '27', '43', '0', '10', '#00ff00', 
							'#00ae57', '#ffffff', '33', '0', '0', '#c0c0c0', '#008040', '#00dd00', 'Abadi MT Condensed Light', '18', '27', '0', '7', '#00ae57', '13', '#ffffff', 
							'#008040', '0', '0', '#ffffff', '13', '#008040', '#ffffff', '0', '7', '#ffff00', '13', '#009b61', '#ffffff', '#008040', '#1cff1c', '#008040', '15', 
							'0', '16', '#008040', '#ffffff', '#00c100', '15', '0', '5', '#ff8040', '#008040', '#ffffff', '16', '2', '6', '#008040', '#ff8000', '#00b000', '16', 
							'0', '5', '#c0c0c0', '#ffffff', '#00c100', '15', '0', '5', '#ff8040', '#ffffff', '#00c100', '#ff8040' ));

			$wpdb->query($wpdb->prepare("INSERT INTO $table_name1 (id, Name_of_theme, Calendar_Width, Calendar_Height, Main_border_color, Main_border_radius, Main_border_width, Current_month_height, 
							Current_month_border_width, Current_month_border_radius, Current_month_border_color, Current_month_background_color, Current_month_color, Current_month_font_family, 
							Current_month_font_size, Arrow_size, Arrow_border_width, Arrow_border_radius, Arrow_border_color, Arrow_background_color, Arrow_color, Calendar_title_height, 
							Calendar_title_border_width, Calendar_title_border_radius, Calendar_title_border_color, Calendar_title_background_color, Calendar_title_color, 
							Calendar_title_font_family, Calendar_title_font_size, Weekday_names_height, Weekday_names_border_width, Weekday_names_border_radius, Weekday_names_border_color, 
							Font_size_of_weekday_names, Color_of_weekday_names, Bg_color_of_weekday_names, Saturday_border_width, Saturday_border_radius, Saturday_border_color,
							Saturday_font_size, Saturday_bg_color, Saturday_color, Sunday_border_width, Sunday_border_radius, Sunday_border_color, Sunday_font_size, Sunday_bg_color, 
							Sunday_color, Bg_color, Current_day_text_color, Current_day_background_color, Current_day_font_size, Current_day_border_width, Current_day_border_radius, 
							Current_day_border_color, Cell_text_color_without_events, Cell_background_color_without_events, Cell_font_size_without_events, Cell_border_width_without_event, 
							Cell_border_radius_without_event, Cell_border_color_without_event, Cell_text_color_with_events, Cell_bg_color_with_events, Cell_font_size_with_events, 
							Cell_border_width_with_event, Cell_border_radius_with_event, Cell_border_color_with_event, Sundays_text_color, Sundays_bg_color, Sundays_font_size, 
							Sundays_border_width, Sundays_border_radius, Sundays_border_color, Saturdays_text_color, Saturdays_bg_color, Saturdays_font_size, Saturdays_border_width, 
							Saturdays_border_radius, Saturdays_border_color, Hover_text_color, Hover_bg_color, Hover_border_color)
							VALUES (%d, %s, %d, %d, %s, %d, %d, %d, %d, %d, %s, %s, %s, %s, %d, %d, %d, %d, %s, %s, %s, %d, %d, %d, %s, %s, %s, %s, %d, %d, %d, %d, %s, %d, %s, %s, %d, %d, %s, %d,
							%s, %s, %d, %d, %s, %d, %s, %s, %s, %s, %s, %d, %d, %d, %s, %s, %s, %d, %d, %d, %s, %s, %s, %d, %d, %d, %s, %s, %s, %d, %d, %d, %s, %s, %s, %d, %d, %d, %s, %s, 
							%s, %s)", 
							'', 'Violet Theme', '280', '292', '#ffffff', '10', '1', '30', '2', '7', '#ffffff', '#ffffff', '#e1c4ff', 'Impact', '17', '30', '0', '0', '#e1c4ff', 
							'#ffffff', '#e1c4ff', '25', '1', '7', '#e1c4ff', '#e1c4ff', '#400040', 'Impact', '16', '25', '1', '48', '#ffffff', '13', '#400040', '#e1c4ff', '1', 
							'48', '#ffffff', '13', '#e1c4ff', '#400040', '1', '79', '#400040', '13', '#400040', '#e1c4ff', '#ffffff', '#e1c4ff', '#400040', '13', '0', '44', 
							'#00ff00', '#400040', '#e1c4ff', '13', '0', '44', '#00ff00', '#400040', '#e1c4ff', '13', '0', '44', '#00ff00', '#ffffff', '#400040', '13', '0', '94', 
							'#00ff00', '#400040', '#e1c4ff', '13', '0', '145', '#00ff00', '#400040', '#e1c4ff', '#00ff00' ));
			$wpdb->query($wpdb->prepare("INSERT INTO $table_name1 (id, Name_of_theme, Calendar_Width, Calendar_Height, Main_border_color, Main_border_radius, Main_border_width, Current_month_height, 
							Current_month_border_width, Current_month_border_radius, Current_month_border_color, Current_month_background_color, Current_month_color, Current_month_font_family, 
							Current_month_font_size, Arrow_size, Arrow_border_width, Arrow_border_radius, Arrow_border_color, Arrow_background_color, Arrow_color, Calendar_title_height, 
							Calendar_title_border_width, Calendar_title_border_radius, Calendar_title_border_color, Calendar_title_background_color, Calendar_title_color, 
							Calendar_title_font_family, Calendar_title_font_size, Weekday_names_height, Weekday_names_border_width, Weekday_names_border_radius, Weekday_names_border_color, 
							Font_size_of_weekday_names, Color_of_weekday_names, Bg_color_of_weekday_names, Saturday_border_width, Saturday_border_radius, Saturday_border_color,
							Saturday_font_size, Saturday_bg_color, Saturday_color, Sunday_border_width, Sunday_border_radius, Sunday_border_color, Sunday_font_size, Sunday_bg_color, 
							Sunday_color, Bg_color, Current_day_text_color, Current_day_background_color, Current_day_font_size, Current_day_border_width, Current_day_border_radius, 
							Current_day_border_color, Cell_text_color_without_events, Cell_background_color_without_events, Cell_font_size_without_events, Cell_border_width_without_event, 
							Cell_border_radius_without_event, Cell_border_color_without_event, Cell_text_color_with_events, Cell_bg_color_with_events, Cell_font_size_with_events, 
							Cell_border_width_with_event, Cell_border_radius_with_event, Cell_border_color_with_event, Sundays_text_color, Sundays_bg_color, Sundays_font_size, 
							Sundays_border_width, Sundays_border_radius, Sundays_border_color, Saturdays_text_color, Saturdays_bg_color, Saturdays_font_size, Saturdays_border_width, 
							Saturdays_border_radius, Saturdays_border_color, Hover_text_color, Hover_bg_color, Hover_border_color)
							VALUES (%d, %s, %d, %d, %s, %d, %d, %d, %d, %d, %s, %s, %s, %s, %d, %d, %d, %d, %s, %s, %s, %d, %d, %d, %s, %s, %s, %s, %d, %d, %d, %d, %s, %d, %s, %s, %d, %d, %s, %d,
							%s, %s, %d, %d, %s, %d, %s, %s, %s, %s, %s, %d, %d, %d, %s, %s, %s, %d, %d, %d, %s, %s, %s, %d, %d, %d, %s, %s, %s, %d, %d, %d, %s, %s, %s, %d, %d, %d, %s, %s, 
							%s, %s)", 
							'', 'Orange Theme', '280', '292', '#ff7b3c', '15', '1', '37', '1', '5', '#ff7b3c', '#ca4200', '#ffffff', 'Gisha', '18', '30', '2', '5', '#ca4200', 
							'#ca4200', '#ffffff', '33', '0', '5', '#ca4200', '#ff8040', '#ca4200', 'Abadi MT Condensed Light', '15', '32', '0', '5', '#ff8040', '14', '#ff8040', 
							'#ca4200', '0', '5', '#ff8040', '14', '#ca4200', '#ff8040', '0', '5', '#ff8040', '14', '#ca4200', '#ff8040', '#ff8040', '#ca4200', '#ffe4ca', '14', 
							'0', '0', '#54c587', '#ffffff', '#ff8040', '14', '0', '0', '#008080', '#ff8040', '#ca4200', '17', '0', '3', '#ffff00', '#ca4200', '#ff8040', '14', 
							'0', '0', '#ca4200', '#ffffff', '#ff8040', '14', '0', '164', '#008080', '#ffffff', '#ff8040', '#008080' ));

							

											
							$table_name5 =  $wpdb->prefix . "font_family";
							$family = array('Abadi MT Condensed Light','Aharoni','Aldhabi','Andalus','Angsana New',' AngsanaUPC','Aparajita','Arabic Typesetting','Arial','Arial Black',
								'Batang','BatangChe','Browallia New','BrowalliaUPC','Calibri','Calibri Light','Calisto MT','Cambria','Candara','Century Gothic','Comic Sans MS','Consolas',
								'Constantia','Copperplate Gothic','Copperplate Gothic Light','Corbel','Cordia New','CordiaUPC','Courier New','DaunPenh','David','DFKai-SB','DilleniaUPC',
								'DokChampa','Dotum','DotumChe','Ebrima','Estrangelo Edessa','EucrosiaUPC','Euphemia','FangSong','Franklin Gothic Medium','FrankRuehl','FreesiaUPC','Gabriola',
								'Gadugi','Gautami','Georgia','Gisha','Gulim','GulimChe','Gungsuh','GungsuhChe','Impact','IrisUPC','Iskoola Pota','JasmineUPC','KaiTi','Kalinga','Kartika',
								'Khmer UI','KodchiangUPC','Kokila','Lao UI','Latha','Leelawadee','Levenim MT','LilyUPC','Lucida Console','Lucida Handwriting Italic','Lucida Sans Unicode',
								'Malgun Gothic','Mangal','Manny ITC','Marlett','Meiryo','Meiryo UI','Microsoft Himalaya','Microsoft JhengHei','Microsoft JhengHei UI','Microsoft New Tai Lue',
								'Microsoft PhagsPa','Microsoft Sans Serif','Microsoft Tai Le','Microsoft Uighur','Microsoft YaHei','Microsoft YaHei UI','Microsoft Yi Baiti','MingLiU_HKSCS',
								'MingLiU_HKSCS-ExtB','Miriam','Mongolian Baiti','MoolBoran','MS UI Gothic','MV Boli','Myanmar Text','Narkisim','Nirmala UI','News Gothic MT','NSimSun','Nyala',
								'Palatino Linotype','Plantagenet Cherokee','Raavi','Rod','Sakkal Majalla','Segoe Print','Segoe Script','Segoe UI Symbol','Shonar Bangla','Shruti','SimHei','SimKai',
								'Simplified Arabic','SimSun','SimSun-ExtB','Sylfaen','Tahoma','Times New Roman','Traditional Arabic','Trebuchet MS','Tunga','Utsaah','Vani','Vijaya');
							foreach ($family as $font_family) {
						
					
								$wpdb->query($wpdb->prepare("INSERT INTO $table_name5 (id, Font_family) VALUES (%d, %s)",  '', $font_family));
							}
							$table_name4 =  $wpdb->prefix . "calendar_other_parameters";
							$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id,st_JI_setting_title,st_color_header,st_shadow_header,st_size_header,st_famely_header,st_hover_image,st_radius_image,st_border_image,st_width_image,st_height_image,
													st_br_color_image,st_color_date,st_box_date,st_size_date,st_font_date,st_color_title_ev,st_box_title_ev,st_color_hover_titele_ev,st_size_title_ev,st_famely_title_ev,st_color_desc,st_box_desc,
													st_size_desc,st_famely_desc,st_size_first_latter,st_background_cont,st_br_width_cont,st_br_color_cont,st_radius_cont,st_width_cont,st_height_cont,st_JI_background_header,st_JI_border_width_header,
													st_JI_border_color_header,st_JI_radius_header,st_JI_box_header,st_JI_arow_color,st_JI_color_backgr_search,st_JI_color_hover_arow,st_JI_color_text_date_header,st_JI_color_backgr_date,
													st_size_arow_header,st_JI_background_cont_page,st_JI_border_width_cont_page,st_JI_border_color_cont_page,st_JI_radius_cont_page)
													VALUES (%d,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)",
													'','Orange Popup','#ff8000','1px 1px #000000','16px','MV Boli','','13px','1px','218px','200px','#e9e9e9','#ff0000','1px 1px #000000','12px',
													'Abadi MT Condensed Light','#ff8000','2px 1px #ffae88','#dd4800','21px','Comic Sans MS','#575757','0px 1px #000000','14px','Abadi MT Condensed Light',
													'20px','#ffffff','1px','#ff8000','11px','220px','450px','#ff8000','0px','#ffffff','11px','#974b00','#ffffff','#ffddcc',
													'#ff8000','#ff8000','#ffddcc','20px','#ffffff','1px','#ff8000','5px'));
		
				
							$table_name6 =  $wpdb->prefix . "widget_id";
							$wpdb->query($wpdb->prepare("INSERT INTO $table_name6 (id,w_id)VALUES (%d,%s)", '','1'));				


		}

		
		
?>