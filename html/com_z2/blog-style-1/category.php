<?php
defined('_JEXEC') or die;
?>
<div class="span8 blog">
    <?php if(isset($this->items) && count($this->items) > 0): ?>
    <?php foreach ($this->items as $item):?>
    <article>
        <h3 class="title-bg">
            <a href="<?php echo $item->link;?>"><?php echo $item->title;?></a>
        </h3>
        <div class="post-summary">
            <a href="<?php echo $item->link;?>">
                <img src="<?php echo Z2HelperImage::_($item->image,770,300,'F')?>" alt="<?php echo $item->title;?>">
            </a>
            <p><?php echo Z2HelperUtilities::characterLimit($item->introtext)?></p>
            <div class="post-summary-footer">
                <button class="btn btn-small btn-inverse" type="button"><?php echo JText::_('TPL_Z2B02_READ_MORE')?></button>
                <ul class="post-data">
                    <li><i class="icon-calendar"></i><?php echo JHtml::_('date',$item->created,'Y/m/d') ?></li>
                    <li><i class="icon-book"></i> <a href="<?php echo $item->category->link?>"><?php echo $item->category->name;?></a></li>
                    <?php $tags = Z2HelperQueryData::getItemTags(array('item'=>$item->id));?>
                    <?php if (count($tags) > 0 ):?>
                    <li><i class="icon-tags">
                        <?php foreach ($tags as $key=>$tag):?>
                            <?php echo $key>0 ? ', ':''?>
                            <a href="<?php echo $tag['link']?>"><?php echo $tag['name']?></a>
                        <?php endforeach;?>
                    </i>
                    <?php endif;?>
                    </li>
                </ul>
            </div>
        </div>
    </article>
    <?php endforeach;?>
    
    <div class="pagination">
        <?php echo $this->pagination->getPagesLinks(); ?>
    </div>
    <?php endif;?>
</div>