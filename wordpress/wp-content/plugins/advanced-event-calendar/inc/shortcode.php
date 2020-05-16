<?php

function adv_event_calendar_shortcode($atts){
	extract( shortcode_atts( array(
		'category' => '',
        'appear' => 'month'
	), $atts) );
	
    $query = new WP_Query(
        array('posts_per_page' => '-1', 'post_type' => 'event-calendar', 'event_cat' => $category)
        );		
		
		
	$output = '
		<script>
			jQuery(document).ready(function() {
				jQuery("#calendar").fullCalendar({
					header: {
						left: "prev,next today",
						center: "title",
						right: "month,agendaWeek,agendaDay"
					},
                    defaultView: "'.$appear.'",


	';
    
    $output.='
                    buttonText : {
                        today:    "today",
                        month:    "month",
                        week:     "week",
                        day:      "day"
                    }, 
                    allDayText: "all-day",
    ';
    
    $output.='monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],';
    
    
    $output.='dayNamesShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],';
  
    
    $output.='dayNames: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],';
    
    
    $output.='		defaultDate: "'.date('Y').'-'.date('m').'-'.date('d').'",
					editable: false,
					eventLimit: true,
					events: [	';
					
					
	while($query->have_posts()) : $query->the_post();
		$ids = get_the_ID();
		
		$adv_event_start_date = get_post_meta($ids, 'adv_event_start_date', true); 
		$adv_event_end_date = get_post_meta($ids, 'adv_event_end_date', true); 
		$adv_event_start_time = get_post_meta($ids, 'adv_event_start_time', true);
		$adv_event_end_time = get_post_meta($ids, 'adv_event_end_time', true);
		$adv_event_color = get_post_meta($ids, 'adv_event_color', true);
		$adv_event_link = get_post_meta($ids, 'adv_event_link', true);
		$adv_event_modal = get_post_meta($ids, 'adv_event_modal', true);
		$font_size = get_option( 'wpt_font_size' );
		$font_weight = get_option( 'wpt_font_weight' );
		$font_style = get_option( 'wpt_font_style' );
		$arrow_button_color = get_option( 'wpt_arrow_button_color' );
		$arrow_button_hover_color = get_option( 'wpt_arrow_button_hover_color' );
		$month_week_day_color = get_option( 'wpt_month_week_day_color' );
		$month_week_day_active_color = get_option( 'wpt_month_week_day_active_color' );
		$current_date_color = get_option( 'wpt_current_date_color' );
		

		
		if ($adv_event_link) {
			$output .= '
			{
				title: "' .do_shortcode( get_the_title() ). '",
					start: "'.$adv_event_start_date.'T'.$adv_event_start_time.':00",
					end: "'.$adv_event_end_date.'T'.$adv_event_end_time.':00",
					color:"'.$adv_event_color.'",
					url:"'.$adv_event_link.'"
			},
		'; 
		}
		
		else  {
			$output .= '
			{
				title: "' .do_shortcode( get_the_title() ). '",
					start: "'.$adv_event_start_date.'T'.$adv_event_start_time.':00",
					end: "'.$adv_event_end_date.'T'.$adv_event_end_time.':00",
					color:"'.$adv_event_color.'",
					url:"#adv-event-popup'.$ids.'"
			},
		';
		}
		
		
  

		
	endwhile;
	$output.= '
				]
			});
			
		});	
	</script> <div id="calendar"></div>
	';
	
	$output .='<style>
			.fc-title {
			  font-size: '.$font_size.'px;
			  font-weight: '.$font_weight.';
			  font-style: '.$font_style.';
			}
			.fc-toolbar button.fc-prev-button, .fc-toolbar button.fc-next-button {
			  background: '.$arrow_button_color.';
			}
			.fc-toolbar button.fc-prev-button:hover, .fc-toolbar button.fc-next-button:hover{
			  background:'.$arrow_button_hover_color.';
			}
			.fc-toolbar button.fc-month-button, .fc-toolbar button.fc-agendaWeek-button, .fc-toolbar button.fc-agendaDay-button {
			  background: '.$month_week_day_color.';
			}
			.fc-toolbar button.fc-state-active {
			  background: '.$month_week_day_active_color.';
			}
			.fc-unthemed .fc-today {
			  background: '.$current_date_color.';
			}
		</style>';
	
	wp_reset_query();
	return $output;
}
add_shortcode('adv_event', 'adv_event_calendar_shortcode');	



function adv_google_calender_detail_shortcode($atts){
	extract( shortcode_atts( array(
		'test' => '',
	), $atts) );
	
    $query = new WP_Query(
        array('posts_per_page' => '-1', 'post_type' => 'event-calendar')
        );		
		
		
	$output = '<div class="event_popup_wrapper">';
	while($query->have_posts()) : $query->the_post();
		$ids = get_the_ID();
		$content_main = do_shortcode(get_the_content());
		$content_autop = wpautop(trim($content_main));		
		$output .= '<div class="remodal" data-remodal-id="adv-event-popup'.$ids.'">
						<div class="modal_text_wrp">
							<h1>' .do_shortcode( get_the_title() ). '</h1>
							' .do_shortcode( $content_autop ). '
						</div>
					</div>
					';        
	endwhile;
	$output.= '</div>';
	wp_reset_query();
	return $output;
}
add_shortcode('adv_gc_detail', 'adv_google_calender_detail_shortcode');	


function adv_google_calender_main_shortcode( $atts, $content = null  ) {

	extract( shortcode_atts( array(
		'category' => ''
	), $atts ) );

	return '' .do_shortcode( '[adv_gc_detail] [adv_event default="'.date('Y').'-'.date('m').'-'.date('d').'" category="'.$category.'"]' ). '';
}	
add_shortcode('adv_calendar', 'adv_google_calender_main_shortcode');


function adv_events_form_google_calender( $atts, $content = null  ) {

	extract( shortcode_atts( array(
		'url' => '',
		'api' => 'AIzaSyDdxxqTyzDU-KxrSQGcWFo1qMwblOWVmp4',
        'appear' => 'month'
	), $atts ) );
    
    
    global $adv_event_calendar_options; $adv_event_calendar_settings = get_option( 'adv_event_calendar_options', $adv_event_calendar_options );
    
    
    if($adv_event_calendar_settings['adv_today']) :
    
        return '
            <script>

                jQuery(document).ready(function() {

                    jQuery("#calendar").fullCalendar({

                        // US Holidays
                        events: "'.$url.'",
                        
                        googleCalendarApiKey: "'.$api.'",
                        
                        header: {
                            left: "prev,next today",
                            center: "title",
                            right: "month,agendaWeek,agendaDay"
                        },                         

                        
                        monthNames: ["'.$adv_event_calendar_settings['adv_january'].'", "'.$adv_event_calendar_settings['adv_february'].'", "'.$adv_event_calendar_settings['adv_march'].'", "'.$adv_event_calendar_settings['adv_april'].'", "'.$adv_event_calendar_settings['adv_may'].'", "'.$adv_event_calendar_settings['adv_june'].'", "'.$adv_event_calendar_settings['adv_july'].'", "'.$adv_event_calendar_settings['adv_august'].'", "'.$adv_event_calendar_settings['adv_september'].'", "'.$adv_event_calendar_settings['adv_october'].'", "'.$adv_event_calendar_settings['adv_november'].'", "'.$adv_event_calendar_settings['adv_december'].'"],
                        
                        dayNames: ["'.$adv_event_calendar_settings['adv_sun_full'].'", "'.$adv_event_calendar_settings['adv_mon_full'].'", "'.$adv_event_calendar_settings['adv_tue_full'].'", "'.$adv_event_calendar_settings['adv_wed_full'].'", "'.$adv_event_calendar_settings['adv_thu_full'].'", "'.$adv_event_calendar_settings['adv_fri_full'].'", "'.$adv_event_calendar_settings['adv_sat_full'].'"],                        
                        
                        dayNamesShort: ["'.$adv_event_calendar_settings['adv_sun'].'", "'.$adv_event_calendar_settings['adv_mon'].'", "'.$adv_event_calendar_settings['adv_tue'].'", "'.$adv_event_calendar_settings['adv_wed'].'", "'.$adv_event_calendar_settings['adv_thu'].'", "'.$adv_event_calendar_settings['adv_fri'].'", "'.$adv_event_calendar_settings['adv_sat'].'"],
                        
                        buttonText : {
                            today:    "'.$adv_event_calendar_settings['adv_today'].'",
                            month:    "'.$adv_event_calendar_settings['adv_month'].'",
                            week:     "'.$adv_event_calendar_settings['adv_week'].'",
                            day:      "'.$adv_event_calendar_settings['adv_day'].'"
                        },  
                        allDayText: "'.$adv_event_calendar_settings['adv_allday'].'",                        

                        eventClick: function(event) {
                            // opens events in a popup window
                            window.open(event.url, "gcalevent", "width=700,height=600");
                            return false;
                        },
                        defaultView: "'.$appear.'",

                        loading: function(bool) {
                            jQuery("#loading").toggle(bool);
                        }

                    });

                });

            </script>
                <div id="loading"></div>

                <div id="calendar"></div>
            ';     
    
    else : 
    
	return '
        <script>

            jQuery(document).ready(function() {

                jQuery("#calendar").fullCalendar({

                    // US Holidays
                    events: "'.$url.'",
                    googleCalendarApiKey: "'.$api.'",
                    defaultView: "'.$appear.'",


                    header: {
                        left: "prev,next today",
                        center: "title",
                        right: "month,agendaWeek,agendaDay"
                    },  

                    eventClick: function(event) {
                        // opens events in a popup window
                        window.open(event.url, "gcalevent", "width=700,height=600");
                        return false;
                    },

                    loading: function(bool) {
                        jQuery("#loading").toggle(bool);
                    }

                });

            });

        </script>
            <div id="loading"></div>

            <div id="calendar"></div>
        ';    
    
    endif;


}	
add_shortcode('g_calendar', 'adv_events_form_google_calender');
?>