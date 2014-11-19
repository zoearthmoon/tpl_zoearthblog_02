<?php
/**
 * @zoearth
 */
$doc = JFactory::getDocument();
$tmpUrl = JUri::base().'templates/'.$this->template.'/';
$doc->addStyleSheet('http://fonts.googleapis.com/css?family=Oswald','text/css');
$doc->addStyleSheet($tmpUrl.'css/bootstrap.css','text/css');
$doc->addStyleSheet($tmpUrl.'css/bootstrap-responsive.css','text/css');
$doc->addStyleSheet($tmpUrl.'css/prettyPhoto.css','text/css');
$doc->addStyleSheet($tmpUrl.'css/flexslider.css','text/css');
$doc->addStyleSheet($tmpUrl.'css/custom-styles.css','text/css');
//$doc->addStyleSheet($tmpUrl.'css/style.css','text/css');

$doc->addScript($tmpUrl.'js/bootstrap.js');
$doc->addScript($tmpUrl.'js/jquery.prettyPhoto.js');
$doc->addScript($tmpUrl.'js/jquery.flexslider.js');
$doc->addScript($tmpUrl.'js/jquery.custom.js');
?>