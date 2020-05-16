<?php
if(!current_user_can('manage_options'))
{
	die('Access Denied');
}

global $wpdb;
$table_name1 =  $wpdb->prefix . "calendar_settings";

	$Theme_Title=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE id > %d ", 0));
	if(count($Theme_Title)==1)
	{
		$item='1 item';
	}
	else
	{
		$item=count($Theme_Title) . " " . 'items';
	}
?>
	<div id = 'href_Themes'>
		<div  id = 'top_content_settings'>
			<h2 id='Calendar_Manager'>Themes</h2>
			<input type='button' value='Add a Theme' id ='Add_a_Theme'><a target="_blank" href="http://juna-it.com/index.php/juna-event-calendar/" <abbr  title='Click to buy..'><span id="free_version"></span></a>
		</div>
		<div  id = 'middle_content_settings'>
			<label>Title:</label>
			<input type='text' id='input_of_title' name='input_of_title'>
			<input type='button' value='Search' name = 'search_them' id = 'search_them' onclick="Search_button_clicked()">
			<input type='button' value='Reset' class='res_item' onclick="Reset_clicked()">
			<span class="span_for_errors" id="span_id_errors"></span>
			<span id='items'><?php echo $item; ?></span>
		</div>
		<table id = 'bottom_content_settings'>
			<tr class="row_tr">
				<td class='main_id_item'><B><I>ID</I></B></td>
				<td class='main_title_item'><B><I>Title &#9660</I></B></td>
				<td class='main_published_item'><B><I>Edit</I></B></td>
				<td class='main_delete_item'><B><I>Delete</I></B></td>
			</tr>
		<?php for($i=0;$i<count($Theme_Title);$i++) { ?>
			<tr class = 'tr_color' >
				<td class='id_item' > <?php echo $Theme_Title[$i]->id; ?> </td>
				<td class='title_item' onclick="Edit_Theme(<?php echo $Theme_Title[$i]->id?>)"> <?php echo $Theme_Title[$i]->Name_of_theme; ?> </td>
				<td class='published_item' id = '<?php echo $Theme_Title[$i]->id ?>' onclick="Edit_Theme(<?php echo $Theme_Title[$i]->id?>)">Edit</td>
				<td class='delete_item' id ="<?php echo $Theme_Title[$i]->id?>" onclick="Delete_Theme(<?php echo $Theme_Title[$i]->id?>)">Delete</td>	
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
	<div id="spesial_settings1" >
		<form  method='POST'>
		<fieldset style="position:relative; margin-bottom:15px; margin-top:20px; background-color: #0073aa; border-radius: 6px;width: 99%; height: 100px;box-shadow: 2px -2px 1px 1px #ddd;border: 1px solid #0073aa;">
			<div class="buttons_div">
		 		<input type='button' id='reset_theme' value='Reset' onclick="Reset_button_clicked()">
				<br>
				<input type="hidden" id="hidden_button_for_id">
			</div>

			<div class="images_div">
		 		<img id="img1" style="margin-left:10px; width:200px; height:40px; " src="http://juna-it.com/image/general-parameters1.png" onclick="SelectType('img1')" >
		 		<img id="img2" style="margin-left:10px; width:200px; height:40px; " src="http://juna-it.com/image/body-parameters.png" onclick="SelectType('img2')" >
		 		<img id="img3" style="margin-left:10px; width:200px; height:40px; " src="http://juna-it.com/image/header-parameters.png" onclick="SelectType('img3')" >
			</div>
	 	</fieldset>
		<div id='general'>
		<fieldset  class='fieldset_par'>
		<legend> General Parameters </legend>

		
		<table>
			<tr>
				<td class='title'>Theme Title:</td>
				<td id='second_name'><input type="text" id='Name_of_theme' Placeholder="Name of theme" name="Name_of_theme" required></td>
			</tr>
			<tr>
				<td class='title'>Calendar Width:</td>
				<td><input type="range" min='170' max='1000' value="170" step='1' id="range1" onchange="seting('1',true)"></td>
				<td><input type='number' class='width' placeholder="170" min = "170" max='1000' id='width1' onchange="seting('1',false)" name="Calendar_Width" required><span>px</span></td>
			</tr>
			<tr>
				<td class='title'>Calendar Height:</td>
				<td><input type="range" min='190' max='1000' value="190" step='1' id="range2" onchange="seting('2',true)"></td>
				<td><input type='number' class='width' placeholder="190" min = '190' max='1000' id='width2' onchange="seting('2',false)" name="Calendar_Height" required><span>px</span></td>
			</tr>
			<tr>
				<td class='title'>Main border color:</td>
				<td><input type="text" class='color_code' id='color_code1' onchange="change('1',false)" name="Main_border_color" required><input type='color' id='myColor1' onchange="change('1',true)" ><span class='empty'></span></td>
			</tr>
			<tr>
				<td class='title'>Main border radius:</td>
				<td><input type="range" min='0' max='500' value="0" step='1' id="range3" onchange="seting('3',true)"></td>
				<td><input type='number' class='width'  min='0' max='1000' id='width3' placeholder="0" onchange="seting('3',false)" name="Main_border_radius" required><span>px</span></td>
			</tr>
			<tr>
				<td class='title'>Main border width:</td>
				<td><input type="range" min='1' max='100' value="0" step='1' id="range4" onchange="seting('4',true)"></td>
				<td><input type='number' class='width' id='width4' placeholder="1" min='1' max='100' onchange="seting('4',false)" name="Main_border_width" required><span>px</span></td>
			</tr>
		</table>
		</fieldset>	
<!--header -->
		<fieldset  class='fieldset_header'>
		<legend>Header Parameters</legend>

		<fieldset  class='type2_1'>
		<table>
			<tr>					<!--Java Script-->
				<td class="title">Current month<br>height:</td> 			
				<td><input type="range" min='1' max='500' value="0" step='1' id="range5" onchange="seting('5',true)"></td>
				<td><input type='number' class='width' id='width5' placeholder="1" min='1' max='500' onchange="seting('5',false)" name="Current_month_height" required><span>px</span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Current month<br>border width:</td> 			
				<td><input type="range" min='1' max='500' value="0" step='1' id="range6" onchange="seting('6',true)"></td>
				<td><input type='number' class='width' id='width6' placeholder="1" min='1' max='500' onchange="seting('6',false)" name="Current_month_border_width" required><span>px</span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Current month<br>border radius:</td> 			
				<td><input type="range" min='0' max='500' value="0" step='1' id="range7" onchange="seting('7',true)"></td>
				<td><input type='number' class='width' id='width7' placeholder="0" min='0' max='500' onchange="seting('7',false)" name="Current_month_border_radius" required><span>px</span></td>
			</tr>
			<tr> 					<!--Java Script-->
				<td class='title'>Current month<br>border color:</td>
				<td><input type="text" class='color_code' id='color_code2' onchange="change('2',false)" name="Current_month_border_color" required><input type='color' id='myColor2' onchange="change('2',true)" ><span class='empty'></span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class='title'>Current month<br>background color:</td>
				<td><input type="text" class='color_code' id='color_code3' onchange="change('3',false)" name="Current_month_background_color" required><input type='color' id='myColor3' onchange="change('3',true)" ><span class='empty'></span></td>
			</tr>
			<tr>
				<td class='title'>Current month color:</td>
				<td><input type="text" class='color_code' id='color_code4' onchange="change('4',false)" name="Current_month_color" required><input type='color' id='myColor4' onchange="change('4',true)"><span class='empty'></span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Current month<br>Font-family:</td>
				<td>
					<select id="Text_Font3" onchange="ChangeFont(3)" name="Current_month_font_family">
				 		<option value='Abadi MT Condensed Light'> Abadi MT Condensed Light </option>
						<option value='Aharoni'> Aharoni </option>
						<option value='Aldhabi'> Aldhabi </option>
						<option value='Andalus'> Andalus </option>
						<option value='Angsana New'> Angsana New </option>
						<option value='AngsanaUPC'> AngsanaUPC </option>
						<option value='Aparajita'> Aparajita </option>
						<option value='Arabic Typesetting'> Arabic Typesetting </option>
						<option value='Arial'> Arial </option>
						<option value='Arial Black'> Arial Black </option>
						<option value='Batang'> Batang </option>
						<option value='BatangChe'> BatangChe </option>
						<option value='Browallia New'> Browallia New </option>
						<option value='BrowalliaUPC'> BrowalliaUPC </option>
						<option value='Calibri'> Calibri </option>
						<option value='Calibri Light'> Calibri Light </option>
						<option value='Calisto MT'> Calisto MT </option>
						<option value='Cambria'> Cambria </option>
						<option value='Candara'> Candara </option>
						<option value='Century Gothic'> Century Gothic </option>
						<option value='Comic Sans MS'> Comic Sans MS </option>
						<option value='Consolas'> Consolas </option>
						<option value='Constantia'> Constantia </option>
						<option value='Copperplate Gothic'> Copperplate Gothic </option>
						<option value='Copperplate Gothic Light'> Copperplate Gothic Light </option>
						<option value='Corbel'> Corbel </option>
						<option value='Cordia New'> Cordia New </option>
						<option value='CordiaUPC'> CordiaUPC </option>
						<option value='Courier New'> Courier New </option>
						<option value='DaunPenh'> DaunPenh </option>
						<option value='David'> David </option>
						<option value='DFKai-SB'> DFKai-SB </option>
						<option value='DilleniaUPC'> DilleniaUPC </option>
						<option value='DokChampa'> DokChampa </option>
						<option value='Dotum'> Dotum </option>
						<option value='DotumChe'> DotumChe </option>
						<option value='Ebrima'> Ebrima </option>
						<option value='Estrangelo Edessa'> Estrangelo Edessa </option>
						<option value='EucrosiaUPC'> EucrosiaUPC </option>
						<option value='Euphemia'> Euphemia </option>
						<option value='FangSong'> FangSong </option>
						<option value='Franklin Gothic Medium'> Franklin Gothic Medium </option>
						<option value='FrankRuehl'> FrankRuehl </option>
						<option value='FreesiaUPC'> FreesiaUPC </option>
						<option value='Gabriola'> Gabriola </option>
						<option value='Gadugi'> Gadugi </option>
						<option value='Gautami'> Gautami </option>
						<option value='Georgia'> Georgia </option>
						<option value='Gisha'> Gisha </option>
						<option value='Gulim'> Gulim </option>
						<option value='GulimChe'> GulimChe </option>
						<option value='Gungsuh'> Gungsuh </option>
						<option value='GungsuhChe'> GungsuhChe </option>
						<option value='Impact'> Impact </option>
						<option value='IrisUPC'> IrisUPC </option>
						<option value='Iskoola Pota'> Iskoola Pota </option>
						<option value='JasmineUPC'> JasmineUPC </option>
						<option value='KaiTi'> KaiTi </option>
						<option value='Kalinga'> Kalinga </option>
						<option value='Kartika'> Kartika </option>
						<option value='Khmer UI'> Khmer UI </option>
						<option value='KodchiangUPC'> KodchiangUPC </option>
						<option value='Kokila'> Kokila </option>
						<option value='Lao UI'> Lao UI </option>
						<option value='Latha'> Latha </option>
						<option value='Leelawadee'> Leelawadee </option>
						<option value='Levenim MT'> Levenim MT </option>
						<option value='LilyUPC'> LilyUPC </option>
						<option value='Lucida Console'> Lucida Console </option>
						<option value='Lucida Handwriting Italic'> Lucida Handwriting Italic </option>
						<option value='Lucida Sans Unicode'> Lucida Sans Unicode </option>
						<option value='Malgun Gothic'> Malgun Gothic </option>
						<option value='Mangal'> Mangal </option>
						<option value='Manny ITC'> Manny ITC </option>
						<option value='Marlett'> Marlett </option>
						<option value='Meiryo'> Meiryo </option>
						<option value='Meiryo UI'> Meiryo UI </option>
						<option value='Microsoft Himalaya'> Microsoft Himalaya </option>
						<option value='Microsoft JhengHei'> Microsoft JhengHei </option>
						<option value='Microsoft JhengHei UI'> Microsoft JhengHei UI </option>
						<option value='Microsoft New Tai Lue'> Microsoft New Tai Lue </option>
						<option value='Microsoft PhagsPa'> Microsoft PhagsPa </option>
						<option value='Microsoft Sans Serif'> Microsoft Sans Serif </option>
						<option value='Microsoft Tai Le'> Microsoft Tai Le </option>
						<option value='Microsoft Uighur'> Microsoft Uighur </option>
						<option value='Microsoft YaHei'> Microsoft YaHei </option>
						<option value='Microsoft YaHei UI'> Microsoft YaHei UI </option>
						<option value='Microsoft Yi Baiti'> Microsoft Yi Baiti </option>
						<option value='MingLiU_HKSCS'> MingLiU_HKSCS </option>
						<option value='MingLiU_HKSCS-ExtB'> MingLiU_HKSCS-ExtB </option>
						<option value='Miriam'> Miriam </option>
						<option value='Mongolian Baiti'> Mongolian Baiti </option>
						<option value='MoolBoran'> MoolBoran </option>
						<option value='MS UI Gothic'> MS UI Gothic </option>
						<option value='MV Boli'> MV Boli </option>
						<option value='Myanmar Text'> Myanmar Text </option>
						<option value='Narkisim'> Narkisim </option>
						<option value='Nirmala UI'> Nirmala UI </option>
						<option value='News Gothic MT'> News Gothic MT </option>
						<option value='NSimSun'> NSimSun </option>
						<option value='Nyala'> Nyala </option>
						<option value='Palatino Linotype'> Palatino Linotype </option>
						<option value='Plantagenet Cherokee'> Plantagenet Cherokee </option>
						<option value='Raavi'> Raavi </option>
						<option value='Rod'> Rod </option>
						<option value='Sakkal Majalla'> Sakkal Majalla </option>
						<option value='Segoe Print'> Segoe Print </option>
						<option value='Segoe Script'> Segoe Script </option>
						<option value='Segoe UI Symbol'> Segoe UI Symbol </option>
						<option value='Shonar Bangla'> Shonar Bangla </option>
						<option value='Shruti'> Shruti </option>
						<option value='SimHei'> SimHei </option>
						<option value='SimKai'> SimKai </option>
						<option value='Simplified Arabic'> Simplified Arabic </option>
						<option value='SimSun'> SimSun </option>
						<option value='SimSun-ExtB'> SimSun-ExtB </option>
						<option value='Sylfaen'> Sylfaen </option>
						<option value='Tahoma'> Tahoma </option>
						<option value='Times New Roman'> Times New Roman </option>
						<option value='Traditional Arabic'> Traditional Arabic </option>
						<option value='Trebuchet MS'> Trebuchet MS </option>
						<option value='Tunga'> Tunga </option>
						<option value='Utsaah'> Utsaah </option>
						<option value='Vani'> Vani </option>
						<option value='Vijaya'> Vijaya </option>
	 				</select>
				</td>
			</tr>
			<tr>
				<td class='title'>Current month font<br>size:</td>
				<td><input type="range" min='8' max='100' value="8" step='1' id="range8" onchange="seting('8',true)"></td>
				<td><input type='number' placeholder="8" min='8' max='100' class='width' id='width8' onchange="seting('8',false)" name="Current_month_font_size" required><span>px</span></td>
			</tr>			
			<tr>					<!--Java Script-->
				<td class="title">Arrow<br>border width:</td> 			
				<td><input type="range" min='0' max='500' value="0" step='1' id="range10" onchange="seting('10',true)"></td>
				<td><input type='number' class='width' id='width10' placeholder="0" min='0' max='500' onchange="seting('10',false)" name="Arrow_border_width" required><span>px</span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Arrow<br>border radius:</td> 			
				<td><input type="range" min='0' max='500' value="0" step='1' id="range11" onchange="seting('11',true)"></td>
				<td><input type='number' class='width' id='width11' placeholder="0" min='0' max='500' onchange="seting('11',false)" name="Arrow_border_radius" required><span>px</span></td>
			</tr>
			<tr> 					<!--Java Script-->
				<td class='title'>Arrow<br>border color:</td>
				<td><input type="text" class='color_code' id='color_code5' onchange="change('5',false)" name="Arrow_border_color" required><input type='color' id='myColor5' onchange="change('5',true)" ><span class='empty'></span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class='title'>Arrow<br>background color:</td>
				<td><input type="text" class='color_code' id='color_code6' onchange="change('6',false)" name="Arrow_background_color" required><input type='color' id='myColor6' onchange="change('6',true)"><span class='empty'></span></td>
			</tr>
			<tr>
				<td class='title'>Arrow color:</td>
				<td><input type="text" class='color_code' id='color_code7' onchange="change('7',false)" name="Arrow_color" required><input type='color' id='myColor7' onchange="change('7',true)"><span class='empty'></span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Calendar title<br>height:</td> 			
				<td><input type="range" min='1' max='500' value="0" step='1' id="range12" onchange="seting('12',true)"></td>
				<td><input type='number' class='width' id='width12' placeholder="1" min='1' max='100' onchange="seting('12',false)" name="Calendar_title_height" required><span>px</span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Calendar title<br>border width:</td> 			
				<td><input type="range" min='0' max='500' value="0" step='1' id="range13" onchange="seting('13',true)"></td>
				<td><input type='number' class='width' id='width13' placeholder="0" min='0' max='500' onchange="seting('13',false)" name="Calendar_title_border_width" required><span>px</span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Calendar title<br>border radius:</td> 			
				<td><input type="range" min='0' max='500' value="0" step='1' id="range14" onchange="seting('14',true)"></td>
				<td><input type='number' class='width' id='width14' placeholder="0" min='0' max='500' onchange="seting('14',false)" name="Calendar_title_border_radius" required><span>px</span></td>
			</tr>
			<tr> 					<!--Java Script-->
				<td class='title'>Calendar title<br>border color:</td>
				<td><input type="text" class='color_code' id='color_code8' onchange="change('8',false)" name="Calendar_title_border_color" required><input type='color' id='myColor8' onchange="change('8',true)" ><span class='empty'></span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Calendar Title<br>background color:</td>
				<td><input type="text" class='color_code' id='color_code9' onchange="change('9',false)" name="Calendar_title_background_color" required><input type='color' id='myColor9' onchange="change('9',true)"><span class='empty'></span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Calendar Title<br>color:</td>
				<td><input type="text" class='color_code' id='color_code10' onchange="change('10',false)" name="Calendar_title_color" required><input type='color' id='myColor10' onchange="change('10',true)"><span class='empty'></span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Calendar Title<br>Font-family:</td>
				<td>
					<select id="Text_Font4" onchange="ChangeFont(4)" name="Calendar_title_font_family">
				 		<option value='Abadi MT Condensed Light'> Abadi MT Condensed Light </option>
						<option value='Aharoni'> Aharoni </option>
						<option value='Aldhabi'> Aldhabi </option>
						<option value='Andalus'> Andalus </option>
						<option value='Angsana New'> Angsana New </option>
						<option value='AngsanaUPC'> AngsanaUPC </option>
						<option value='Aparajita'> Aparajita </option>
						<option value='Arabic Typesetting'> Arabic Typesetting </option>
						<option value='Arial'> Arial </option>
						<option value='Arial Black'> Arial Black </option>
						<option value='Batang'> Batang </option>
						<option value='BatangChe'> BatangChe </option>
						<option value='Browallia New'> Browallia New </option>
						<option value='BrowalliaUPC'> BrowalliaUPC </option>
						<option value='Calibri'> Calibri </option>
						<option value='Calibri Light'> Calibri Light </option>
						<option value='Calisto MT'> Calisto MT </option>
						<option value='Cambria'> Cambria </option>
						<option value='Candara'> Candara </option>
						<option value='Century Gothic'> Century Gothic </option>
						<option value='Comic Sans MS'> Comic Sans MS </option>
						<option value='Consolas'> Consolas </option>
						<option value='Constantia'> Constantia </option>
						<option value='Copperplate Gothic'> Copperplate Gothic </option>
						<option value='Copperplate Gothic Light'> Copperplate Gothic Light </option>
						<option value='Corbel'> Corbel </option>
						<option value='Cordia New'> Cordia New </option>
						<option value='CordiaUPC'> CordiaUPC </option>
						<option value='Courier New'> Courier New </option>
						<option value='DaunPenh'> DaunPenh </option>
						<option value='David'> David </option>
						<option value='DFKai-SB'> DFKai-SB </option>
						<option value='DilleniaUPC'> DilleniaUPC </option>
						<option value='DokChampa'> DokChampa </option>
						<option value='Dotum'> Dotum </option>
						<option value='DotumChe'> DotumChe </option>
						<option value='Ebrima'> Ebrima </option>
						<option value='Estrangelo Edessa'> Estrangelo Edessa </option>
						<option value='EucrosiaUPC'> EucrosiaUPC </option>
						<option value='Euphemia'> Euphemia </option>
						<option value='FangSong'> FangSong </option>
						<option value='Franklin Gothic Medium'> Franklin Gothic Medium </option>
						<option value='FrankRuehl'> FrankRuehl </option>
						<option value='FreesiaUPC'> FreesiaUPC </option>
						<option value='Gabriola'> Gabriola </option>
						<option value='Gadugi'> Gadugi </option>
						<option value='Gautami'> Gautami </option>
						<option value='Georgia'> Georgia </option>
						<option value='Gisha'> Gisha </option>
						<option value='Gulim'> Gulim </option>
						<option value='GulimChe'> GulimChe </option>
						<option value='Gungsuh'> Gungsuh </option>
						<option value='GungsuhChe'> GungsuhChe </option>
						<option value='Impact'> Impact </option>
						<option value='IrisUPC'> IrisUPC </option>
						<option value='Iskoola Pota'> Iskoola Pota </option>
						<option value='JasmineUPC'> JasmineUPC </option>
						<option value='KaiTi'> KaiTi </option>
						<option value='Kalinga'> Kalinga </option>
						<option value='Kartika'> Kartika </option>
						<option value='Khmer UI'> Khmer UI </option>
						<option value='KodchiangUPC'> KodchiangUPC </option>
						<option value='Kokila'> Kokila </option>
						<option value='Lao UI'> Lao UI </option>
						<option value='Latha'> Latha </option>
						<option value='Leelawadee'> Leelawadee </option>
						<option value='Levenim MT'> Levenim MT </option>
						<option value='LilyUPC'> LilyUPC </option>
						<option value='Lucida Console'> Lucida Console </option>
						<option value='Lucida Handwriting Italic'> Lucida Handwriting Italic </option>
						<option value='Lucida Sans Unicode'> Lucida Sans Unicode </option>
						<option value='Malgun Gothic'> Malgun Gothic </option>
						<option value='Mangal'> Mangal </option>
						<option value='Manny ITC'> Manny ITC </option>
						<option value='Marlett'> Marlett </option>
						<option value='Meiryo'> Meiryo </option>
						<option value='Meiryo UI'> Meiryo UI </option>
						<option value='Microsoft Himalaya'> Microsoft Himalaya </option>
						<option value='Microsoft JhengHei'> Microsoft JhengHei </option>
						<option value='Microsoft JhengHei UI'> Microsoft JhengHei UI </option>
						<option value='Microsoft New Tai Lue'> Microsoft New Tai Lue </option>
						<option value='Microsoft PhagsPa'> Microsoft PhagsPa </option>
						<option value='Microsoft Sans Serif'> Microsoft Sans Serif </option>
						<option value='Microsoft Tai Le'> Microsoft Tai Le </option>
						<option value='Microsoft Uighur'> Microsoft Uighur </option>
						<option value='Microsoft YaHei'> Microsoft YaHei </option>
						<option value='Microsoft YaHei UI'> Microsoft YaHei UI </option>
						<option value='Microsoft Yi Baiti'> Microsoft Yi Baiti </option>
						<option value='MingLiU_HKSCS'> MingLiU_HKSCS </option>
						<option value='MingLiU_HKSCS-ExtB'> MingLiU_HKSCS-ExtB </option>
						<option value='Miriam'> Miriam </option>
						<option value='Mongolian Baiti'> Mongolian Baiti </option>
						<option value='MoolBoran'> MoolBoran </option>
						<option value='MS UI Gothic'> MS UI Gothic </option>
						<option value='MV Boli'> MV Boli </option>
						<option value='Myanmar Text'> Myanmar Text </option>
						<option value='Narkisim'> Narkisim </option>
						<option value='Nirmala UI'> Nirmala UI </option>
						<option value='News Gothic MT'> News Gothic MT </option>
						<option value='NSimSun'> NSimSun </option>
						<option value='Nyala'> Nyala </option>
						<option value='Palatino Linotype'> Palatino Linotype </option>
						<option value='Plantagenet Cherokee'> Plantagenet Cherokee </option>
						<option value='Raavi'> Raavi </option>
						<option value='Rod'> Rod </option>
						<option value='Sakkal Majalla'> Sakkal Majalla </option>
						<option value='Segoe Print'> Segoe Print </option>
						<option value='Segoe Script'> Segoe Script </option>
						<option value='Segoe UI Symbol'> Segoe UI Symbol </option>
						<option value='Shonar Bangla'> Shonar Bangla </option>
						<option value='Shruti'> Shruti </option>
						<option value='SimHei'> SimHei </option>
						<option value='SimKai'> SimKai </option>
						<option value='Simplified Arabic'> Simplified Arabic </option>
						<option value='SimSun'> SimSun </option>
						<option value='SimSun-ExtB'> SimSun-ExtB </option>
						<option value='Sylfaen'> Sylfaen </option>
						<option value='Tahoma'> Tahoma </option>
						<option value='Times New Roman'> Times New Roman </option>
						<option value='Traditional Arabic'> Traditional Arabic </option>
						<option value='Trebuchet MS'> Trebuchet MS </option>
						<option value='Tunga'> Tunga </option>
						<option value='Utsaah'> Utsaah </option>
						<option value='Vani'> Vani </option>
						<option value='Vijaya'> Vijaya </option>
	 				</select>
				</td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Calendar Title<br>Font-size:</td>
				<td><input type="range" min='1' max='100' value="0" step='1' id="range15" onchange="seting('15',true)"></td>
				<td><input type='number' class='width' id='width15' placeholder="1" min='1' max='100' onchange="seting('15',false)" name="Calendar_title_font_size" required><span>px</span></td>
			</tr>
				</table>
			</fieldset>	
			<fieldset class='type2_2'>
			<table>	

			<tr>
				<td class='title'>Weekday names height:</td>
				<td><input type="range" min='8' max='100' value="8" step='1' id="range16" onchange="seting('16',true)"></td>				
				<td><input type='number' placeholder="8" min='8' max='100' class='width' id='width16' onchange="seting('16',false)" name="Weekday_names_height" required><span>px</span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Weekday names<br>border width:</td> 			
				<td><input type="range" min='0' max='500' value="0" step='1' id="range17" onchange="seting('17',true)"></td>
				<td><input type='number' class='width' id='width17' placeholder="0" min='0' max='500' onchange="seting('17',false)" name="Weekday_names_border_width" required><span>px</span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Weekday names<br>border radius:</td> 			
				<td><input type="range" min='0' max='500' value="0" step='1' id="range18" onchange="seting('18',true)"></td>
				<td><input type='number' class='width' id='width18' placeholder="0" min='0' max='500' onchange="seting('18',false)" name="Weekday_names_border_radius" required><span>px</span></td>
			</tr>
			<tr> 					<!--Java Script-->
				<td class='title'>Weekday names<br>border color:</td>
				<td><input type="text" class='color_code' id='color_code11' onchange="change('11',false)" name="Weekday_names_border_color" required><input type='color' id='myColor11' onchange="change('11',true)" ><span class='empty'></span></td>
			</tr>
			<tr>
				<td class='title'>Font size of weekday<br>names:</td>
				<td><input type="range" min='8' max='100' value="8" step='1' id="range19" onchange="seting('19',true)"></td>				
				<td><input type='number'  placeholder="8"  min='8' max='100' class='width' id='width19' onchange="seting('19',false)" name="Font_size_of_weekday_names" required><span>px</span></td>
			</tr>
			<tr>
				<td class='title'>Color of weekday<br>names:</td>
				<td><input type="text" class='color_code' id='color_code12' onchange="change('12',false)" name="Color_of_weekday_names" required><input type='color' id='myColor12' onchange="change('12',true)" ><span class='empty'></span></td>
			</tr>
			<tr>
				<td class='title'>Background color of<br>weekday names:</td>
				<td><input type="text" class='color_code' id='color_code13' onchange="change('13',false)" name="Bg_color_of_weekday_names" required><input type='color' id='myColor13'  onchange="change('13',true)"><span class='empty'></span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Saturday<br>border width:</td> 			
				<td><input type="range" min='0' max='500' value="0" step='1' id="range20" onchange="seting('20',true)"></td>
				<td><input type='number' class='width' id='width20' placeholder="0" min='0' max='500' onchange="seting('20',false)" name="Saturday_border_width" required><span>px</span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Saturday<br>border radius:</td> 			
				<td><input type="range" min='0' max='500' value="0" step='1' id="range21" onchange="seting('21',true)"></td>
				<td><input type='number' class='width' id='width21' placeholder="0" min='0' max='500' onchange="seting('21',false)" name="Saturday_border_radius" required><span>px</span></td>
			</tr>
			<tr> 					<!--Java Script-->
				<td class='title'>Saturday<br>border color:</td>
				<td><input type="text" class='color_code' id='color_code14' onchange="change('14',false)" name="Saturday_border_color" required><input type='color' id='myColor14' onchange="change('14',true)" ><span class='empty'></span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Saturday<br>font-size:</td> 			
				<td><input type="range" min='0' max='500' value="0" step='1' id="range22" onchange="seting('22',true)"></td>
				<td><input type='number' class='width' id='width22' placeholder="0" min='0' max='500' onchange="seting('22',false)" name="Saturday_font_size" required><span>px</span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class='title'>Saturday background<br>color:</td>
				<td><input type="text" class='color_code' id='color_code15' onchange="change('15',false)" name="Saturday_bg_color" required><input type='color' id='myColor15' onchange="change('15',true)" ><span class='empty'></span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class='title'>Saturday color:</td>
				<td><input type="text" class='color_code' id='color_code16' onchange="change('16',false)" name="Saturday_color" required><input type='color' id='myColor16' onchange="change('16',true)" ><span class='empty'></span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Sunday<br>border width:</td> 			
				<td><input type="range" min='0' max='500' value="0" step='1' id="range23" onchange="seting('23',true)"></td>
				<td><input type='number' class='width' id='width23' placeholder="0" min='0' max='500' onchange="seting('23',false)" name="Sunday_border_width" required><span>px</span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Sunday<br>border radius:</td> 			
				<td><input type="range" min='0' max='500' value="0" step='1' id="range24" onchange="seting('24',true)"></td>
				<td><input type='number' class='width' id='width24' placeholder="0" min='0' max='500' onchange="seting('24',false)" name="Sunday_border_radius" required><span>px</span></td>
			</tr>
			<tr> 					<!--Java Script-->
				<td class='title'>Sunday<br>border color:</td>
				<td><input type="text" class='color_code' id='color_code17' onchange="change('17',false)" name="Sunday_border_color" required><input type='color' id='myColor17' onchange="change('17',true)" ><span class='empty'></span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Sunday<br>font-size:</td> 			
				<td><input type="range" min='0' max='500' value="0" step='1' id="range25" onchange="seting('25',true)"></td>
				<td><input type='number' class='width' id='width25' placeholder="0" min='0' max='500' onchange="seting('25',false)" name="Sunday_font_size" required><span>px</span></td>
			</tr>
			<tr>
				<td class='title'>Sunday background<br>color:</td>
				<td><input type="text" class='color_code' id='color_code18' onchange="change('18',false)" name="Sunday_bg_color" required><input type='color' id='myColor18' onchange="change('18',true)" ><span class='empty'></span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class='title'>Sunday color:</td>
				<td><input type="text" class='color_code' id='color_code19' onchange="change('19',false)" name="Sunday_color" required><input type='color' id='myColor19' onchange="change('19',true)" ><span class='empty'></span></td>
			</tr>
		</table>
		</fieldset>
		</fieldset>
</div>
<!-- body-->
<div id='general_body'>
		<fieldset  id='fieldset_body'>
		<legend>Body Parameters</legend>

		<fieldset class='type2_1'>
		<table>
			<tr>
				<td class='title'>Background color:</td>
				<td><input type="text" class='color_code' id='color_code20' onchange="change('20',false)" name="Bg_color" required><input type='color' id='myColor20'  onchange="change('20',true)" ><span class='empty'></span></td>
			</tr>
			<tr>
				<td class='title'>Current day text color:</td>
				<td><input type="text" class='color_code' id='color_code21' onchange="change('21',false)" name="Current_day_text_color" required><input type='color' id='myColor21'  onchange="change('21',true)" ><span class='empty'></span></td>
			</tr>
			<tr>
				<td class='title'>Current day background color:</td>
				<td><input type="text" class='color_code' id='color_code22' onchange="change('22',false)" name="Current_day_background_color" required><input type='color' id='myColor22'  onchange="change('22',true)" ><span class='empty'></span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Current day font-size:</td> 			
				<td><input type="range" min='0' max='500' value="0" step='1' id="range26" onchange="seting('26',true)"></td>
				<td><input type='number' class='width' id='width26' placeholder="0" min='0' max='500' onchange="seting('26',false)" name="Current_day_font_size" required><span>px</span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Current day border width:</td> 			
				<td><input type="range" min='0' max='500' value="0" step='1' id="range27" onchange="seting('27',true)"></td>
				<td><input type='number' class='width' id='width27' placeholder="0" min='0' max='500' onchange="seting('27',false)" name="Current_day_border_width" required><span>px</span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Current day border radius:</td> 			
				<td><input type="range" min='0' max='500' value="0" step='1' id="range28" onchange="seting('28',true)"></td>
				<td><input type='number' class='width' id='width28' placeholder="0" min='0' max='500' onchange="seting('28',false)" name="Current_day_border_radius" required><span>px</span></td>
			</tr>
			<tr>
				<td class='title'>Current day border color:</td>
				<td><input type="text" class='color_code' id='color_code23' onchange="change('23',false)" name="Current_day_border_color" required><input type='color' id='myColor23'  onchange="change('23',true)" ><span class='empty'></span></td>
			</tr>
			<tr>
				<td class='title'>Cell text color without<br>events:</td>
				<td><input type="text" class='color_code' id='color_code24' onchange="change('24',false)" name="Cell_text_color_without_events" required><input type='color' id='myColor24'  onchange="change('24',true)" ><span class='empty'></span></td>
			</tr>
			<tr> 					<!--Java Script-->
				<td class='title'>Cell background color without events:</td>
				<td><input type="text" class='color_code' id='color_code25' onchange="change('25',false)" name="Cell_background_color_without_events" required><input type='color' id='myColor25' onchange="change('25',true)" ><span class='empty'></span></td>
			</tr>			
			<tr>					<!--Java Script-->
				<td class="title">Cell font-size without events:</td> 			
				<td><input type="range" min='0' max='500' value="0" step='1' id="range29" onchange="seting('29',true)"></td>
				<td><input type='number' class='width' id='width29' placeholder="0" min='0' max='500' onchange="seting('29',false)" name="Cell_font_size_without_events" required><span>px</span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Cell border width without event:</td> 			
				<td><input type="range" min='0' max='500' value="0" step='1' id="range30" onchange="seting('30',true)"></td>
				<td><input type='number' class='width' id='width30' placeholder="0" min='0' max='500' onchange="seting('30',false)" name="Cell_border_width_without_event" required><span>px</span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Cell border radius without event:</td> 			
				<td><input type="range" min='0' max='500' value="0" step='1' id="range31" onchange="seting('31',true)"></td>
				<td><input type='number' class='width' id='width31' placeholder="0" min='0' max='500' onchange="seting('31',false)" name="Cell_border_radius_without_event" required><span>px</span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class='title'>Cell border color without event:</td>
				<td><input type="text" class='color_code' id='color_code26' onchange="change('26',false)" name="Cell_border_color_without_event" required><input type='color' id='myColor26'  onchange="change('26',true)" ><span class='empty'></span></td>
			</tr>
			<tr>
				<td class='title'>Cell text color with<br>events:</td>
				<td><input type="text" class='color_code' id='color_code27' onchange="change('27',false)" name="Cell_text_color_with_events" required><input type='color' id='myColor27'  onchange="change('27',true)" ><span class='empty'></span></td>
			</tr>
			<tr>
				<td class='title'>Cell background color<br>with events:</td>
				<td><input type="text" class='color_code' id='color_code28' onchange="change('28',false)" name="Cell_bg_color_with_events" required><input type='color' id='myColor28'  onchange="change('28',true)" ><span class='empty'></span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Cell font-size with events:</td> 			
				<td><input type="range" min='0' max='500' value="0" step='1' id="range32" onchange="seting('32',true)"></td>
				<td><input type='number' class='width' id='width32' placeholder="0" min='0' max='500' onchange="seting('32',false)" name="Cell_font_size_with_events" required><span>px</span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Cell border width with event:</td> 			
				<td><input type="range" min='0' max='500' value="0" step='1' id="range33" onchange="seting('33',true)"></td>
				<td><input type='number' class='width' id='width33' placeholder="0" min='0' max='500' onchange="seting('33',false)" name="Cell_border_width_with_event" required><span>px</span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Cell border radius with event:</td> 			
				<td><input type="range" min='0' max='500' value="0" step='1' id="range34" onchange="seting('34',true)"></td>
				<td><input type='number' class='width' id='width34' placeholder="0" min='0' max='500' onchange="seting('34',false)" name="Cell_border_radius_with_event" required><span>px</span></td>
			</tr>			
			<tr>					<!--Java Script-->
				<td class='title'>Cell border color with event:</td>
				<td><input type="text" class='color_code' id='color_code29' onchange="change('29',false)" name="Cell_border_color_with_event" required><input type='color' id='myColor29'  onchange="change('29',true)" ><span class='empty'></span></td>
			</tr>
			</table>
			</fieldset>
			<fieldset class="type2_2">
			<table>
			<tr>
				<td class='title'>Sundays text color:</td>
				<td><input type="text" class='color_code' id='color_code30' onchange="change('30',false)" name="Sundays_text_color" required><input type='color' id='myColor30' onchange="change('30',true)" ><span class='empty'></span></td>
			</tr>
			<tr>
				<td class='title'>Sundays background color:</td>
				<td><input type="text" class='color_code' id='color_code31' onchange="change('31',false)" name="Sundays_bg_color" required><input type='color' id='myColor31' onchange="change('31',true)" ><span class='empty'></span></td>
			</tr>
			<tr>
				<td class='title'>Sundays font size:</td>
				<td><input type="range" min='8' max='100' value="8" step='1' id="range35" onchange="seting('35',true)"></td>				
				<td><input type='number' placeholder="8" min='8' max='100' class='width' id='width35' onchange="seting('35',false)" name="Sundays_font_size" required><span>px</span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Sundays border width:</td> 			
				<td><input type="range" min='0' max='500' value="0" step='1' id="range36" onchange="seting('36',true)"></td>
				<td><input type='number' class='width' id='width36' placeholder="0" min='0' max='500' onchange="seting('36',false)" name="Sundays_border_width" required><span>px</span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Sundays border radius:</td> 			
				<td><input type="range" min='0' max='500' value="0" step='1' id="range37" onchange="seting('37',true)"></td>
				<td><input type='number' class='width' id='width37' placeholder="0" min='0' max='500' onchange="seting('37',false)" name="Sundays_border_radius" required><span>px</span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class='title'>Sundays border color:</td>
				<td><input type="text" class='color_code' id='color_code32' onchange="change('32',false)" name="Sundays_border_color" required><input type='color' id='myColor32'  onchange="change('32',true)" ><span class='empty'></span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class='title'>Saturdays text color:</td>
				<td><input type="text" class='color_code' id='color_code33' onchange="change('33',false)" name="Saturdays_text_color" required><input type='color' id='myColor33' onchange="change('33',true)" ><span class='empty'></span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class='title'>Saturdays background color:</td>
				<td><input type="text" class='color_code' id='color_code34' onchange="change('34',false)" name="Saturdays_bg_color" required><input type='color' id='myColor34' onchange="change('34',true)" ><span class='empty'></span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class='title'>Saturdays font size:</td>
				<td><input type="range" min='8' max='100' value="8" step='1' id="range38" onchange="seting('38',true)"></td>				
				<td><input type='number' placeholder="8" min='8' max='100' class='width' id='width38' onchange="seting('38',false)" name="Saturdays_font_size" required><span>px</span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Saturdays border width:</td> 			
				<td><input type="range" min='0' max='500' value="0" step='1' id="range39" onchange="seting('39',true)"></td>
				<td><input type='number' class='width' id='width39' placeholder="0" min='0' max='500' onchange="seting('39',false)" name="Saturdays_border_width" required><span>px</span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class="title">Saturdays border radius:</td> 			
				<td><input type="range" min='0' max='500' value="0" step='1' id="range40" onchange="seting('40',true)"></td>
				<td><input type='number' class='width' id='width40' placeholder="0" min='0' max='500' onchange="seting('40',false)" name="Saturdays_border_radius" required><span>px</span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class='title'>Saturdays border color:</td>
				<td><input type="text" class='color_code' id='color_code35' onchange="change('35',false)" name="Saturdays_border_color" required><input type='color' id='myColor35'  onchange="change('35',true)" ><span class='empty'></span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class='title'>Hover text color:</td>
				<td><input type="text" class='color_code' id='color_code36' onchange="change('36',false)" name="Hover_text_color" required><input type='color' id='myColor36' onchange="change('36',true)" ><span class='empty'></span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class='title'>Hover background color:</td>
				<td><input type="text" class='color_code' id='color_code37' onchange="change('37',false)" name="Hover_bg_color" required><input type='color' id='myColor37' onchange="change('37',true)" ><span class='empty'></span></td>
			</tr>
			<tr>					<!--Java Script-->
				<td class='title'>Hover border color:</td>
				<td><input type="text" class='color_code' id='color_code38' onchange="change('38',false)" name="Hover_border_color" required><input type='color' id='myColor38'  onchange="change('38',true)" ><span class='empty'></span></td>
			</tr>
			
		</table>
		</fieldset>
		</fieldset>
	</div>

<input type='hidden'  id='width9' name="Arrow_size" >
</form>
	<table id="calendar1">
 		 <thead>
 		 	<tr><td id='title_name' colspan="7" style="text-align:center;">Calendar Name</td>
		    <tr id='spans'><td class='prev1' id="prev1">‹<td class='month1' id='month1' colspan="5"><td class='next1'id="next1">›
		   	<tr class='week_day1'><td class='week_day1'>Mo<td class='week_day1'>Tu<td class='week_day1'>We<td class='week_day1'>Th<td class='week_day1'>Fr<td id='sat1' class='week_day1'>Sa<td  id='sun1' class='week_day1'>Su
		  <tbody>
	</table>
</div>
	<script>	 
			window.onload=function(){
			function Calendar1(id, year, month) {
			var Dlast = new Date(year,month+1,0).getDate(),
		    D = new Date(year,month,Dlast),
		    DNlast = new Date(D.getFullYear(),D.getMonth(),Dlast).getDay(),
		    DNfirst = new Date(D.getFullYear(),D.getMonth(),1).getDay(),
		    calendar = "<tr>",
			month=["January","February","March","April","May","June","July","August","September","October","November","December"];
		if (DNfirst != 0) {
		  for(var  i = 1; i < DNfirst; i++) calendar += '<td>';
		}else{
		  for(var  i = 0; i < 6; i++) calendar += '<td>';
		}
		for(var  i = 1; i <= Dlast; i++) {
		  if (i == new Date().getDate() && D.getFullYear() == new Date().getFullYear() && D.getMonth() == new Date().getMonth()) {
		    calendar += '<td class="without_event today">' + i;
		  }else{
		  	if(new Date(D.getFullYear(),D.getMonth(),i).getDay() == 0)
		  	{
		  		calendar += '<td class="without_event sunday1">' + i;
		  	}
		  	else if(new Date(D.getFullYear(),D.getMonth(),i).getDay() == 6)
		  	{
		  		calendar += '<td class="without_event saturday1">' + i;
		  	}
		  	else
		  	{
		    	calendar += '<td class="without_event">' + i;
		  	}
		  }
		  if (new Date(D.getFullYear(),D.getMonth(),i).getDay() == 0) {
		    calendar += "<tr>";
		  }
		  
		}
		for(var  i = DNlast; i < 7; i++) calendar += "<td>&nbsp;";
		document.querySelector('#'+id+' tbody').innerHTML = calendar;
		document.querySelector('#'+id+' thead td:nth-child(2)').innerHTML = month[D.getMonth()] +' '+ D.getFullYear();
		document.querySelector('#'+id+' thead td:nth-child(2)').dataset.month = D.getMonth();
		document.querySelector('#'+id+' thead td:nth-child(2)').dataset.year = D.getFullYear();
		if (document.querySelectorAll('#'+id+' tbody tr').length < 6) {  // чтобы при перелистывании месяцев не "подпрыгивала" вся страница, добавляется ряд пустых клеток. Итог: всегда 6 строк для цифр
		    document.querySelector('#'+id+' tbody').innerHTML += "<tr><td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;";
		}
		}
		Calendar1("calendar1", new Date().getFullYear(), new Date().getMonth());
		}

	</script>		