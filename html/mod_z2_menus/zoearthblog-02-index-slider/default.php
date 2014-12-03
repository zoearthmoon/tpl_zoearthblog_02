<?php
defined('_JEXEC') or die;
$menus = $menus[key($menus)]['menus'];
?>
<div class="flexslider">
    <ul class="slides carousel-inner ">
        <?php if (count($menus) > 0 ):?>
        
        <?php foreach ($menus as $p=>$menuC):?>
        <?php if (Z2HelperImage::exist($menuC['image'])):?>
            <li class="item <?php echo $p == 0 ? 'active':''?> ">
                <img src="<?php echo Z2HelperImage::_($menuC['image'],770,354,'FC')?>" alt="<?php echo $menuC['name'] ?>" />
                <div class="carousel-caption">
                <h4><a href="<?php echo $menuC['link'] ?>"><?php echo $menuC['name'] ?></a></h4>
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