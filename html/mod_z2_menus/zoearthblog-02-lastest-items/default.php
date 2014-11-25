<?php
defined('_JEXEC') or die;
$menus = $menus[key($menus)]['menus'];
?>
<h5 class="title-bg"><?php echo JText::_('TPL_Z2B02_LASTEAT_ITEMS')?></h5>
<ul class="popular-posts">
    <?php foreach ($menus as $p=>$menuC):?>
    <li>
        <?php if (Z2HelperImage::exist($menuC['image'])):?>
        <a href="<?php echo $menuC['link'] ?>">
            <img src="<?php echo Z2HelperImage::_($menuC['image'],70,70,'FC')?>" alt="<?php echo $menuC['name'] ?>" />
        </a>
        <?php endif;?>
        <h6>
            <a href="<?php echo $menuC['link'] ?>"><?php echo $menuC['name'] ?></a>
        </h6>
        <em><?php echo JHtml::_('date',$menuC['created'],'Y/m/d')?></em>
    </li>
    <?php endforeach;?>
</ul>