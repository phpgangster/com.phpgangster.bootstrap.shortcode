<?php 
class callMyCssFile
{
	public static function initializeShortcodeCss() 
	{
		$src = plugins_url('css/phpgangster_shortcode.css',dirname(__FILE__) );
		wp_register_style('com.phpgangster.bootstrap.shortcode', $src);
		wp_enqueue_style('com.phpgangster.bootstrap.shortcode');
	}
}
class myBootstrapShortcodes
{
	static function bootstrap_alerts($atts, $content="")
	{
		extract( shortcode_atts( array(
	    'class' => '',
		'style' => ''
	    ), $atts ) );
	      
		return '<div class="alert '.esc_attr($class).'" style="'.esc_attr($style).'">
				'.do_shortcode($content).'
				</div>';
	}
	
	static function bootstrap_button_groups($atts)
	{
		extract( shortcode_atts( array(
	    'class' => '',
		'inner_class' => '',
		'inner_value' => '',
		'style' => '',
		'href' => ''
	    ), $atts ) );
	    if (esc_attr($inner_class) == '')
	    	$innerClass = "btn";
	    else 
	    	$innerClass = esc_attr($inner_class);	
		$return = '<div class="btn-group '.esc_attr($class).'" style="'.esc_attr($style).'">';
		$innerValue = explode(", ", esc_attr($inner_value));
		$href = explode(", ", esc_attr($href));
		foreach ($innerValue as $key => $value)
		{
			$return .= '<a href="'.$href[$key].'"><button class="'.$innerClass.'">'.$value.'</button></a>';
		}
		$return .=	'</div>';
		
		return $return;
	}
	
	static function bootstrap_buttons($atts, $content="")
	{
		extract( shortcode_atts( array(
	    'class' => '',
		'type' => '',
		'disabled' => '',
		'style' => '',
		'href' => ''
	    ), $atts ) );
	    
	    $_type = esc_attr($type);
	    if ($_type == '')
	    	$_type = 'button';

	    $_disabled = esc_attr($disabled);
	    if ($_disabled == "true")
	    	$_disabled = 'disabled="disabled"';
	    
	    $href = esc_attr($href);	
	    if($href != "")
	    	return '<a href="'.esc_attr($href).'"><button type="'.$_type.'" class="btn '.esc_attr($class).'"  style="'.esc_attr($style).'" '.$_disabled.'>'.do_shortcode($content).'</button></a>';
	    else
	    	return '<button type="'.$_type.'" class="btn '.esc_attr($class).'"  style="'.esc_attr($style).'" '.$_disabled.'>'.do_shortcode($content).'</button>';
	}
	
	static function bootstrap_icons($atts)
	{
		extract( shortcode_atts( array(
	    'class' => '',
		'style' => ''
	    ), $atts ) );
	    
		return '<i class="'.esc_attr($class).'" style="'.esc_attr($style).'"></i>';
	}
	
	static function bootstrap_hero_units($atts, $content="")
	{
		extract( shortcode_atts( array(
	    'heading' => '',
		'style' => ''
	    ), $atts ) );
		return '<div class="hero-unit" style="'.esc_attr($style).'">
				  <h1>'.esc_attr($heading).'</h1>
				  '.do_shortcode($content).'
				</div>';
	}
	
	static function bootstrap_wells($atts, $content="")
	{
		extract( shortcode_atts( array(
	    'class' => '',
		'style' => ''
	    ), $atts ) );
		return '<div class="well '.esc_attr($class).'" style="'.esc_attr($style).'">
  				'.do_shortcode($content).'
				</div>';
	}
}
?>