<?php
defined('_JEXEC') or die;
if ( $this->countModules('MAIN-LEFT') > 0 && $this->countModules('MAIN-RIGHT') > 0 )
{
    $mainSpan = 4;
}
else if ( $this->countModules('MAIN-LEFT') > 0 || $this->countModules('MAIN-RIGHT') > 0 )
{
    $mainSpan = 8;
}
else
{
    $mainSpan = 12;
}
?>
<!DOCTYPE html> 
<html dir="ltr" lang="<?php echo $lang->getTag();?>">
<head>
    <jdoc:include type="head" />
    <?php echo $favicon;?>
    <?php echo $this->params->get('gacode');?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <link rel="stylesheet" href="<?php echo $tmpUrl;?>css/style-ie.css"/>
    <![endif]-->
</head>
<body class="home">
    <div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    <div class="container">
        <div class="row header">
            <div class="span5 logo">
                <jdoc:include type="modules" name="TOP-LOGO" />
            </div>
            <div class="span7 navigation">
                <jdoc:include type="modules" name="TOP-MENU" />
            </div>
        </div>
        <div class="row">
            <?php if ($this->countModules('MAIN-LEFT') > 0 ):?>
            <div class="pageC span4 sidebar page-sidebar">
                <jdoc:include type="modules" name="MAIN-LEFT" />
            </div>
            <?php endif;?>
            <div class="pageM span<?php echo $mainSpan;?> blog">
                <jdoc:include type="modules" name="BREADCRUME" />
        		<jdoc:include type="modules" name="MAIN-TOP" />
                <jdoc:include type="message" />
                <jdoc:include type="component" />
        		<jdoc:include type="modules" name="MAIN-BOTTOM" />
            </div>
            <?php if ($this->countModules('MAIN-RIGHT') > 0 ):?>
            <div class="pageC span4 sidebar page-sidebar">
                <jdoc:include type="modules" name="MAIN-RIGHT" />
            </div>
            <?php endif;?>
        </div>
    </div>
	<div class="footer-container">
        <div class="container">
            <div class="row footer-row">
                <jdoc:include type="modules" name="PAGE-BOTTOM-CENTER" />
            </div>

            <div class="row">
                <div class="span12 footer-col footer-sub">
                    <div class="row no-margin">
                        <jdoc:include type="modules" name="PAGE-BOTTOM-FOOTER" />                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <jdoc:include type="modules" name="debug" />
</body>
</html>