<?php
defined('_JEXEC') or die;
?>
<?php if(isset($this->items) && count($this->items) > 0): ?>
<?php foreach ($this->items as $item):?>
<article class="clearfix thumbnail">
    <?php if (Z2HelperImage::exist($item->image)):?>
    <a href="<?php echo $item->link;?>">
        <img class="align-left" src="<?php echo Z2HelperImage::_($item->image,270,220,'FC')?>" alt="<?php echo $item->title;?>">
    </a>
    <?php endif;?>
    <h4 class="title-bg">
        <a href="<?php echo $item->link;?>"><?php echo $item->title;?></a>
    </h4>
    <p><?php echo Z2HelperUtilities::characterLimit($item->introtext)?>...</p>
    <a href="<?php echo $item->link;?>" class="btn btn-small btn-inverse" type="button"><?php echo JText::_('TPL_Z2B02_READ_MORE')?></a>
    <div class="post-summary-footer">
        <ul class="post-data-3">
            <li><i class="icon-calendar"></i><?php echo JHtml::_('date',$item->created,'Y/m/d') ?></li>
            <li><i class="icon-book"></i> <a href="<?php echo $item->category->link?>"><?php echo $item->category->name;?></a></li>
            <?php $tags = Z2HelperQueryData::getItemTags(array('item'=>$item->id));?>
            <?php if (count($tags) > 0 ):?>
            <li>
            <i class="icon-tags"></i>
                <?php $t=0;?>
                <?php foreach ($tags as $key=>$tag):?>
                    <?php echo ($t>0 ? ', ':'');$t++;?>
                    <a href="<?php echo $tag['link']?>"><?php echo $tag['name']?></a>
                <?php endforeach;?>
            <?php endif;?>
            </li>
        </ul>
    </div>
</article>
<?php endforeach;?>

<div class="pagination">
    <?php echo $this->pagination->getPagesLinks(); ?>
</div>
<?php endif;?>