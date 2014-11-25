<?php
defined('_JEXEC') or die;
?>
<section>
    <div class="input-append">
        <form action="<?php echo JRoute::_('index.php?option=com_search&view=search');?>" method="get">
            <input id="appendedInputButton" size="45" type="text" name="searchword" placeholder="<?php echo JText::_("TPL_Z2B02_PLS_INPUT_KEYWORD")?>" >
            <button class="btn" type="submit" ><i class="icon-search"></i></button>
            <input type="hidden" value="search" name="task">
        </form>
    </div>
</section>
<h5 class="title-bg"><?php echo JText::_('TPL_Z2B02_TAG')?></h5>
<div>
    <?php if (count($tags) > 0):?>
    <?php foreach ($tags as $tag):?>
        <span><a href="<?php echo $tag['link']?>"><i class="icon-plus-sign"></i><?php echo $tag['name']?></a></span>
    <?php endforeach;?>
    <?php endif;?>
</div>
