<?php
defined('_JEXEC') or die;
$menu = $menus[key($menus)];
?>
<div class="span6">
    <h5 class="title-bg"><?php echo $menu['name']?> 
        <small><?php echo $menu['extra_fields']['addTitle']?></small>
        <button id="btn-blog-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button>
        <button id="btn-blog-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button>
    </h5>
    <div id="blogCarousel" class="carousel slide ">
        <div class="carousel-inner">
        <?php if (count($menu['menus']) > 0):?>
        <?php foreach ($menu['menus'] as $menuC):?>
            <div class="active item">
                <?php if (Z2HelperImage::exist($menuC['image'])):?>
                <a href="blog-single.htm">
                    <img src="<?php echo Z2HelperImage::_($menuC['image'],370,220,'F')?>" alt="<?php echo $menuC['name']?>" class="align-left blog-thumb-preview" />
                </a>
                <?php endif;?>
                <div class="post-info clearfix">
                    <h4>
                        <a href="<?php echo $menuC['link']?>"><?php echo $menuC['name']?></a>
                    </h4>
                    <ul class="blog-details-preview">
                        <li><i class="icon-calendar"></i><strong><?php echo JText::_('TPL_Z2B02_DATE')?>:</strong><?php echo $menuC['created']?><li>
                        <li><i class="icon-tags"></i>
                            <a href="#">photoshop</a>, 
                            <a href="#">tutorials</a>, 
                            <a href="#">illustration</a>
                        </li>
                    </ul>
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
    jQuery("#btn-blog-next").click(function () {
        jQuery('#blogCarousel').carousel('next')
    });
    jQuery("#btn-blog-prev").click(function () {
        jQuery('#blogCarousel').carousel('prev')
    });
});
</script>