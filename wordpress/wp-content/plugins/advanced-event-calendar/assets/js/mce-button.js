(function() {
	tinymce.PluginManager.add('getw_tinymce_btn', function( editor, url ) {
		editor.addButton('getw_tinymce_btn', {
			icon: 'getw-mce-icon',
			type: 'menubutton',
			menu: [
				{
					text: 'Event Calendar Shortcode',
					onclick: function() {
						editor.windowManager.open( {
							title: 'Event Calendar Shortcode',
							body: [
								{
									type: 'textbox',
									name: 'CatName',
									label: 'Category Name',
									value: ''
								},
								
							],
							onsubmit: function( e ) {
								editor.insertContent( '[adv_calendar category="' + e.data.CatName + '"]');
							}
						});
					}
				},
				{
					text: 'Google Calendar Shortcode',
					onclick: function() {
						editor.windowManager.open( {
							title: 'Google Calendar Shortcode',
							body: [
								{
									type: 'textbox',
									name: 'eventCallink',
									label: 'Your public google calender link',
									minWidth: 500,
									value: ''
								},
								{
									type: 'textbox',
									name: 'eventCallapi',
									label: 'API Key',
									minWidth: 500,
									value: ''
								},
                                {
                                    type: 'listbox',
                                    name: 'appearSetting',
                                    label: 'Calendar View',
                                    'values': [
                                        {text: 'Month', value: 'month'},
                                        {text: 'Week', value: 'agendaWeek'},
                                        {text: 'Day', value: 'agendaDay'},
                                        {text: 'Simple Week', value: 'basicWeek'},
                                        {text: 'Simple Day', value: 'basicDay'}                                        
                                    ]
                                }                                
							],
							onsubmit: function( e ) {
								editor.insertContent( '[g_calendar appear="' + e.data.appearSetting + '" api="' + e.data.eventCallapi + '" url="' + e.data.eventCallink + '"]');
							}
						});
					}
				}
			]	
			
		});
	});
})();