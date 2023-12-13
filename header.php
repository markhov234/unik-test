<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>

    <!-- Include your custom styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/styles.css">

    <!-- Include your custom script -->
    <script src="<?php echo get_template_directory_uri(); ?>/dist/js/bundle.js" defer></script>
</head>
<body>

<nav class="menu-principal-nav">
    <span id="hamburger-icon"class="menu-principal">
        MENU
    </span>
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'primary_menu', // Specify the menu location
            'menu_class'     => 'menu-principal-ul',   // Add a custom class to your menu
        )
    );
    ?>
</nav>

<?php
		wp_body_open();
		?>