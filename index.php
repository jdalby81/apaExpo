<?php 

JHtml::script(Juri::base() . 'templates/apaExpo/js/modernizer/modernizer.js', $mootools);
/*JHtml::script(Juri::base() . 'templates/apaExpo/js/workData.js', $mootools);
JHtml::script(Juri::base() . 'templates/apaExpo/js/workRoutine.js', $mootools);*/
JHtml::script(Juri::base() . 'templates/apaExpo/js/jQuery-1.8.min.js', $mootools);
JHtml::script(Juri::base() . 'templates/apaExpo/js/bigSlide-min.js', $mootools);

defined('_JEXEC') or die('Restricted access');?>

<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/grid/css/2cols.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/grid/css/3cols.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/grid/css/4cols.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/grid/css/9cols.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/reset.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/stylesheet.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/sidr.light.css" type="text/css" />
</head>
<body>
    <div id="welcomeSection">
        <div id="wrapper">
            <div class="sectionRelativeHolder">
                <div class="section group header">
                    <div class="navigation">
                        <div class="navigationContainer">
                            <div id="mobile-header">
                                <a href="#sidr-main" id="responsive-menu-button">Menu</a>
                            </div>
                                <jdoc:include type="modules" name="logo" />
                            <div id="navigation">
                                <nav class="nav">
                                	<jdoc:include type="modules" name="navigation" />
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section group holderClass contentBackground">
                <div class="rotator-container">
                    <jdoc:include type="modules" name="homepage-rotator" title="homepage-rotator" />
                </div>
            </div>
            <div class="section group body">
                <div class="col span_1_of_1">
                    <div class="body-content">
                        <div class="left-navigation">
                            <jdoc:include type="modules" name="left-navigation" title="left-navigation" />
                        </div>
                        <div class="welcome-text-container">
                            <jdoc:include type="modules" name="client-testimonial" title="Client Testimonial" />
                        	<jdoc:include type="modules" name="home-text" title="homepage-text" />
                        	<jdoc:include type="modules" name="forms" title="forms" />
                        	<jdoc:include type="component" />
                        </div>
                        	<jdoc:include type="modules" name="centered-images" title="Pittsburgh Skyline" />
                    </div>
                </div>
            </div>
            <div class="section group footer">
                <div class="footerContainer">
                   	<div class="col span_1_of_4">
                   		<jdoc:include type="modules" name="address" title="address" />
                    </div>
                    <div class="col span_2_of_4">
                    	<jdoc:include type="modules" name="email" title="email" />
                    </div>
                    <div class="col span_3_of_4">
                    	<jdoc:include type="modules" name="phone" title="phone" />
                    </div>
                    <div class="col span_4_of_4">
                    	<jdoc:include type="modules" name="fax" title="fax" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---->
    <!-- Swiper JS -->
    <!--<script src="js/idangerous/swiper.min.js"></script>-->
   <!-- Initialize Swiper -->
    <script>
    //responsive menu
    jQuery(document).ready(function(){
        jQuery('#responsive-menu-button').sidr({
            name: 'sidr',
            source: '#navigation',
            side: 'left',
           forceclick:true
        });
       //flowtype handles responsive text
    //$('body').flowtype();    
    //$('body').flowtype({
      //  minimum   : 800,
       // maximum   : 1200,
       // minFont   : 12,
        //maxFont   : 40,
        //fontRatio : 30
    //});
});
    </script>
    <?php
JHtml::script(Juri::base() . 'templates/apaExpo/js/main.js', $mootools);
    ?>
</body>
</html>