<script>
(function($){ //create closure so we can safely use $ as alias for jQuery
$(document).ready(function(){
// initialise plugin
var hor_nav = $('#hor_nav').superfish({
//add options here if required
});
// buttons to demonstrate Superfish's public methods
$('.destroy').on('click', function(){
hor_nav.superfish('destroy');
});
$('.init').on('click', function(){
hor_nav.superfish();
});
$('.open').on('click', function(){
hor_nav.children('li:first').superfish('show');
});
$('.close').on('click', function(){
hor_nav.children('li:first').superfish('hide');
});
});
})(jQuery);

</script>
<?php if ($superfish == 'yes' ) : ?>
<script type="text/javascript">
jQuery(function(){
jQuery('#hor_nav ul').superfish({
pathLevels  : 3,
delay       : 300,
animation   : {opacity:'show',height:'show'},
speed       : 'slow',
autoArrows  : false,
dropShadows : false,
});
});
</script>
<?php endif; ?>





