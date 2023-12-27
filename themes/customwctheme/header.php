<html>
    <head>
        <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
        <?php wp_head(); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    </head>
    <body <?php body_class(); ?>>
        <div id="header" class="header">
            <img src="<?php echo get_template_directory_uri() . '/logo.png'; ?>">
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
        </div>
        <div class="container">