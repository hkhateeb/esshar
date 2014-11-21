<?php defined('_JEXEC') or die; ?>
<body class="body_bg">
<div id="wrapper">
<?php if ($a_link_options == 'enable') : ?>
<?php 
include ($includes.'html/1_header.php'); 
include ($includes.'html/2_content.php');
include ($includes.'html/3_footer.php'); 
?>
</div>
<?php echo ($body_custom_script); ?>
<?php endif; ?>
<?php if ($a_link_options == 'disable') : ?>
<div class="d_page"><?php print $d_page ; ?></div>
<?php endif; ?>
<?php if ($superfish == 'yes' )
{
include ($includes.'f_superfish.php');  
}
?>
</body>
</html>

