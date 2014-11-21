<?php defined('_JEXEC') or die; ?>
<?php if (is_array($menuid) && is_object($menu) && isset($menu->getActive()->id)&& in_array($menu->getActive()->id, $menuid, true)) { ?>
<?php
$Image[]= $this->params->get( '!', "" );
$Caption[]= $this->params->get( '!', "" );
$Link[]= $this->params->get( '!', "" );
for ($j=1; $j<=30; $j++){
$Image[$j]      = $this->params->get ("Image".$j,"" );
$Caption[$j]    = $this->params->get ("Caption".$j , "" );
$Link[$j]       = $this->params->get ("Link".$j , "" );
} 
?>
<script type="text/javascript">
jQuery(window).load(function(){
jQuery('.flexslider').flexslider({
namespace: "flex-",                             
selector: ".slides > li",                        
animation: "<?php echo $animation ?>",          
easing: "swing",                                 
direction: "<?php echo $direction ?>",          
reverse: false,                                  
animationLoop: true,                             
smoothHeight: false,                            
startAt: 0,                                      
slideshow: true,                                 
slideshowSpeed: "<?php echo $slideshowSpeed ?>", 
animationSpeed: 1500,                            
initDelay: 0,                                   
randomize: false,                                
pauseOnAction: true,                             
pauseOnHover: false,                             
useCSS: true,                                   
touch: true,                                     
video: false,                                   
controlNav: <?php echo $controlNav ?>,           
directionNav: <?php echo $directionNav ?>,       
prevText: "Previous",                            
nextText: "Next",                               
keyboard: true,                                  
multipleKeyboard: false,                         
mousewheel: false,                               
pausePlay: false,                               
pauseText: "Pause",                              
playText: "Play",                                
controlsContainer: "",                           
manualControls: "",                              
sync: "",                                       
asNavFor: "",                                   
itemWidth: 0,                                    
itemMargin: 0,                                  
minItems: 0,                                     
maxItems: 0,                                     
move: 0,                                         
});
});
</script>
<?php if ($slideshow_options == "implemented_slideshow") { ?>
<div class="flexslider">
<ul class="slides">
<?php for ($i=1; $i<=30; $i++){ if ($Image[$i] != null) { ?>
<li>
<?php if ($Link[$i] != null) {?><a href="<?php echo $Link[$i] ?>"><img src="<?php echo $Image[$i] ?>" /></a><?php } else { ?>
<img src="<?php echo $Image[$i] ?>" />
<?php }; ?>
<?php if ($Caption[$i] != null) {?><div class="flex-caption"><span><?php echo $Caption[$i] ?></span></div><?php };?>
</li>
<?php }};  ?>
</ul>
<?php } ?>

<?php if ($slideshow_options == "module_slideshow") { ?>
<jdoc:include type="modules" name="slideshow" />
<?php } ?>
</div>

<?php } ?>