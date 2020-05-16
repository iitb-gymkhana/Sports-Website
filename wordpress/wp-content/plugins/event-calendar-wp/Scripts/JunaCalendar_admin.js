function add_media_file()
{
	jQuery('.image_select_file_library').click(function(){
		
		var src = jQuery(this).attr('src');

		jQuery('#image12').val(src);
	})
	jQuery('#media-button').click(function(){
		var title = jQuery('#cat_title').val();
		var color = jQuery('#category_color_1').val();
		var description1 = jQuery('#description1').val();
		 
		jQuery('.Published_key').each(function(){
			if(jQuery(this).is(":checked")){
				var key = jQuery(this).val();
				jQuery('#display_media_button').fadeIn(100);
				jQuery('#add_category_page').fadeOut(100);
				var body = jQuery("html, body"); 
				body.animate({scrollTop:'0'}, '100')
				jQuery('#block_it').fadeOut(100);
				jQuery('#repeat_event').fadeOut(100);
				jQuery('#title11').val(title);
				jQuery('#color11').val(color);
				jQuery('#description11').val(description1);
				jQuery('#Published11').val(key);
			}
		})
	})	
	jQuery('#Cancel_page').click(function(){
		jQuery('#content_settings_category').fadeIn(100);
		jQuery('#add_category_page').fadeOut(100);
	})
	jQuery('#select-file-library').click(function(){
		jQuery('#select_file_pc').fadeOut(100);
		jQuery('#select_file_library').fadeIn(100);
		jQuery('#alt_file_pc').css('display','none');
		jQuery('.border_bottom,.border_bottom_none').toggleClass('border_bottom_none').toggleClass('border_bottom');
	})
	jQuery('#select-file-pc').click(function(){
		jQuery('#select_file_library').fadeOut(100);
		jQuery('#select_file_pc').fadeIn(100);
		jQuery('#alt_file_pc').fadeIn(100);
		jQuery('.border_bottom,.border_bottom_none').toggleClass('border_bottom_none').toggleClass('border_bottom');
	})
	jQuery('#media-button1').click(function(){
		var title = jQuery('#Title_category1').val();
		var select = jQuery('#Select_ctegory1').val();
		var data33 = jQuery('#data33').val();
		var time1 = jQuery('.time1').val();
		var time2 = jQuery('.time2').val();
		var time3 = jQuery('.time3').val();
		var time4 = jQuery('.time4').val();
		var description1 = jQuery('#description1').val();
		var repeat_ev =jQuery('.option_repeat_event').val();
		var hidden = jQuery('#input_hidden_id').val();
		jQuery('.Published_key').each(function(){
			if(jQuery(this).is(":checked")){
				var key = jQuery(this).val();
				jQuery('#display_media_button1').fadeIn(100);
				jQuery('#add_category_page1').fadeOut(100);
				jQuery('#title12').val(title);
				jQuery('#select12').val(select);
				jQuery('#data3312').val(data33);
				jQuery('#time112').val(time1);
				jQuery('#time212').val(time2);
				jQuery('#time312').val(time3);
				jQuery('#time412').val(time4);
				jQuery('#description112').val(description1);
				jQuery('#repeat_ev12').val(repeat_ev);
				jQuery('#hidden12').val(hidden);
				jQuery('#key12').val(key);
	 		}	
		})
	})
	jQuery('#close_display_media_button').click(function(){
		jQuery('#display_media_button1').fadeOut(100);
		jQuery('#block_it').fadeIn(100);
		jQuery('#repeat_event').fadeIn(100);
		jQuery('#add_category_page1').fadeIn(100);
		jQuery('#media-button1').attr('checked',false);
	})
	jQuery('#close_display_media_button').click(function(){
		jQuery('#display_media_button').fadeOut(100);
		jQuery('#add_category_page').fadeIn(100);
		jQuery('#media-button').attr('checked',false);
	})
}
function add_a_theme()
{
	jQuery('#Add_a_Theme1').click(function(){
		jQuery('#free_version1').html('* It`s working only with pro version' );		
	})
	jQuery('#Add_a_Theme').click(function(){
		jQuery('#free_version').html('* It`s working only with pro version' );
	})
}
function h3_button()
{
	jQuery('.h3_button').bind('click', function(){
	    var ta = jQuery('.wp-editor-area'),
	        p = ta[0].selectionStart,
	        text = ta.val();
	     if(p != undefined)
	         ta.val(text.slice(0, p) + '<h3></h3>' + text.slice(p));
	     else{
	         ta.trigger('focus');
	         range = document.selection.createRange();
	         range.text = jQuery(this).val();
	    }
	});
};  
function b_button()
{
	 jQuery('.b_button').bind('click', function(){
	    var ta = jQuery('.wp-editor-area'),
	        p = ta[0].selectionStart,
	        text = ta.val();
	     if(p != undefined)
	         ta.val(text.slice(0, p) + '<strong></strong>' + text.slice(p));
	     else{
	         ta.trigger('focus');
	         range = document.selection.createRange();
	         range.text = jQuery(this).val();
	     }
	});		
}	
function i_button(){
	jQuery('.i_button').bind('click', function(){
	    var ta = jQuery('.wp-editor-area'),
	        p = ta[0].selectionStart,
	        text = ta.val();
	     if(p != undefined)
	         ta.val(text.slice(0, p) + '<em></em>' + text.slice(p));
	     else{
	         ta.trigger('focus');
	         range = document.selection.createRange();
	         range.text = jQuery(this).val();
	     }
	});		
}
function b_quote(){
	 jQuery('.b-quote').bind('click', function(){
	    var ta = jQuery('.wp-editor-area'),
	        p = ta[0].selectionStart,
	        text = ta.val();
	     if(p != undefined)
	         ta.val(text.slice(0, p) + '<blockquote></blockquote>' + text.slice(p));
	     else{
	         ta.trigger('focus');
	         range = document.selection.createRange();
	         range.text = jQuery(this).val();
	     }
	});			
}
function link_button(){
	jQuery('.link_button').click(function(){
 		jQuery('#link_page').fadeIn(100);
	 	jQuery('#url-field1').val('http://');
	});
	jQuery('#wp-link-close').click(function(){
	 	jQuery('#link_page').fadeOut(100);
	});	
	jQuery('#wp-link-submit1').bind('click', function(){
		var a = jQuery('#url-field1').val();
		var title =jQuery('#link-title-field1').val();
		jQuery('#link-target-checkbox1').click(function(){
			var a_blank = '_blank';
		});
    	var ta = jQuery('.wp-editor-area'),
	        p = ta[0].selectionStart,
	        text = ta.val();
    	 	if(p != undefined)
    	   		ta.val(text.slice(0, p) + '<a href = "'+a+'" target = "_blank">'+title+'</a>' + text.slice(p));
			else{
		         ta.trigger('focus');
		         range = document.selection.createRange();
		         range.text = jQuery(this).val();
			}
			jQuery('#link_page').fadeOut(100);
	});		
}		
function del_button(){
	jQuery('.del_button').bind('click', function(){
	    var ta = jQuery('.wp-editor-area'),
	        p = ta[0].selectionStart,
	        text = ta.val();
	     if(p != undefined)
	         ta.val(text.slice(0, p) + '<del></del>' + text.slice(p));
	     else{
	         ta.trigger('focus');
	         range = document.selection.createRange();
	         range.text = jQuery(this).val();
	    }
	});		
}
function ins_button(){
	 jQuery('.ins_button').bind('click', function(){
	    var ta = jQuery('.wp-editor-area'),
	        p = ta[0].selectionStart,
	        text = ta.val();
	     if(p != undefined)
	         ta.val(text.slice(0, p) + '<ins></ins>' + text.slice(p));
	     else{
	         ta.trigger('focus');
	         range = document.selection.createRange();
	         range.text = jQuery(this).val();
	     }
	});		
}
function ul_button(){
	jQuery('.ul_button').bind('click', function(){
	    var ta = jQuery('.wp-editor-area'),
	        p = ta[0].selectionStart,
	        text = ta.val();
	     if(p != undefined)
	         ta.val(text.slice(0, p) + '<ul><li></li></ul>' + text.slice(p));
	     else{
	         ta.trigger('focus');
	         range = document.selection.createRange();
	         range.text = jQuery(this).val();
	     }
	});			
}
function ol_button(){	
	jQuery('.ol_button').bind('click', function(){
	    var ta = jQuery('.wp-editor-area'),
	        p = ta[0].selectionStart,
	        text = ta.val();
	     if(p != undefined)
	         ta.val(text.slice(0, p) + '<ol><li></li></ol>' + text.slice(p));
	     else{
	         ta.trigger('focus');
	         range = document.selection.createRange();
	         range.text = jQuery(this).val();
	     }
	});		
}
function li_button(){
	jQuery('.li_button').bind('click', function(){
	    var ta = jQuery('.wp-editor-area'),
	        p = ta[0].selectionStart,
	        text = ta.val();
	     if(p != undefined)
	         ta.val(text.slice(0, p) + '<li></li>' + text.slice(p));
	     else{
	         ta.trigger('focus');
	         range = document.selection.createRange();
	         range.text = jQuery(this).val();
	     }
	});			
}
function code_button(){
	jQuery('.code_button').bind('click', function(){
	    var ta = jQuery('.wp-editor-area'),
	        p = ta[0].selectionStart,
	        text = ta.val();
	     if(p != undefined)
	         ta.val(text.slice(0, p) + '<code></code>' + text.slice(p));
	     else{
	         ta.trigger('focus');
	         range = document.selection.createRange();
	         range.text = jQuery(this).val();
	     }
	});
}
function pre_button(){
	jQuery('.pre_button').bind('click', function(){
	    var ta = jQuery('.wp-editor-area'),
	        p = ta[0].selectionStart,
	        text = ta.val();
	     if(p != undefined)
	         ta.val(text.slice(0, p) + '<pre></pre>' + text.slice(p));
	     else{
	         ta.trigger('focus');
	         range = document.selection.createRange();
	         range.text = jQuery(this).val();
	     }
	});
}
function more_button(){
	jQuery('.more_button').bind('click', function(){
	    var ta = jQuery('.wp-editor-area'),
	        p = ta[0].selectionStart,
	        text = ta.val();
	     if(p != undefined)
	         ta.val(text.slice(0, p) + '<!--more-->' + text.slice(p));
	     else{
	         ta.trigger('focus');
	         range = document.selection.createRange();
	         range.text = jQuery(this).val();
	     }
	});
}
function hr_button(){
	jQuery('.hr_button').bind('click', function(){
	    var ta = jQuery('.wp-editor-area'),
	        p = ta[0].selectionStart,
	        text = ta.val();
	     if(p != undefined)
	         ta.val(text.slice(0, p) + '<hr>' + text.slice(p));
	     else{
	         ta.trigger('focus');
	         range = document.selection.createRange();
	         range.text = jQuery(this).val();
	     }
	});
}
function description_tmce(){
	jQuery('#description-tmce').click(function(){
		jQuery('#qt_description_toolbar').fadeOut(100);
		jQuery('.wp-editor-area').fadeOut(100);
		jQuery('#visually').fadeIn(100);
		jQuery('#buttons_title').fadeIn(100);
		var visually_content=jQuery('.wp-editor-area').val();
		jQuery('#visually').html(visually_content);
		var h =jQuery("#visually").find('h3');
		var b = jQuery("#visually").find('strong');
		var i = jQuery("#visually").find('em');
		var link =jQuery("#visually").find('a');
		var bq = jQuery("#visually").find('blockquote');
		var del = jQuery("#visually").find('del');
		var ins =jQuery("#visually").find('ins');
		var ul = jQuery("#visually").find('ul');
		var ol = jQuery("#visually").find('ol');
		var li = jQuery("#visually").find('li');
		var code =jQuery("#visually").find('code');
		var pre = jQuery("#visually").find('pre');
		var hr = jQuery("#visually").find('hr');
		var img = jQuery("#visually").find('img');
		
		h.addClass('h3');
		b.addClass('strong');
		i.addClass('em');
		link.addClass('link');
		bq.addClass('blockquote');
		del.addClass('del');
		ins.addClass('ins');
		ul.addClass('ul');
		ol.addClass('ol');
		li.addClass('li');
		code.addClass('code');
		pre.addClass('pre');
		hr.addClass('hr');
		img.addClass('img');
		jQuery('.h3').css({
			'z-index':'1',
			display:'block',
		})
							//---------------h3 button in visually-----------//
		jQuery('.h3').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');
			jQuery('#i-bold').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<strong>'+text+'</strong>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})	
		jQuery('.h3').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-italic').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<em>'+text+'</em>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.h3').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-through').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<del>'+text+'</del>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.h3').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-ul-li').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<ul><li">'+text+'</li></ul>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.h3').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-ol-li').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<ol><li>'+text+'</li></ol>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.h3').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-blockquote').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<blockquote>'+text+'</blockquote>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.h3').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-hr').click(function(){
				var text = h1.text();
				jQuery('.selcted').after('<hr>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.h3').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-align-left').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','left');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.h3').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-align-center').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','center');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.h3').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');
			jQuery('#i-align-right').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','right');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.h3').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-add-link').click(function(){
				var text = h1.text();
				jQuery('#link_page').fadeIn(100);
 				jQuery('#url-field1').val('http://');
 				jQuery('#link-title-field1').val(text);
 				jQuery('#wp-link-submit1').click(function(){
 					var a = jQuery('#url-field1').val();
					var title =jQuery('#link-title-field1').val();
					jQuery('.selcted').html('<a href = "'+a+'">'+title+'</a>');
					h1.css({color:'#000 ',});
					h1.removeClass('selcted');
					jQuery('#link_page').fadeOut(100);
 				})
			})
			h1.click(function(event){
				event.preventDefault();
			})
		})
		jQuery('.h3').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-remove-link').click(function(){
				var text = h1.text();
				jQuery('.selcted').html(text);
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
															//-----------b button in visually-------------//
		jQuery('.strong').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');
			jQuery('#i-bold').click(function(){
				var text = h1.text();
				jQuery('.selcted').html(text);
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})	
		jQuery('.strong').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-italic').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<em>'+text+'</em>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.strong').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-through').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<del>'+text+'</del>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.strong').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-ul-li').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<ul><li">'+text+'</li></ul>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.strong').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-ol-li').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<ol><li>'+text+'</li></ol>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.strong').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-blockquote').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<blockquote>'+text+'</blockquote>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.strong').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-align-left').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','left');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.strong').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-hr').click(function(){
				var text = h1.text();
				jQuery('.selcted').after('<hr>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.strong').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-align-center').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','center');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.strong').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-align-right').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','right');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.strong').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-add-link').click(function(){
				var text = h1.text();
				jQuery('#link_page').fadeIn(100);
 				jQuery('#url-field1').val('http://');
 				jQuery('#link-title-field1').val(text);
 				jQuery('#wp-link-submit1').click(function(){
 					var a = jQuery('#url-field1').val();
					var title =jQuery('#link-title-field1').val();
					jQuery('.selcted').html('<a href = "'+a+'">'+title+'</a>');
					h1.css({color:'#000 ',});
					h1.removeClass('selcted');
					jQuery('#link_page').fadeOut(100);
 				})
 				h1.click(function(event){
					event.preventDefault();
				})
			})
		})
		jQuery('.strong').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-remove-link').click(function(){
				var text = h1.text();
				jQuery('.selcted').html(text);
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
											//---------------em button in visually----------------------//
		jQuery('.em').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');
			jQuery('#i-bold').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<strong>'+text+'</strong>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})	
		jQuery('.em').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-italic').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<em>'+text+'</em>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.em').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-through').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<del>'+text+'</del>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.em').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-ul-li').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<ul><li">'+text+'</li></ul>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.em').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-ol-li').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<ol><li>'+text+'</li></ol>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.em').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-blockquote').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<blockquote>'+text+'</blockquote>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.em').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-hr').click(function(){
				var text = h1.text();
				jQuery('.selcted').after('<hr>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.em').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-align-left').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','left');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.em').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-align-center').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','center');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.em').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-align-right').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','right');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.em').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-add-link').click(function(){
				var text = h1.text();
				jQuery('#link_page').fadeIn(100);
 				jQuery('#url-field1').val('http://');
 				jQuery('#link-title-field1').val(text);
 				jQuery('#wp-link-submit1').click(function(){
 					var a = jQuery('#url-field1').val();
					var title =jQuery('#link-title-field1').val();
					jQuery('.selcted').html('<a href = "'+a+'">'+title+'</a>');
					h1.css({color:'#000 ',});
					h1.removeClass('selcted');
					jQuery('#link_page').fadeOut(100);
 				})
				h1.click(function(event){
					event.preventDefault();
				})
			})
		})
		jQuery('.em').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-remove-link').click(function(){
				var text = h1.text();
				jQuery('.selcted').html(text);
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})	
										//---------------link button in visually----------------------//
			jQuery('.link').click(function(event){ 
				event.preventDefault();
				var h = jQuery(this).css({color:'red ',});	
				h1 = h.addClass('selcted');
				jQuery('#i-remove-link').click(function(){
					var text = h1.text();
					h1.replaceWith('<h3 class = "h3">'+text+'</h3>');
					h1.css({color:'#000 ',});
				})
			})	
	                                 	//---------------blockquote button in visually----------------------//	
	    jQuery('.blockquote').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');
			jQuery('#i-bold').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<strong>'+text+'</strong>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})	
		jQuery('.blockquote').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-italic').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<em>'+text+'</em>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.blockquote').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-through').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<del>'+text+'</del>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.blockquote').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-ul-li').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<ul><li">'+text+'</li></ul>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.blockquote').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-ol-li').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<ol><li>'+text+'</li></ol>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.blockquote').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-blockquote').click(function(){
				var text = h1.text();
				jQuery('.selcted').html(text);
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.blockquote').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-hr').click(function(){
				var text = h1.text();
				jQuery('.selcted').after('<hr>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.blockquote').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-align-left').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','left');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.blockquote').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-align-center').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','center');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.blockquote').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-align-right').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','right');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.blockquote').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-add-link').click(function(){
				var text = h1.text();
				jQuery('#link_page').fadeIn(100);
 				jQuery('#url-field1').val('http://');
 				jQuery('#link-title-field1').val(text);
 				jQuery('#wp-link-submit1').click(function(){
 					var a = jQuery('#url-field1').val();
					var title =jQuery('#link-title-field1').val();
					jQuery('.selcted').html('<a href = "'+a+'">'+title+'</a>');
					h1.css({color:'#000 ',});
					h1.removeClass('selcted');
					jQuery('#link_page').fadeOut(100);
 				})
				h1.click(function(event){
					event.preventDefault();
				})
			})
		})
		jQuery('.blockquote').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-remove-link').click(function(){
				var text = h1.text();
				jQuery('.selcted').html(text);
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})                             		
	                                 		//---------------del button in visually----------------------//	
	    jQuery('.del').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');
			jQuery('#i-bold').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<strong>'+text+'</strong>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})	
		jQuery('.del').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-italic').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<em>'+text+'</em>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.del').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-through').click(function(){
				var text = h1.text();
				jQuery('.selcted').html(text);
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.del').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-ul-li').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<ul><li">'+text+'</li></ul>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.del').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-ol-li').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<ol><li>'+text+'</li></ol>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.del').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-blockquote').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<blockquote>'+text+'</blockquote>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.del').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-hr').click(function(){
				var text = h1.text();
				jQuery('.selcted').after('<hr>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.del').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-align-left').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','left');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.del').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-align-center').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','center');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.del').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-align-right').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','right');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.del').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-add-link').click(function(){
				var text = h1.text();
				jQuery('#link_page').fadeIn(100);
 				jQuery('#url-field1').val('http://');
 				jQuery('#link-title-field1').val(text);
 				jQuery('#wp-link-submit1').click(function(){
 					var a = jQuery('#url-field1').val();
					var title =jQuery('#link-title-field1').val();
					jQuery('.selcted').html('<a href = "'+a+'">'+title+'</a>');
					h1.css({color:'#000 ',});
					h1.removeClass('selcted');
					jQuery('#link_page').fadeOut(100);
 				})
				h1.click(function(event){
					event.preventDefault();
				})
			})
		})
		jQuery('.del').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-remove-link').click(function(){
				var text = h1.text();
				jQuery('.selcted').html(text);
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})                             				
	                                 		//---------------ins button in visually----------------------//	
	    jQuery('.ins').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');
			jQuery('#i-bold').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<strong>'+text+'</strong>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})	
		jQuery('.ins').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-italic').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<em>'+text+'</em>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.ins').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-through').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<del>'+text+'</del>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.ins').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-ul-li').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<ul><li">'+text+'</li></ul>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.ins').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-ol-li').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<ol><li>'+text+'</li></ol>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.ins').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-blockquote').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<blockquote>'+text+'</blockquote>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.ins').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-hr').click(function(){
				var text = h1.text();
				jQuery('.selcted').after('<hr>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.ins').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-align-left').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','left');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.ins').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-align-center').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','center');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.ins').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-align-right').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','right');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.ins').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-add-link').click(function(){
				var text = h1.text();
				jQuery('#link_page').fadeIn(100);
 				jQuery('#url-field1').val('http://');
 				jQuery('#link-title-field1').val(text);
 				jQuery('#wp-link-submit1').click(function(){
 					var a = jQuery('#url-field1').val();
					var title =jQuery('#link-title-field1').val();
					jQuery('.selcted').html('<a href = "'+a+'">'+title+'</a>');
					h1.css({color:'#000 ',});
					h1.removeClass('selcted');
					jQuery('#link_page').fadeOut(100);
 				})
				h1.click(function(event){
					event.preventDefault();
				})
			})
		})
		jQuery('.ins').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-remove-link').click(function(){
				var text = h1.text();
				jQuery('.selcted').html(text);
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})                             		
	                                 		//---------------ul button in visually----------------------//	
	    jQuery('.ul').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');
			jQuery('#i-bold').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<strong>'+text+'</strong>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})	
		jQuery('.ul').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-italic').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<em>'+text+'</em>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.ul').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-through').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<del>'+text+'</del>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.ul').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-ul-li').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<li>'+text+'</li>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.ul').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-ol-li').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<ol><li>'+text+'</li></ol>').addClass('ul');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.ul').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-blockquote').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<blockquote>'+text+'</blockquote>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.ul').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-align-left').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','left');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.ul').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-hr').click(function(){
				var text = h1.text();
				jQuery('.selcted').after('<hr>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.ul').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-align-center').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','center');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.ul').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-align-right').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','right');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.ul').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-add-link').click(function(){
				var text = h1.text();
				jQuery('#link_page').fadeIn(100);
 				jQuery('#url-field1').val('http://');
 				jQuery('#link-title-field1').val(text);
 				jQuery('#wp-link-submit1').click(function(){
 					var a = jQuery('#url-field1').val();
					var title =jQuery('#link-title-field1').val();
					jQuery('.selcted').html('<a href = "'+a+'">'+title+'</a>');
					h1.css({color:'#000 ',});
					h1.removeClass('selcted');
					jQuery('#link_page').fadeOut(100);
 				})
				h1.click(function(event){
					event.preventDefault();
				})
			})
		})
		jQuery('.ul').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-remove-link').click(function(){
				var text = h1.text();
				jQuery('.selcted').html(text);
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})  
	                                 		//---------------ol button in visually----------------------//
	    jQuery('.ol').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');
			jQuery('#i-bold').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<strong>'+text+'</strong>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})	
		jQuery('.ol').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-italic').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<em>'+text+'</em>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.ol').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-through').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<del>'+text+'</del>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.ol').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-ul-li').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<ul><li">'+text+'</li></ul>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.ol').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-ol-li').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<li>'+text+'</li>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.ol').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-blockquote').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<blockquote>'+text+'</blockquote>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.ol').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-align-left').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','left');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.ol').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-hr').click(function(){
				h1.after('<hr>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.ol').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-align-center').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','center');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.ol').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-align-right').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','right');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.ol').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-add-link').click(function(){
				var text = h1.text();
				jQuery('#link_page').fadeIn(100);
 				jQuery('#url-field1').val('http://');
 				jQuery('#link-title-field1').val(text);
 				jQuery('#wp-link-submit1').click(function(){
 					var a = jQuery('#url-field1').val();
					var title =jQuery('#link-title-field1').val();
					jQuery('.selcted').html('<a href = "'+a+'">'+title+'</a>');
					h1.css({color:'#000 ',});
					h1.removeClass('selcted');
					jQuery('#link_page').fadeOut(100);
 				})
				h1.click(function(event){
					event.preventDefault();
				})
			})
		})
		jQuery('.ol').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-remove-link').click(function(){
				var text = h1.text();
				jQuery('.selcted').html(text);
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})                             			
	                                 		//---------------code button in visually----------------------//	
	    jQuery('.code').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');
			jQuery('#i-bold').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<strong>'+text+'</strong>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})	
		jQuery('.code').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-italic').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<em>'+text+'</em>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.code').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-through').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<del>'+text+'</del>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.code').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-ul-li').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<ul><li">'+text+'</li></ul>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.code').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-ol-li').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<ol><li>'+text+'</li></ol>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.code').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-blockquote').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<blockquote>'+text+'</blockquote>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.code').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-align-left').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','left');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.code').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-hr').click(function(){
				var text = h1.text();
				jQuery('.selcted').after('<hr>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.code').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-align-center').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','center');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.code').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-align-right').click(function(){
				var text = h1h1.text();
				jQuery('.selcted').attr('align','right');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.code').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-add-link').click(function(){
				var text = h1.text();
				jQuery('#link_page').fadeIn(100);
 				jQuery('#url-field1').val('http://');
 				jQuery('#link-title-field1').val(text);
 				jQuery('#wp-link-submit1').click(function(){
 					var a = jQuery('#url-field1').val();
					var title =jQuery('#link-title-field1').val();
					jQuery('.selcted').html('<a href = "'+a+'">'+title+'</a>');
					h1.css({color:'#000 ',});
					jQuery('#link_page').fadeOut(100);
					h1.removeClass('selcted');
 				})
				h1.click(function(event){
					event.preventDefault();
				})
			})
		})
		jQuery('.code').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-remove-link').click(function(){
				var text = h1.text();
				jQuery('.selcted').html(text);
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})   
	                                 		//---------------pre button in visually----------------------//	
	    jQuery('.pre').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');
			jQuery('#i-bold').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<strong>'+text+'</strong>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})	
		jQuery('.pre').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-italic').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<em>'+text+'</em>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.pre').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-through').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<del>'+text+'</del>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.pre').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-ul-li').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<ul><li">'+text+'</li></ul>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.pre').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-ol-li').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<ol><li>'+text+'</li></ol>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.pre').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-blockquote').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<blockquote>'+text+'</blockquote>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.pre').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-hr').click(function(){
				var text = h1.text();
				jQuery('.selcted').after('<hr>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.pre').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-align-left').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','left');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.pre').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-align-center').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','center');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.pre').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-align-right').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','right');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.pre').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-add-link').click(function(){
				var text = h1.text();
				jQuery('#link_page').fadeIn(100);
 				jQuery('#url-field1').val('http://');
 				jQuery('#link-title-field1').val(text);
 				jQuery('#wp-link-submit1').click(function(){
 					var a = jQuery('#url-field1').val();
					var title =jQuery('#link-title-field1').val();
					jQuery('.selcted').html('<a href = "'+a+'">'+title+'</a>');
					h1.css({color:'#000 ',});
					h1.removeClass('selcted');
					jQuery('#link_page').fadeOut(100);
 				})
				h1.click(function(event){
					event.preventDefault();
				})
			})
		})
		jQuery('.pre').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-remove-link').click(function(){
				var text = h1.text();
				jQuery('.selcted').html(text);
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})                             		
	                                 		//---------------img button in visually----------------------//	
	    jQuery('.img').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');
			jQuery('#i-bold').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<strong>'+text+'</strong>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})	
		jQuery('.img').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-italic').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<em>'+text+'</em>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.img').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-through').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<del>'+text+'</del>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.img').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-ul-li').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<ul><li">'+text+'</li></ul>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.img').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-ol-li').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<ol><li>'+text+'</li></ol>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.img').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-blockquote').click(function(){
				var text = h1.text();
				jQuery('.selcted').html('<blockquote>'+text+'</blockquote>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.img').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-align-left').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','left');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.img').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-hr').click(function(){
				var text = h1.text();
				jQuery('.selcted').after('<hr>');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.img').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-align-center').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','center');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.img').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-align-right').click(function(){
				var text = h1.text();
				jQuery('.selcted').attr('align','right');
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})
		jQuery('.img').click(function(){
			var h = jQuery(this).css({color:'red ',});	
			h1 = h.addClass('selcted');
			jQuery('#i-add-link').click(function(){
				var text = h1.text();
				jQuery('#link_page').fadeIn(100);
 				jQuery('#url-field1').val('http://');
 				jQuery('#link-title-field1').val(text);
 				jQuery('#wp-link-submit1').click(function(){
 					var a = jQuery('#url-field1').val();
					var title =jQuery('#link-title-field1').val();
					jQuery('.selcted').html('<a href = "'+a+'">'+title+'</a>');
					h1.css({color:'#000 ',});
					h1.removeClass('selcted');
					jQuery('#link_page').fadeOut(100);
 				})
				h1.click(function(event){
					event.preventDefault();
				})
			})
		})
		jQuery('.img').click(function(){
			var h = jQuery(this).css({color:'red ',});
			h1 = h.addClass('selcted');	
			jQuery('#i-remove-link').click(function(){
				var text = h1.text();
				jQuery('.selcted').html(text);
				h1.css({color:'#000 ',});
				h1.removeClass('selcted');
			})
		})                             						
	})						
	jQuery('#description-html').click(function(){
		jQuery('#media-button').fadeIn(100);
		jQuery('#visually').fadeOut(100);
		jQuery('#buttons_title').fadeOut(100);
		jQuery('#qt_description_toolbar').fadeIn(100);
		var h =jQuery("#visually").find('h3');
		var b = jQuery("#visually").find('strong');
		var i = jQuery("#visually").find('em');
		var link =jQuery("#visually").find('a');
		var bq = jQuery("#visually").find('blockquote');
		var del = jQuery("#visually").find('del');
		var ins =jQuery("#visually").find('ins');
		var ul = jQuery("#visually").find('ul');
		var ol = jQuery("#visually").find('ol');
		var li = jQuery("#visually").find('li');
		var code =jQuery("#visually").find('code');
		var pre = jQuery("#visually").find('pre');
		var hr = jQuery("#visually").find('hr');
		var img = jQuery("#visually").find('img');
		h.removeClass('h3');
		b.removeClass('strong');
		i.removeClass('em');
		link.removeClass('link');
		bq.removeClass('blockquote');
		del.removeClass('del');
		ins.removeClass('ins');
		ul.removeClass('ul');
		ol.removeClass('ol');
		li.removeClass('li');
		code.removeClass('code');
		pre.removeClass('pre');
		hr.removeClass('hr');
		img.removeClass('img');
		var visually_content=jQuery('#visually').html();
		jQuery('.wp-editor-area').val(visually_content);
		jQuery('.wp-editor-area').fadeIn(100);
	});
}
function add_calendar(){
	jQuery('#Add_a_Calendar').click(function(){
		jQuery('#Add_Calendar_div').fadeIn(100);
		jQuery('#content_settings').css({opacity:0.5,});
		jQuery('#save_submit').val('Save');
		jQuery('#title_item').val('');
		jQuery('#Default_item').val('');
		jQuery('#def_month').val('');
		
	});
	jQuery('#Cancel').click(function(){
		jQuery('#Add_Calendar_div').fadeOut(100);
		jQuery('#content_settings').css({opacity:1,});
	});
		jQuery('#save_submit').click(function(){
		var x;
		var a=jQuery('#title_item').val();
		var b=jQuery('#Default_item').val();
		var c=jQuery('#def_month').val();
		var d=jQuery('#save_submit').val();
		var e=jQuery('#hidden_button').val();
		jQuery(':radio').each(function() {
			if(jQuery(this).is(':checked'))
			{	
				x=jQuery(this).val();
			}
		});
		var params=a+'^'+b+'^'+c+'^'+x+'^'+d+'^'+e;
		var ajaxurl = object.ajaxurl;
		var data = {
		   	action: 'Send_data', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
			foobar: params, // translates into $_POST['foobar'] in PHP				
		};
		jQuery.post(ajaxurl, data, function(response) {
		});
		location.reload();
	});
		jQuery('.title_item').click(function(){
			window.id =jQuery(this).attr('id');
			var ajaxurl = object.ajaxurl;
			var data = {
			   	action: 'update_menager',
				x: id,
			};
			jQuery.post(ajaxurl, data, function(response) {
				var t =response;
				var c = t.split('(5551)')
				jQuery('#Add_Calendar_div').fadeIn(100);
				jQuery('#content_settings').css({opacity:0.5,});
				jQuery('#save_submit').val('Update');
				jQuery('#save_submit').attr('type','button');
				jQuery('#title_item').val(c[1]);
				jQuery('#Default_item').val(c[2]);
				jQuery('#def_month').val(c[3]);
				jQuery('.radio').each(function(){
					if(jQuery(this).val()==c[4]){
						jQuery(this).attr('checked','checked');
					}
				})
			});
		})
		jQuery('#save_submit').click(function(){
			if(jQuery(this).val()=='Update'){
				var title= jQuery('#title_item').val();
				var item=jQuery('#Default_item').val();
				var def_month=jQuery('#def_month').val();
				var radio = jQuery('.radio').val();
				var ajaxurl = object.ajaxurl;
				var data = {
				   	action: 'update_menager1', 
					x: id, y:title,	z:item,a:def_month,	b:radio,	
				};
				jQuery.post(ajaxurl, data, function(response) {
					//location.reload();
				})
			}
		})
}
function add_Category(){
	jQuery('#Add_a_Category').click(function(){
		jQuery('#add_category_page').fadeIn(100);
		jQuery('.Published_key').each(function(){
			if(jQuery(this).val()=='Yes'){
				jQuery(this).attr('checked', 'checked');
			};
		})
	});
}
function add_date(){
	var d = new Date();
	var date = d.toDateString();
	var time =  d.toUTCString();
	var n = date.slice( 4,  date.length ) ;
	jQuery('.date3').val(n);
	jQuery('.date3').click(function(){
		jQuery('.date3').attr('type', 'date');
	})
}
function content_settings_category1(){
	jQuery('.man_ev').click(function(){
		var id_tr = jQuery(this).attr('id').split('');
	 	var id3 = jQuery(this);
		var id = id_tr[1];
		jQuery('#input_hidden_id').val(id);
		var name =jQuery('.id_item1').attr('name');
		jQuery('.id_item1').each(function(){
			var name =jQuery(this).attr('name');
			if(name != id){
				jQuery(this).parent().fadeOut(100);
			}else if(name == id){
				jQuery(this).parent().removeClass('odd');
				jQuery(this).parent().removeClass('even');
				jQuery(this).parent().addClass('selcted_tr');
				jQuery('.selcted_tr').each(function(){
					var number = jQuery('.selcted_tr').index(this);
					var tr_num = number%2;
					if(tr_num ==1){
						jQuery(this).addClass('odd');
					}
					else if(tr_num ==0){
							jQuery(this).addClass('even');
					}
				})
			}
		})
		jQuery('#input_hidden_id').val(id);
		var parent_tr = id3.parent();
		var t = parent_tr.find('.title_item');
		var v = t.text();
		jQuery('#content_settings_category1').fadeIn(100);
		jQuery('#content_settings').fadeOut(100);
		jQuery('#text_1').text(v);
	});
	jQuery('#Back').click(function(){
		jQuery('#content_settings_category1').fadeOut(100);
		jQuery('#content_settings').fadeIn(100);
	})
}
function Add_an_event(){
	jQuery('#Add_an_event').click(function(){
		jQuery('#id12').val('');
		jQuery('#add_category_page1').fadeIn(100);
		jQuery('#content_settings_category1').fadeOut(100);
		jQuery('#repeat_event').fadeIn(100);
		jQuery('#block_it').fadeIn(100);
		jQuery('.Published_key').each(function(){
			if(jQuery(this).val()=='Yes'){
				jQuery(this).attr('checked','checked');
			}
		})
		if(jQuery('#sev_event_set1').val()=='Save')
		{
			jQuery('#Title_category1').val('');
			jQuery('#selected_select').val(' --Select category-- ');
			jQuery('#data33').val('dd.mm.yyyy');
			jQuery('.time1').val('');
			jQuery('.time2').val('');
			jQuery('.time3').val('');
			jQuery('.time4').val('');
			jQuery('#description1').val('');
			jQuery('#id12').val('');
		}	
	})
	jQuery('#cancel_add_category_page1').click(function(){
		jQuery('#add_category_page1').fadeOut(100);
		jQuery('#repeat_event').fadeOut(100);
		jQuery('#block_it').fadeOut(100);
		jQuery('#content_settings_category1').fadeIn(100);
	})
	jQuery('.title_item1').click(function(){
		window.id  = jQuery(this).attr('id');
		jQuery('#id12').val(id);
		jQuery('#content_settings_category1').fadeOut(100);
		jQuery('#add_category_page1').fadeIn(100);
		jQuery('#repeat_event').fadeIn(100);
		jQuery('#block_it').fadeIn(100);
		jQuery('#sev_event_set1').val('Update');
		jQuery('#sev_event_set1').attr('type','button');
		var ajaxurl = object.ajaxurl;
		var data = {
		   	action: 'update_event', 
			x:id,	
		};
		jQuery.post(ajaxurl, data, function(response) {
			var t = response;
			var c= t.split('(5551)');
			jQuery('#Title_category1').val(c[1]);
			jQuery('#Select_ctegory1').val(c[2]);
			jQuery('#data33').val(c[3]);
			var j=c[4].split(':');
			var t = c[5].split(':');
			jQuery('.time1').val(j[0]);
			jQuery('.time2').val(j[1]);
			jQuery('.time3').val(t[0]);
			jQuery('.time4').val(t[1]);
			jQuery('#description1').val(c[7]);
			jQuery('.option_repeat_event').each(function(){
				if(jQuery(this).val()=='Don\'t repeat this event')
				{
					jQuery(this).attr('checked', false);
				}
				else if(jQuery(this).val()==c[8])
				{
						jQuery(this).attr('checked', 'checked');
				}
			})
			jQuery('.Published_key').each(function(){
				if(jQuery(this).val()==c[9]){
					jQuery(this).attr('checked', 'checked').val();
				};
			})	
		})
		var title = jQuery('#Title_category1').val();
		var select = jQuery('#Select_ctegory1').val();
		var data33 = jQuery('#data33').val();
		var time1 = jQuery('.time1').val();
		var time2 = jQuery('.time2').val();
		var time3 = jQuery('.time3').val();
		var time4 = jQuery('.time4').val();
		var description1 = jQuery('#description1').val();
		jQuery('.option_repeat_event').each(function(){
			if(jQuery(this).is(':checked')){
				jQuery(this).val();
			}
		})
		var hidden = jQuery('#input_hidden_id').val();
		var repeat_ev =jQuery(this).val();
		jQuery('.Published_key').each(function(){
			if(jQuery(this).is(":checked")){
				var key = jQuery(this).val();
				jQuery('#display_media_button1').fadeIn(100);
				jQuery('#id12').val(id);
				jQuery('#title12').val(title);
				jQuery('#select12').val(select);
				jQuery('#data3312').val(data33);
				jQuery('#time112').val(time1);
				jQuery('#time212').val(time2);
				jQuery('#time312').val(time3);
				jQuery('#time412').val(time4);
				jQuery('#description112').val(description1);
				jQuery('#repeat_ev12').val(repeat_ev);
				jQuery('#hidden12').val(hidden);
				jQuery('#key12').val(key);
	 		}	
		})
		jQuery('#sev_event_set1').click(function(){
			var title = jQuery('#Title_category1').val();
			var select = jQuery('#Select_ctegory1').val();
			var data33 = jQuery('#data33').val();
			var time1 = jQuery('.time1').val();
			var time2 = jQuery('.time2').val();
			var time3 = jQuery('.time3').val();
			var time4 = jQuery('.time4').val();
			var description1 = jQuery('#description1').val();
			var key = jQuery('.Published_key').val();
			if(jQuery(this).val()=='Update'){
				var t = time1+':'+time2;
				var j =  time3+':'+time4;
				var ajaxurl = object.ajaxurl;
				var data = {
				   	action: 'update_event1', 
					x:id, y:title, z:select, a:data33, b:t, c:j, d:description1, e:repeat_ev, f:hidden, k:key,
				};
				jQuery.post(ajaxurl, data, function(response) {
					location.reload();
				})
			}
		})
	})
}
//-------------------------------------------------------
function for_tr(){
	jQuery('.tr_color').each(function(){
		var number = jQuery('.tr_color').index(this);
		var tr_num = number%2;
		if(tr_num ==1)
		{
			jQuery(this).addClass('odd');
		}
		else if(tr_num ==0)
		{
			jQuery(this).addClass('even');
		}
	})
	jQuery('.delete_item').click(function(){
		var id = jQuery(this).attr('id');
		ajaxurl = object.ajaxurl;
		var data ={action: 'delete_item', x:id};
		jQuery.post(ajaxurl, data, function(response){
	 	});
	})
	jQuery('.published_item').click(function(){
		var value = jQuery(this).text();
		var name = jQuery(this).attr('name');
		ajaxurl = object.ajaxurl;
		var data ={action: 'published_item', x:value,y:name};
		jQuery.post(ajaxurl, data, function(response){
	 	});
	})
	jQuery('.title_item').click(function(){
		var id = jQuery(this).attr('id');
		jQuery('#add_category_page').fadeIn(100);
		ajaxurl = object.ajaxurl;
		var data ={action: 'edit_data', x:id};
		jQuery.post(ajaxurl, data, function(response){
	 	});
	})
	jQuery('.delete_item2').click(function(){
		var id = jQuery(this).attr('id');
		ajaxurl = object.ajaxurl;
		var data ={action: 'delete_item2', x:id};
		jQuery.post(ajaxurl, data, function(response){
			location.reload();
	 	});
	})
	jQuery('.published_item2').click(function(){
		var value1 = jQuery(this).text();
		var name1 = jQuery(this).attr('name');
		ajaxurl = object.ajaxurl;
		var data ={action: 'published_item2', x:value1,y:name1};
		jQuery.post(ajaxurl, data, function(response){
			location.reload();
	 	});
	})
	jQuery('.delete_item1').click(function(){
		var id = jQuery(this).attr('id');
		 jQuery(this).parent().fadeOut(100);
		 jQuery('.tr_color').each(function(){
			var number = jQuery('.tr_color').index(this);
			var tr_num = number%2;
			if(tr_num ==1){
				jQuery(this).addClass('odd');
			}
			else if(tr_num ==0){
				jQuery(this).addClass('even');
			}
		})
		ajaxurl = object.ajaxurl;
		var data ={action: 'delete_item1', x:id};
		jQuery.post(ajaxurl, data, function(response){
	 	});
	})
	jQuery('.published_item1').click(function(){
		var element =  jQuery(this);
		var value = jQuery(this).text();
		var name = jQuery(this).attr('name');
		if(value =='Yes'){
			element.text('No');
		}else element.text('Yes');
		ajaxurl = object.ajaxurl;
		var data ={action: 'published_item1', x:value,y:name};
		jQuery.post(ajaxurl, data, function(response){
	 	});
	})
}
function repeat_event(){
	jQuery('#block_it').click(function(){
		jQuery(this).fadeOut(100);
		jQuery('#display_repeat_event').fadeIn(100);
		jQuery('#add_category_page1').css({opacity:0.3,});
		jQuery('#repeat_event').animate({
			width:'700px',
			height:'400px',
			top:'20%',
			right:'10%',
		});
		jQuery('#repeat_event').css('background-color','white');
		jQuery('#Click_to_go_sev').fadeIn(100);	
jQuery('.option_repeat_event').click(function(){
	var id = jQuery(this).attr('id');
	var cat = id.split('');
 	var j = cat.slice(8,9);
	jQuery('.option_repeat_event').each(function(){
	 	var id1 = jQuery(this).attr('id')
	 	if(id1!=id){
	 		jQuery(this).removeAttr('checked');
	 	}else{
	 		jQuery(this).attr('checked', true);
	 		jQuery('#option_click').fadeIn(100);
	 		 jQuery('#option_click').animate({
 		   		width:'100%',
		 		height:'100px',
 			 });
 			if(id1=='option_11'){
	 			jQuery('#option_click').hide();
	 		}else if(id1=='option_12'){
	 			jQuery('#Repeat_until2').fadeIn(100);
	 		 }
	 		else if(id1=='option_10'){
	 				jQuery('#option_click').hide();
	 		}
	 	}
 	})
	jQuery('.Week_days').click(function(){
		jQuery(this).attr('checked', true);
	})
})
		})
		jQuery('#Click_to_go_sev').click(function(){
			jQuery('#repeat_event').animate({
				width:'300px',
				height:'130px',
				top:'120px',
				right: '20px',
			});
			jQuery('#add_category_page1').css({opacity:1,});
			jQuery('#block_it').fadeIn(100);
			jQuery('#Click_to_go_sev').fadeOut();
			jQuery('#option_click').fadeOut(100);
			var body = jQuery("html, body");
			body.animate({scrollTop:'700'}, '2000');                          
			jQuery('#display_repeat_event').fadeOut(100);
			var i = 1;
			var Week = [];
			jQuery('.Week_days').each(function(){
				if(jQuery(this).is(":checked")){
					Week[i] = jQuery(this).val();
					i++;
				}
			})
			 var weeks = Week;
			 var Week_days = weeks.join(',');
			 var Week_days1  =Week_days.slice(1);
			 jQuery('#option_12').val(Week_days1);
		})	
}
function reset_click(){
	jQuery('#reset').click(function(){
		jQuery('.form_item2').val('');
		jQuery('#error_text1').val('');
		jQuery('#error_text').val('');
	})
	jQuery('#reset1').click(function(){
		jQuery('.form_item3').val('');
		jQuery('#error_text1').val('');
	})
	jQuery('#reset3').click(function(){
		jQuery('.form_item3').val('');
		jQuery('#error_text1').val('');
		jQuery('#error_text').val('');
	})
}
	function search_title(){
		jQuery('.title_item').each(function(){
			var count = jQuery('.title_item').size();
				if(count==1){
					jQuery('#item_0').text(count+' item');
				}else{
					jQuery('#item_0').text(count+' items');
				}
		})
		jQuery('.title_item').each(function(){
			var count = jQuery('.title_item').size();
				if(count==1){
					jQuery('#item_01').text(count+' item');
				}else{
					jQuery('#item_01').text(count+' items');
				}
		})
		jQuery('.title_item1').each(function(){
			var count = jQuery('.title_item').size();
				if(count==1){
					jQuery('#item_0').text(count+' item');
				}else{
					jQuery('#item_0').text(count+' items');
				}
		})
		jQuery('#datedate').click(function(){
			var text = jQuery('.form_item2').val();
			if(text!=''){
				jQuery('.title_item1').each(function(){
					var name1 =jQuery(this).attr('name');
					if(name1!=text){
						jQuery(this).parent().fadeOut(100);
						jQuery(this).parent().addClass('aaa');
						jQuery('.aaa').each(function(){
							 jQuery('.aaa');
						})
						if(c== jQuery('.aaa').size()){
							jQuery('#item_0').text('0 item');
							jQuery('#error_text2').text('* Requested Category does not exist!');
							jQuery('.tr_color').removeClass('aaa');
						}else{
							jQuery('#error_text2').text('');
						}
					}else if(name1==text){
						jQuery(this).parent().removeClass('odd');
						jQuery(this).parent().removeClass('even');
						jQuery(this).parent().fadeIn(100);
						jQuery('#error_text2').text('');
						jQuery(this).parent().addClass('selected');
						jQuery('.selected').each(function(){
							var number = jQuery('.selected').index(this);
							var tr_num = number%2;
							if(tr_num ==1){
								jQuery(this).addClass('odd');
							}
							else if(tr_num ==0){
									jQuery(this).addClass('even');
							}
						})
						var count = jQuery('.selected').size();
						if(count==1){
							jQuery('#item_0').text(count+' item');
							jQuery('#error_text2').text('');
							jQuery('.tr_color').removeClass('selected');
						 }
					
						else if(count>1){
							jQuery('#item_0').text(count+' item');
							jQuery('#error_text2').text('');
							jQuery('.tr_color').removeClass('selected');
						}
					}
					
				})
			}
			else 
			{
				jQuery('#error_text2').text('* Please insert Title for searching...');
			}		
		})
		window.c =jQuery('.tr_color').size();
		jQuery('#add_title').click(function(){
			var text = jQuery('.form_item3').val();
			if(text!=''){
				jQuery('.title_item').each(function(){
					var name1 =jQuery(this).attr('name');
					if(name1!=text){
						jQuery(this).parent().fadeOut(100);
						jQuery(this).parent().addClass('aaa');
						jQuery('.aaa').each(function(){
							 jQuery('.aaa');
						})
						if(c== jQuery('.aaa').size()){
							jQuery('#item_0').text('0 item');
							jQuery('#error_text').text('* Requested Category does not exist!');
							jQuery('.form_item3').val('');
							jQuery('.tr_color').removeClass('aaa');
						}else if(c != jQuery('.aaa').size()){
							var t = c-jQuery('.aaa').size();
							jQuery('#item_0').text(t+' item');
						}else{
							jQuery('#error_text').text('');
						}
					}else if(name1==text){
						jQuery(this).parent().removeClass('odd');
						jQuery(this).parent().removeClass('even');
						jQuery(this).parent().fadeIn(100);
						jQuery('#error_text').text('');
						jQuery(this).parent().addClass('selected');
						jQuery('.selected').each(function(){
							var number = jQuery('.selected').index(this);
							var tr_num = number%2;
							if(tr_num ==1){
								jQuery(this).addClass('odd');
							}
							else if(tr_num ==0){
									jQuery(this).addClass('even');
							}
						})
						var count = jQuery('.selected').size();
						if(count==1){
							jQuery('#item_0').text(count+' item');
							jQuery('#error_text').text('');
							jQuery('.tr_color').removeClass('selected');
						 }
						else if(count>1){
							jQuery('#item_0').text(count+' item');
							jQuery('#error_text').text('');
							jQuery('.tr_color').removeClass('selected');
						}
					}
				})
			}
			else 
			{
				jQuery('#error_text').text('* Please insert Title for searching...');
			}		
		})
		jQuery('#add_title1').click(function(){
				var text = jQuery('.form_item3').val();
				if(text!=''){
					jQuery('.title_item').each(function(){
						var name1 =jQuery(this).attr('name');
						if(name1!=text){
							jQuery(this).parent().fadeOut(100);
							jQuery(this).parent().addClass('aaa');
							jQuery('.aaa').each(function(){
								 jQuery('.aaa');
							})
							if(c== jQuery('.aaa').size()){
								jQuery('#item_01').text('0 item');
								jQuery('#error_text1').text('* Requested Category does not exist!');
								jQuery('.form_item3').val('');
								jQuery('.tr_color').removeClass('aaa');
							}else{
								jQuery('#error_text1').text('');
							}
						}else if(name1==text){
							jQuery(this).parent().removeClass('odd');
							jQuery(this).parent().removeClass('even');
							jQuery(this).parent().fadeIn(100);
							jQuery('#error_text1').text('');
							jQuery(this).parent().addClass('selected');
							jQuery('.selected').each(function(){
								var number = jQuery('.selected').index(this);
								var tr_num = number%2;
								if(tr_num ==1){
									jQuery(this).addClass('odd');
								}
								else if(tr_num ==0){
										jQuery(this).addClass('even');
								}
							})
							var count = jQuery('.selected').size();
							if(count==1){
								jQuery('#item_01').text(count+' item');
								jQuery('#error_text1').text('');
								jQuery('.tr_color').removeClass('selected');
							 }
							else if(count>1){
								jQuery('#item_01').text(count+' item');
								jQuery('#error_text1').text('');
								jQuery('.tr_color').removeClass('selected');
							}
						}
					})
				}
				else
				{
					jQuery('#error_text1').text('* Please insert Title for searching...');
				}		
			})
	};
	function edit_title(){
		jQuery('.title_item').click(function(){
			window.id = jQuery(this).parent().attr('id');
			ajaxurl = object.ajaxurl;
			var data ={action: 'edit_title', x:id};
			jQuery.post(ajaxurl, data, function(response){
				var t = response;
				var c= t.split('(5551)');
				jQuery('#cat_title').val(c[1]);
				jQuery('#category_color_1').val(c[2]);
				jQuery('#description1').val(c[4]);
				jQuery('.Published_key').each(function(){
					if(jQuery(this).val()==c[5]){
						jQuery(this).attr('checked', 'checked');
					};
					jQuery('#sev_event_set').val('Update');
					jQuery('#sev_event_set').attr('type','button');
				})	
		 	});
			jQuery('#media-button').click(function(){
				var title = jQuery('#cat_title').val();
				var color = jQuery('#category_color_1').val();
					var des = jQuery('#description1').val();
					jQuery('.Published_key').each(function(){
						if(jQuery(this).is(":checked")){
							var key = jQuery(this).val();
							if(jQuery('#sev_event_set').val()=='Update'){
								jQuery('#id11').val(id);
								jQuery('#title11').val(title);
								jQuery('#color11').val(color);
								jQuery('#description').val(des);
								jQuery('#Published').val(key);
							};
						}
					})
				})
				jQuery('#sev_event_set').click(function(){
					var title = jQuery('#cat_title').val();
					var color = jQuery('#category_color_1').val();
					var des = jQuery('#description1').val();
					jQuery('.Published_key').each(function(){
						if(jQuery(this).is(":checked")){
							var key = jQuery(this).val();
							if(jQuery('#sev_event_set').val()=='Update'){
								ajaxurl = object.ajaxurl;
								var data ={action: 'edit_title1', x:id,y:title,a:color,b:des,c:key};
									jQuery.post(ajaxurl, data, function(response){
									location.reload();
								})
							};
						}
					})
				})	
		})	
	}

function action_for_events(){

	jQuery(window).scroll(function(){
		if(jQuery(window).scrollTop()>0 ){
			var scrol = jQuery(window).scrollTop();
			jQuery('.JI_demo_section').css({'top':scrol,});
		}	
	
	})
	
	jQuery('#action2_1').change(function(){
		var color_title = jQuery(this).val();
		jQuery('#action2').val(color_title);
		jQuery('#JI_event_title').css({'color':color_title,})
	})

	jQuery('#action2').change(function(){
		var color_title = jQuery(this).val();
		jQuery('#action2_1').val(color_title);
		jQuery('#JI_event_title').css({'color':color_title,})
	})

	jQuery('#action3_2').change(function(){
		var shadow_title = jQuery(this).val();
		var shadow_title1 = jQuery('#action3_1').val();
		var shadow_title2 = jQuery('#action3').val();
		jQuery('#JI_event_title').css({'text-shadow':shadow_title2+'px '+shadow_title1+'px '+shadow_title,});
	})
	jQuery('#action3_1').change(function(){
		var shadow_title = jQuery(this).val();
		var shadow_title1 = jQuery('#action3_2').val();
		var shadow_title2 = jQuery('#action3').val();
		jQuery('#JI_event_title').css({'text-shadow':shadow_title2+'px '+shadow_title+'px '+shadow_title1,});
	})
	jQuery('#action3').change(function(){
		var shadow_title = jQuery(this).val();
		var shadow_title1 = jQuery('#action3_2').val();
		var shadow_title2 = jQuery('#action3_1').val();
		jQuery('#JI_event_title').css({'text-shadow':shadow_title+'px '+shadow_title2+'px '+shadow_title1,});
	})
	jQuery('#action4').change(function(){
		var size_title = jQuery(this).val();
		jQuery('#action4_1').val(size_title);
		jQuery('#JI_event_title').css({'font-size':size_title+'px',});
	})
	jQuery('#action4_1').change(function(){
		var size_title = jQuery(this).val();
		jQuery('#action4').val(size_title);
		jQuery('#JI_event_title').css({'font-size':size_title+'px',});
	})
	jQuery('#action5').change(function(){
		var font_title = jQuery(this).val();
		jQuery('#JI_event_title').css({'font-family':font_title,});
	})

	
	jQuery('#action7').change(function(){

		var font_title = jQuery(this).val();
		if(font_title == 'scale-'){

			jQuery('#JI_hover').html('<style>.JI_calendar1:hover .JI_image_for_event{-webkit-transform: scale(0.9); -ms-transform: scale(0.9); transform: scale(0.9) ; border-radius:20px;}</style>');
			
			}else if(font_title == 'opacity'){
				jQuery('#JI_hover').html('<style>.JI_calendar1:hover .JI_image_for_event{opacity:0.6;}</style>');

			}else if(font_title == 'scale+'){
				jQuery('#JI_hover').html('<style>.JI_calendar1:hover .JI_image_for_event{-webkit-transform: scale(1.1); -ms-transform: scale(1.1); transform: scale(1.1) ; border-radius:20px;}</style>');

			}else if(font_title == 'rotate'){

				var w = jQuery('.JI_image_for_event').width();

				jQuery('#JI_hover').html('<style>.JI_calendar1:hover .JI_image_for_event{transform:rotate(20deg);border-radius:'+w/2+'px;}</style>');


			}else if(font_title == 'translate'){
				jQuery('#JI_hover').html('<style>.JI_calendar1:hover .JI_image_for_event{ transform:translate(0px,-10px);}</style>');

			}
			else if(font_title == 'none'){
				jQuery('#JI_hover').html('<style>.JI_calendar1:hover .JI_image_for_event{ }</style>');
			}
		
	})	
	jQuery('#action8').change(function(){
		var radius_image = jQuery(this).val();
		var w = jQuery('.JI_image_for_event').width();
		jQuery('#action8').attr('max',w/2);
		
		jQuery('#action8_1').val(radius_image);
		jQuery('.JI_image_for_event').css({'border-radius':radius_image+'px',});
	})
	jQuery('#action8_1').change(function(){
		var w = jQuery('.JI_image_for_event').width();
		jQuery('#action8').attr('max',w/2);
		var radius_image = jQuery(this).val();
		jQuery('#action8').val(radius_image);
		jQuery('.JI_image_for_event').css({'border-radius':radius_image+'px',});
	})
	jQuery('#action6_1').change(function(){
		var border_color = jQuery(this).val();
		jQuery('#action6').val(border_color);
		jQuery('.JI_image_for_event').css({'border-color':border_color,});
	})
	jQuery('#action6').change(function(){
		var border_color = jQuery(this).val();
		jQuery('#action6_1').val(border_color);
		jQuery('.JI_image_for_event').css({'border-color':border_color,});
	})
	jQuery('#action9').change(function(){
		var border_image = jQuery(this).val();
		jQuery('#action9_1').val(border_image);
		jQuery('.JI_image_for_event').css({'border':border_image+'px solid gray',});
	})
	jQuery('#action9_1').change(function(){
		var border_image = jQuery(this).val();
		jQuery('#action9').val(border_image);
		jQuery('.JI_image_for_event').css({'border':border_image+'px solid gray',});
	})
	jQuery('#action10').change(function(){
		var width = jQuery(this).val();
		jQuery('#action10_1').val(width);
		jQuery('.JI_image_for_event').css({'width':width,});
	})
	jQuery('#action10_1').change(function(){
		var width = jQuery(this).val();
		jQuery('#action10').val(width);
		jQuery('.JI_image_for_event').css({'width':width,});
	})
	jQuery('#action11').change(function(){
		var height = jQuery(this).val();
		jQuery('#action11_1').val(height);
		jQuery('.JI_image_for_event').css({'height':height,});
	})
	jQuery('#action11_1').change(function(){
		var height = jQuery(this).val();
		jQuery('#action11').val(height);
		jQuery('.JI_image_for_event').css({'height':height,});
	})
	jQuery('#action13_1').change(function(){
		var color1 = jQuery(this).val();
		jQuery('#action13').val(color1);
		jQuery('.JI_date').css({'color':color1,});
	})
	jQuery('#action13').change(function(){
		var color1 = jQuery(this).val();
		jQuery('#action13_1').val(color1);
		jQuery('.JI_date').css({'color':color1,});
	})
	jQuery('#action14_2').change(function(){
		var shadow_date = jQuery(this).val();
		var shadow_date1 = jQuery('#action14_1').val();
		var shadow_date2 = jQuery('#action14').val();
		jQuery('.JI_date').css({'text-shadow':shadow_date2+'px '+shadow_date1+'px '+shadow_date,});
	})
	jQuery('#action14_1').change(function(){
		var shadow_date = jQuery(this).val();
		var shadow_date1 = jQuery('#action14_2').val();
		var shadow_date2 = jQuery('#action14').val();
		jQuery('.JI_date').css({'text-shadow':shadow_date2+'px '+shadow_date+'px '+shadow_date1,});
	})
	jQuery('#action14').change(function(){
		var shadow_date = jQuery(this).val();
		var shadow_date1 = jQuery('#action14_1').val();
		var shadow_date2 = jQuery('#action14_2').val();
		jQuery('.JI_date').css({'text-shadow':shadow_date+'px '+shadow_date1+'px '+shadow_date2,});
	})
	jQuery('#action15').change(function(){
		var size_date = jQuery(this).val();
		jQuery('#action15_1').val(size_date);
		jQuery('.JI_date').css({'font-size':size_date+'px',});
	})
	jQuery('#action15_1').change(function(){
		var size_date = jQuery(this).val();
		jQuery('#action15').val(size_date);
		jQuery('.JI_date').css({'font-size':size_date+'px',});
	})

	jQuery('#action16').change(function(){
		var font_date = jQuery(this).val();
		jQuery('.JI_date').css({'font-family':font_date,});
	})
	
	jQuery('#action19_1').change(function(){
		var color3 = jQuery(this).val();
		jQuery('#action19').val(color3);
		jQuery('.JI_h3_image').css({'color':color3,});
	})
	jQuery('#action19').change(function(){
		var color3 = jQuery(this).val();
		jQuery('#action19_1').val(color3);
		jQuery('.JI_h3_image').css({'color':color3,});
	})
	jQuery('#action20_2').change(function(){
		var shadow_title_ev = jQuery(this).val();
		var shadow_title_ev1 = jQuery('#action20_1').val();
		var shadow_title_ev2 = jQuery('#action20').val();
		jQuery('.JI_h3_image').css({'text-shadow':shadow_title_ev2+'px '+shadow_title_ev1+'px '+shadow_title_ev,});
	})
	jQuery('#action20_1').change(function(){
		var shadow_title_ev = jQuery(this).val();
		var shadow_title_ev1 = jQuery('#action20_2').val();
		var shadow_title_ev2 = jQuery('#action20').val();
		jQuery('.JI_h3_image').css({'text-shadow':shadow_title_ev2+'px '+shadow_title_ev+'px '+shadow_title_ev1,});
	})
	jQuery('#action20').change(function(){
		var shadow_title_ev = jQuery(this).val();
		var shadow_title_ev1 = jQuery('#action20_1').val();
		var shadow_title_ev2 = jQuery('#action20_2').val();
		jQuery('.JI_h3_image').css({'text-shadow':shadow_title_ev+'px '+shadow_title_ev1+'px '+shadow_title_ev2,});
	})
	jQuery('#action35_1').change(function(){
		var color_hov_title = jQuery(this).val();
		jQuery('#action35').val(color_hov_title);
		jQuery('#JI_hover1').html('<style> .JI_calendar1:hover .JI_h3_image{ color:'+color_hov_title+';}</style>');
	})
	jQuery('#action35').change(function(){
		var color_hov_title = jQuery(this).val();
		jQuery('#action35_1').val(color_hov_title);
		jQuery('#JI_hover1').html('<style> .JI_calendar1:hover .JI_h3_image{ color:'+color_hov_title+';}</style>');
	})
	jQuery('#action21').change(function(){
		var size_title_ev = jQuery(this).val();
		jQuery('#action21_1').val(size_title_ev);
		jQuery('.JI_h3_image').css({'font-size':size_title_ev+'px',});
	})
	jQuery('#action21_1').change(function(){
		var size_title_ev = jQuery(this).val();
		jQuery('#action21').val(size_title_ev);
		jQuery('.JI_h3_image').css({'font-size':size_title_ev+'px',});
	})
	jQuery('#action22').change(function(){
		var font_title_ev = jQuery(this).val();
		jQuery('.JI_h3_image').css({'font-family':font_title_ev,});
	})
	
	jQuery('#action24_1').change(function(){
		var color_desc = jQuery(this).val();
		jQuery('#action24').val(color_desc);
		jQuery('.JI_desc_con').css({'color':color_desc,});
	})
	jQuery('#action24').change(function(){
		var color_desc = jQuery(this).val();
		jQuery('#action24_1').val(color_desc);
		jQuery('.JI_desc_con').css({'color':color_desc,});
	})
	jQuery('#action25_2').change(function(){
		var box_desc = jQuery(this).val();
		var box_desc1 = jQuery('#action25_1').val();
		var box_desc2 = jQuery('#action25').val();
		jQuery('.JI_desc_con').css({'text-shadow':box_desc2+'px '+box_desc1+'px '+box_desc,});
	})
	jQuery('#action25_1').change(function(){
		var box_desc = jQuery(this).val();
		var box_desc1 = jQuery('#action25_2').val();
		var box_desc2 = jQuery('#action25').val();
		jQuery('.JI_desc_con').css({'text-shadow':box_desc2+'px '+box_desc+'px '+box_desc1,});
	})
	jQuery('#action25').change(function(){
		var box_desc = jQuery(this).val();
		var box_desc1 = jQuery('#action25_1').val();
		var box_desc2 = jQuery('#action25_2').val();
		jQuery('.JI_desc_con').css({'text-shadow':box_desc+'px '+box_desc1+'px '+box_desc2,});
	})
	jQuery('#action26').change(function(){
		var size_desc = jQuery(this).val();
		jQuery('#action26_1').val(size_desc);
		jQuery('.JI_desc_con').css({'font-size':size_desc+'px',});
	})
	jQuery('#action26_1').change(function(){
		var size_desc = jQuery(this).val();
		jQuery('#action26').val(size_desc);
		jQuery('.JI_desc_con').css({'font-size':size_desc+'px',});
	})
	jQuery('#action27').change(function(){
		var font_desc = jQuery(this).val();
		
		jQuery('.JI_desc_con').css({'font-family':font_desc,});
	})
	jQuery('#action28').change(function(){
		var size_desc_first = jQuery(this).val();
		jQuery('#action28_1').val(size_desc_first);
		jQuery('.JI_first').css({'font-size':size_desc_first+'px',});
	})
	jQuery('#action28_1').change(function(){
		var size_desc_first = jQuery(this).val();
		jQuery('#action28').val(size_desc_first);
		jQuery('.JI_first').css({'font-size':size_desc_first+'px',});
	})
	jQuery('#action29_1').change(function(){
		var background_content = jQuery(this).val();
		jQuery('#action29').val(background_content);
		jQuery('.JI_calendar1').css({'background':background_content,});
	})
	jQuery('#action29').change(function(){
		var background_content = jQuery(this).val();
		jQuery('#action29_1').val(background_content);
		jQuery('.JI_calendar1').css({'background':background_content,});
	})
	jQuery('#action30').change(function(){
		var border_content = jQuery(this).val();
		jQuery('#action30_1').val(border_content);
		jQuery('.JI_calendar1').css({'border':border_content+'px solid gray',});
	})
	jQuery('#action30_1').change(function(){
		var border_content = jQuery(this).val();
		jQuery('#action30').val(border_content);
		jQuery('.JI_calendar1').css({'border':border_content+'px solid gray',});
	})
	jQuery('#action31_1').change(function(){
		var color_border_content = jQuery(this).val();
		jQuery('#action31').val(color_border_content);
		jQuery('.JI_calendar1').css({'border-color':color_border_content,});
	})
	jQuery('#action31').change(function(){
		var color_border_content = jQuery(this).val();
		jQuery('#action31_1').val(color_border_content);
		jQuery('.JI_calendar1').css({'border-color':color_border_content,});
	})	
	jQuery('#action32').change(function(){
		var w1 = jQuery('.JI_calendar1').width();
		jQuery('#action32').attr('max',w1/2);
		var radius_border_content = jQuery(this).val();
		jQuery('#action32_1').val(radius_border_content);
		jQuery('.JI_calendar1').css({'border-radius':radius_border_content+'px',});
	})
	jQuery('#action32_1').change(function(){
		var w1 = jQuery('.JI_calendar1').width();
		jQuery('#action32_1').attr('max',w1/2);
		var radius_border_content = jQuery(this).val();
		jQuery('#action32').val(radius_border_content);
		jQuery('.JI_calendar1').css({'border-radius':radius_border_content+'px',});
	})
	jQuery('#action33').change(function(){
		var w2 = jQuery(this).val();
		
		jQuery('#action33_1').val(w2);
		jQuery('.JI_calendar1').css({'width':w2,});
	})
	jQuery('#action33_1').change(function(){
		var w2 = jQuery(this).val();
		
		jQuery('#action33').val(w2);
		jQuery('.JI_calendar1').css({'width':w2,});
	})
	jQuery('#action34').change(function(){
		var h2 = jQuery(this).val();
		
		jQuery('#action34_1').val(h2);
		jQuery('.JI_calendar1').css({'height':h2,});
	})
	jQuery('#action34_1').change(function(){
		var h2 = jQuery(this).val();
	
		jQuery('#action34').val(h2);
		jQuery('.JI_calendar1').css({'height':h2,});
	})

	jQuery('#action36_1').change(function(){
		var background_content = jQuery(this).val();
		jQuery('#action36').val(background_content);
		jQuery('#JI_hedaer').css({'background':background_content,});
	})
	jQuery('#action36').change(function(){
		var background_content = jQuery(this).val();
		jQuery('#action36_1').val(background_content);
		jQuery('#JI_hedaer').css({'background':background_content,});
	})
	jQuery('#action37').change(function(){
		var border_content = jQuery(this).val();
		jQuery('#action37_1').val(border_content);
		jQuery('#JI_hedaer').css({'border':border_content+'px solid gray',});
	})
	jQuery('#action37_1').change(function(){
		var border_content = jQuery(this).val();
		jQuery('#action37').val(border_content);
		jQuery('#JI_hedaer').css({'border':border_content+'px solid gray',});
	})
	jQuery('#action38_1').change(function(){
		var color_border_content = jQuery(this).val();
		jQuery('#action38').val(color_border_content);
		jQuery('#JI_hedaer').css({'border-color':color_border_content,});
	})
	jQuery('#action38').change(function(){
		var color_border_content = jQuery(this).val();
		jQuery('#action38_1').val(color_border_content);
		jQuery('#JI_hedaer').css({'border-color':color_border_content,});
	})	
	jQuery('#action39').change(function(){
		var w1 = jQuery('.JI_calendar1').width();
		jQuery('#action39').attr('max',w1/2);
		var radius_border_content = jQuery(this).val();
		jQuery('#action39_1').val(radius_border_content);
		jQuery('#JI_hedaer').css({'border-radius':radius_border_content+'px',});
	})
	jQuery('#action39_1').change(function(){
		var w1 = jQuery('.JI_calendar1').width();
		jQuery('#action39_1').attr('max',w1/2);
		var radius_border_content = jQuery(this).val();
		jQuery('#action39').val(radius_border_content);
		jQuery('#JI_hedaer').css({'border-radius':radius_border_content+'px',});
	})
	jQuery('#action40_1').change(function(){
		var color_box_search = jQuery(this).val();
		jQuery('#action40').val(color_box_search);
		jQuery("#JI_event_search1").focus(function(){
			
			jQuery(this)
				.animate({"width":"150px",},500)
				.css("box-shadow","1px 1px 30px "+color_box_search+"")
				.val("");
				jQuery('#JI_event_search').animate({"width":"180px","background":"#777,"},500);
				jQuery('#JI_closs_serch').fadeIn(500);
			
			})
			jQuery("#JI_event_search1").blur(function(){
			
				jQuery(this)
					.animate({"width":"100px",},500)
					.css("box-shadow","none")
					.val("search");
					jQuery('#JI_event_search').animate({"width":"100px",},500)
					jQuery('#JI_closs_serch').fadeOut(500);
			
			})
		
	})
	jQuery('#action40').change(function(){
		var color_box_search = jQuery(this).val();
		jQuery('#action40_1').val(color_box_search);
		jQuery("#JI_event_search1").focus(function(){
			
			jQuery(this)
				.animate({"width":"150px",},500)
				.css("box-shadow","1px 1px 30px "+color_box_search+"")
				.val("");
				jQuery('#JI_event_search').animate({"width":"180px","background":"#777,"},500);
				jQuery('#JI_closs_serch').fadeIn(500);
			
			})
			jQuery("#JI_event_search1").blur(function(){
			
				jQuery(this)
					.animate({"width":"100px",},500)
					.css("box-shadow","none")
					.val("search");
					jQuery('#JI_event_search').animate({"width":"100px",},500)
					jQuery('#JI_closs_serch').fadeOut(500);
			
			})
		
	})
	jQuery('#action41_1').change(function(){
		var color_border_content = jQuery(this).val();
		jQuery('#action41').val(color_border_content);
		jQuery('.JI_arrow').css({'color':color_border_content,});
	})	
	jQuery('#action41').change(function(){
		var color_border_content = jQuery(this).val();
		jQuery('#action41_1').val(color_border_content);
		jQuery('.JI_arrow').css({'color':color_border_content,});
	})
	jQuery('#action42_1').change(function(){
		var color_hov_title = jQuery(this).val();
		jQuery('#action42').val(color_hov_title);
		jQuery('#JI_hover2').html('<style> .JI_arrow:hover { color:'+color_hov_title+';}</style>');
	})
	jQuery('#action42').change(function(){
		var color_hov_title = jQuery(this).val();
		jQuery('#action42_1').val(color_hov_title);
		jQuery('#JI_hover2').html('<style> .JI_arrow:hover { color:'+color_hov_title+';}</style>');
	})	
	jQuery('#action43_1').change(function(){
		var color_hov_title1 = jQuery(this).val();
		jQuery('#action43').val(color_hov_title1);
		jQuery('#JI_date_event').css({'color':color_hov_title1,});
	})	
	jQuery('#action43').change(function(){
		var color_hov_title1 = jQuery(this).val();
		jQuery('#action43_1').val(color_hov_title1);
		jQuery('#JI_date_event').css({'color':color_hov_title1,});
	})	
	jQuery('#action51_1').change(function(){
		var color_border_content = jQuery(this).val();
		jQuery('#action51').val(color_border_content);
		jQuery('#JI_date_event').css({'background':color_border_content,});
	})
	jQuery('#action51').change(function(){
		var color_border_content = jQuery(this).val();
		jQuery('#action51_1').val(color_border_content);
		jQuery('#JI_date_event').css({'background':color_border_content,});
	})
	jQuery('#action44').change(function(){
		var size_desc_first = jQuery(this).val();
		jQuery('#action44_1').val(size_desc_first);
		jQuery('.JI_arrow').css({'font-size':size_desc_first+'px',});
	})
	jQuery('#action44_1').change(function(){
		var size_desc_first = jQuery(this).val();
		jQuery('#action44').val(size_desc_first);
		jQuery('.JI_arrow').css({'font-size':size_desc_first+'px',});
	})
	
	jQuery('#action45_1').change(function(){
		var background_content = jQuery(this).val();
		jQuery('#action45').val(background_content);
		jQuery('#JI_calendars_content').css({'background':background_content,});
	})
	jQuery('#action45').change(function(){
		var background_content = jQuery(this).val();
		jQuery('#action45_1').val(background_content);
		jQuery('#JI_calendars_content').css({'background':background_content,});
	})
	jQuery('#action46').change(function(){
		var border_content = jQuery(this).val();
		jQuery('#action46_1').val(border_content);
		jQuery('#JI_calendars_content').css({'border':border_content+'px solid gray',});
	})
	jQuery('#action46_1').change(function(){
		var border_content = jQuery(this).val();
		jQuery('#action46').val(border_content);
		jQuery('#JI_calendars_content').css({'border':border_content+'px solid gray',});
	})
	jQuery('#action47_1').change(function(){
		var color_border_content = jQuery(this).val();
		jQuery('#action47').val(color_border_content);
		jQuery('#JI_calendars_content').css({'border-color':color_border_content,});
	})
	jQuery('#action47').change(function(){
		var color_border_content = jQuery(this).val();
		jQuery('#action47_1').val(color_border_content);
		jQuery('#JI_calendars_content').css({'border-color':color_border_content,});
	})	
	jQuery('#action48').change(function(){
		var w1 = jQuery('.JI_calendar1').width();
		jQuery('#action48').attr('max',w1/2);
		var radius_border_content = jQuery(this).val();
		jQuery('#action48_1').val(radius_border_content);
		jQuery('#JI_calendars_content').css({'border-radius':radius_border_content+'px',});
	})
	jQuery('#action48_1').change(function(){
		var w1 = jQuery('.JI_calendar1').width();
		jQuery('#action48_1').attr('max',w1/2);
		var radius_border_content = jQuery(this).val();
		jQuery('#action48').val(radius_border_content);
		jQuery('#JI_calendars_content').css({'border-radius':radius_border_content+'px',});
	})
	jQuery('#action49_1').change(function(){
		var background_content = jQuery(this).val();
		jQuery('#action49').val(background_content);
		jQuery('#JI_event_search1').css({'background':background_content,});
	})
	jQuery('#action49').change(function(){
		var background_content = jQuery(this).val();
		jQuery('#action49_1').val(background_content);
		jQuery('#JI_event_search1').css({'background':background_content,});
	})
	jQuery('#action50_1').change(function(){
		var background_content = jQuery(this).val();
		jQuery('#action50').val(background_content);
		jQuery('#JI_date_event').css({'background':background_content,});
	})
	jQuery('#action50').change(function(){
		var background_content = jQuery(this).val();
		jQuery('#action50_1').val(background_content);
		jQuery('#JI_date_event').css({'background':background_content,});
	})
	
	jQuery('.reset_theme').click(function(){
		var input =jQuery("#settings_page").find('input');
		input.val('');
	})
	

}
function edit_settings(){
	jQuery('.title_item4').click(function(){
		jQuery('#href_Themes1').fadeOut();
		jQuery('#settings_page').fadeIn();
		var id = jQuery(this).attr('id');
		ajaxurl = object.ajaxurl;
			var data ={action: 'edit_set1', x:id};
				jQuery.post(ajaxurl, data, function(response){
					
				var c = response.split('(8852)');
				
				jQuery('#action50').val(c[1]);
				jQuery('#action2_1').val(c[2]);
				jQuery('#action2').val(c[2]);
				jQuery('.in_page_setting').css({'color':c[2]});
				var c1 = c[3].split('px ');
				jQuery('#action3').val(c1[0]);
				jQuery('#action3_1').val(c1[1]);
				jQuery('#action3_2').val(c1[2]);
				jQuery('.in_page_setting').css({'text-shadow':c[3]});
				var c2 = c[4].split('px');
				jQuery('#action4').val(c2[0]);
				jQuery('#action4_1').val(c2[0]);
				jQuery('.in_page_setting').css({'font-size':c[4]});
				jQuery('#action5').val(c[5]);
				jQuery('.in_page_setting').css({'font-family':c[5]});
				if(c[6]!=''){
					var o = c[6].split(':');
			
					var r = o[3].split("px");
					
					if(c[6]=='<style>.JI_calendar1:hover .JI_image_for_event{-webkit-transform: scale(0.9); -ms-transform: scale(0.9); transform: scale(0.9) ; border-radius:20px;}</style>'){
						jQuery('#action7').val('scale-');
					}else if(c[6] =='<style>.JI_calendar1:hover .JI_image_for_event{opacity:0.6;}</style>'){
						jQuery('#action7').val('opacity');
					}else if(c[6] == '<style>.JI_calendar1:hover .JI_image_for_event{-webkit-transform: scale(1.1); -ms-transform: scale(1.1); transform: scale(1.1) ; border-radius:20px;}</style>'){
						jQuery('#action7').val('scale+'); 
					}else if(c[6] == '<style>.JI_calendar1:hover .JI_image_for_event{transform:rotate(20deg);border-radius:'+o[3]+''){					
						jQuery('#action7').val('rotate');					
					}else if(c[6] == '<style>.JI_calendar1:hover .JI_image_for_event{ transform:translate(0px,-10px);}</style>'){
						jQuery('#action7').val('translate');
					}
				}
				else if(c[6] == ''){
					jQuery('#action7').val('none');
				}
				jQuery('#JI_hover').html(c[6]);		
				
				var c3 = c[7].split('px');
				jQuery('#action8').val(c3[0]);
				jQuery('#action8_1').val(c3[0]);
				jQuery('.JI_image_for_event').css({'border-radius':c[7],});
				var c4 = c[8].split('px');
				jQuery('#action9').val(c4[0]);
				jQuery('#action9_1').val(c4[0]);
				jQuery('.JI_image_for_event').css({'border':c[8]+' solid gray',});

				var c5 = c[9].split('px');
				jQuery('#action10').val(c5[0]);
				jQuery('#action10_1').val(c5[0]);
				jQuery('.JI_image_for_event').css({'width':c[9],});
				var c6 = c[10].split('px');
				jQuery('#action11').val(c6[0]);
				jQuery('#action11_1').val(c6[0]);
				jQuery('.JI_image_for_event').css({'height':c[10],});
				jQuery('#action6').val(c[11]);
				jQuery('#action6_1').val(c[11]);
				jQuery('.JI_image_for_event').css({'border':c[8]+' solid '+c[11],});
				jQuery('#action13').val(c[12]);
				jQuery('#action13_1').val(c[12]);
				jQuery('.JI_date').css({'color':c[12]});
				var c7 = c[13].split('px ');
				jQuery('#action14').val(c7[0]);
				jQuery('#action14_1').val(c7[1]);
				jQuery('#action14_2').val(c7[2]);
				jQuery('.JI_date').css({'text-shadow':c[13]});
				var c8 = c[14].split('px');
				jQuery('#action15').val(c8[0]);
				jQuery('#action15_1').val(c8[0]);
				jQuery('.JI_date').css({'font-size':c8[0]});
				jQuery('#action16').val(c[15]);
				jQuery('.JI_date').css({'font-family':c[15]});
				jQuery('#action19').val(c[16]);
				jQuery('#action19_1').val(c[16]);
				jQuery('.JI_h3_image').css({'color':c[16]});
				var c9 = c[17].split('px ');

				jQuery('#action20').val(c9[0]);
				jQuery('#action20_1').val(c9[1]);
				jQuery('#action20_2').val(c9[2]);
				jQuery('.JI_h3_image').css({'text-shadow':c[17]});
				jQuery('#action35').val(c[18]);
				jQuery('#action35_1').val(c[18]);
				jQuery('#JI_hover1').html('<style> .JI_calendar1:hover .JI_h3_image{color:'+c[18]+'}</style>');
				var c10 = c[19].split('px');
				jQuery('#action21').val(c10[0]);
				jQuery('#action21_1').val(c10[0]);
				jQuery('.JI_h3_image').css({'font-size':c[19]});
				jQuery('#action22').val(c[20]);
				jQuery('.JI_h3_image').css({'font-family':c[20]});
				jQuery('#action23').val(c1[2]);
				jQuery('.JI_desc_con').css({'color':c[21]});
				jQuery('#action24').val(c[21]);
				jQuery('#action24_1').val(c[21]);

				var c11 = c[22].split('px ');

				jQuery('#action25').val(c11[0]);
				jQuery('#action25_1').val(c11[1]);
				jQuery('#action25_2').val(c11[2]);
				jQuery('.JI_desc_con').css({'color':c[22]});
				var c12 = c[23].split('px');
				jQuery('#action26').val(c12[0]);
				jQuery('#action26_1').val(c12[0]);
				jQuery('.JI_desc_con').css({'font-size':c[23]});
				jQuery('#action27').val(c[24]);
				jQuery('.JI_desc_con').css({'font-family':c[24]});
				var c56 = c[25].split('px');
				jQuery('#action28').val(c56[25]);
				jQuery('#action28_1').val(c56[0]);
				jQuery('.JI_first').css({'font-size':c[25]});
				jQuery('#action29').val(c[26]);
				jQuery('#action29_1').val(c[26]);
				jQuery('.JI_calendar1').css({'background':c[26]});
				var c13 = c[27].split('px ');
				jQuery('#action30').val(c12[0]);
				jQuery('#action30_1').val(c12[0]);
				jQuery('.JI_calendar1').css({'border':c[26]+' solid gray' });
				
				jQuery('#action31').val(c[28]);
				jQuery('#action31_1').val(c[28]);
				jQuery('.JI_calendar1').css({'border':c[26]+' solid '+c[28],});
				var c14 = c[29].split('px');
				jQuery('#action32').val(c14[0]);
				jQuery('#action32_1').val(c14[0]);
				jQuery('.JI_calendar1').css({'border-radius':c[29]});
				var c15 = c[30].split('px');
				jQuery('#action33').val(c15[0]);
				jQuery('#action33_1').val(c15[0]);
				jQuery('.JI_calendar1').css({'width':c[30]});
				var c16 = c[31].split('px');
				jQuery('#action34').val(c16[0]);
				jQuery('#action34_1').val(c16[0]);
				jQuery('.JI_calendar1').css({'height':c[31]});
			
				jQuery('#action36').val(c[32]);
				jQuery('#action36_1').val(c[32]);
				jQuery('#JI_hedaer').css({'background':c[32]});
				var c17 = c[33].split('px');
				jQuery('#action37').val(c17[0]);
				jQuery('#action37_1').val(c17[0]);
				jQuery('#JI_hedaer').css({'bnorder':c[33]+' solid gray'});
				jQuery('#action38').val(c[34]);
				jQuery('#action38_1').val(c[34]);
				jQuery('#JI_hedaer').css({'bnorder':c[33]+' solid '+c[34]});
				var c18= c[35].split('px');
				jQuery('#action39').val(c18[0]);
				jQuery('#action39_1').val(c18[0]);
				jQuery('#JI_hedaer').css({'bnorder-radius':c[35]});
				jQuery('#action40').val(c[36]);
				jQuery('#action40_1').val(c[36]);

		
			jQuery("#JI_event_search1").focus(function(){
				
				jQuery(this)
					.animate({"width":"150px",},500)
					.css("box-shadow","1px 1px 30px "+c[36]+"")
					.val("");
					jQuery('#JI_event_search').animate({"width":"180px","background":"#777,"},500);
					jQuery('#JI_closs_serch').fadeIn(500);
				
				})
				jQuery("#JI_event_search1").blur(function(){
				
					jQuery(this)
						.animate({"width":"100px",},500)
						.css("box-shadow","none")
						.val("search");
						jQuery('#JI_event_search').animate({"width":"100px",},500)
						jQuery('#JI_closs_serch').fadeOut(500);
				
				})
		
	
				jQuery('#action41').val(c[37]);
				jQuery('#action41_1').val(c[37]);
				jQuery('.JI_arrow').css({'color':c[37]});
				jQuery('#action49').val(c[38]);
				jQuery('#action49_1').val(c[38]);
				jQuery('#JI_event_search1').css({'background':c[38]})
				jQuery('#action42').val(c[39]);
				jQuery('#action42_1').val(c[39]);
				jQuery('#JI_hover2').html('<style>.JI_arrow:hover{color:'+c[39]+'}</style>');
				jQuery('#action43').val(c[40]);
				jQuery('#action43_1').val(c[40]);
				jQuery('#JI_date_event').css({'color':c[40]});
				jQuery('#action51').val(c[41]);
				jQuery('#action51_1').val(c[41]);
				jQuery('#JI_date_event').css({'background':c[41]});
				var c19 = c[42].split('px');
				jQuery('#action44').val(c19[0]);
				jQuery('#action44_1').val(c19[0]);
				jQuery('.JI_arrow').css({'font-size':c[42]});
				jQuery('#action45').val(c[43]);
				jQuery('#action45_1').val(c[43]);
				jQuery('#JI_calendars_content').css({'background':c[43]})
				var c20 = c[44].split('px');
				jQuery('#action46').val(c20[0]);
				jQuery('#action46_1').val(c20[0]);
				jQuery('#JI_calendars_content').css({'border':c[44]+' solid gray'})
				jQuery('#action47').val(c[45]);
				jQuery('#action47_1').val(c[45]);
				jQuery('#JI_calendars_content').css({'border':c[44]+' solid '+c[45]})
				var c21 = c[46].split('px');
				jQuery('#action48').val(c21[0]);
				jQuery('#action48_1').val(c21[0]);
				jQuery('#JI_calendars_content').css({'border-radius':c[48]})
				jQuery('#JI_hidden_val').val(c[47]);

				jQuery('.theme_sub_save_button').val('Update');
				jQuery('.theme_sub_save_button').attr('type','button');

				jQuery('.theme_sub_save_button').click(function(){
					 action_for_events();
					if(jQuery(this).val()=='Update'){
						var a1 = jQuery('#action50').val();
						var a2 = jQuery('#action2').val();
							var a3 = jQuery('#action3').val();
							var a4 = jQuery('#action3_1').val();
							var a5 = jQuery('#action3_2').val();
						var a6 = a3+'px '+a4+'px '+a5;
						var a7 = jQuery('#action4_1').val()+'px';

						var a8 = jQuery('#action5').val();
						
						
						var a10 = jQuery('#action8_1').val()+'px';

						var a11 = jQuery('#action9_1').val()+'px';

						var a12 = jQuery('#action10_1').val()+'px';

						var a13 = jQuery('#action11_1').val()+'px';
						var a14 = jQuery('#action6_1').val();
						var a15 = jQuery('#action13_1').val();
							var a16 = jQuery('#action14').val();
							var a17 = jQuery('#action14_1').val();
							var a18 = jQuery('#action14_2').val();
						var a19  = a16+'px '+a17+'px '+a18;

						var a20 = jQuery('#action15').val()+'px';

						var a21 = jQuery('#action16').val();
						var a22 = jQuery('#action19_1').val();

							var a23 = jQuery('#action20').val();
							var a24 = jQuery('#action20_1').val();
							var a25 = jQuery('#action20_2').val();

						var a26 =   a23+'px '+a24+'px '+a25;

						var a27 = jQuery('#action35_1').val();
						var a28 = jQuery('#action21').val()+'px';

						var a29 = jQuery('#action22').val();
						var a30 = jQuery('#action24_1').val();

							var a31 = jQuery('#action25').val();
							var a32 = jQuery('#action25_1').val();
							var a33 = jQuery('#action25_2').val();
						var a34 =  a31+'px '+a32+'px '+a33;

						var a35 = jQuery('#action26').val()+'px';

						var a36 = jQuery('#action27').val();
						var a37 = jQuery('#action28').val()+'px';
						var a38 = jQuery('#action29_1').val();
						var a39 = jQuery('#action30').val()+'px';
						var a40 = jQuery('#action31_1').val();


						var a41 = jQuery('#action32').val()+'px';
						var a42 = jQuery('#action33').val()+'px';
						var a43 = jQuery('#action34').val()+'px';
						var a44 = jQuery('#action36_1').val();
						var a45 = jQuery('#action37').val()+'px';
						var a46 = jQuery('#action38_1').val();
						var a47 = jQuery('#action39').val()+'px';
						var a48 = jQuery('#action40_1').val();
						var a49 = jQuery('#action41_1').val();
						var a50 = jQuery('#action49_1').val();
						var a51 = jQuery('#action42_1').val();
						var a52 = jQuery('#action43_1').val();
						var a53 = jQuery('#action51_1').val();
						var a54 = jQuery('#action44').val()+'px';
						var a55 = jQuery('#action45_1').val();
						var a56 = jQuery('#action46').val()+'px';
						var a57 = jQuery('#action47_1').val();
						var a58 = jQuery('#action48').val()+'px';
						var a59 = jQuery('#JI_hidden_val').val();
						var a9  = jQuery('#action7').val();
						ajaxurl = object.ajaxurl;
						
						var data ={action: 'edit_set2', x:a1+'(77777)'+a2+'(77777)'+a6+'(77777)'+a7+'(77777)'+a8+'(77777)'+a9+'(77777)'+a10+'(77777)'+a11+'(77777)'+a12+'(77777)'+a13+'(77777)'+a14+'(77777)'+a15+'(77777)'+a19+'(77777)'+a20+'(77777)'+a21+'(77777)'+a22+'(77777)'+a26+'(77777)'+a27+'(77777)'+a28+'(77777)'+a29+'(77777)'+a30+'(77777)'+a34+'(77777)'+a35+'(77777)'+a36+'(77777)'+a37+'(77777)'+a38+'(77777)'+a39+'(77777)'+a40+'(77777)'+a41+'(77777)'+a42+'(77777)'+a43+'(77777)'+a44+'(77777)'+a45+'(77777)'+a46+'(77777)'+a47+'(77777)'+a48+'(77777)'+a49+'(77777)'+a50+'(77777)'+a51+'(77777)'+a52+'(77777)'+a53+'(77777)'+a54+'(77777)'+a55+'(77777)'+a56+'(77777)'+a57+'(77777)'+a58+'(77777)'+a59};
							jQuery.post(ajaxurl, data, function(response){
						})
					}
				})

			})
	})
}
jQuery(document).ready(function(){
	edit_settings();
	action_for_events();
	h3_button();
	b_button();
	i_button();
	link_button();
	b_quote();
	del_button();
	ins_button();
	ul_button();
	ol_button();
	li_button();
	code_button();
	pre_button();
	more_button();
	hr_button();
	add_media_file();
	description_tmce();
	add_calendar();
	add_Category();
	add_a_theme();
	add_date();
	content_settings_category1();
	Add_an_event();
	for_tr();
	repeat_event();
	reset_click();
	search_title();
	edit_title();
});
function seting(i,type)
{
	if(type==false)
	{
		if(i==1){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			if(y<170)
			{
				y=170;
				jQuery('#width'+i).val(y);
			}
			jQuery('#calendar1').css('width',y+'px');
		}
		if(i==2){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			if(y<190)
			{
				y=190;
				jQuery('#width'+i).val(y);
			}
			jQuery('#calendar1').css('height',y+'px');
		}
		if(i==3){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('#calendar1').css('border-radius',y+'px');
		}
		if(i==4){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('#calendar1').css('border-width',y+'px');
		}
		if(i==5){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('#month1').css('height',y+'px');
		}
		if(i==6){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('#month1').css('border-width',y+'px');
		}
		if(i==7){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('#month1').css('border-radius',y+'px');
		}
		if(i==8){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('#month1').css('font-size',y+'px');
		}	


		if(i==10){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('.prev1').css('border-width',y+'px');
			jQuery('.next1').css('border-width',y+'px');
		}
		if(i==11){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('.prev1').css('border-radius',y+'px');
			jQuery('.next1').css('border-radius',y+'px');
		}
		if(i==12){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('#title_name').css('height',y+'px');
		}
		if(i==13){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('#title_name').css('border-width',y+'px');
		}
		if(i==14){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('#title_name').css('border-radius',y+'px');
		}
		if(i==15){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('#title_name').css('font-size',y+'px');
		}
		if(i==16){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('.week_day1').css('height',y+'px');
		}
		if(i==17){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('.week_day1').css('border-width',y+'px');
			jQuery('#range20').val(y);
			jQuery('#width20').val(y);
			jQuery('#range23').val(y);
			jQuery('#width23').val(y);
		}
		if(i==18){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('.week_day1').css('border-radius',y+'px');
			jQuery('#range21').val(y);
			jQuery('#width21').val(y);
			jQuery('#range24').val(y);
			jQuery('#width24').val(y);
		}
		if(i==19){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('.week_day1').css('font-size',y+'px');
			jQuery('#range22').val(y);
			jQuery('#width22').val(y);
			jQuery('#range25').val(y);
			jQuery('#width25').val(y);
		}
		if(i==20){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('#sat1').css('border-width',y+'px');
		}
		if(i==21){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('#sat1').css('border-radius',y+'px');
		}
		if(i==22){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('#sat1').css('font-size',y+'px');
		}
		if(i==23){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('#sun1').css('border-width',y+'px');
		}
		if(i==24){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('#sun1').css('border-radius',y+'px');
		}
		if(i==25){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('#sun1').css('font-size',y+'px');
		}
		if(i==26){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('.today').css('font-size',y+'px');
		}
		if(i==27){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('.today').css('border-width',y+'px');
		}
		if(i==28){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('.today').css('border-radius',y+'px');
		}
		if(i==29){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('.without_event').css('font-size',y+'px');
			jQuery('#range38').val(y);
			jQuery('#width38').val(y);
			jQuery('#range35').val(y);
			jQuery('#width35').val(y);
			jQuery('#range32').val(y);
			jQuery('#width32').val(y);
		}
		if(i==30){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('.without_event').css('border-width',y+'px');
			jQuery('#range39').val(y);
			jQuery('#width39').val(y);
			jQuery('#range36').val(y);
			jQuery('#width36').val(y);
			jQuery('#range33').val(y);
			jQuery('#width33').val(y);
		}
		if(i==31){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('.without_event').css('border-radius',y+'px');
			jQuery('#range40').val(y);
			jQuery('#width40').val(y);
			jQuery('#range37').val(y);
			jQuery('#width37').val(y);
			jQuery('#range34').val(y);
			jQuery('#width34').val(y);
		}
		if(i==32){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('#calendar1 tbody tr:nth-child(2) td:nth-child(3)').css('font-size',y+'px');
			jQuery('#calendar1 tbody tr:nth-child(4) td:nth-child(5)').css('font-size',y+'px');
		}
		if(i==33){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('#calendar1 tbody tr:nth-child(2) td:nth-child(3)').css('border-width',y+'px');
			jQuery('#calendar1 tbody tr:nth-child(4) td:nth-child(5)').css('border-width',y+'px');
		}
		if(i==34){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('#calendar1 tbody tr:nth-child(2) td:nth-child(3)').css('border-radius',y+'px');
			jQuery('#calendar1 tbody tr:nth-child(4) td:nth-child(5)').css('border-radius',y+'px');
		}
		if(i==35){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('.sunday1').css('font-size',y+'px');
		}
		if(i==36){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('.sunday1').css('border-width',y+'px');
		}
		if(i==37){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('.sunday1').css('border-radius',y+'px');
		}
		if(i==38){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('.saturday1').css('font-size',y+'px');
		}
		if(i==39){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('.saturday1').css('border-width',y+'px');
		}
		if(i==40){
			var y=jQuery('#width'+i).val();
			jQuery('#range'+i).val(y);
			jQuery('.saturday1').css('border-radius',y+'px');
		}


	}
	else if(type==true)
	{
		if(i==1){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('#calendar1').css('width',y+'px');
		}
		if(i==2){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('#calendar1').css('height',y+'px');
		}
		if(i==3){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('#calendar1').css('border-radius',y+'px');
		}
		if(i==4){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('#calendar1').css('border-width',y+'px');
		}
		if(i==5){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('#month1').css('height',y+'px');
		}
		if(i==6){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('#month1').css('border-width',y+'px');
		}
		if(i==7){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('#month1').css('border-radius',y+'px');
		}
		if(i==8){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('#month1').css('font-size',y+'px');
		}
		


		if(i==10){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('.prev1').css('border-width',y+'px');
			jQuery('.next1').css('border-width',y+'px');
		}
		if(i==11){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('.prev1').css('border-radius',y+'px');
			jQuery('.next1').css('border-radius',y+'px');
		}
		if(i==12){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('#title_name').css('height',y+'px');
		}
		if(i==13){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('#title_name').css('border-width',y+'px');
		}
		if(i==14){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('#title_name').css('border-radius',y+'px');
		}
		if(i==15){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('#title_name').css('font-size',y+'px');
		}
		if(i==16){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('.week_day1').css('height',y+'px');
		}
		if(i==17){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('.week_day1').css('border-width',y+'px');
			jQuery('#range20').val(y);
			jQuery('#width20').val(y);
			jQuery('#range23').val(y);
			jQuery('#width23').val(y);
		}
		if(i==18){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('.week_day1').css('border-radius',y+'px');
			jQuery('#range21').val(y);
			jQuery('#width21').val(y);
			jQuery('#range24').val(y);
			jQuery('#width24').val(y);
		}
		if(i==19){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('.week_day1').css('font-size',y+'px');
			jQuery('#range22').val(y);
			jQuery('#width22').val(y);
			jQuery('#range25').val(y);
			jQuery('#width25').val(y);
		}
		if(i==20){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('#sat1').css('border-width',y+'px');
		}
		if(i==21){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('#sat1').css('border-radius',y+'px');
		}
		if(i==22){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('#sat1').css('font-size',y+'px');
		}
		if(i==23){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('#sun1').css('border-width',y+'px');
		}
		if(i==24){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('#sun1').css('border-radius',y+'px');
		}
		if(i==25){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('#sun1').css('font-size',y+'px');
		}
		if(i==26){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('.today').css('font-size',y+'px');
		}
		if(i==27){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('.today').css('border-width',y+'px');
		}
		if(i==28){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('.today').css('border-radius',y+'px');
		}
		if(i==29){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('.without_event').css('font-size',y+'px');
			jQuery('#range38').val(y);
			jQuery('#width38').val(y);
			jQuery('#range35').val(y);
			jQuery('#width35').val(y);
			jQuery('#range32').val(y);
			jQuery('#width32').val(y);
		}
		if(i==30){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('.without_event').css('border-width',y+'px');
			jQuery('#range39').val(y);
			jQuery('#width39').val(y);
			jQuery('#range36').val(y);
			jQuery('#width36').val(y);
			jQuery('#range33').val(y);
			jQuery('#width33').val(y);
		}
		if(i==31){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('.without_event').css('border-radius',y+'px');
			jQuery('#range40').val(y);
			jQuery('#width40').val(y);
			jQuery('#range37').val(y);
			jQuery('#width37').val(y);
			jQuery('#range34').val(y);
			jQuery('#width34').val(y);
		}
		if(i==32){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('#calendar1 tbody tr:nth-child(2) td:nth-child(3)').css('font-size',y+'px');
			jQuery('#calendar1 tbody tr:nth-child(4) td:nth-child(5)').css('font-size',y+'px');
		}
		if(i==33){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('#calendar1 tbody tr:nth-child(2) td:nth-child(3)').css('border-width',y+'px');
			jQuery('#calendar1 tbody tr:nth-child(4) td:nth-child(5)').css('border-width',y+'px');
		}
		if(i==34){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('#calendar1 tbody tr:nth-child(2) td:nth-child(3)').css('border-radius',y+'px');
			jQuery('#calendar1 tbody tr:nth-child(4) td:nth-child(5)').css('border-radius',y+'px');
		}
		if(i==35){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('.sunday1').css('font-size',y+'px');
		}
		if(i==36){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('.sunday1').css('border-width',y+'px');
		}
		if(i==37){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('.sunday1').css('border-radius',y+'px');
		}
		if(i==38){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('.saturday1').css('font-size',y+'px');
		}
		if(i==39){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('.saturday1').css('border-width',y+'px');
		}
		if(i==40){
			var y=jQuery('#range'+i).val();
			jQuery('#width'+i).val(y);
			jQuery('.saturday1').css('border-radius',y+'px');
		}

		
	}
}
function ChangeFont(a)
{			
	 if(a==1)
	 {	
	 	var fontFamily=jQuery('#Text_Font'+a).val();
	 	jQuery('#popup_event_title').css('font-family',fontFamily);		 	
	 }
	 if(a==2)
	 {
	 	var fontFamily=jQuery('#Text_Font'+a).val();
	 	jQuery('#popup_date').css('font-family',fontFamily);		 	
	 }
	  if(a==3)
	 {
	 	var fontFamily=jQuery('#Text_Font'+a).val();
	 	jQuery('#month1').css('font-family',fontFamily);		 	
	 }
	  if(a==4)
	 {
	 	var fontFamily=jQuery('#Text_Font'+a).val();
	 	jQuery('#title_name').css('font-family',fontFamily);		 	
	 }
}
function ChangeStyle(b)
{			
	if(b==1)
	 {	
	 	var fontStyle=jQuery('#FontStyle'+b).val();
	 	if(fontStyle=='Bold')
		{
			jQuery('#popup_event_title').css('font-weight',fontStyle);
		}
		else
		{
			jQuery('#popup_event_title').css('font-style',fontStyle);
		}
	 }
	 if(b==2)
	 {
	 	var fontStyle=jQuery('#FontStyle'+b).val();
	 	if(fontStyle=='Bold')
		{
			jQuery('#popup_date').css('font-weight',fontStyle);
		}
		else
		{
			jQuery('#popup_date').css('font-style',fontStyle);
		}
	 }
}
function change(i,type){
			
			var colors = ["aliceblue:#f0f8ff","antiquewhite:#faebd7","aqua:#00ffff",
				"aquamarine:#7fffd4","azure:#f0ffff", "beige:#f5f5dc","bisque:#ffe4c4",
				"black:#000000","blanchedalmond:#ffebcd","blue:#0000ff","blueviolet:#8a2be2",
				"brown:#a52a2a","burlywood:#deb887", "cadetblue:#5f9ea0","chartreuse:#7fff00",
				"chocolate:#d2691e","coral:#ff7f50","cornflowerblue:#6495ed","cornsilk:#fff8dc",
				"crimson:#dc143c","cyan:#00ffff", "darkblue:#00008b","darkcyan:#008b8b",
				"darkgoldenrod:#b8860b","darkgray:#a9a9a9","darkgreen:#006400","darkkhaki:#bdb76b",
				"darkmagenta:#8b008b","darkolivegreen:#556b2f", "darkorange:#ff8c00","darkorchid:#9932cc",
				"darkred:#8b0000","darksalmon:#e9967a","darkseagreen:#8fbc8f","darkslateblue:#483d8b",
				"darkslategray:#2f4f4f","darkturquoise:#00ced1", "darkviolet:#9400d3","deeppink:#ff1493",
				"deepskyblue:#00bfff","dimgray:#696969","dodgerblue:#1e90ff", "firebrick:#b22222",
				"floralwhite:#fffaf0","forestgreen:#228b22","fuchsia:#ff00ff", "gainsboro:#dcdcdc",
				"ghostwhite:#f8f8ff","gold:#ffd700","goldenrod:#daa520","gray:#808080","green:#008000",
				"greenyellow:#adff2f", "honeydew:#f0fff0","hotpink:#ff69b4", "indianred :#cd5c5c",
				"indigo:#4b0082","ivory:#fffff0","khaki:#f0e68c", "lavender:#e6e6fa","lavenderblush:#fff0f5",
				"lawngreen:#7cfc00","lemonchiffon:#fffacd","lightblue:#add8e6","lightcoral:#f08080",
				"lightcyan:#e0ffff","lightgoldenrodyellow:#fafad2", "lightgrey:#d3d3d3","lightgreen:#90ee90",
				"lightpink:#ffb6c1","lightsalmon:#ffa07a","lightseagreen:#20b2aa","lightskyblue:#87cefa",
				"lightslategray:#778899","lightsteelblue:#b0c4de", "lightyellow:#ffffe0",
				"lime:#00ff00","limegreen:#32cd32","linen:#faf0e6", "magenta:#ff00ff","maroon:#800000",
				"mediumaquamarine:#66cdaa","mediumblue:#0000cd","mediumorchid:#ba55d3","mediumpurple:#9370d8",
				"mediumseagreen:#3cb371","mediumslateblue:#7b68ee", "mediumspringgreen:#00fa9a","mediumturquoise:#48d1cc",
				"mediumvioletred:#c71585","midnightblue:#191970","mintcream:#f5fffa","mistyrose:#ffe4e1",
				"moccasin:#ffe4b5", "navajowhite:#ffdead","navy:#000080", "oldlace:#fdf5e6","olive:#808000",
				"olivedrab:#6b8e23","orange:#ffa500","orangered:#ff4500","orchid:#da70d6", "palegoldenrod:#eee8aa",
				"palegreen:#98fb98","paleturquoise:#afeeee","palevioletred:#d87093","papayawhip:#ffefd5","peachpuff:#ffdab9",
				"peru:#cd853f","pink:#ffc0cb","plum:#dda0dd","powderblue:#b0e0e6","purple:#800080", "red:#ff0000",
				"rosybrown:#bc8f8f","royalblue:#4169e1", "saddlebrown:#8b4513","salmon:#fa8072","sandybrown:#f4a460",
				"seagreen:#2e8b57","seashell:#fff5ee","sienna:#a0522d","silver:#c0c0c0","skyblue:#87ceeb","slateblue:#6a5acd",
				"slategray:#708090","snow:#fffafa","springgreen:#00ff7f","steelblue:#4682b4", "tan:#d2b48c","teal:#008080",
				"thistle:#d8bfd8","tomato:#ff6347","turquoise:#40e0d0", "violet:#ee82ee", "wheat:#f5deb3","white:#ffffff",
				"whitesmoke:#f5f5f5", "yellow:#ffff00","yellowgreen:#9acd32"];   
	if(type==true)
		{
			if(i=='1')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('#calendar1').css('border-color',x);
			}
			if(i=='2')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('#month1').css('border-color',x);
			}
			if(i=='3')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('#month1').css('background-color',x);
			}
			if(i=='4')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('#month1').css('color',x);
			}
			if(i=='5')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('.prev1').css('border-color',x);
				jQuery('.next1').css('border-color',x);
			}
			if(i=='6')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('.prev1').css('background-color',x);
				jQuery('.next1').css('background-color',x);
			}
			if(i=='7')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('.prev1').css('color',x);
				jQuery('.next1').css('color',x);
			}
			if(i=='8')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('#title_name').css('border-color',x);
			}
			if(i=='9')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('#title_name').css('background-color',x);
			}
			if(i=='10')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('#title_name').css('color',x);
			}
			if(i=='11')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('.week_day1').css('border-color',x);
				jQuery('#color_code14').val(x);
				jQuery('#myColor14').val(x);
				jQuery('#color_code17').val(x);
				jQuery('#myColor17').val(x);
			}
			if(i=='12')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('.week_day1').css('color',x);
				jQuery('#color_code16').val(x);
				jQuery('#myColor16').val(x);
				jQuery('#color_code19').val(x);
				jQuery('#myColor19').val(x);
			}
			if(i=='13')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('.week_day1').css('background-color',x);
				jQuery('#color_code15').val(x);
				jQuery('#myColor15').val(x);
				jQuery('#color_code18').val(x);
				jQuery('#myColor18').val(x);
			}
			if(i=='14')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('#sat1').css('border-color',x);
			}
			if(i=='15')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('#sat1').css('background-color',x);
			}
			if(i=='16')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('#sat1').css('color',x);
			}
			if(i=='17')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('#sun1').css('border-color',x);
			}
			if(i=='18')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('#sun1').css('background-color',x);
			}
			if(i=='19')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('#sun1').css('color',x);
			}
			if(i=='20')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('#calendar1').css('background-color',x);
			}
			if(i=='21')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('.today').css('color',x);
			}
			if(i=='22')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('.today').css('background-color',x);
			}
			if(i=='23')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('.today').css('border-color',x);
			}
			if(i=='24')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('.without_event').css('color',x);
				jQuery('#color_code27').val(x);
				jQuery('#myColor27').val(x);
				jQuery('#color_code30').val(x);
				jQuery('#myColor30').val(x);
				jQuery('#color_code33').val(x);
				jQuery('#myColor33').val(x);
				jQuery('#color_code36').val(x);
				jQuery('#myColor36').val(x);
			}
			if(i=='25')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('.without_event').css('background-color',x);
				jQuery('#color_code28').val(x);
				jQuery('#myColor28').val(x);
				jQuery('#color_code31').val(x);
				jQuery('#myColor31').val(x);
				jQuery('#color_code34').val(x);
				jQuery('#myColor34').val(x);
				jQuery('#color_code37').val(x);
				jQuery('#myColor37').val(x);
			}
			if(i=='26')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('.without_event').css('border-color',x);
				jQuery('#color_code29').val(x);
				jQuery('#myColor29').val(x);
				jQuery('#color_code32').val(x);
				jQuery('#myColor32').val(x);
				jQuery('#color_code35').val(x);
				jQuery('#myColor35').val(x);
				jQuery('#color_code38').val(x);
				jQuery('#myColor38').val(x);
			}
			if(i=='27')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('#calendar1 tbody tr:nth-child(2) td:nth-child(3)').css('color',x);
				jQuery('#calendar1 tbody tr:nth-child(4) td:nth-child(5)').css('color',x);
			}
			if(i=='28')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('#calendar1 tbody tr:nth-child(2) td:nth-child(3)').css('background-color',x);
				jQuery('#calendar1 tbody tr:nth-child(4) td:nth-child(5)').css('background-color',x);
			}
			if(i=='29')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('#calendar1 tbody tr:nth-child(2) td:nth-child(3)').css('border-color',x);
				jQuery('#calendar1 tbody tr:nth-child(4) td:nth-child(5)').css('border-color',x);
			}
			if(i=='30')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('.sunday1').css('color',x);
			}
			if(i=='31')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('.sunday1').css('background-color',x);
			}
			if(i=='32')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('.sunday1').css('border-color',x);
			}
			if(i=='33')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('.saturday1').css('color',x);
			}
			if(i=='34')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('.saturday1').css('background-color',x);
			}
			if(i=='35')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('.saturday1').css('border-color',x);
			}
			if(i=='36')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('.without_event').hover(function(){
					window.ik7 =jQuery(this).css('color');
				    jQuery(this).css('color',x);
				    }, function(){
				    jQuery(this).css('color',ik7);
				});		
			}
			if(i=='37')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('.without_event').hover(function(){
					window.ik8 =jQuery(this).css('background-color');
				    jQuery(this).css('background-color',x);
				    }, function(){
				    jQuery(this).css('background-color',ik8);
				});
			}
			if(i=='38')
			{
				var x=jQuery('#myColor'+i).val();
				jQuery('#color_code'+i).val(x);
				jQuery('.without_event').hover(function(){
					window.ik9 =jQuery(this).css('border-color');
				    jQuery(this).css('border-color',x);
				    }, function(){
				    jQuery(this).css('border-color',ik9);
				});	
			}			
			
		}
	else
		{
			if(i=='1')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('#calendar1').css('border-color',text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('#calendar1').css('border-color',k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='2')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('#month1').css('border-color',text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('#month1').css('border-color',k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='3')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('#month1').css('background-color',text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('#month1').css('background-color',k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='4')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('#month1').css('color',text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('#month1').css('color',k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='5')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('.prev1').css('border-color',text);
					jQuery('.next1').css('border-color',text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('.prev1').css('border-color',k[1]);
									jQuery('.next1').css('border-color',k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='6')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('.prev1').css('background-color',text);
					jQuery('.next1').css('background-color',text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('.prev1').css('background-color',k[1]);
									jQuery('.next1').css('background-color',k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='7')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('.prev1').css('color',text);
					jQuery('.next1').css('color',text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('.prev1').css('color',k[1]);
									jQuery('.next1').css('color',k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='8')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('#title_name').css('border-color',text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('#title_name').css('border-color',k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='9')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('#title_name').css('background-color',text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('#title_name').css('background-color',k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='10')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('#title_name').css('color',text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('#title_name').css('color',k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='11')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('.week_day1').css('border-color',text);
					jQuery('#color_code14').val(text);
					jQuery('#myColor14').val(text);
					jQuery('#color_code17').val(text);
					jQuery('#myColor17').val(text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('.week_day1').css('border-color',k[1]);
									jQuery('#color_code14').val(k[1]);
									jQuery('#myColor14').val(k[1]);
									jQuery('#color_code17').val(k[1]);
									jQuery('#myColor17').val(k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='12')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('.week_day1').css('color',text);
					jQuery('#color_code16').val(text);
					jQuery('#myColor16').val(text);
					jQuery('#color_code19').val(text);
					jQuery('#myColor19').val(text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('.week_day1').css('color',k[1]);
									jQuery('#color_code16').val(k[1]);
									jQuery('#myColor16').val(k[1]);
									jQuery('#color_code19').val(k[1]);
									jQuery('#myColor19').val(k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='13')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('.week_day1').css('background-color',text);
					jQuery('#color_code15').val(text);
					jQuery('#myColor15').val(text);
					jQuery('#color_code18').val(text);
					jQuery('#myColor18').val(text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('.week_day1').css('background-color',k[1]);
									jQuery('#color_code15').val(k[1]);
									jQuery('#myColor15').val(k[1]);
									jQuery('#color_code18').val(k[1]);
									jQuery('#myColor18').val(k[1]);Th
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='14')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('#sat1').css('border-color',text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('#sat1').css('border-color',k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='15')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('#sat1').css('background-color',text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('#sat1').css('background-color',k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='16')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('#sat1').css('color',text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('#sat1').css('color',k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='17')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('#sun1').css('border-color',text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('#sun1').css('border-color',k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='18')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('#sun1').css('background-color',text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('#sun1').css('background-color',k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='19')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('#sun1').css('color',text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('#sun1').css('color',k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='20')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('#calendar1').css('background-color',text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('#calendar1').css('background-color',k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='21')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('.today').css('color',text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('.today').css('color',k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='22')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('.today').css('background-color',text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('.today').css('background-color',k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='23')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('.today').css('border-color',text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('.today').css('border-color',k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='24')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('.without_event').css('color',text);
					jQuery('#color_code27').val(text);
					jQuery('#myColor27').val(text);
					jQuery('#color_code30').val(text);
					jQuery('#myColor30').val(text);
					jQuery('#color_code33').val(text);
					jQuery('#myColor33').val(text);
					jQuery('#color_code36').val(text);
					jQuery('#myColor36').val(text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('.without_event').css('color',k[1]);
									jQuery('#color_code27').val(k[1]);
									jQuery('#myColor27').val(k[1]);
									jQuery('#color_code30').val(k[1]);
									jQuery('#myColor30').val(k[1]);
									jQuery('#color_code33').val(k[1]);
									jQuery('#myColor33').val(k[1]);
									jQuery('#color_code36').val(k[1]);
									jQuery('#myColor36').val(k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='25')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('.without_event').css('background-color',text);
					jQuery('#color_code28').val(text);
					jQuery('#myColor28').val(text);
					jQuery('#color_code31').val(text);
					jQuery('#myColor31').val(text);
					jQuery('#color_code34').val(text);
					jQuery('#myColor34').val(text);
					jQuery('#color_code37').val(text);
					jQuery('#myColor37').val(text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('.without_event').css('background-color',k[1]);
									jQuery('#color_code28').val(k[1]);
									jQuery('#myColor28').val(k[1]);
									jQuery('#color_code31').val(k[1]);
									jQuery('#myColor31').val(k[1]);
									jQuery('#color_code34').val(k[1]);
									jQuery('#myColor34').val(k[1]);
									jQuery('#color_code37').val(k[1]);
									jQuery('#myColor37').val(k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='26')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('.without_event').css('border-color',text);
					jQuery('#color_code29').val(text);
					jQuery('#myColor29').val(text);
					jQuery('#color_code32').val(text);
					jQuery('#myColor32').val(text);
					jQuery('#color_code35').val(text);
					jQuery('#myColor35').val(text);
					jQuery('#color_code38').val(text);
					jQuery('#myColor38').val(text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('.without_event').css('border-color',k[1]);
									jQuery('#color_code29').val(k[1]);
									jQuery('#myColor29').val(k[1]);
									jQuery('#color_code32').val(k[1]);
									jQuery('#myColor32').val(k[1]);
									jQuery('#color_code35').val(k[1]);
									jQuery('#myColor35').val(k[1]);
									jQuery('#color_code38').val(k[1]);
									jQuery('#myColor38').val(k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='27')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('#calendar1 tbody tr:nth-child(2) td:nth-child(3)').css('color',text);
					jQuery('#calendar1 tbody tr:nth-child(4) td:nth-child(5)').css('color',text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('#calendar1 tbody tr:nth-child(2) td:nth-child(3)').css('color',k[1]);
									jQuery('#calendar1 tbody tr:nth-child(4) td:nth-child(5)').css('color',k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='28')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('#calendar1 tbody tr:nth-child(2) td:nth-child(3)').css('background-color',text);
					jQuery('#calendar1 tbody tr:nth-child(4) td:nth-child(5)').css('background-color',text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('#calendar1 tbody tr:nth-child(2) td:nth-child(3)').css('background-color',k[1]);
									jQuery('#calendar1 tbody tr:nth-child(4) td:nth-child(5)').css('background-color',k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='29')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('#calendar1 tbody tr:nth-child(2) td:nth-child(3)').css('border-color',text);
					jQuery('#calendar1 tbody tr:nth-child(4) td:nth-child(5)').css('border-color',text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('#calendar1 tbody tr:nth-child(2) td:nth-child(3)').css('border-color',k[1]);
									jQuery('#calendar1 tbody tr:nth-child(4) td:nth-child(5)').css('border-color',k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='30')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('.sunday1').css('color',text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('.sunday1').css('color',k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='31')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('.sunday1').css('background-color',text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('.sunday1').css('background-color',k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='32')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('.sunday1').css('border-color',text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('.sunday1').css('border-color',k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='33')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('.saturday1').css('color',text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('.saturday1').css('color',k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='34')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('.saturday1').css('background-color',text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('.saturday1').css('background-color',k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='35')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('.saturday1').css('border-color',text);
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('.saturday1').css('border-color',k[1]);
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='36')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('.without_event').hover(function(){
						window.ik10 =jQuery(this).css('color');
					    jQuery(this).css('color',text);
					    }, function(){
					    jQuery(this).css('color',ik10);
					});	
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('.without_event').hover(function(){
										window.ik10 =jQuery(this).css('color');
									    jQuery(this).css('color',k[1]);
									    }, function(){
									    jQuery(this).css('color',ik10);
									});	
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='37')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('.without_event').hover(function(){
						window.ik11 =jQuery(this).css('background-color');
					    jQuery(this).css('background-color',text);
					    }, function(){
					    jQuery(this).css('background-color',ik11);
					});	
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('.without_event').hover(function(){
										window.ik11 =jQuery(this).css('background-color');
									    jQuery(this).css('background-color',k[1]);
									    }, function(){
									    jQuery(this).css('background-color',ik11);
									});	
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			if(i=='38')
			{
				var text=jQuery('#color_code'+i).val().toLowerCase();

				if(text[0]=="#")
				{
					jQuery('#myColor'+i).val(text);
					jQuery('.without_event').hover(function(){
						window.ik12 =jQuery(this).css('border-color');
					    jQuery(this).css('border-color',text);
					    }, function(){
					    jQuery(this).css('border-color',ik12);
					});	
				}	
				else
				{
					for(j=0; j<colors.length;j++)
						{
							var k=colors[j].split(':');
							if(k[0]==text)
								{	
									jQuery('#myColor'+i).val(k[1]);
									jQuery('.without_event').hover(function(){
										window.ik12 =jQuery(this).css('border-color');
									    jQuery(this).css('border-color',k[1]);
									    }, function(){
									    jQuery(this).css('border-color',ik12);
									});	
									break;
								}
							else
								{
									continue;
								}
						}
				}		
			}
			
		}
}
function Delete_Theme(id)
{
	var ajaxurl = object.ajaxurl;
	var data = {
	action: 'Delete_Theme_Click', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
	foobar: id, // translates into $_POST['foobar'] in PHP
	};
	jQuery.post(ajaxurl, data, function(response) {
		location.reload();
	});
}
function Delete_Settings(id)
{
	var ajaxurl = object.ajaxurl;
	var data = {
	action: 'Delete_Setting_Click', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
	foobar: id, // translates into $_POST['foobar'] in PHP
	};
	jQuery.post(ajaxurl, data, function(response) {
		location.reload();
	});
}
function Edit_Theme(id)
{
	var ajaxurl = object.ajaxurl;
	var data = {
	action: 'Edit_Theme_Click', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
	foobar: id, // translates into $_POST['foobar'] in PHP
	};
	jQuery.post(ajaxurl, data, function(response) {
		var param=response.split('$#$');

		
		jQuery('#spesial_settings1').fadeIn(100);
		jQuery('#href_Themes').fadeOut(100);
		jQuery('#reset_theme').val('Cancel');
		jQuery('.Theme_sub_cancel_button').css('display','none');

		jQuery('#hidden_button_for_id').val(param[0]);
		jQuery('#Name_of_theme').val(param[1]);
		jQuery('#width1').val(param[2]); jQuery('#range1').val(param[2]); jQuery('#calendar1').css('width',param[2]+'px');
		jQuery('#width2').val(param[3]); jQuery('#range2').val(param[3]); jQuery('#calendar1').css('height',param[3]+'px');
		jQuery('#color_code1').val(param[4]); jQuery('#myColor1').val(param[4]); jQuery('#calendar1').css('border-color',param[4]);
		jQuery('#width3').val(param[5]); jQuery('#range3').val(param[5]); jQuery('#calendar1').css('border-radius',param[5]+'px');
		jQuery('#width4').val(param[6]); jQuery('#range4').val(param[6]); jQuery('#calendar1').css('border-width',param[6]+'px');
		jQuery('#width5').val(param[7]); jQuery('#range5').val(param[7]); jQuery('#month1').css('height',param[7]+'px');
		jQuery('#width6').val(param[8]); jQuery('#range6').val(param[8]); jQuery('#month1').css('border-width',param[8]+'px');
		jQuery('#width7').val(param[9]); jQuery('#range7').val(param[9]); jQuery('#month1').css('border-radius',param[9]+'px');
		jQuery('#color_code2').val(param[10]); jQuery('#myColor2').val(param[10]); jQuery('#month1').css('border-color',param[10]);
		jQuery('#color_code3').val(param[11]); jQuery('#myColor3').val(param[11]); jQuery('#month1').css('background-color',param[11]);
		jQuery('#color_code4').val(param[12]); jQuery('#myColor4').val(param[12]); jQuery('#month1').css('color',param[12]);
		jQuery('#Text_Font3').val(param[13]); jQuery('#month1').css('font-family',param[13]);
		jQuery('#width8').val(param[14]); jQuery('#range8').val(param[14]); jQuery('#month1').css('font-size',param[14]+'px');
		jQuery('#width9').val(param[14]); jQuery('.prev1').css('font-size',param[14]+'px'); jQuery('.next1').css('font-size',param[14]+'px');
		jQuery('#width10').val(param[16]); jQuery('#range10').val(param[16]); jQuery('.prev1').css('border-width',param[16]+'px'); jQuery('.next1').css('border-width',param[16]+'px');
		jQuery('#width11').val(param[17]); jQuery('#range11').val(param[17]); jQuery('.prev1').css('border-radius',param[17]+'px'); jQuery('.next1').css('border-radius',param[17]+'px');
		jQuery('#color_code5').val(param[18]); jQuery('#myColor5').val(param[18]); jQuery('.prev1').css('border-color',param[18]); jQuery('.next1').css('border-color',param[18]);
		jQuery('#color_code6').val(param[19]); jQuery('#myColor6').val(param[19]); jQuery('.prev1').css('background-color',param[19]); jQuery('.next1').css('background-color',param[19]);
		jQuery('#color_code7').val(param[20]); jQuery('#myColor7').val(param[20]); jQuery('.prev1').css('color',param[20]); jQuery('.next1').css('color',param[20]);
		jQuery('#width12').val(param[21]); jQuery('#range12').val(param[21]); jQuery('#title_name').css('height',param[21]+'px');
		jQuery('#width13').val(param[22]); jQuery('#range13').val(param[22]); jQuery('#title_name').css('border-width',param[22]+'px');
		jQuery('#width14').val(param[23]); jQuery('#range14').val(param[23]); jQuery('#title_name').css('border-radius',param[23]+'px');
		jQuery('#color_code8').val(param[24]); jQuery('#myColor8').val(param[24]); jQuery('#title_name').css('border-color',param[24]);
		jQuery('#color_code9').val(param[25]); jQuery('#myColor9').val(param[25]); jQuery('#title_name').css('background-color',param[25]);
		jQuery('#color_code10').val(param[26]); jQuery('#myColor10').val(param[26]); jQuery('#title_name').css('color',param[26]);
		jQuery('#Text_Font4').val(param[27]); jQuery('#title_name').css('font-family',param[27]);
		jQuery('#width15').val(param[28]); jQuery('#range15').val(param[28]); jQuery('#title_name').css('font-size',param[28]+'px');
		jQuery('#width16').val(param[29]); jQuery('#range16').val(param[29]); jQuery('.week_day1').css('height',param[29]+'px');
		jQuery('#width17').val(param[30]); jQuery('#range17').val(param[30]); jQuery('.week_day1').css('border-width',param[30]+'px');
		jQuery('#width18').val(param[31]); jQuery('#range18').val(param[31]); jQuery('.week_day1').css('border-radius',param[31]+'px');
		jQuery('#color_code11').val(param[32]); jQuery('#myColor11').val(param[32]); jQuery('.week_day1').css('border-color',param[32]);
		jQuery('#width19').val(param[33]); jQuery('#range19').val(param[33]); jQuery('.week_day1').css('font-size',param[33]+'px');
		jQuery('#color_code12').val(param[34]); jQuery('#myColor12').val(param[34]); jQuery('.week_day1').css('color',param[34]);
		jQuery('#color_code13').val(param[35]); jQuery('#myColor13').val(param[35]); jQuery('.week_day1').css('background-color',param[35]);
		jQuery('#width20').val(param[36]); jQuery('#range20').val(param[36]); jQuery('#sat1').css('border-width',param[36]+'px');
		jQuery('#width21').val(param[37]); jQuery('#range21').val(param[37]); jQuery('#sat1').css('border-radius',param[37]+'px');
		jQuery('#color_code14').val(param[38]); jQuery('#myColor14').val(param[38]); jQuery('#sat1').css('border-color',param[38]);
		jQuery('#width22').val(param[39]); jQuery('#range22').val(param[39]); jQuery('#sat1').css('font-size',param[39]+'px');
		jQuery('#color_code15').val(param[40]); jQuery('#myColor15').val(param[40]); jQuery('#sat1').css('background-color',param[40]);
		jQuery('#color_code16').val(param[41]); jQuery('#myColor16').val(param[41]); jQuery('#sat1').css('color',param[41]);
		jQuery('#width23').val(param[42]); jQuery('#range23').val(param[42]); jQuery('#sun1').css('border-width',param[42]+'px');
		jQuery('#width24').val(param[43]); jQuery('#range24').val(param[43]); jQuery('#sun1').css('border-radius',param[43]+'px');
		jQuery('#color_code17').val(param[44]); jQuery('#myColor17').val(param[44]); jQuery('#sun1').css('border-color',param[44]);
		jQuery('#width25').val(param[45]); jQuery('#range25').val(param[45]); jQuery('#sun1').css('font-size',param[45]+'px');
		jQuery('#color_code18').val(param[46]); jQuery('#myColor18').val(param[46]); jQuery('#sun1').css('background-color',param[46]);
		jQuery('#color_code19').val(param[47]); jQuery('#myColor19').val(param[47]); jQuery('#sun1').css('color',param[47]);
		jQuery('#color_code20').val(param[48]); jQuery('#myColor20').val(param[48]); jQuery('#calendar1').css('background-color',param[48]);
		
		jQuery('#color_code24').val(param[55]); jQuery('#myColor24').val(param[55]); jQuery('.without_event').css('color',param[55]);
		jQuery('#color_code25').val(param[56]); jQuery('#myColor25').val(param[56]); jQuery('.without_event').css('background-color',param[56]);
		jQuery('#width29').val(param[57]); jQuery('#range29').val(param[57]); jQuery('.without_event').css('font-size',param[57]+'px');
		jQuery('#width30').val(param[58]); jQuery('#range30').val(param[58]); jQuery('.without_event').css('border-width',param[58]+'px');
		jQuery('#width31').val(param[59]); jQuery('#range31').val(param[59]); jQuery('.without_event').css('border-radius',param[59]+'px');
		jQuery('#color_code26').val(param[60]); jQuery('#myColor26').val(param[60]); jQuery('.without_event').css('border-color',param[60]);
		jQuery('#color_code27').val(param[61]); jQuery('#myColor27').val(param[61]); jQuery('#calendar1 tbody tr:nth-child(2) td:nth-child(3)').css('color',param[61]);
																					 jQuery('#calendar1 tbody tr:nth-child(4) td:nth-child(5)').css('color',param[61]);
		jQuery('#color_code28').val(param[62]); jQuery('#myColor28').val(param[62]); jQuery('#calendar1 tbody tr:nth-child(2) td:nth-child(3)').css('background-color',param[62]);
																					 jQuery('#calendar1 tbody tr:nth-child(4) td:nth-child(5)').css('background-color',param[62]);
		jQuery('#width32').val(param[63]); jQuery('#range32').val(param[63]); jQuery('#calendar1 tbody tr:nth-child(2) td:nth-child(3)').css('font-size',param[63]+'px');
																			  jQuery('#calendar1 tbody tr:nth-child(4) td:nth-child(5)').css('font-size',param[63]+'px');
		jQuery('#width33').val(param[64]); jQuery('#range33').val(param[64]); jQuery('#calendar1 tbody tr:nth-child(2) td:nth-child(3)').css('border-width',param[64]+'px');
																			  jQuery('#calendar1 tbody tr:nth-child(4) td:nth-child(5)').css('border-width',param[64]+'px');
		jQuery('#width34').val(param[65]); jQuery('#range34').val(param[65]); jQuery('#calendar1 tbody tr:nth-child(2) td:nth-child(3)').css('border-radius',param[65]+'px');
																			  jQuery('#calendar1 tbody tr:nth-child(4) td:nth-child(5)').css('border-radius',param[65]+'px');
		jQuery('#color_code29').val(param[66]); jQuery('#myColor29').val(param[66]); jQuery('#calendar1 tbody tr:nth-child(2) td:nth-child(3)').css('border-color',param[66]);
																					 jQuery('#calendar1 tbody tr:nth-child(4) td:nth-child(5)').css('border-color',param[66]);
		jQuery('#color_code30').val(param[67]); jQuery('#myColor30').val(param[67]); jQuery('.sunday1').css('color',param[67]);
		jQuery('#color_code31').val(param[68]); jQuery('#myColor31').val(param[68]); jQuery('.sunday1').css('background-color',param[68]);
		jQuery('#width35').val(param[69]); jQuery('#range35').val(param[69]); jQuery('.sunday1').css('font-size',param[69]+'px');
		jQuery('#width36').val(param[70]); jQuery('#range36').val(param[70]); jQuery('.sunday1').css('border-width',param[70]+'px');
		jQuery('#width37').val(param[71]); jQuery('#range37').val(param[71]); jQuery('.sunday1').css('border-radius',param[71]+'px');
		jQuery('#color_code32').val(param[72]); jQuery('#myColor32').val(param[72]); jQuery('.sunday1').css('border-color',param[72]);
		jQuery('#color_code33').val(param[73]); jQuery('#myColor33').val(param[73]); jQuery('.saturday1').css('color',param[73]);
		jQuery('#color_code34').val(param[74]); jQuery('#myColor34').val(param[74]); jQuery('.saturday1').css('background-color',param[74]);
		jQuery('#width38').val(param[75]); jQuery('#range38').val(param[75]); jQuery('.saturday1').css('font-size',param[75]+'px');
		jQuery('#width39').val(param[76]); jQuery('#range39').val(param[76]); jQuery('.saturday1').css('border-width',param[76]+'px');
		jQuery('#width40').val(param[77]); jQuery('#range40').val(param[77]); jQuery('.saturday1').css('border-radius',param[77]+'px');
		jQuery('#color_code35').val(param[78]); jQuery('#myColor35').val(param[78]); jQuery('.saturday1').css('border-color',param[78]);
		jQuery('#color_code36').val(param[79]); jQuery('#myColor36').val(param[79]); //------------------//
		jQuery('#color_code37').val(param[80]); jQuery('#myColor37').val(param[80]); //------------------//
		jQuery('#color_code38').val(param[81]); jQuery('#myColor38').val(param[81]); //------------------//

		jQuery('#color_code21').val(param[49]); jQuery('#myColor21').val(param[49]); jQuery('.today').css('color',param[49]);
		jQuery('#color_code22').val(param[50]); jQuery('#myColor22').val(param[50]); jQuery('.today').css('background-color',param[50]);
		jQuery('#width26').val(param[51]); jQuery('#range26').val(param[51]); jQuery('.today').css('font-size',param[51]+'px');
		jQuery('#width27').val(param[52]); jQuery('#range27').val(param[52]); jQuery('.today').css('border-width',param[52]+'px');
		jQuery('#width28').val(param[53]); jQuery('#range28').val(param[53]); jQuery('.today').css('border-radius',param[53]+'px');
		jQuery('#color_code23').val(param[54]); jQuery('#myColor23').val(param[54]); jQuery('.today').css('border-color',param[54]);
	});
}

function Reset_button_clicked()
{
	var buttons_value=jQuery('#reset_theme').val();

	if(buttons_value=='Cancel')
	{
		jQuery('#spesial_settings1').fadeOut(100);
		jQuery('#href_Themes').fadeIn(100);
	}
	else
	{
		jQuery('#Name_of_theme').val('Orange Theme');
		jQuery('#width1').val(280); jQuery('#range1').val(280); jQuery('#calendar1').css('width',280+'px');
		jQuery('#width2').val(292); jQuery('#range2').val(292); jQuery('#calendar1').css('height',292+'px');
		jQuery('#color_code1').val('#ff7b3c'); jQuery('#myColor1').val('#ff7b3c'); jQuery('#calendar1').css('border-color','#ff7b3c');
		jQuery('#width3').val(15); jQuery('#range3').val(15); jQuery('#calendar1').css('border-radius',15+'px');
		jQuery('#width4').val(1); jQuery('#range4').val(1); jQuery('#calendar1').css('border-width',1+'px');
		jQuery('#width5').val(37); jQuery('#range5').val(37); jQuery('#month1').css('height',37+'px');
		jQuery('#width6').val(1); jQuery('#range6').val(1); jQuery('#month1').css('border-width',1+'px');
		jQuery('#width7').val(5); jQuery('#range7').val(5); jQuery('#month1').css('border-radius',5+'px');
		jQuery('#color_code2').val('#ff7b3c'); jQuery('#myColor2').val('#ff7b3c'); jQuery('#month1').css('border-color','#ff7b3c');
		jQuery('#color_code3').val('#ca4200'); jQuery('#myColor3').val('#ca4200'); jQuery('#month1').css('background-color','#ca4200');
		jQuery('#color_code4').val('#ffffff'); jQuery('#myColor4').val('#ffffff'); jQuery('#month1').css('color','#ffffff');
		jQuery('#Text_Font3').val('Gisha'); jQuery('#month1').css('font-family','Gisha');
		jQuery('#width8').val(18); jQuery('#range8').val(18); jQuery('#month1').css('font-size',18+'px');
		jQuery('#width9').val(30); jQuery('.prev1').css('font-size',18+'px'); jQuery('.next1').css('font-size',18+'px');
		jQuery('#width10').val(2); jQuery('#range10').val(2); jQuery('.prev1').css('border-width',2+'px'); jQuery('.next1').css('border-width',2+'px');
		jQuery('#width11').val(5); jQuery('#range11').val(5); jQuery('.prev1').css('border-radius',5+'px'); jQuery('.next1').css('border-radius',5+'px');
		jQuery('#color_code5').val('#ca4200'); jQuery('#myColor5').val('#ca4200'); jQuery('.prev1').css('border-color','#ca4200'); jQuery('.next1').css('border-color','#ca4200');
		jQuery('#color_code6').val('#ca4200'); jQuery('#myColor6').val('#ca4200'); jQuery('.prev1').css('background-color','#ca4200'); jQuery('.next1').css('background-color','#ca4200');
		jQuery('#color_code7').val('#ffffff'); jQuery('#myColor7').val('#ffffff'); jQuery('.prev1').css('color','#ffffff'); jQuery('.next1').css('color','#ffffff');
		jQuery('#width12').val(33); jQuery('#range12').val(33); jQuery('#title_name').css('height',33+'px');
		jQuery('#width13').val(0); jQuery('#range13').val(0); jQuery('#title_name').css('border-width',0+'px');
		jQuery('#width14').val(5); jQuery('#range14').val(5); jQuery('#title_name').css('border-radius',5+'px');
		jQuery('#color_code8').val('#ca4200'); jQuery('#myColor8').val('#ca4200'); jQuery('#title_name').css('border-color','#ca4200');
		jQuery('#color_code9').val('#ff8040'); jQuery('#myColor9').val('#ff8040'); jQuery('#title_name').css('background-color','#ff8040');
		jQuery('#color_code10').val('#ca4200'); jQuery('#myColor10').val('#ca4200'); jQuery('#title_name').css('color','#ca4200');
		jQuery('#Text_Font4').val('Abadi MT Condensed Light'); jQuery('#title_name').css('font-family','Abadi MT Condensed Light');
		jQuery('#width15').val(15); jQuery('#range15').val(15); jQuery('#title_name').css('font-size',15+'px');
		jQuery('#width16').val(32); jQuery('#range16').val(32); jQuery('.week_day1').css('height',32+'px');
		jQuery('#width17').val(0); jQuery('#range17').val(0); jQuery('.week_day1').css('border-width',0+'px');
		jQuery('#width18').val(5); jQuery('#range18').val(5); jQuery('.week_day1').css('border-radius',5+'px');
		jQuery('#color_code11').val('#ff8040'); jQuery('#myColor11').val('#ff8040'); jQuery('.week_day1').css('border-color','#ff8040');
		jQuery('#width19').val(14); jQuery('#range19').val(14); jQuery('.week_day1').css('font-size',14+'px');
		jQuery('#color_code12').val('#ff8040'); jQuery('#myColor12').val('#ff8040'); jQuery('.week_day1').css('color','#ff8040');
		jQuery('#color_code13').val('#ca4200'); jQuery('#myColor13').val('#ca4200'); jQuery('.week_day1').css('background-color','#ca4200');
		jQuery('#width20').val(0); jQuery('#range20').val(0); jQuery('#sat1').css('border-width',0+'px');
		jQuery('#width21').val(5); jQuery('#range21').val(5); jQuery('#sat1').css('border-radius',5+'px');
		jQuery('#color_code14').val('#ff8040'); jQuery('#myColor14').val('#ff8040'); jQuery('#sat1').css('border-color','#ff8040');
		jQuery('#width22').val(14); jQuery('#range22').val(14); jQuery('#sat1').css('font-size',14+'px');
		jQuery('#color_code15').val('#ca4200'); jQuery('#myColor15').val('#ca4200'); jQuery('#sat1').css('background-color','#ca4200');
		jQuery('#color_code16').val('#ff8040'); jQuery('#myColor16').val('#ff8040'); jQuery('#sat1').css('color','#ff8040');
		jQuery('#width23').val(0); jQuery('#range23').val(0); jQuery('#sun1').css('border-width',0+'px');
		jQuery('#width24').val(5); jQuery('#range24').val(5); jQuery('#sun1').css('border-radius',5+'px');
		jQuery('#color_code17').val('#ff8040'); jQuery('#myColor17').val('#ff8040'); jQuery('#sun1').css('border-color','#ff8040');
		jQuery('#width25').val(14); jQuery('#range25').val(14); jQuery('#sun1').css('font-size',14+'px');
		jQuery('#color_code18').val('#ca4200'); jQuery('#myColor18').val('#ca4200'); jQuery('#sun1').css('background-color','#ca4200');
		jQuery('#color_code19').val('#ff8040'); jQuery('#myColor19').val('#ff8040'); jQuery('#sun1').css('color','#ff8040');
		jQuery('#color_code20').val('#ff8040'); jQuery('#myColor20').val('#ff8040'); jQuery('#calendar1').css('background-color','#ff8040');
		jQuery('#color_code21').val('#ca4200'); jQuery('#myColor21').val('#ca4200'); jQuery('.today').css('color','#ca4200');
		jQuery('#color_code22').val('#ffe4ca'); jQuery('#myColor22').val('#ffe4ca'); jQuery('.today').css('background-color','#ffe4ca');
		jQuery('#width26').val(14); jQuery('#range26').val(14); jQuery('.today').css('font-size',14+'px');
		jQuery('#width27').val(0); jQuery('#range27').val(0); jQuery('.today').css('border-width',0+'px');
		jQuery('#width28').val(0); jQuery('#range28').val(0); jQuery('.today').css('border-radius',0+'px');
		jQuery('#color_code23').val('#54c587'); jQuery('#myColor23').val('#54c587'); jQuery('.today').css('border-color','#54c587');
		jQuery('#color_code24').val('#ffffff'); jQuery('#myColor24').val('#ffffff'); jQuery('.without_event').css('color','#ffffff');
		jQuery('#color_code25').val('#ff8040'); jQuery('#myColor25').val('#ff8040'); jQuery('.without_event').css('background-color','#ff8040');
		jQuery('#width29').val(14); jQuery('#range29').val(14); jQuery('.without_event').css('font-size',14+'px');
		jQuery('#width30').val(0); jQuery('#range30').val(0); jQuery('.without_event').css('border-width',0+'px');
		jQuery('#width31').val(0); jQuery('#range31').val(0); jQuery('.without_event').css('border-radius',0+'px');
		jQuery('#color_code26').val('#008080'); jQuery('#myColor26').val('#008080'); jQuery('.without_event').css('border-color','#008080');
		jQuery('#color_code27').val('#ff8040'); jQuery('#myColor27').val('#ff8040'); jQuery('#calendar1 tbody tr:nth-child(2) td:nth-child(3)').css('color','#ff8040');
																   jQuery('#calendar1 tbody tr:nth-child(4) td:nth-child(5)').css('color','#ff8040');
		jQuery('#color_code28').val('#ca4200'); jQuery('#myColor28').val('#ca4200'); jQuery('#calendar1 tbody tr:nth-child(2) td:nth-child(3)').css('background-color','#ca4200');
																   jQuery('#calendar1 tbody tr:nth-child(4) td:nth-child(5)').css('background-color','#ca4200');
		jQuery('#width32').val(17); jQuery('#range32').val(17); jQuery('#calendar1 tbody tr:nth-child(2) td:nth-child(3)').css('font-size',17+'px');
															jQuery('#calendar1 tbody tr:nth-child(4) td:nth-child(5)').css('font-size',17+'px');
		jQuery('#width33').val(0); jQuery('#range33').val(0); jQuery('#calendar1 tbody tr:nth-child(2) td:nth-child(3)').css('border-width',0+'px');
															jQuery('#calendar1 tbody tr:nth-child(4) td:nth-child(5)').css('border-width',0+'px');
		jQuery('#width34').val(3); jQuery('#range34').val(3); jQuery('#calendar1 tbody tr:nth-child(2) td:nth-child(3)').css('border-radius',3+'px');
															jQuery('#calendar1 tbody tr:nth-child(4) td:nth-child(5)').css('border-radius',3+'px');
		jQuery('#color_code29').val('#ffff00'); jQuery('#myColor29').val('#ffff00'); jQuery('#calendar1 tbody tr:nth-child(2) td:nth-child(3)').css('border-color','#ffff00');
																   jQuery('#calendar1 tbody tr:nth-child(4) td:nth-child(5)').css('border-color','#ffff00');
		jQuery('#color_code30').val('#ca4200'); jQuery('#myColor30').val('#ca4200'); jQuery('.sunday1').css('color','#ca4200');
		jQuery('#color_code31').val('#ff8040'); jQuery('#myColor31').val('#ff8040'); jQuery('.sunday1').css('background-color','#ff8040');
		jQuery('#width35').val(14); jQuery('#range35').val(14); jQuery('.sunday1').css('font-size',14+'px');
		jQuery('#width36').val(0); jQuery('#range36').val(0); jQuery('.sunday1').css('border-width',0+'px');
		jQuery('#width37').val(0); jQuery('#range37').val(0); jQuery('.sunday1').css('border-radius',0+'px');
		jQuery('#color_code32').val('#ca4200'); jQuery('#myColor32').val('#ca4200'); jQuery('.sunday1').css('border-color','#ca4200');
		jQuery('#color_code33').val('#ffffff'); jQuery('#myColor33').val('#ffffff'); jQuery('.saturday1').css('color','#ffffff');
		jQuery('#color_code34').val('#ff8040'); jQuery('#myColor34').val('#ff8040'); jQuery('.saturday1').css('background-color','#ff8040');
		jQuery('#width38').val(14); jQuery('#range38').val(14); jQuery('.saturday1').css('font-size',14+'px');
		jQuery('#width39').val(0); jQuery('#range39').val(0); jQuery('.saturday1').css('border-width',0+'px');
		jQuery('#width40').val(164); jQuery('#range40').val(164); jQuery('.saturday1').css('border-radius',164+'px');
		jQuery('#color_code35').val('#008080'); jQuery('#myColor35').val('#008080'); jQuery('.saturday1').css('border-color','#008080');
		jQuery('#color_code36').val('#ffffff'); jQuery('#myColor36').val('#ffffff'); //------------------//
		jQuery('#color_code37').val('#ff8040'); jQuery('#myColor37').val('#ff8040'); //------------------//
		jQuery('#color_code38').val('#008080'); jQuery('#myColor38').val('#008080'); //------------------//
	}
}
function Reset_button_clicked1()
{
	
}
function Reset_clicked()
{
	jQuery('#input_of_title').val("");
}
function Reset_clicked1()
{
	jQuery('#input_of_title1').val("");
}
function Search_button_clicked()
{
	var searching=jQuery('#input_of_title').val();

	if(searching.length!=0)
	{
		var ajaxurl = object.ajaxurl;
		var data = {
		action: 'Search_Theme_Click', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
		foobar: searching, // translates into $_POST['foobar'] in PHP
		};
		jQuery.post(ajaxurl, data, function(response) {
			if(response=='Requested Theme does not exist!')
			{
				jQuery('#span_id_errors').html('*'+' '+response);
				jQuery('#input_of_title').val('');
				jQuery('.tr_color').fadeOut(50);
				jQuery('#items').html('0 item');
				return false;
			}
			else
			{
				var params=response.split('$#$');
				jQuery('.tr_color').fadeOut(50);
				jQuery('.tr_color1').fadeIn(50);
				jQuery('.id_item').text(params[0]);
				jQuery('.title_item').text(params[1]);
				jQuery('.published_item').text('Edit');
				jQuery('.delete_item').text('Delete');
				jQuery('#input_of_title').val("");
				jQuery(".title_item").click(function(){ Edit_Theme(params[0]); });
				jQuery(".published_item").click(function(){ Edit_Theme(params[0]); });
				jQuery(".delete_item").click(function(){ Delete_Theme(params[0]); });
			}
		});
	}
	else
	{
		jQuery('#span_id_errors').html('* Please insert Title for searching...');
		return false;
	}
}
function Search_button_clicked1()
{
	var searched=jQuery('#input_of_title1').val();

	if(searched.length!=0)
	{
		var ajaxurl = object.ajaxurl;
		var data = {
		action: 'Search_Setting_Click', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
		foobar: searched, // translates into $_POST['foobar'] in PHP
		};
		jQuery.post(ajaxurl, data, function(response) {
			if(response=='Requested Theme does not exist!')
			{
				jQuery('#span_id_errors1').html('*'+' '+response);
				jQuery('#input_of_title1').val('');
				jQuery('.tr_color').fadeOut(50);
				jQuery('#items1').html('0 item');
				return false;
			}
			else
			{
				var params=response.split('$#$');
				jQuery('.tr_color').fadeOut(50);
				jQuery('.tr_color1').fadeIn(50);
				jQuery('.id_item').text(params[0]);
				jQuery('.title_item').text(params[1]);
				jQuery('.published_item').text('Edit');
				jQuery('.delete_item').text('Delete');
				jQuery('#input_of_title1').val("");
				jQuery(".title_item").click(function(){ Edit_Settings(params[0]); });
				jQuery(".published_item").click(function(){ Edit_Settings(params[0]); });
				jQuery(".delete_item").click(function(){ Delete_Settings(params[0]); });
			}
		});
	}
	else
	{
		jQuery('#span_id_errors1').html('* Please insert Title for searching...');
		return false;
	}
}
function SelectType(image)
{
	var PrimalSrc=[];
	var ChangedSrc=[];				

	PrimalSrc[0]='http://juna-it.com/image/general-parameters.png';
	PrimalSrc[1]='http://juna-it.com/image/body-parameters.png';
	PrimalSrc[2]='http://juna-it.com/image/header-parameters.png';

	ChangedSrc[0]='http://juna-it.com/image/general-parameters1.png';
	ChangedSrc[1]='http://juna-it.com/image/body-parameters1.png';					
	ChangedSrc[2]='http://juna-it.com/image/header-parameters1.png';					

	var images= ['img1','img2','img3'];		

	jQuery('#'+image).attr('src',ChangedSrc[image[image.length-1]-1]);

	for(i=0; i<4; i++)
	{
		if(images[i]!=image)
		{
		 	jQuery('#'+images[i]).attr('src',PrimalSrc[i]);
		}
	}	

	if(image[image.length-1]==2)
	{				
		jQuery('.fieldset_header').css('display','inline');
		jQuery('.fieldset_par').css('display','none');
		jQuery('#fieldset_body').css('display','none');
	}
	else if(image[image.length-1]==3)
	{				
		jQuery('#fieldset_body').css('display','inline');
		jQuery('.fieldset_header').css('display','none');
		jQuery('.fieldset_par').css('display','none');
	}
	else if(image[image.length-1]==1)
	{				
		jQuery('.fieldset_par').css('display','inline');
		jQuery('.fieldset_header').css('display','none');
		jQuery('#fieldset_body').css('display','none');
	}
}