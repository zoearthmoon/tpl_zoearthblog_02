<?php
defined('_JEXEC') or die;
$aLangs = Z2HelperLang::getActiveLang();
?>
<script language="Javascript">
jQuery(document).ready(function() {
	jQuery("#main-menu").append(jQuery("#langSwitch").html());
	jQuery("#mobile-nav-select").append(jQuery("#langSwitchSelect").html());
	
});
</script>
<div id="langSwitch" style="display:none;">
<li class="dropdown active">
    <a href="/joomla3_5/blog/amtb.html" data-toggle="dropdown" class="dropdown-toggle">
        <?php echo $aLangs[Z2HelperLang::getNowLang()]['name']; ?>
        <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
	<?php foreach ($list as $language) : ?>
		<li><a href="<?php echo $language->link;?>"><?php echo $language->title_native;?></a></li>
	<?php endforeach; ?>
    </ul>
</li>
</div>
<div id="langSwitchSelect" style="display:none;">
	<?php foreach ($list as $language) : ?>
	    <option value="<?php echo $language->link;?>"><?php echo $language->title_native;?></option>
	<?php endforeach; ?>
</li>
</div>