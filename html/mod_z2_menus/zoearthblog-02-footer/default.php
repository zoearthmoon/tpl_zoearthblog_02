<?php
defined('_JEXEC') or die;
$menus = $menus[key($menus)]['menus'];
?>
<?php foreach ($menus as $menu):?>
<div class="span3 footer-col">
    <h5><?php echo $menu['name']?></h5>
    <?php if (Z2HelperImage::exist($menu['image'])):?>
        <img src="<?php echo Z2HelperImage::_($menu['image'])?>" /><br /><br />
    <?php endif;?>
    <address>
        <?php echo $menu['description']?>
    </address>
</div>
<?php endforeach;?>