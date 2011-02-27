<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head>
<meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php 
        wp_title('|', true, 'right');
        bloginfo('name');
        $site_description = get_bloginfo('description', 'display');
        if($site_description && (is_home() || is_front_page()))
            echo " | $site_description";
    ?></title>

    <meta content="Kiwii" name="description">
    <meta content="Kiwii" name="keywords">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>">
    <script src="<?php bloginfo('template_url'); ?>/js/modernizr-1.6.min.js"></script>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="container">
        <header id="headerGlobal">
            <hgroup>
                <h1 id="siteName">
                    <a title="<?php bloginfo('name'); ?>" href="<?php get_option('home'); ?>">
                        <img width="534" height="65" src="<?php bloginfo('template_url'); ?>/images/title.png" alt="<?php bloginfo('name'); ?>">
                    </a>
                </h1>
                <div id="tagLine"><img width="214" height="33" alt="<?php echo $site_description; ?>" src="<?php bloginfo('template_url'); ?>/images/tagline.png"></div>
            </hgroup>
        </header>

        <div id="content" class="group">
            <div id="main">
                <h1 class="hidden">投稿</h1>
                <div class="column-inner">
