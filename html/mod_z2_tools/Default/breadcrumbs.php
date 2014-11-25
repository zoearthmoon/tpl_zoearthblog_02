<?php
defined('_JEXEC') or die;
?>
<ul class="breadcrumb">
<?php
$output = '';
$output .= '<li><a href="'.JURI::root().'">'.$params->get('home',JText::_('Z2_HOME')).'</a></li>';
if (count($path))
{
    foreach ($path as $link)
    {
        $output .= '<li><span class="divider">/</span>'.$link.'</li>';
    }
}
if($title)
{
    $output .= '<li><span class="divider">/</span>'.$title.'</li>';
}
echo $output;
?>
</ul>