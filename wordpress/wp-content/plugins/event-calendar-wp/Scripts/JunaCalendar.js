window.onload=function(){
		MyFunction();

	function Calendar1(id, year, month) {

		var Dlast = new Date(year,month+1,0).getDate(),
		D = new Date(year,month,Dlast),
		DNlast = new Date(D.getFullYear(),D.getMonth(),Dlast).getDay(),
		DNfirst = new Date(D.getFullYear(),D.getMonth(),1).getDay(),
		calendar = "<tr>",
		month=["January","February","March","April","May","June","July","August","September","October","November","December"];
		if (DNfirst != 0) 
		{
		  for(var  i = 1; i < DNfirst; i++) calendar += '<td>';
		}
		else
		{
		  for(var  i = 0; i < 6; i++) calendar += '<td>';
		}
		for(var  i = 1; i <= Dlast; i++) 
		{
		  if (i == new Date().getDate() && D.getFullYear() == new Date().getFullYear() && D.getMonth() == new Date().getMonth()) 
		  {
		    calendar += '<td class="without today" id="'+D.getFullYear()+'%$%'+D.getMonth()+'%$%'+i+'">' + i;
		  }
		  else
		  {
		  	if(new Date(D.getFullYear(),D.getMonth(),i).getDay() == 0)
		  	{
		    	calendar += '<td class="without day'+i+' sunday1" id="'+D.getFullYear()+'%$%'+D.getMonth()+'%$%'+i+'">' + i;
		  	}
		  	else if(new Date(D.getFullYear(),D.getMonth(),i).getDay() == 6)
		  	{
		    	calendar += '<td class="without day'+i+' saturday1" id="'+D.getFullYear()+'%$%'+D.getMonth()+'%$%'+i+'">' + i;
		  	}
		  	else
		  	{
		    	calendar += '<td class="without day'+i+'" id="'+D.getFullYear()+'%$%'+D.getMonth()+'%$%'+i+'">' + i;
		  	}
		  }
		  if (new Date(D.getFullYear(),D.getMonth(),i).getDay() == 0) 
		  {
		    calendar += "<tr>";
		  } 
		}

		jQuery('#hidden_text').val(Dlast);
		for(var  i = DNlast; i < 7; i++) calendar += "<td>&nbsp;";
		document.querySelector('#'+id+' tbody').innerHTML = calendar;
		document.querySelector('#'+id+' thead td:nth-child(2)').innerHTML = month[D.getMonth()] +' '+ D.getFullYear();
		document.querySelector('#'+id+' thead td:nth-child(2)').dataset.month = D.getMonth();
		document.querySelector('#'+id+' thead td:nth-child(2)').dataset.year = D.getFullYear();
		if (document.querySelectorAll('#'+id+' tbody tr').length < 6)  // чтобы при перелистывании месяцев не "подпрыгивала" вся страница, добавляется ряд пустых клеток. Итог: всегда 6 строк для цифр
		{  
		    document.querySelector('#'+id+' tbody').innerHTML += "<tr><td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;";
		}
	}
	// переключатель минус месяц
		document.querySelector('#calendar1 thead tr:nth-child(2) td:nth-child(1)').onclick = function() {
		  Calendar1("calendar1", document.querySelector('#calendar1 thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('#calendar1 thead td:nth-child(2)').dataset.month)-1);
			MyFunction();
		}
	// переключатель плюс месяц
		document.querySelector('#calendar1 thead tr:nth-child(2) td:nth-child(3)').onclick = function() {
		  Calendar1("calendar1", document.querySelector('#calendar1 thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('#calendar1 thead td:nth-child(2)').dataset.month)+1);
			MyFunction();
		}
	
		var selected_calendar=jQuery('#selected_calendar').val();

		var ajaxurl = object.ajaxurl;
		var data = {
		action: 'Selected_calendar', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
		foobar: selected_calendar, // translates into $_POST['foobar'] in PHP
		};
		jQuery.post(ajaxurl, data, function(response) {
			var calendar=response.split('$#$');
			var amis=["January","February","March","April","May","June","July","August","September","October","November","December"];

			for(var i=0; i<amis.length; i++)
			{
				if (calendar[2]==amis[i]) 
					{
						Calendar1("calendar1",calendar[1],i);
					}
			}
			var b=calendar[4].split('^*^');
			var hidden_text=jQuery('#hidden_text').val();
			var todays=jQuery('.today').text();
			jQuery('.today').addClass('day'+todays);
			
			for(h=0; h<calendar[3]; h++)
			{	
				var a=b[h].split('*&^%^&*');
				var w=a[0].split('.');
				
				if(w[1][0]==0)
				{
					w[1]=w[1][1];
				}
				if(w[2][0]==0)
				{
					w[2]=w[2][1];
				}
				if(a[1]=="Yes")
				{
					for(k=1; k<=hidden_text; k++)
					{
						var day_id=jQuery('.day'+k).attr('id');
						var split_day_id=day_id.split('%$%');
						if(w[0]==split_day_id[0] && w[1]-1==split_day_id[1] && w[2]==split_day_id[2])
						{
							jQuery('.day'+k).addClass("juna");
						}
					}
				}
			}
			MyFunction();
			jQuery('.prev1').click(function()  
			{
				var hidden_text=jQuery('#hidden_text').val();
				var todays=jQuery('.today').text();
				jQuery('.today').addClass('day'+todays);
				
				for(h=0; h<calendar[3]; h++)
				{	
					var a=b[h].split('*&^%^&*');
					var w=a[0].split('.');
					
					if(w[1][0]==0)
					{
						w[1]=w[1][1];
					}
					if(w[2][0]==0)
					{
						w[2]=w[2][1];
					}
					if(a[1]=="Yes")
					{
						for(k=1; k<=hidden_text; k++)
						{
							var day_id=jQuery('.day'+k).attr('id');
							var split_day_id=day_id.split('%$%');
							if(w[0]==split_day_id[0] && w[1]-1==split_day_id[1] && w[2]==split_day_id[2])
							{
								jQuery('.day'+k).addClass("juna");
							}
						}
					}
				}
			})
			jQuery('.next1').click(function()  
			{
				var hidden_text=jQuery('#hidden_text').val();
				var todays=jQuery('.today').text();
				jQuery('.today').addClass('day'+todays);
				
				for(h=0; h<calendar[3]; h++)
				{	
					var a=b[h].split('*&^%^&*');
					var w=a[0].split('.');
					
					if(w[1][0]==0)
					{
						w[1]=w[1][1];
					}
					if(w[2][0]==0)
					{
						w[2]=w[2][1];
					}
					if(a[1]=="Yes")
					{
						for(k=1; k<=hidden_text; k++)
						{
							var day_id=jQuery('.day'+k).attr('id');
							var split_day_id=day_id.split('%$%');
							if(w[0]==split_day_id[0] && w[1]-1==split_day_id[1] && w[2]==split_day_id[2])
							{
								jQuery('.day'+k).addClass("juna");
							}
						}
					}
				}
			})				
		});
function MyFunction()
	{
		var selected_calendar=jQuery('#selected_calendar').val();
		var selected_theme=jQuery('#selected_theme').val();
		var selected_setting=jQuery('#selected_setting').val();
		var selected=selected_setting+ '%^&^%' +selected_calendar;
		var image_src=jQuery('#images_src').val();

		var ajaxurl = object.ajaxurl;
		var data = {
		action: 'Selected_theme', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
		foobar: selected_theme, // translates into $_POST['foobar'] in PHP
		};
		jQuery.post(ajaxurl, data, function(response) {
			var theme=response.split('$#$');

			jQuery('#calendar1').css('width',theme[1]+'px');
			jQuery('#calendar1').css('height',theme[2]+'px');
			jQuery('#calendar1').css('border-color',theme[3]);
			jQuery('#calendar1').css('border-radius',theme[4]+'px');
			jQuery('#calendar1').css('border-width',theme[5]+'px');
			jQuery('#month1').css('height',theme[6]+'px');
			jQuery('#month1').css('border-width',theme[7]+'px');
			jQuery('#month1').css('border-radius',theme[8]+'px');
			jQuery('#month1').css('border-color',theme[9]);
			jQuery('#month1').css('background-color',theme[10]);
			jQuery('#month1').css('color',theme[11]);
			jQuery('#month1').css('font-family',theme[12]);
			jQuery('#month1').css('font-size',theme[13]+'px');
			jQuery('.prev1').css('font-size',theme[13]+'px'); jQuery('.next1').css('font-size',theme[13]+'px');
			jQuery('.prev1').css('border-width',theme[15]+'px'); jQuery('.next1').css('border-width',theme[15]+'px');
			jQuery('.prev1').css('border-radius',theme[16]+'px'); jQuery('.next1').css('border-radius',theme[16]+'px');
			jQuery('.prev1').css('border-color',theme[17]); jQuery('.next1').css('border-color',theme[17]);
			jQuery('.prev1').css('background-color',theme[18]); jQuery('.next1').css('background-color',theme[18]);
			jQuery('.prev1').css('color',theme[19]); jQuery('.next1').css('color',theme[19]);
			jQuery('#title_name').css('height',theme[20]+'px');
			jQuery('#title_name').css('border-width',theme[21]+'px');
			jQuery('#title_name').css('border-radius',theme[22]+'px');
			jQuery('#title_name').css('border-color',theme[23]);
			jQuery('#title_name').css('background-color',theme[24]);
			jQuery('#title_name').css('color',theme[25]);
			jQuery('#title_name').css('font-family',theme[26]);
			jQuery('#title_name').css('font-size',theme[27]+'px');
			jQuery('.week_day1').css('height',theme[28]+'px');
			jQuery('.week_day1').css('border-width',theme[29]+'px');
			jQuery('.week_day1').css('border-radius',theme[30]+'px');
			jQuery('.week_day1').css('border-color',theme[31]);
			jQuery('.week_day1').css('font-size',theme[32]+'px');
			jQuery('.week_day1').css('color',theme[33]);
			jQuery('.week_day1').css('background-color',theme[34]);
			jQuery('#sat1').css('border-width',theme[35]+'px');
			jQuery('#sat1').css('border-radius',theme[36]+'px');
			jQuery('#sat1').css('border-color',theme[37]);
			jQuery('#sat1').css('font-size',theme[38]+'px');
			jQuery('#sat1').css('background-color',theme[39]);	
			jQuery('#sat1').css('color',theme[40]);
			jQuery('#sun1').css('border-width',theme[41]+'px');
			jQuery('#sun1').css('border-radius',theme[42]+'px');
			jQuery('#sun1').css('border-color',theme[43]);
			jQuery('#sun1').css('font-size',theme[44]+'px');
			jQuery('#sun1').css('background-color',theme[45]);
			jQuery('#sun1').css('color',theme[46]);
			jQuery('#calendar1').css('background-color',theme[47]);
			
			jQuery('.without').css('color',theme[54]);
			jQuery('.without').css('background-color',theme[55]);
			jQuery('.without').css('font-size',theme[56]+'px');
			jQuery('.without').css('border-width',theme[57]+'px');
			jQuery('.without').css('border-radius',theme[58]+'px');
			jQuery('.without').css('border-color',theme[59]);	
			jQuery('.juna').css('color',theme[60]);
			jQuery('.juna').css('background-color',theme[61]);
			jQuery('.juna').css('font-size',theme[62]+'px');
			jQuery('.juna').css('border-width',theme[63]+'px');
			jQuery('.juna').css('border-radius',theme[64]+'px');
			jQuery('.juna').css('border-color',theme[65]);
			jQuery('.sunday1').css('color',theme[66]);
			jQuery('.sunday1').css('background-color',theme[67]);
			jQuery('.sunday1').css('font-size',theme[68]+'px');
			jQuery('.sunday1').css('border-width',theme[69]+'px');
			jQuery('.sunday1').css('border-radius',theme[70]+'px');
			jQuery('.sunday1').css('border-color',theme[71]);
			jQuery('.saturday1').css('color',theme[72]);
			jQuery('.saturday1').css('background-color',theme[73]);
			jQuery('.saturday1').css('font-size',theme[74]+'px');
			jQuery('.saturday1').css('border-width',theme[75]+'px');
			jQuery('.saturday1').css('border-radius',theme[76]+'px');
			jQuery('.saturday1').css('border-color',theme[77]);

			jQuery('.today').css('color',theme[48]);
			jQuery('.today').css('background-color',theme[49]);
			jQuery('.today').css('font-size',theme[50]+'px');
			jQuery('.today').css('border-width',theme[51]+'px');
			jQuery('.today').css('border-radius',theme[52]+'px');
			jQuery('.today').css('border-color',theme[53]);

			jQuery('.without').hover(function(){
				window.color1=jQuery(this).css('color');
			    jQuery(this).css('color',theme[78]);
			    }, function(){
			    jQuery(this).css('color',color1);
			 });

			jQuery('.without').hover(function(){
				window.bg_color1=jQuery(this).css('background-color');
			    jQuery(this).css('background-color',theme[79]);
			    }, function(){
			    jQuery(this).css('background-color',bg_color1);
			 });

			jQuery('.without').hover(function(){
				window.border_color1=jQuery(this).css('border-color');
			    jQuery(this).css('border-color',theme[80]);
			    }, function(){
			    jQuery(this).css('border-color',border_color1);
			 });			
			
		});

		var ajaxurl = object.ajaxurl;
		var data = {
		action: 'Selected_setting', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
		foobar: selected, // translates into $_POST['foobar'] in PHP
		};
		jQuery.post(ajaxurl, data, function(response) {

			var yupi=response.split('*&^%');
			var Event_param=yupi[1].split('$#$');
			var setting=yupi[0].split('$#$');

			setting[17];

			jQuery('.juna').click(function(){
				
				var id1 = jQuery(this).attr('id');
				var id2 = id1.split('%$%');
				var p = jQuery('#selected_setting').val();

				jQuery('.JI_calendar1').each(function(){
					window.id = jQuery(this).attr('id');
					var wid = jQuery(this).width();
					var z = jQuery('.JI_image_for_event').width();
					//jQuery('.JI_image_for_event').css({'margin':'0 '+(wid-z)/2+'px 0 '+(wid-z)/2+'px'});
					var c= jQuery('.JI_h3_image').width();
					jQuery('.JI_h3_image').css({'margin':'0 '+(wid-c)/2+' 0 '+(wid-c)/2});
					var f = jQuery('.JI_desc_con').width();
					jQuery('.JI_desc_con').css({'margin':'0 '+(wid-f)/2+' 0 '+(wid-f)/2});
					if(id2[1]<10 && id2[2]<10 ){
						if(parseInt(parseInt(id2[1])+1)!=10){
							var id3 =id2[0]+'.0'+parseInt(parseInt(id2[1])+1)+'.0'+id2[2];
							jQuery('.in_page_setting').text('Events From '+id3);
							jQuery('#JI_date_event').val(id3);
							if(id == id3){
								jQuery(this).fadeIn();
							}else{
								jQuery(this).fadeOut();
							}
						}else{
							var id3 =id2[0]+'.'+parseInt(parseInt(id2[1])+1)+'.0'+id2[2];
							jQuery('.in_page_setting').text('Events From '+id3);
							jQuery('#JI_date_event').val(id3);
							if(id == id3){
								jQuery(this).fadeIn();
							}else{
								jQuery(this).fadeOut();
							}	
						}
						
					}else if(id2[1]<10 && id2[2]>=10){
						if(parseInt(parseInt(id2[1])+1)!=10){
							var id3 =id2[0]+'.0'+parseInt(parseInt(id2[1])+1)+'.'+id2[2];
							jQuery('.in_page_setting').text('Events From '+id3);
							jQuery('#JI_date_event').val(id3);
							if(id == id3){
								jQuery(this).fadeIn();
							}else{
								jQuery(this).fadeOut();
							}
						}else{
							var id3 =id2[0]+'.'+parseInt(parseInt(id2[1])+1)+'.'+id2[2];
							jQuery('.in_page_setting').text('Events From '+id3);
							jQuery('#JI_date_event').val(id3);
							if(id == id3){
								jQuery(this).fadeIn();
							}else{
								jQuery(this).fadeOut();
							}
						}	
					}else if(id2[1]>=10 && id2[2]>=10){
						var id3 =id2[0]+'.'+parseInt(parseInt(id2[1])+1)+'.'+id2[2];
						jQuery('.in_page_setting').text('Events From '+id3);
						jQuery('#JI_date_event').val(id3);
						if(id == id3){
							jQuery(this).fadeIn();
						}else{
							jQuery(this).fadeOut();
						}
					}
					else if(id2[1]>=10 && id2[2]<10){
						var id3 =id2[0]+'.'+parseInt(parseInt(id2[1])+1)+'.0'+id2[2];
						jQuery('.in_page_setting').text('Events From '+id3);
						jQuery('#JI_date_event').val(id3);
						if(id == id3){
							jQuery(this).fadeIn();
						}else{
							jQuery(this).fadeOut();
						}
					}
				
					ajaxurl = object.ajaxurl;
					var data ={action: 'W_id', x:p};
					jQuery.post(ajaxurl, data, function(response){
						
					});
				
					

				})
	 			//var body = jQuery(" body");
				jQuery('#calendar1').fadeOut(100);
				jQuery('#popup_window').fadeIn();
			
				jQuery('#popup_window').animate({'right':0,},100);
				// jQuery(window).scroll(function(){
				// 	 body.animate({scrollTop:'0'}, '500');

				// })
				jQuery(".JI_event_search1").focus(function(){
					var box = jQuery('#JI_code').val();
					jQuery(this)
						.animate({"width":"250px",},500)
						.css("box-shadow","1px 1px 30px "+box)
						.val("");
						jQuery('.JI_event_search').animate({"width":"280px","background":"#777,"},500);
						jQuery('.JI_closs_serch').fadeIn(500);
				
				})
				jQuery(".JI_event_search1").blur(function(){
				
					jQuery(this)
						.animate({"width":"170px",},500)
						.css("box-shadow","none")
						.val("search event");
						jQuery('.JI_event_search').animate({"width":"199px",},500)
						jQuery('.JI_closs_serch').fadeOut(500);
				
				})


				jQuery('.JI_desc_con').each(function(){
					window.w = jQuery(this).attr('id');
					if(w.length>0){
					var d =jQuery(this).find('.JI_span2');	
					var j =jQuery(this).find('.hid_title');
					var k =j.val();
						var latter = w.split('');
						jQuery('.JI_first').text(latter[0]);		
						if(w.length>100){
							var text = w.slice(1, 100);
							d.html(text+'<span class = "Ji_more" id = "'+k+'">More</span>');
						}
						
					}
				})
				jQuery('.JI_arrow').click(function(){
					var date = jQuery('#JI_date_event').val();
					var id_arrow = jQuery(this).attr('id');
					ajaxurl = object.ajaxurl;
					var data ={action: 'Event_day_select', x:id_arrow,y:date};
						jQuery.post(ajaxurl, data, function(response){
							var u = response.split('(52525)');
							jQuery('#JI_date_event').val(u[1]);
							jQuery('.JI_calendar1').each(function(){
								if(jQuery(this).attr('id')== u[1]){

									jQuery(this).show();
								}else{
									jQuery(this).hide();
								}
							})
							
						})
				})
				jQuery('.Ji_more').click(function(){
					var id_1 = jQuery(this).attr('id');
					var h = jQuery(this).parent().parent().parent().parent().find('.JI_image_for_event');
					ajaxurl = object.ajaxurl;
						var data ={action: 'My_event_day', x:id_1};
						jQuery.post(ajaxurl, data, function(response){
						var res = response.split('999999');
						jQuery('#JI_date').text(res[1]);
						jQuery('.MY_ev3').text(id_1);
						var f = res[2].split('');
						f_size = jQuery('#first_l').val();
						jQuery('.JI_desc_con1').html('<span style = "font-size:'+f_size+'">'+f[0]+'</span>'+res[2].slice(1,res[2].length));
						var src = h.attr('src');
						
						jQuery('.My_event').fadeIn();
						jQuery('#image_day').fadeIn(500);
						jQuery('.my_ev2').fadeIn(500);
						jQuery('.MY_ev3').fadeIn(500);
						jQuery('#JI_date').fadeIn(500);
						jQuery('#event_day').fadeIn(500);
						jQuery('.JI_desc_con1').fadeIn(500);
						jQuery('.Ji_more1').fadeIn(500);
						jQuery('.My_event').animate({'height':'100%',},500);
						
						var width = jQuery(window).width();
						var r = width - 1000;
						jQuery('#image_day').css({'margin':'20px '+r/2+'0'+r/2});
						jQuery('.my_ev2').css({'margin':'20px '+r/2+'0'+r/2});
						jQuery('#image_day').attr('src',src);
						jQuery('.MY_ev3').css({'margin':'20px '+r/2+'0'+r/2});
						jQuery('#JI_date').css({'margin':'20px '+r/2+'0'+r/2});
						jQuery('.JI_back1').css({'margin':'20px '+r/2+'0'+r/2});
						jQuery('.JI_desc_con1').css({'margin':'20px '+r/2+'0'+r/2});
						
					});	
					
				})
				jQuery('.JI_back1').click(function(){
					jQuery('.My_event').animate({'top':'100%',},500);

					jQuery('.My_event').animate({'height':0,},500);
					jQuery('.My_event').hide();
					jQuery('.My_event').animate({'top':0,});

				})
				jQuery('.JI_back').click(function(){ 
					jQuery('.popup_window').animate({'right':'5000px',},500);
					jQuery('.popup_window').fadeOut(700);
					jQuery('#calendar1').fadeIn();
					jQuery('.popup_window').animate({'right':'-5000px',})

				})
			
			});	
		});	
	}
}
function Category(Event)
{
	var selected_setting=jQuery('#selected_setting').val();
	var image_src=jQuery('#images_src').val();
	var Pars=selected_setting+'~!#$@#$'+Event;
	var ajaxurl = object.ajaxurl;
	var data = {
	action: 'Category_settings', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
	foobar: Pars, // translates into $_POST['foobar'] in PHP
	};
	jQuery.post(ajaxurl, data, function(response) {
		var Category_params=response.split('*&^%^&*');
		jQuery('#category_div').css('background-color',Category_params[1]);
		jQuery("#category_div").css('height',Category_params[4]+'px');

		jQuery("#category_div").click(function(){
			var width=jQuery('#category_div').css('width');
			if(width=="5px")
			{
				
				jQuery('#popup_date').fadeOut();
				jQuery('#popup_image').fadeOut();
				jQuery('#Event_note').fadeOut();
				jQuery('#popup_event_title').fadeOut();	

				setTimeout(function(){  				
		        	jQuery("#category_div").animate({width: Category_params[5]+'px'});
		        	jQuery("#category_div").animate({height: Category_params[6]+'px'});
		        	jQuery("#category_div").css('border-radius',Category_params[11]+'px');
		        	jQuery("#category_image").css('border-radius',Category_params[12]+'px');

		        	jQuery("#category_title").fadeIn();
	        		jQuery('#category_image').fadeIn();
	        		jQuery('#category_note').fadeIn();

		        	jQuery("#category_title").text(Category_params[0]);
		        	jQuery("#category_title").css('color',Category_params[9]);
		        	jQuery("#category_title").css('font-family',Category_params[10]);
		        	jQuery("#category_title").css('font-size',Category_params[4]+'px');
		        	jQuery('#category_image').attr('src',image_src+'/'+Category_params[2]);
		        	jQuery('#category_image').css('width',Category_params[7]+'px');
		        	jQuery('#category_image').css('height',Category_params[8]+'px');
		        	jQuery('#category_note').html(Category_params[3]);

	        	}, 500);
			}
			else
			{
				jQuery("#category_div").animate({width:'5px'});
	        	jQuery("#category_div").animate({height: Category_params[4]+'px'});
	        	jQuery("#category_title").fadeOut();
	        	jQuery('#category_image').fadeOut();
	        	jQuery('#category_note').fadeOut();

	        	setTimeout(function(){  
					
					jQuery('#popup_date').fadeIn();
					jQuery('#popup_image').fadeIn();
					jQuery('#Event_note').fadeIn();
					jQuery('#popup_event_title').fadeIn();
					MyFunction();
				}, 500);
			}
        });
	})
}
function Category_legend(width)
{
	var ajaxurl = object.ajaxurl;
	var data = {
	action: 'Category_colors', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
	foobar: width, // translates into $_POST['foobar'] in PHP
	};
	jQuery.post(ajaxurl, data, function(response) {
		var color=response.split('%^%');
		for(var i=0;i<color.length-1;i++)
		{
			jQuery('#category_legend').append('<div style="float:left; width:'+parseFloat(100/(color.length-1)).toFixed(1)+'%; height:4px; background-color:'+color[i]+';"></div>');
		}
	});
}