<?php
defined('_JEXEC') or die;
?>
<?php foreach ($menus as $key=>$menu):?>
<a href="<?php JUri::base();?>">
    <?php if (Z2HelperImage::exist($menu['image'])):?>
        <img src="<?php echo Z2HelperImage::_($menu['image'])?>" />
    <?php endif;?>
</a>
<h5><?php echo $menu['name'];?></h5>
<?php endforeach;?>