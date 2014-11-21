<?php defined('_JEXEC') or die; ?>

<!-- GENERAL CSS -->
<style type="text/css">

/* SLIDESHOW HEIGHT */
.flexslider IMG
{
height: <?php echo $this->params->get('slideshow_height');?>;
}

/* HORIZONTAL NAVIGATION */
#hor_nav .deeper.parent UL LI A
{
border-top: 1px solid <?php echo $this->params->get('hornav_sub_border_color');?>;
border-left: 1px solid <?php echo $this->params->get('hornav_sub_border_color');?>;
border-right: 1px solid <?php echo $this->params->get('hornav_sub_border_color');?>;
}
#hor_nav LI.active A
{
background-color: <?php echo $this->params->get('hornav_active_bg_color');?> !important; 
color: <?php echo $this->params->get('hornav_active_text_color');?>;
}
#hor_nav LI A:hover, #hor_nav LI:hover A, #hor_nav LI.sfHover A
{
color: <?php echo $this->params->get('hornav_hover_text_color');?>;
}
#hor_nav LI A
{
border-right: 1px solid <?php echo ($hornav_border_color); ?>
}
#hor_nav ul li A
{
color: <?php echo ($hornav_font_color); ?>;
}
#hor_nav LI A:hover, #hor_nav LI:hover A, #hor_nav LI.sfHover A
{
background-color: <?php echo $this->params->get('hornav_active_bg_color');?> !important;
}
#hor_nav LI LI A, #hor_nav LI LI.active A, #hor_nav LI LI A:hover
{
border-top: 1px solid <?php echo $this->params->get('hornav_sub_border_color');?>;
border-right: 1px solid <?php echo $this->params->get('hornav_sub_border_color');?>;
}
#hor_nav LI LI A, #hor_nav LI LI.active A, #hor_nav LI LI A:hover
{
color: <?php echo ($hornav_sub_text_hover);?>;
}

#hor_nav LI A
{
font-size: <?php echo $this->params->get('menu_font_size');?>;
}
#hor_nav
{
background-color: #E99719 <?php #echo $this->params->get('nav_bg_color');?> !important;
}
#hor_nav
{
/*background-image: url(<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/menu_img/<?php echo $nav_bg_image_default ?>.png) !important;*/
}
<?php if($this->params->get('nav_bg_image_file') == '') : ?>
#hor_nav
{
/*background-image: url(<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/menu_img/<?php echo $nav_bg_image_default ?>.png) !important;*/
}
<?php elseif($this->params->get('nav_bg_image_file') != '') : ?>
#hor_nav
{
/*background-image: url(<?php echo $this->baseurl ?>/<?php echo $nav_bg_image_file; ?>) !important;*/
}
<?php endif; ?>
/* //NAVIGATION */


/* BODY */
BODY
{
font-size: <?php echo $this->params->get('font_size');?>;
}
.body_bg
{
background-color: <?php echo $this->params->get('templateBackgroundColor');?> !important; 
}
.body_bg
{
background-image: url(<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/backgrounds/<?php echo $body_bg_image_default ?>.png) !important;
}
<?php if($this->params->get('body_bg_image_file') == '') : ?>
.body_bg
{
background-image: url(<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/backgrounds/<?php echo $body_bg_image_default ?>.png) !important;
}
<?php elseif($this->params->get('body_bg_image_file') != '') : ?>
.body_bg
{
background-image: url(<?php echo $this->baseurl ?>/<?php echo $body_bg_image_file; ?>) !important;
}
<?php endif; ?>

/* //BODY */

/* MODULE CLASS SUFFIX */
.module-body._color1
{
background-color: <?php echo $this->params->get('module_suffix_bg_color1');?> !important;
}
.module-body._color2
{
background-color: <?php echo $this->params->get('module_suffix_bg_color2');?> !important;
}
.module-body._color3
{
background-color: <?php echo $this->params->get('module_suffix_bg_color3');?> !important;
}
.module-body._color4
{
background-color: <?php echo $this->params->get('module_suffix_bg_color3');?> !important;
}
.module-body._color5
{
background-color: <?php echo $this->params->get('module_suffix_bg_color3');?>;
}
</style>

<!-- BODY REPEAT OPTIONS -->
<?php if ($body_bg_repeat_option == "bg_repeat") : ?>
<style type="text/css">
.body_bg
{
background: repeat;
}
</style>
<?php endif; ?>

<?php if ($body_bg_repeat_option == "bg_repeat_x") : ?>
<style type="text/css">
.body_bg
{
background: repeat-x;
}
</style>
<?php endif; ?>

<?php if ($body_bg_repeat_option == "bg_no_repeat_fixed") : ?>
<style type="text/css">
.body_bg
{
background: no-repeat fixed center center;
-moz-background-size: cover;
-webkit-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
</style>
<?php endif; ?>
<!-- //BODY REPEAT OPTIONS -->

<!-- STANDARD WEB FONTS -->
<?php if
( ($body_fontstyle == "Arial, Helvetica, sans-serif") ||
($body_fontstyle == "Courier, monospace") ||
($body_fontstyle == "Tahoma, Geneva, sans-serif") ||
($body_fontstyle == "Garamond, serif") ||
($body_fontstyle == "Georgia, serif") ||
($body_fontstyle == "Impact, Charcoal, sans-serif") ||
($body_fontstyle == "Lucida Console, Monaco, monospace") ||
($body_fontstyle == "Lucida Sans Unicode, Lucida Grande, sans-serif") ||
($body_fontstyle == "MS Sans Serif, Geneva, sans-serif") ||
($body_fontstyle == "MS Serif, New York, sans-serif") ||
($body_fontstyle == "Palatino Linotype, Book Antiqua, Palatino, serif") ||
($body_fontstyle == "Times New Roman, Times, serif") ||
($body_fontstyle == "Trebuchet MS, Helvetica, sans-serif") ||
($body_fontstyle == "Verdana, Geneva, sans-serif") ) : ?>
<style type="text/css">
BODY
{
font-family:<?php echo ($body_fontstyle); ?>
}
</style>
<?php endif; ?>
<!-- STANDARD WEB FONTS -->

<!-- CUSTOM CSS -->
<style type="text/css">
<?php echo ($custom_css); ?>
</style>
<!-- //CUSTOM CSS -->



