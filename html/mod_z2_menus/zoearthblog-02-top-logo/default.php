<?php
defined('_JEXEC') or die;
?>
<?php foreach ($menus as $key=>$menu):?>
<a href="<?php echo JUri::base();?>"><h1><?php echo $menu['title'];?><small><?php echo $menu['description'];?></small></h1></a>
<?php endforeach;?>