<?php
defined('_JEXEC') or die;
?>
<article>
    <h3 class="title-bg">
        <?php echo $this->item->title; ?>
    </h3>
    <div class="post-content">
        <?php if (Z2HelperImage::exist($this->item->image)):?>
            <a rel="lightbox" href="<?php echo Z2HelperImage::_($this->item->image); ?>" title="<?php echo $this->item->image_caption; ?>" alt="<?php echo $this->item->image_caption; ?>" >
                <img style="margin: auto;max-width: 95%;" class="thumbnail" src="<?php echo Z2HelperImage::_($this->item->image,770,300); ?>" title="<?php echo $this->item->image_caption; ?>" alt="<?php echo $this->item->image_caption; ?>" />
            </a>
        <?php endif; ?>
        <?php if(!empty($this->item->addPic)): ?>
        <div class="row">
            <?php foreach ($this->item->addPic as $pic):?>
            <?php if (Z2HelperImage::exist($pic['pic'])):?>
            <div class="span3 img-polaroid">
                <a rel="lightbox" href="<?php echo $pic['pic']; ?>" class="thumbnail" title="<?php echo $pic['title']; ?>" alt="<?php echo $pic['title']; ?>" >
                    <img src="<?php echo Z2HelperImage::_($pic['pic'],171,180,'F'); ?>" />
                </a>
            </div>
            <?php endif;?>
            <?php endforeach;?>
        </div>
        <?php endif; ?>
        
        <div class="post-body">
            <?php echo $this->item->introtext; ?>
        </div>

        <?php if(count($this->item->attachments)): ?>
        <div class="itemAttachmentsBlock">
            <span><?php echo JText::_('Z2_DOWNLOAD_ATTACHMENTS'); ?></span>
            <ul class="itemAttachments">
            <?php foreach ($this->item->attachments as $attachment): ?>
            <li>
                <a title="<?php echo Z2HelperUtilities::cleanHtml($attachment->titleAttribute); ?>" href="<?php echo $attachment->link; ?>"><?php echo $attachment->title; ?></a>
                <?php if($this->item->params->get('itemAttachmentsCounter')): ?>
                    <span>(<?php echo $attachment->hits; ?> <?php echo ($attachment->hits==1) ? JText::_('Z2_DOWNLOAD') : JText::_('Z2_DOWNLOADS'); ?>)</span>
                <?php endif; ?>
            </li>
            <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>
        
        <div class="post-summary-footer">
            <ul class="post-data">
                <li><i class="icon-calendar"></i><?php echo JHtml::_('date',$this->item->created,'Y/m/d') ?></li>
                <li><i class="icon-book"></i> <a href="<?php echo $this->item->category->link?>"><?php echo $this->item->category->name;?></a></li>
                <?php $tags = Z2HelperQueryData::getItemTags(array('item'=>$this->item->id));?>
                <?php if (count($tags) > 0 ):?>
                <li>
                <i class="icon-tags"></i>
                    <?php foreach ($tags as $key=>$tag):?>
                        <?php echo $key>0 ? ', ':''?>
                        <a href="<?php echo $tag['link']?>"><?php echo $tag['name']?></a>
                    <?php endforeach;?>
                <?php endif;?>
                </li>
            </ul>
        </div>
    </div>
</article>
<script language="Javascript">
jQuery(document).ready(function() {
    jQuery(".post-body div span img").parent().parent().addClass("text-center");
});
</script>