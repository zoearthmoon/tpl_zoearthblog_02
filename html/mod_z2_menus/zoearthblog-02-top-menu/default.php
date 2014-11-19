<?php
defined('_JEXEC') or die;
$optionHtml = '';
?>
<div class="navbar hidden-phone">
<ul class="nav">
<?php foreach ($menus as $key=>$menu):?>
    <li class="dropdown <?php echo $menu['active'] ? 'active':'' ?>">
        <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo $menu['link']?>">
        <?php $optionHtml .= '<option value="'.$menu['link'].'">'.$menu['name'].'</option>';?>
        <?php echo $menu['name']?>
        <?php if (count($menu['menus']) > 0 ):?>
            <b class="caret"></b>
        <?php endif;?>
        </a>
        <?php if (count($menu['menus']) > 0 ):?>
        <ul class="dropdown-menu">
            <?php foreach ($menu['menus'] as $p=>$menuC):?>
            <?php $optionHtml .= '<option value="'.$menuC['link'].'">- '.$menuC['name'].'</option>';?>
            <li>
                <a href="<?php echo $menuC['link']?>">
                <?php echo $menuC['name']?>
                </a>
            </li>
            <?php endforeach;?>
        </ul>
        <?php endif;?>
    </li>
<?php endforeach;?>
</ul>
</div>
<form action="#" id="mobile-nav" class="visible-phone">
    <div class="mobile-nav-select">
    <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
        <option value="">-- --</option>
        <?php echo $optionHtml;?>
    </select>
    </div>
</form>