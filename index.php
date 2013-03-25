<?php 
/*
Plugin Name: com.phpgangster.bootstrap.shortcode
Plugin URI: https://github.com/phpgangster/
Description: Wordpress simple bootstrap shortcode
Author: Peyman Aslani
Version: 1.0.0
Author URI: http://www.phpgangster.com
*/
require_once 'includes/shortcodes.php';
add_action('init', 'callMyCssFile::initializeShortcodeCss');
add_action('admin_init', 'callMyCssFile::initializeShortcodeCss');
add_shortcode( 'bootstrap_alert', array('myBootstrapShortcodes', 'bootstrap_alerts') );
add_shortcode( 'bootstrap_button_group', array('myBootstrapShortcodes', 'bootstrap_button_groups') );
add_shortcode( 'bootstrap_button', array('myBootstrapShortcodes', 'bootstrap_buttons') );
add_shortcode( 'bootstrap_icon', array('myBootstrapShortcodes', 'bootstrap_icons') );
add_shortcode( 'bootstrap_hero_unit', array('myBootstrapShortcodes', 'bootstrap_hero_units') );
add_shortcode( 'bootstrap_well', array('myBootstrapShortcodes', 'bootstrap_wells') );


add_action( 'add_meta_boxes', 'phpgangster_meta_box_add_post' );  
function phpgangster_meta_box_add_post()  
{  
    add_meta_box( 'phpgangsterMetaBox', 'Simple Bootstrap Shortcode', 'showPhpgangsterHelp', 'post', 'normal', 'high' );  
}  
add_action( 'add_meta_boxes', 'phpgangster_meta_box_add_page' );  
function phpgangster_meta_box_add_page()  
{  
    add_meta_box( 'phpgangsterMetaBox', 'Simple Bootstrap Shortcode', 'showPhpgangsterHelp', 'page', 'normal', 'high' );  
}  
function showPhpgangsterHelp()  
{  
?>
<center>
	<div class="btn-group">
	 <button class="btn btn-inverse" id="alert" type="button" onclick="showPhpgangster(this.id);">Alert</button>
	  <button class="btn btn-primary" id="button" type="button" onclick="showPhpgangster(this.id);">Button</button>
	  <button class="btn btn-info" id="button-group" type="button" onclick="showPhpgangster(this.id);">Button Group</button>
	  <button class="btn btn-success" id="icon" type="button" onclick="phpgangsterAddShortcode(this.id);">Icons</button>
	  <button class="btn btn-warning" id="hero_unit" type="button" onclick="phpgangsterAddShortcode(this.id);">Hero Unit</button>
	  <button class="btn btn-danger" id="well" type="button" onclick="phpgangsterAddShortcode(this.id);">Well</button>
	</div>
	<br/>
	<br/>
	<br/>
	<div class="btn-group" id="showChoosePhpgangster">
	
	</div>

<script>
function showPhpgangster(id)
{
	if(id == "alert")
	{
		document.getElementById("showChoosePhpgangster").innerHTML = '';
		document.getElementById("showChoosePhpgangster").innerHTML += '<button class="btn btn-inverse" id="alert" type="button" onclick="phpgangsterAddShortcode(this.id);">Default</button><button class="btn btn-inverse" id="alert-error" type="button" onclick="phpgangsterAddShortcode(this.id);">Error</button><button class="btn btn-inverse" id="alert-success" type="button" onclick="phpgangsterAddShortcode(this.id);">Success</button><button class="btn btn-inverse" id="alert-info" type="button" onclick="phpgangsterAddShortcode(this.id);">Info</button><button class="btn btn-inverse" id="alert-phpgangster" type="button" onclick="phpgangsterAddShortcode(this.id);">Phpgangster</button>';
	}
	if(id == "button")
	{
		document.getElementById("showChoosePhpgangster").innerHTML = '';
		document.getElementById("showChoosePhpgangster").innerHTML += '<button class="btn btn-primary" id="btn" type="button" onclick="phpgangsterAddShortcode(this.id);">Default</button><button class="btn btn-primary" id="btn-primary" type="button" onclick="phpgangsterAddShortcode(this.id);">Primary</button><button class="btn btn-primary" id="btn-info" type="button" onclick="phpgangsterAddShortcode(this.id);">Info</button><button class="btn btn-primary" id="btn-success" type="button" onclick="phpgangsterAddShortcode(this.id);">Success</button><button class="btn btn-primary" id="btn-warning" type="button" onclick="phpgangsterAddShortcode(this.id);">Warning</button><button class="btn btn-primary" id="btn-danger" type="button" onclick="phpgangsterAddShortcode(this.id);">Danger</button><button class="btn btn-primary" id="btn-inverse" type="button" onclick="phpgangsterAddShortcode(this.id);">Inverse</button><button class="btn btn-primary" id="btn-link" type="button" onclick="phpgangsterAddShortcode(this.id);">Link</button><button class="btn btn-primary" id="btn-phpgangster" type="button" onclick="phpgangsterAddShortcode(this.id);">Phpgangster</button><button class="btn btn-primary" id="btn-full" type="button" onclick="phpgangsterAddShortcode(this.id);">Full Option</button>';
	}
	if(id == "button-group")
	{
		document.getElementById("showChoosePhpgangster").innerHTML = '';
		document.getElementById("showChoosePhpgangster").innerHTML = '<div class="btn-group"><button class="btn btn-info disabled">Group</button><button class="btn btn-info" id="btn-group" type="button" onclick="phpgangsterAddShortcode(this.id);">Default</button><button class="btn btn-info" id="btn-group-primary" type="button" onclick="phpgangsterAddShortcode(this.id);">Primary</button><button class="btn btn-info" id="btn-group-info" type="button" onclick="phpgangsterAddShortcode(this.id);">Info</button><button class="btn btn-info" id="btn-group-success" type="button" onclick="phpgangsterAddShortcode(this.id);">Success</button><button class="btn btn-info" id="btn-group-warning" type="button" onclick="phpgangsterAddShortcode(this.id);">Warning</button><button class="btn btn-info" id="btn-group-danger" type="button" onclick="phpgangsterAddShortcode(this.id);">Danger</button><button class="btn btn-info" id="btn-group-inverse" type="button" onclick="phpgangsterAddShortcode(this.id);">Inverse</button><button class="btn btn-info" id="btn-group-link" type="button" onclick="phpgangsterAddShortcode(this.id);">Link</button><button class="btn btn-info" id="btn-group-phpgangster" type="button" onclick="phpgangsterAddShortcode(this.id);">Phpgangster</button></div><br><br><div class="btn-group"><button class="btn btn-info disabled">Vertical Group</button><button class="btn btn-info" id="btn-group-vertical" type="button" onclick="phpgangsterAddShortcode(this.id);">Default</button><button class="btn btn-info" id="btn-group-vertical-primary" type="button" onclick="phpgangsterAddShortcode(this.id);">Primary</button><button class="btn btn-info" id="btn-group-vertical-info" type="button" onclick="phpgangsterAddShortcode(this.id);">Info</button><button class="btn btn-info" id="btn-group-vertical-success" type="button" onclick="phpgangsterAddShortcode(this.id);">Success</button><button class="btn btn-info" id="btn-group-vertical-warning" type="button" onclick="phpgangsterAddShortcode(this.id);">Warning</button><button class="btn btn-info" id="btn-group-vertical-danger" type="button" onclick="phpgangsterAddShortcode(this.id);">Danger</button><button class="btn btn-info" id="btn-group-vertical-inverse" type="button" onclick="phpgangsterAddShortcode(this.id);">Inverse</button><button class="btn btn-info" id="btn-group-vertical-link" type="button" onclick="phpgangsterAddShortcode(this.id);">Link</button><button class="btn btn-info" id="btn-group-vertical-phpgangster" type="button" onclick="phpgangsterAddShortcode(this.id);">Phpgangster</button></div></center>';
	}	
}
function phpgangsterAddShortcode(id)
{
	switch(id)
	{
		case "alert":
			send_to_editor("[bootstrap_alert class=\"\" style=\"\"] This is manually alert [/bootstrap_alert]");
		break;	

		case "alert-error":
			send_to_editor("[bootstrap_alert class=\"alert-error\" style=\"\"] This is manually error alert [/bootstrap_alert]");
		break;	

		case "alert-success":
			send_to_editor("[bootstrap_alert class=\"alert-success\" style=\"\"] This is manually success alert [/bootstrap_alert]");
		break;	

		case "alert-info":
			send_to_editor("[bootstrap_alert class=\"alert-info\" style=\"\"] This is manually info alert [/bootstrap_alert]");
		break;

		case "alert-phpgangster":
			send_to_editor("[bootstrap_alert class=\"alert-phpgangster\" style=\"\"] This is manually phpgangster alert [/bootstrap_alert]");
		break;

		case "btn":
			send_to_editor("[bootstrap_button href=\"#\" type=\"\" class=\"\" style=\"\" disabled=\"false\"]Default[/bootstrap_button]");
		break;	

		case "btn-primary":
			send_to_editor("[bootstrap_button href=\"#\" type=\"\" class=\"btn-primary\" style=\"\" disabled=\"false\"]Primary[/bootstrap_button]");
		break;

		case "btn-info":
			send_to_editor("[bootstrap_button href=\"#\" type=\"\" class=\"btn-info\" style=\"\" disabled=\"false\"]Info[/bootstrap_button]");
		break;

		case "btn-success":
			send_to_editor("[bootstrap_button href=\"#\" type=\"\" class=\"btn-success\" style=\"\" disabled=\"false\"]Success[/bootstrap_button]");
		break;

		case "btn-warning":
			send_to_editor("[bootstrap_button href=\"#\" type=\"\" class=\"btn-warning\" style=\"\" disabled=\"false\"]Warning[/bootstrap_button]");
		break;

		case "btn-danger":
			send_to_editor("[bootstrap_button href=\"#\" type=\"\" class=\"btn-danger\" style=\"\" disabled=\"false\"]Danger[/bootstrap_button]");
		break;

		case "btn-inverse":
			send_to_editor("[bootstrap_button href=\"#\" type=\"\" class=\"btn-inverse\" style=\"\" disabled=\"false\"]Inverse[/bootstrap_button]");
		break;

		case "btn-link":
			send_to_editor("[bootstrap_button href=\"#\" type=\"\" class=\"btn-link\" style=\"\" disabled=\"false\"]Link[/bootstrap_button]");
		break;

		case "btn-phpgangster":
			send_to_editor("[bootstrap_button href=\"#\" type=\"\" class=\"btn-phpgangster\" style=\"\" disabled=\"false\"]Phpgangster[/bootstrap_button]");
		break;

		case "btn-full":
			send_to_editor("[bootstrap_button href=\"#\" type=\"\" class=\"btn-large btn-block\" style=\"\" disabled=\"false\"][bootstrap_icon class=\"icon-search\"]Full Option[/bootstrap_button]");
		break;

		case "btn-group":
			send_to_editor("[bootstrap_button_group href=\"#1, #2, #3\" class=\"\" inner_class=\"\" inner_value=\"btn1, btn2, btn3\" style=\"\"]");
		break;

		case "btn-group-primary":
			send_to_editor("[bootstrap_button_group href=\"#1, #2, #3\" class=\"\" inner_class=\"btn btn-primary\" inner_value=\"btn1, btn2, btn3\" style=\"\"]");
		break;

		case "btn-group-info":
			send_to_editor("[bootstrap_button_group href=\"#1, #2, #3\" class=\"\" inner_class=\"btn btn-info\" inner_value=\"btn1, btn2, btn3\" style=\"\"]");
		break;
		
		case "btn-group-success":
			send_to_editor("[bootstrap_button_group href=\"#1, #2, #3\" class=\"\" inner_class=\"btn btn-success\" inner_value=\"btn1, btn2, btn3\" style=\"\"]");
		break;

		case "btn-group-warning":
			send_to_editor("[bootstrap_button_group href=\"#1, #2, #3\" class=\"\" inner_class=\"btn btn-warning\" inner_value=\"btn1, btn2, btn3\" style=\"\"]");
		break;

		case "btn-group-danger":
			send_to_editor("[bootstrap_button_group href=\"#1, #2, #3\" class=\"\" inner_class=\"btn btn-danger\" inner_value=\"btn1, btn2, btn3\" style=\"\"]");
		break;

		case "btn-group-inverse":
			send_to_editor("[bootstrap_button_group href=\"#1, #2, #3\" class=\"\" inner_class=\"btn btn-inverse\" inner_value=\"btn1, btn2, btn3\" style=\"\"]");
		break;

		case "btn-group-link":
			send_to_editor("[bootstrap_button_group href=\"#1, #2, #3\" class=\"\" inner_class=\"btn btn-link\" inner_value=\"btn1, btn2, btn3\" style=\"\"]");
		break;

		case "btn-group-phpgangster":
			send_to_editor("[bootstrap_button_group href=\"#1, #2, #3\" class=\"\" inner_class=\"btn btn-phpgangster\" inner_value=\"btn1, btn2, btn3\" style=\"\"]");
		break;
		
		case "btn-group-vertical":
			send_to_editor("[bootstrap_button_group href=\"#1, #2, #3\" class=\"btn-group-vertical\" inner_class=\"\" inner_value=\"btn1, btn2, btn3\" style=\"\"]");
		break;

		case "btn-group-vertical-primary":
			send_to_editor("[bootstrap_button_group href=\"#1, #2, #3\" class=\"btn-group-vertical\" inner_class=\"btn btn-primary\" inner_value=\"btn1, btn2, btn3\" style=\"\"]");
		break;

		case "btn-group-vertical-info":
			send_to_editor("[bootstrap_button_group href=\"#1, #2, #3\" class=\"btn-group-vertical\" inner_class=\"btn btn-info\" inner_value=\"btn1, btn2, btn3\" style=\"\"]");
		break;	

		case "btn-group-vertical-success":
			send_to_editor("[bootstrap_button_group href=\"#1, #2, #3\" class=\"btn-group-vertical\" inner_class=\"btn btn-success\" inner_value=\"btn1, btn2, btn3\" style=\"\"]");
		break;

		case "btn-group-vertical-warning":
			send_to_editor("[bootstrap_button_group href=\"#1, #2, #3\" class=\"btn-group-vertical\" inner_class=\"btn btn-warning\" inner_value=\"btn1, btn2, btn3\" style=\"\"]");
		break;

		case "btn-group-vertical-danger":
			send_to_editor("[bootstrap_button_group href=\"#1, #2, #3\" class=\"btn-group-vertical\" inner_class=\"btn btn-danger\" inner_value=\"btn1, btn2, btn3\" style=\"\"]");
		break;

		case "btn-group-vertical-inverse":
			send_to_editor("[bootstrap_button_group href=\"#1, #2, #3\" class=\"btn-group-vertical\" inner_class=\"btn btn-inverse\" inner_value=\"btn1, btn2, btn3\" style=\"\"]");
		break;

		case "btn-group-vertical-link":
			send_to_editor("[bootstrap_button_group href=\"#1, #2, #3\" class=\"btn-group-vertical\" inner_class=\"btn btn-link\" inner_value=\"btn1, btn2, btn3\" style=\"\"]");
		break;

		case "btn-group-vertical-phpgangster":
			send_to_editor("[bootstrap_button_group href=\"#1, #2, #3\" class=\"btn-group-vertical\" inner_class=\"btn btn-phpgangster\" inner_value=\"btn1, btn2, btn3\" style=\"\"]");
		break;

		case "icon":
			document.getElementById("showChoosePhpgangster").innerHTML = '';
			send_to_editor("[bootstrap_icon class=\"Please write bootstrap icon class\" style=\"\"]");
		break;

		case "hero_unit":
			document.getElementById("showChoosePhpgangster").innerHTML = '';
			send_to_editor("[bootstrap_hero_unit heading=\"Head\" style=\"\"]Content[/bootstrap_hero_unit]");
		break;	

		case "well":
			document.getElementById("showChoosePhpgangster").innerHTML = '';
			send_to_editor("[bootstrap_well class=\"\" style=\"\"]Content[/bootstrap_well]");
		break;		
		
	}
	
}
</script>
<?php        
}  
?>