<?php
defined('_JEXEC') or die;
?>
<!DOCTYPE html> 
<html dir="ltr" lang="<?php echo $lang->getTag();?>">
<head>
    <jdoc:include type="head" />
    <?php echo $favicon;?>
    <?php echo $this->params->get('gacode');?>
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
        <div class="row headline">
            <div class="span8">
                <jdoc:include type="modules" name="INDEX-CENTER-LEFT" />
            </div>
            <div class="span4">
                <jdoc:include type="modules" name="INDEX-CENTER-RIGHT" />
            </div>
        </div>
        <div class="row gallery-row">
            <jdoc:include type="modules" name="INDEX-CENTER-CENTER" />
        </div>
        <div class="row">
            <jdoc:include type="modules" name="INDEX-CENTER-BOTTOM" />
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
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
    <jdoc:include type="modules" name="debug" />
</body>