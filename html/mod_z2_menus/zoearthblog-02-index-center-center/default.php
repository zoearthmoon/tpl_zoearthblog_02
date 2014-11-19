<?php
defined('_JEXEC') or die;
?>
<?php foreach ($menus as $key=>$menu):?>
<div class="span12">
<h5 class="title-bg"><?php echo $menu['name']?> 
    <small><?php echo $menu['extra_fields']['addTitle']?></small>
    <a class="btn btn-mini btn-inverse hidden-phone" href="<?php echo $menu['link']?>"><?php echo JText::_('TPL_Z2B02_READ_MORE')?></a>
</h5>
<div class="row clearfix no-margin">
    <?php if (count($menu['menus']) > 0 ):?>
    <ul class="gallery-post-grid holder">
        <?php foreach ($menu['menus'] as $p=>$menuC):?>
        <?php if (Z2HelperImage::exist($menuC['image'])):?>
        <li  class="span3 gallery-item" data-id="id-1" data-type="illustration">
            <span class="gallery-hover-4col hidden-phone hidden-tablet">
                <span class="gallery-icons">
                    <a href="<?php echo Z2HelperImage::_($menuC['image']);?>" class="icon-zoom-in item-zoom-link lightbox" title="<?php echo $menuC['name']?>" data-rel="prettyPhoto"></a>
                    <a href="<?php echo $menuC['link']?>" class="item-details-link"></a>
                </span>
            </span>
            <a href="<?php echo $menuC['link']?>">
                <img src="<?php echo Z2HelperImage::_($menuC['image'],270,220,'F');?>" alt="<?php echo $menuC['name']?>">
            </a>
            <span class="project-details">
                <a href="<?php echo $menuC['link']?>"><?php echo $menuC['name']?></a>For an international ad campaign.
            </span>
        </li>
        <?php endif;?>
        <?php endforeach;?>        
    </ul>
    <?php endif;?>
</div>
</div>
<?php endforeach;?>