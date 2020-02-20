<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="blog-masthead">
        <div class="container">
            <nav class="blog-nav text-danger">
                <!-- <a class="blog-nav-item active" href="#">Home</a>
                <a class="blog-nav-item" href="#">Form Testimonial</a> -->
                <div class="text-danger">
                    <?php $menuParameters = array(
                        'menu' => 'primary_menu',
                        'link_before'     => '<span class="text-dark font-weight-bold blog-nav-item navbar-default icon-bar" >',
                        'link_after'      => '</span>',
                        // 'before'        => '<nav class="tp-primary-header mui-top-home">',
                        // 'after'     => '</nav>',
                        'container_class'       => 'blog-nav-item ',
                        'echo'            => false,
                        'depth'           => 0,
                    );

                    echo strip_tags(wp_nav_menu($menuParameters), '<a><span><div>'); ?>
                </div>
                </span>
        </div>
    </div>

    <div class="container">

        <div class="blog-header">
            <h1 class="blog-title text-primary">Create basic theme WordPress</h1>
            <!-- <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p> -->
        </div>

        <div class="row">