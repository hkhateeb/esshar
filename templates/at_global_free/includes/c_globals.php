<?php defined('_JEXEC') or die;

JHtml::_('behavior.framework', true);	
$app											= JFactory::getApplication();
$doc											= JFactory::getDocument();
$this->language									= $doc->language;
$this->direction								= $doc->direction;
$sitename										= $app->getCfg('sitename');
$menuid											= $this->params->get('menuid');
$menu											= $app->getMenu();

// FONTS
$body_fontstyle					                = $this->params->get('body_fontstyle');

// SEARCH
$display_search								    = $this->params->get('display_search');
$mod_search									    = $this->countModules('search');
$var_search										= 'search';

// NAVIGATION
$display_topmenu							    = $this->params->get('display_topmenu');
$mod_topmenu									= $this->countModules('top_menu');
$var_topmenu									= 'top_menu';
$menu										    = $app->getMenu();
$menuid										    = $this->params->get('menuid');

$hornav_font_color								= $this->params->get('hornav_font_color');
$hornav_dropdown_bg_color						= $this->params->get('hornav_dropdown_bg_color');
$hornav_border_color							= $this->params->get('hornav_border_color');

$nav_bg_image_default					        = $this->params->get('nav_bg_image_default');
$nav_bg_image_file                              = $this->params->get('nav_bg_image_file'); 
$hornav_sub_text_hover							= $this->params->get('hornav_sub_text_hover'); 

$superfish										= $this->params->get('superfish');

// TEMPLATE BG
$body_bg_image_default							= $this->params->get('body_bg_image_default');
$body_bg_image_file					            = $this->params->get('body_bg_image_file');
$body_bg_repeat_option						    = $this->params->get('body_bg_repeat_option', 'bg_repeat,bg_repeat_x,bg_no_repeat_fixed');

// SLIDESHOW
$slideshow_height								= $this->params->get('slideshow_height');
$slideshow_options						        = $this->params->get('slideshow_options', 'implemented_slideshow,module_slideshow');
$menu										    = $app->getMenu();
$animation									    = $this->params->get('animation');
$direction									    = $this->params->get('direction');
$menuid										    = $this->params->get('menuid');
$controlNav                                     = $this->params->get('controlNav');
$directionNav                                   = $this->params->get('directionNav');
$slideshowSpeed                                 = $this->params->get('slideshowSpeed');

// CUSTOM
$color_style       								= $this->params->get('colorStyle');
$custom_css										= $this->params->get('custom_css');
$head_custom_script								= $this->params->get('head_custom_script');
$body_custom_script								= $this->params->get('body_custom_script');

// FOOTER
$footer_text_info     						    = $this->params->get('footer_text_info');
$a_link_options     						    = $this->params->get('a_link_options', 'disable,enable');
$footer_text_infoo     						    = 'designed from atjoomla.com';
$a_l     						                = 'http://www.atjoomla.com';
$d_page     						            = 'enable footer author link from template parameters or upgrade to pro version';

//JQUERY
$jquery_noconflict								= $this->params->get('jquery_noconflict');
$jquery_on										= $this->params->get('jquery_on');
$jquery_version									= $this->params->get('jquery_version'); 

// FRONTPAGE
$show_frontpage									= $this->params->get ("frontpage_options");
$frontpage										= "yes";
$current_page									= "";

if (JRequest::getVar('view') == "featured") {
	$current_page = "frontpage";
}
if (JRequest::getVar('view') != "featured") {
	$current_page = "not_frontpage";
}
if ($show_frontpage == "no" && $current_page == "frontpage") {
	$frontpage = "no";
}

// LOGO
$display_logo									= $this->params->get('display_logo');
if ($this->params->get('logoFile'))
{
$logo = '<img src="'. JURI::root() . $this->params->get('logoFile') .'" alt="'. $sitename .'" />';
}
elseif ($this->params->get('sitetitle'))
{
$logo = '<span class="site-title" title="'. $sitename .'">'. htmlspecialchars($this->params->get('sitetitle')) .'</span>';
}
else
{
$logo = '<span class="site-title" title="'. $sitename .'">'. $sitename .'</span>';
}

?>