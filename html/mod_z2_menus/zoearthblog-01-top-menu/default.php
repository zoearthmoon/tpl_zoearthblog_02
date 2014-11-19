<?php
defined('_JEXEC') or die;
$aLangs = Z2HelperLang::getActiveLang();
?>

<div class="navbar-header">
    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo Juri::base();?>"><?php echo $menus[1]['name']?></a>
	
	<div class="btn-group" id="langSwitchGo">
	</div>
</div>
<div class="collapse navbar-collapse bs-example-js-navbar-collapse">
<ul class="nav navbar-nav navbar-right">
<?php foreach ($menus as $key=>$menu):?>
<?php if ($key > 1):?>
    <li id="fat-menu" class="dropdown">
        <a href="<?php echo $menu['link']?>" id="drop3" role="button" <?php echo (count($menu['menus']) > 0 ) ? ' class="dropdown-toggle" data-toggle="dropdown"':'' ?> >
            <?php echo $menu['name']?>
            <?php if (count($menu['menus']) > 0 ):?>
            <b class="caret"></b>
            <?php endif;?>
        </a>
        <?php if (count($menu['menus']) > 0 ):?>
            <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
            <?php foreach ($menu['menus'] as $p=>$menuC):?>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="<?php echo $menuC['link']?>"><?php echo $menuC['name']?></a>
                </li>
            <?php endforeach;?>
            </ul>
        <?php endif;?>
    </li>
<?php endif;?>
<?php endforeach; ?>
</ul>
<form method="get" action="<?php echo JRoute::_('index.php?option=com_search&view=search');?>" class="navbar-form navbar-right">
    <div class="input-append">
        <input type="text" placeholder="<?php echo JText::_('TPL_Z2B01_PLS_INPUT_KEYWORD') ?>" name="searchword" class="form-control" value="<?php echo JRequest::getVar('searchword','');?>" >
        <button class="btn" type="submit"><i class="glyphicon glyphicon-search"></i></button>
    </div>
    
</form>
</div>