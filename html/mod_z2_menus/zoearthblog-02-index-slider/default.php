<?php
defined('_JEXEC') or die;
$menus = $menus[key($menus)]['menus'];
?>
<?php if (count($menus) > 0 ):?>
<div id="myCarousel" class="carousel">
<ol class="carousel-indicators">
    <?php foreach ($menus as $p=>$menuC):?>
    <?php if (Z2HelperImage::exist($menuC['image'])):?>
        <li data-target="#myCarousel" <?php echo $p == 0 ? 'class="active"':''?> data-slide-to="<?php echo $p?>"></li>
    <?php endif;?>
    <?php endforeach;?>
</ol>
<div class="carousel-inner">
    <?php foreach ($menus as $p=>$menuC):?>
    <?php if (Z2HelperImage::exist($menuC['image'])):?>
        <div class="item <?php echo $p == 0 ? 'active':''?> ">
            <img src="<?php echo Z2HelperImage::_($menuC['image'],770,354,'F')?>" alt="<?php echo $menuC['name'] ?>" />
            <div class="carousel-caption">
            <h4><a href="<?php echo $menuC['link'] ?>"><?php echo $menuC['name'] ?></a></h4>
            <p><?php echo Z2HelperUtilities::characterLimit($menuC['description'],300) ?>...</p>
            </div>
        </div>
    <?php endif;?>
    <?php endforeach;?>
</div>
<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
<?php endif;?>
<script type="text/javascript">
jQuery(document).ready(function(){
    jQuery('#myCarousel').carousel();
});
</script>