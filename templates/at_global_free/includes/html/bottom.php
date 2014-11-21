<?php defined('_JEXEC') or die; 
$mod_bottom1	         = $this->countModules('bottom1');
$mod_bottom2	         = $this->countModules('bottom2');
$mod_bottom3	         = $this->countModules('bottom3');
$mod_bottom4	         = $this->countModules('bottom4');
$var_bottom1             = 'bottom1';
$var_bottom2             = 'bottom2';
$var_bottom3             = 'bottom3';
$var_bottom4             = 'bottom4';
$bottom1_width			 = "span" . $this->params->get('bottom1_width');
$bottom2_width			 = "span" . $this->params->get('bottom2_width');
$bottom3_width			 = "span" . $this->params->get('bottom3_width');
$bottom4_width			 = "span" . $this->params->get('bottom4_width');
if ($bottom1_width == "span0")
{
$mod_bottom1 = false; 
}
else
{
$mod_bottom1	        = $this->countModules('bottom1');
}
if ($bottom2_width == "span0")
{
$mod_bottom2 = false; 
}
else
{
$mod_bottom2	        = $this->countModules('bottom2');
}
if ($bottom3_width == "span0")
{
$mod_bottom3 = false; 
}
else
{
$mod_bottom3	        = $this->countModules('bottom3');
}
if ($bottom4_width == "span0")
{
$mod_bottom4 = false; 
}
else
{
$mod_bottom4	        = $this->countModules('bottom4');
}
?>
<?php if ( ($mod_bottom1) or ($mod_bottom2) or ($mod_bottom3) or ($mod_bottom4) ) : ?>
<div id="bottom">
<div id="bottom_inner">

<div id="bottom_right_hidden"></div>

<?php if ( ($mod_bottom1) and ($mod_bottom2) and ($mod_bottom3) and ($mod_bottom4) ) : ?>
<div id="bottom1" class="<?php echo $bottom1_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom1; ?>" style="standard" /></div>
<div id="bottom2" class="<?php echo $bottom2_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom2; ?>" style="standard" /></div>
<div id="bottom3" class="<?php echo $bottom3_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom3; ?>" style="standard" /></div>
<div id="bottom4" class="<?php echo $bottom4_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom4; ?>" style="standard" /></div>
<?php endif; ?>
<?php if ( ($mod_bottom1) and ($mod_bottom2) and ($mod_bottom3) and ($mod_bottom4 == false) ) : ?>
<div id="bottom1" class="<?php echo $bottom1_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom1; ?>" style="standard" /></div>
<div id="bottom2" class="<?php echo $bottom2_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom2; ?>" style="standard" /></div>
<div id="bottom3" class="<?php echo $bottom3_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom3; ?>" style="standard" /></div>
<?php endif; ?>
<?php if ( ($mod_bottom1) and ($mod_bottom2) and ($mod_bottom3 == false) and ($mod_bottom4) ) : ?>
<div id="bottom1" class="<?php echo $bottom1_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom1; ?>" style="standard" /></div>
<div id="bottom2" class="<?php echo $bottom2_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom2; ?>" style="standard" /></div>
<div id="bottom4" class="<?php echo $bottom4_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom4; ?>" style="standard" /></div>
<?php endif; ?>
<?php if ( ($mod_bottom1) and ($mod_bottom2 == false) and ($mod_bottom3) and ($mod_bottom4) ) : ?>
<div id="bottom1" class="<?php echo $bottom1_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom1; ?>" style="standard" /></div>
<div id="bottom3" class="<?php echo $bottom3_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom3; ?>" style="standard" /></div>
<div id="bottom4" class="<?php echo $bottom4_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom4; ?>" style="standard" /></div>
<?php endif; ?>
<?php if ( ($mod_bottom1 == false) and ($mod_bottom2) and ($mod_bottom3) and ($mod_bottom4) ) : ?>
<div id="bottom2" class="<?php echo $bottom2_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom2; ?>" style="standard" /></div>
<div id="bottom3" class="<?php echo $bottom3_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom3; ?>" style="standard" /></div>
<div id="bottom4" class="<?php echo $bottom4_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom4; ?>" style="standard" /></div>
<?php endif; ?>
<?php if ( ($mod_bottom1) and ($mod_bottom2) and ($mod_bottom3 == false) and ($mod_bottom4 == false) ) : ?>
<div id="bottom1" class="<?php echo $bottom1_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom1; ?>" style="standard" /></div>
<div id="bottom2" class="<?php echo $bottom2_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom2; ?>" style="standard" /></div>
<?php endif; ?>
<?php if ( ($mod_bottom1) and ($mod_bottom2 == false) and ($mod_bottom3) and ($mod_bottom4 == false) ) : ?>
<div id="bottom1" class="<?php echo $bottom1_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom1; ?>" style="standard" /></div>
<div id="bottom3" class="<?php echo $bottom3_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom3; ?>" style="standard" /></div>
<?php endif; ?>
<?php if ( ($mod_bottom1 == false) and ($mod_bottom2) and ($mod_bottom3) and ($mod_bottom4 == false) ) : ?>
<div id="bottom2" class="<?php echo $bottom2_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom2; ?>" style="standard" /></div>
<div id="bottom3" class="<?php echo $bottom3_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom3; ?>" style="standard" /></div>
<?php endif; ?>
<?php if ( ($mod_bottom1 == false) and ($mod_bottom2 == false) and ($mod_bottom3) and ($mod_bottom4) ) : ?>
<div id="bottom3" class="<?php echo $bottom3_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom3; ?>" style="standard" /></div>
<div id="bottom4" class="<?php echo $bottom4_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom4; ?>" style="standard" /></div>
<?php endif; ?>
<?php if ( ($mod_bottom1 == false) and ($mod_bottom2) and ($mod_bottom3 == false) and ($mod_bottom4) ) : ?>
<div id="bottom2" class="<?php echo $bottom2_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom2; ?>" style="standard" /></div>
<div id="bottom4" class="<?php echo $bottom4_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom4; ?>" style="standard" /></div>
<?php endif; ?>
<?php if ( ($mod_bottom1) and ($mod_bottom2 == false) and ($mod_bottom3 == false) and ($mod_bottom4) ) : ?>
<div id="bottom1" class="<?php echo $bottom1_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom1; ?>" style="standard" /></div>
<div id="bottom4" class="<?php echo $bottom4_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom4; ?>" style="standard" /></div>
<?php endif; ?>
<?php if ( ($mod_bottom1) and ($mod_bottom2 == false) and ($mod_bottom3 == false) and ($mod_bottom4 == false) ) : ?>
<div id="bottom1" class="<?php echo $bottom1_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom1; ?>" style="standard" /></div>
<?php endif; ?>
<?php if ( ($mod_bottom1 == false) and ($mod_bottom2) and ($mod_bottom3 == false) and ($mod_bottom4 == false) ) : ?>
<div id="bottom2" class="<?php echo $bottom2_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom2; ?>" style="standard" /></div>
<?php endif; ?>
<?php if ( ($mod_bottom1 == false) and ($mod_bottom2 == false) and ($mod_bottom3) and ($mod_bottom4 == false) ) : ?>
<div id="bottom3" class="<?php echo $bottom3_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom3; ?>" style="standard" /></div>
<?php endif; ?>
<?php if ( ($mod_bottom1 == false) and ($mod_bottom2 == false) and ($mod_bottom3 == false) and ($mod_bottom4) ) : ?>
<div id="bottom4" class="<?php echo $bottom4_width; ?>"><jdoc:include type="modules" name="<?php echo $var_bottom4; ?>" style="standard" /></div>
<?php endif; ?>
<div class="clr"></div>

</div>
</div>
<?php endif; ?>










