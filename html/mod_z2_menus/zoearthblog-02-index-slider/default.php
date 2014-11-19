<?php
defined('_JEXEC') or die;
$menus = $menus[key($menus)]['menus'];
?>
<div class="flexslider">
    <ul class="slides">
        <?php if (count($menus) > 0 ):?>
        
            <?php foreach ($menus as $p=>$menuC):?>
            <?php if (Z2HelperImage::exist($menuC['image'])):?>
            <li>
                <a href="<?php echo $menuC['link'] ?>">
                    <img src="<?php echo Z2HelperImage::exist($menuC['image'],770,354)?>" alt="<?php echo $menuC['name'] ?>" />
                </a>
                <div class="span12">
                    <h3 class="flex-caption"><?php echo $menuC['name'] ?></h3>
                    <p><?php echo Z2HelperUtilities::characterLimit($menuC['description'],300) ?>...</p>
                </div>
            </li>
            <?php endif;?>
            <?php endforeach;?>
        
        <?php endif;?>
    </ul>
</div>
<script type="text/javascript">
jQuery(window).load(function(){
    jQuery('.flexslider').flexslider({
        animation: "slide",
        slideshow: true,
        start: function(slider){
            jQuery('body').removeClass('loading');
        }
    });
});
</script>