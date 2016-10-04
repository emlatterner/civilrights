<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <?php if ( $description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>
    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <!-- Plugin Stuff -->
    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>

    <!-- Stylesheets -->
    <?php
    queue_css_file('style');
    echo head_css();
    ?>

    <!-- JavaScripts -->
    <?php echo head_js(); ?>
</head>

<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <a href="#main" id="skipnav" class="audible"><?php echo __('Skip to main content'); ?></a>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
        <header role="banner" id="banner">

            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>

            <?php echo theme_header_image(); ?>

            <div id="search-container" role="search">
                <?php echo search_form(); ?>
            </div><!-- end search -->

              <h1><?php echo link_to_home_page(); ?></h1>

            <nav id="top-nav" role="navigation">
                <?php echo public_nav_main(); ?>
            </nav>

        </header>

        <main id="main" role="main">

            <?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
