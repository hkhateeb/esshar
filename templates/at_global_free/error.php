<?php
defined('_JEXEC') or die;

// GETTING PARAMS FROM TEMPLATE
$params									= JFactory::getApplication()->getTemplate(true)->params;
$app									= JFactory::getApplication();
$doc									= JFactory::getDocument();
$this->language							= $doc->language;
$this->direction						= $doc->direction;

// ADD CURRENT USER INFORMATION
$user = JFactory::getUser();

// LOGO FILE
if ($params->get('logoFile'))
{
$logo = JURI::root() . $params->get('logoFile');
}
else
{
$logo = $this->baseurl . "/templates/" . $this->template . "/images/logo.png";
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
<title><?php echo $this->title; ?> <?php echo $this->error->getMessage();?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="language" content="<?php echo $this->language; ?>" />


<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template_css.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template_css2.css" type="text/css" />

<!-- CUSTOM CSS -->
<style type="text/css">
.error_color
{
color: #ed1c24;
}
#error_page_header_title_color
{
float: right;
font-size: 16px;
font-weight: bold;
color: #666666;
text-transform: uppercase;
font-family: Arial;
}
#content_error
{
background-color: #FFFFFF;
font-family: Arial;
}
.container_error_modules_outer
{
background-color: #FFFFFF;
border: 5px solid #CCCCCC;
padding: 20px;
}
</style>
<!-- //CUSTOM CSS -->

</head>

<body class="body_bg">

<!-- WRAPPER -->
<div id="wrapper">

<!-- HEADER -->
<div id="header">

<!-- LOGO -->
<div class="span6" id="logo">
<a href="<?php echo $this->baseurl; ?>">
<img src="<?php echo $logo;?>" alt="<?php echo $sitename; ?>" />
</a>
</div>
<!-- //LOGO -->

<!-- PAGE HEADER -->
<div class="span5" id="error_page_header_title_color">
<?php echo JText::_('JERROR_LAYOUT_PAGE_NOT_FOUND'); ?>
</div>
<!-- //PAGE HEADER -->
<div class="clr"></div>
</div>
<!-- //HEADER -->

<!-- MAINBODY -->
<div class="container_error_modules_outer">

<!-- CONTENT -->
<div id="content_error">

<div>
<p><strong><?php echo JText::_('JERROR_LAYOUT_ERROR_HAS_OCCURRED_WHILE_PROCESSING_YOUR_REQUEST'); ?></strong></p>
<p><?php echo JText::_('JERROR_LAYOUT_NOT_ABLE_TO_VISIT'); ?></p>
<ul>
<li><?php echo JText::_('JERROR_LAYOUT_AN_OUT_OF_DATE_BOOKMARK_FAVOURITE'); ?></li>
<li><?php echo JText::_('JERROR_LAYOUT_MIS_TYPED_ADDRESS'); ?></li>
<li><?php echo JText::_('JERROR_LAYOUT_SEARCH_ENGINE_OUT_OF_DATE_LISTING'); ?></li>
<li><?php echo JText::_('JERROR_LAYOUT_YOU_HAVE_NO_ACCESS_TO_THIS_PAGE'); ?></li>
</ul>
</div>

<div>
<?php if (JModuleHelper::getModule('search')) : ?>
<p><strong><?php echo JText::_('JERROR_LAYOUT_SEARCH'); ?></strong></p>
<p><?php echo JText::_('JERROR_LAYOUT_SEARCH_PAGE'); ?></p>
<?php
$module = JModuleHelper::getModule('search');
echo JModuleHelper::renderModule($module);
?>
<?php endif; ?>
<p><strong><?php echo JText::_('JERROR_LAYOUT_GO_TO_THE_HOME_PAGE'); ?></strong></p>

<p>
<div id="error_button_color">
<a href="<?php echo $this->baseurl; ?>/index.php" class="btn"><i class="icon-home" id="error_page_header"></i> <?php echo JText::_('JERROR_LAYOUT_HOME_PAGE'); ?></a>
</div>
</p>

</div>

<p><?php echo JText::_('JERROR_LAYOUT_PLEASE_CONTACT_THE_SYSTEM_ADMINISTRATOR'); ?></p>
<p class="error_color">
<strong><?php echo $this->error->getCode(); ?> <?php echo $this->error->getMessage();?></strong>
</p>

</div>
<!-- //CONTENT -->
</div>
<!-- //MAINBODY -->

</div>
<!-- //WRAPPER -->

<jdoc:include type="modules" name="debug" style="none" />
</body>
</html>
