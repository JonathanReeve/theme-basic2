<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo option('site_title'); ?></title>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Stylesheets -->

<?php 
queue_css_file('screen'); 
echo head_css(); 
?> 

<!-- JavaScripts -->
    <?php echo head_js(); ?>

<!-- Plugin Stuff -->
    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>

</head>

<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>

<div id="wrap">
	<h5><a href="<?php echo html_escape(url('exhibits')); ?>">Back to Exhibits</a></h5>
	<h1><?php echo exhibit_builder_link_to_exhibit($exhibit); ?></h1>

        <nav class="top">
            <?php echo public_nav_main(); ?>
        </nav>

    <div id="content">
    	<?php echo exhibit_builder_page_nav(); ?>
    <?php echo flash(); ?>				

		
