<?php defined('_JEXEC') or die; 
/* copyright (c) atjoomla.com  */
$root			= $this->baseurl;
$template		= $this->template;
$css			= ''.$root.'/templates/'.$template.'/css/';
$js				= ''.$root.'/templates/'.$template.'/js/';
$includes		= 'templates/'.$template.'/includes/';
require_once ($includes.'a_header.php'); 
require_once ($includes.'b_body.php');
?>