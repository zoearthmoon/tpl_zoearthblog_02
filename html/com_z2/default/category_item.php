<?php
defined('_JEXEC') or die;
?>

<div class="thumbnail">
    <!-- 外掛 請勿刪除 -->
    <?php echo $this->item->event->BeforeDisplay; ?>
    <?php echo $this->item->event->Z2BeforeDisplay; ?>
    
    <!-- 項目圖片 -->
    <?php if (Z2HelperImage::exist($this->item->image)):?>
    <a href="<?php echo $this->item->link; ?>" title="<?php echo $this->item->image_caption; ?>" alt="<?php echo $this->item->image_caption; ?>" >
        <img src="<?php echo Z2HelperImage::_($this->item->image,300,200); ?>" title="<?php echo $this->item->image_caption; ?>" alt="<?php echo $this->item->image_caption; ?>" />
    </a>
    <?php endif;?>
    <div class="caption">
    
        <h3>
            <a href="<?php echo $this->item->link; ?>">
                <?php echo $this->item->title; ?>
            </a>
            <small><?php echo JHTML::_('date',$this->item->created,JText::_('Y年m月d日'));?></small>
        </h3>

        <!-- 顯示是否為頂置 -->
        <?php if($this->item->featured): ?>
        <span>
            <?php echo JText::_('Z2_FEATURED'); ?>
        </span>
        <?php endif; ?>

        <!-- 外掛 請勿刪除 -->
        <?php echo $this->item->event->AfterDisplayTitle; ?>
        <?php echo $this->item->event->Z2AfterDisplayTitle; ?>
        
        <?php
        $goStr = substr(strip_tags($this->item->introtext),0,500);
        echo mb_substr($goStr,0,mb_strlen($goStr,'UTF-8')-1,'UTF-8').'...';
        ?>
        
        <!-- 外掛 請勿刪除 -->
        <?php echo $this->item->event->AfterDisplayContent; ?>
        <?php echo $this->item->event->Z2AfterDisplayContent; ?>
        
        <div class="catItemCategory">
            <span><?php echo JText::_('Z2_PUBLISHED_IN'); ?></span>
            <!-- 顯示分類名稱 -->
            <a href="<?php echo $this->item->category->link; ?>">
                <?php echo $this->item->category->name; ?>
            </a>
        </div>

        <!-- 顯示標籤  -->
        <?php if(count($this->item->tags)): ?>
        <div class="catItemTagsBlock">
            <span><?php echo JText::_('Z2_TAGGED_UNDER'); ?></span>
            <ul class="catItemTags">
                <?php foreach ($this->item->tags as $tag): ?>
                <li><a href="<?php echo $tag->link; ?>"><?php echo $tag->name; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>
        
        <!-- 外掛 請勿刪除 -->
        <?php echo $this->item->event->AfterDisplay; ?>
        <?php echo $this->item->event->Z2AfterDisplay; ?>
        
        <p><a href="<?php echo $this->item->link; ?>" class="btn btn-primary" role="button">More</a></p>
    </div>
</div>