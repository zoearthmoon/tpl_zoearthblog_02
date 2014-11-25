<?php
defined('_JEXEC') or die;
$menus = $menus[key($menus)]['menus'];
?>
<?php foreach ($menus as $key=>$menu):?>
<div class="<?php echo $key < 2 ? 'span2':'span8'?> footer-col">
    <h5><?php echo $menu['name']?></h5>
    <?php if (Z2HelperImage::exist($menu['image'])):?>
        <img src="<?php echo Z2HelperImage::_($menu['image'])?>" /><br /><br />
    <?php endif;?>
    <address>
        <?php echo $menu['description']?>
    </address>
</div>
<?php endforeach;?>