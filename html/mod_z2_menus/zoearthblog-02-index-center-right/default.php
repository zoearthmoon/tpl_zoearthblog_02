<?php
defined('_JEXEC') or die;
$menu = $menus[key($menus)];
?>
<h3><?php echo $menu['name']?></h3>
<?php echo $menu['description']?>