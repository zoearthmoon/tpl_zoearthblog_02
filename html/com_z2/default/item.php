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
                    <?php $i=0;?>
                    <?php $nowTag=0;?>
                    <?php foreach ($tags as $key=>$tag):?>
                        <?php echo $i>0 ? ', ':'';$i++;?>
                        <?php $nowTag = (!in_array($key,array(12,38)) ? $key:$nowTag);?>
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

<?php if ($nowTag > 0 ):?>
    <?php $items = Z2HelperQueryData::getItems(array('notTtem'=>array($this->item->id),'tag'=>$nowTag,'limit'=>2,'order'=>'RAND'));?>
    <?php if (count($items) > 0):?>
    <h4 class="title-bg"><a name="comments"></a><?php echo JText::_('TPL_Z2B02_TAG_ART')?></h4>
    <?php foreach ($items as $item): ?>
        <section class="post-content">
            <div class="post-body about-author">
                <?php if (Z2HelperImage::exist($item['image'])):?>
                <a href="<?php echo $item['link'] ?>">
                <img src="<?php echo Z2HelperImage::_($item['image'],96,96,'FC') ?>">
                </a>
                <?php endif;?>
                <h4><a href="<?php echo $item['link'] ?>"><?php echo $item['name'] ?></a></h4>
            </div>
        </section>
    <?php endforeach;?>
    <?php endif;?>
<?php endif;?>