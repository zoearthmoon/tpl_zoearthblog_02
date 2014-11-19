<?php
defined('_JEXEC') or die;
$i=0;
?>
<div class="span6"><span class="left">Copyright <?php echo date('Y')?> zoearthmoon@gmail.com. All rights reserved.</span></div>
<div class="span6">
    <span class="right">
    <?php foreach ($menus as $menu):?>
    <?php if ($i > 0):?>
    &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
    <?php endif;$i++;?>
    <a href="<?php echo $menu['link']?>"><?php echo $menu['name']?></a>
    <?php endforeach;?>
    </span>
</div>