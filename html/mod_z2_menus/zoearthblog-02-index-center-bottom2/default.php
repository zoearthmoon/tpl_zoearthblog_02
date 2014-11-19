<?php
defined('_JEXEC') or die;
$menu = $menus[key($menus)];
?>
<div class="span6">
    <h5 class="title-bg"><?php echo $menu['name']?> 
        <small><?php echo $menu['extra_fields']['addTitle']?></small>
        <button id="btn-client-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button>
        <button id="btn-client-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button>
    </h5>
    <div id="clientCarousel" class="carousel slide ">
        <div class="carousel-inner">
        <?php if (count($menu['menus']) > 0):?>
        <?php foreach ($menu['menus'] as $menuC):?>
            <div class="active item">
                <div class="post-info clearfix">
                    <h4>
                        <a href="<?php echo $menuC['link']?>"><?php echo $menuC['name']?></a>
                    </h4>
                </div>
                <p class="blog-summary">
                     <?php echo Z2HelperUtilities::characterLimit($menuC['description'],150)?>...
                    <a href="<?php echo $menuC['link']?>"><?php echo JText::_('TPL_Z2B02_READ_MORE')?></a>
                <p>
            </div>
        <?php endforeach;?>
        <?php endif;?>
        </div>
    </div>
</div>
<script type="text/javascript">
jQuery(document).ready(function () {
    jQuery("#btn-client-next").click(function () {
        jQuery('#clientCarousel').carousel('next')
    });
    jQuery("#btn-client-prev").click(function () {
        jQuery('#clientCarousel').carousel('prev')
    });
});
</script>