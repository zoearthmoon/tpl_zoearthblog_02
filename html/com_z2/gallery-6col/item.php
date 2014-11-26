<?php
defined('_JEXEC') or die;
?>
<div class="row">
    <div class="span6">
        <?php if (Z2HelperImage::exist($this->item->image)):?>
            <a rel="lightbox" href="<?php echo Z2HelperImage::_($this->item->image); ?>" title="<?php echo $this->item->title; ?>" >
                <img style="margin: auto;" class="align-left thumbnail" src="<?php echo Z2HelperImage::_($this->item->image,880,1200); ?>" title="<?php echo $this->item->title; ?>" alt="<?php echo $this->item->title; ?>" />
            </a>
        <?php endif; ?>
    </div>
    <div class="span6">
        <h2><?php echo $this->item->title; ?></h2>
        <p><?php echo $this->item->introtext; ?></p>
        <?php if(!empty($this->item->addPic)): ?>
        <div class="row">
            <?php foreach ($this->item->addPic as $pic):?>
            <?php if (Z2HelperImage::exist($pic['pic'])):?>
            <div class="span2">
                <a rel="lightbox" href="<?php echo Z2HelperImage::_($pic['pic']); ?>" class="thumbnail" title="<?php echo $pic['title']; ?>" alt="<?php echo $pic['title']; ?>" >
                    <img src="<?php echo Z2HelperImage::_($pic['pic'],160,160,'FC'); ?>" />
                </a>
            </div>
            <?php endif;?>
            <?php endforeach;?>
        </div>
        <?php endif; ?>
        <ul class="project-info">
            <li><i class="icon-calendar"></i><?php echo JHtml::_('date',$this->item->created,'Y/m/d') ?></li>
            <li><i class="icon-book"></i> <a href="<?php echo $this->item->category->link?>"><?php echo $this->item->category->name;?></a></li>
            <?php $tags = Z2HelperQueryData::getItemTags(array('item'=>$this->item->id));?>
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
</div>