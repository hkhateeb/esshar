<style type="text/css">
#wrapper
{
border-radius: 10px;
}
#header
{
border-radius: 10px 10px 0px 0px;
}
#footer_outer
{
border-radius: 0px 0px 10px 10px;
}
#hor_nav
{
border-radius: 5px 5px 0 0 ;
}
#hor_nav .active.first A
{
/*border-radius: 5px 5px 0px 0px;*/
}
#search .inputbox
{
border-radius: 3px;
}
.module-title
{
border-radius: 3px;
}
</style>


<!-- NAV PARENT ITEMS TRANSITION -->
<?php if ($superfish == 'yes' ) : ?>
<style type="text/css">
#hor_nav LI A:hover, #hor_nav LI:hover A, #hor_nav LI.sfHover A
{
-webkit-transform: skew(0deg, 0deg);
-moz-transform: skew(0deg, 0deg);
-o-transform: skew(0deg, 0deg);
-ms-transform: skew(0deg, 0deg);
transform: skew(0deg, 0deg);
-webkit-transition: all 1s ease-out;
-moz-transition: all 1s ease-out;
-o-transition: all 1s ease-out;
-ms-transition: all 1s ease-out;
transition: all 1s ease-out;
}
</style>
<?php endif; ?>
<!-- //MENU EFFECT -->
