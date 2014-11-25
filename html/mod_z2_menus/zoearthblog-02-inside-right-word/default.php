<?php
defined('_JEXEC') or die;
$menu = $menus[key($menus)];
?>

<h5 class="title-bg"><?php echo $menu['name']?> 
    <small><?php echo $menu['extra_fields']['addTitle']?></small>
</h5>
<div id="clientCarousel" class="carousel slide ">
    <div class="carousel-inner">
    <?php if (count($menu['menus']) > 0):?>
    <?php foreach ($menu['menus'] as $menuC):?>
        <div class="active item">
            <p class="quote-text">
                 <?php echo Z2HelperUtilities::characterLimit($menuC['description'],1000)?>
            </p>
        </div>
    <?php endforeach;?>
    <?php endif;?>
    </div>
</div>
