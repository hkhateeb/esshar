<?php defined('_JEXEC') or die; ?>

<?php
include 'c_globals.php';

// CSS
$doc->addStyleSheet($css.'superfish.css');
$doc->addStyleSheet($css.'hor_nav.css');
$doc->addStyleSheet($css.'flexslider.css');
$doc->addStyleSheet($css.'typography.css');
$doc->addStyleSheet($css.'template_css.css');
$doc->addStyleSheet($css.'template_css2.css');
$doc->addStyleSheet($css.'responsive_v1.css');
$doc->addStyleSheet($css.'/colors/'.htmlspecialchars($color_style).'.css');
// JS 
$doc->addScript('https://ajax.googleapis.com/ajax/libs/jquery/'.$jquery_version.'/jquery.min.js');	
$doc->addScript($js.'jquery_no_conflict.js');
$doc->addScript($js.'jquery.flexslider-min.js');
// SUPERFISH 
$superfish = $this->params->get('superfish');
if ($superfish == 'yes' )
{
$doc->addScript($js.'hoverIntent.js');
$doc->addScript($js.'superfish.js');
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
<jdoc:include type="head" />
<link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/favicon.ico" />
<?php
include 'd_css.php'; 
include 'e_css3.php'; 
?>
<?php echo ($head_custom_script); ?>
</head>
