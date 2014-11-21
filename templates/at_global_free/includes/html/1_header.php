<?php defined('_JEXEC') or die; ?>
<?php if ( ($display_logo == "yes") or ($display_search == "yes") ) : ?>
<div id="header">
<?php if ( ($display_logo == "yes") and ($display_search == "yes") ) : ?>
<div><?php include 'logo.php'; ?></div>
<div><?php include 'search.php'; ?></div>
<?php endif; ?>
<?php if ( ($display_logo == "yes") and ($display_search == "no") ) : ?>
<div><?php include 'logo.php'; ?></div>
<?php endif; ?>
<?php if ( ($display_logo == "no") and ($display_search == "yes") ) : ?>
<div><?php include 'search.php'; ?></div>
<?php endif; ?>
<div class="clr"></div>
</div>
<?php endif; ?>
<?php include 'navigation.php'; ?>