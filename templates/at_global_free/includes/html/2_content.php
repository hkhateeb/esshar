<?php defined('_JEXEC') or die; 
$mod_left					= $this->countModules('left');
$mod_content				= '<jdoc:include type="message" /><jdoc:include type="component" />';
$mod_right					= $this->countModules('right');
$var_left					= 'left';
$var_content				= $mod_content;
$var_right					= 'right';
$var1						= $this->params->get('left_width');
$var2						= $this->params->get('right_width');
$max_width					= '12';
$column_sum 				= $var1 + $var2;
$var3						= $max_width - $column_sum;
$left_width					= "span" . $var1;
$right_width				= "span" . $var2;
if ($left_width == "span0")
{
$mod_left  = false; 
}
else
{
$mod_left  = $this->countModules('left');
}
if ($right_width == "span0")
{
$mod_right = false; 
}
else
{
$mod_right = $this->countModules('right');
}
?>
<?php if ($frontpage == "yes") { ?>
<?php if ( ($mod_left) or ($mod_content) or ($mod_right) ) : ?>

<div id="middle">

<?php if ( ($mod_left) and ($mod_content) and ($mod_right) ) : ?>
<?php $content_width = "span" . ($var3); ?>
<div id="left_col" class="<?php echo $left_width; ?>"><jdoc:include type="modules" name="<?php echo $var_left; ?>" style="standard" /></div>
<div id="content_col" class="<?php echo $content_width; ?>"><?php include 'slideshow.php'; ?><div id="content_col_inner"><?php echo $var_content; ?></div></div>
<div id="right_col" class="<?php echo $right_width; ?>"><jdoc:include type="modules" name="<?php echo $var_right; ?>" style="standard" /></div>
<?php endif; ?>
<?php if ( ($mod_left == false) and ($mod_content) and ($mod_right) ) : ?>
<?php $content_width = "span" . ($var3 + $var1); ?>
<div id="content_col" class="<?php echo $content_width; ?>"><?php include 'slideshow.php'; ?><div id="content_col_inner"><?php echo $var_content; ?></div></div>
<div id="right_col" class="<?php echo $right_width; ?>"><jdoc:include type="modules" name="<?php echo $var_right; ?>" style="standard" /></div>
<?php endif; ?>
<?php if ( ($mod_left) and ($mod_content) and ($mod_right == false) ) : ?>
<?php $content_width = "span" . ($var3 + $var2); ?>
<div id="left_col" class="<?php echo $left_width; ?>"><jdoc:include type="modules" name="<?php echo $var_left; ?>" style="standard" /></div>
<div id="content_col" class="<?php echo $content_width; ?>"><?php include 'slideshow.php'; ?><div id="content_col_inner"><?php echo $var_content; ?></div></div>
<?php endif; ?>
<?php if ( ($mod_left == false) and ($mod_content) and ($mod_right == false) ) : ?>
<?php $content_width = "span" . ($var3 + $var1 + $var2); ?>
<div id="content_col" class="<?php echo $content_width; ?>"><?php include 'slideshow.php'; ?><div id="content_col_inner"><?php echo $var_content; ?></div></div>
<?php endif; ?>

<div class="clr"></div>

</div>

<?php endif; ?>
<?php } ?>

<?php include 'bottom.php'; ?>