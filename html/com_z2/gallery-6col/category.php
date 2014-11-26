<?php
defined('_JEXEC') or die;
?>
<div class="row clearfix">
    <ul class="gallery-post-grid holder">
<?php if(isset($this->items) && count($this->items) > 0): ?>
<?php foreach ($this->items as $item):?>
<li  class="span2 gallery-item" >
    <span class="gallery-hover-6col hidden-phone hidden-tablet">
        <span class="gallery-icons">
            <a rel="lightbox" href="<?php echo Z2HelperImage::_($item->image);?>" class="icon-zoom-in item-zoom-link" title="<?php echo $item->title?>" >
                <img src="<?php echo Z2HelperImage::_('none');?>" >
            </a>
            <a href="<?php echo $item->link;?>" class="item-details-link"></a>
        </span>
    </span>
    <a href="<?php echo $item->link;?>">
        <img src="<?php echo Z2HelperImage::_($item->image,170,139,'FC');?>" alt="<?php echo $item->title?>">
    </a>
    <span class="project-details">
    <a href="<?php echo $item->link;?>">
        <?php echo $item->title?>
    </a>
    </span>
</li>
<?php endforeach;?>
    </ul>
</div>

<div class="pagination">
    <?php echo $this->pagination->getPagesLinks(); ?>
</div>
<?php endif;?>