<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="blog-masthead">
        <div class="container">
            <nav class="blog-nav text-danger">
                <!-- <a class="blog-nav-item active" href="#">Home</a>
                <a class="blog-nav-item" href="#">Form Testimonial</a> -->
                <div class="text-danger">
                    <?php wp_nav_menu(array(
                        'link_before'     => '<span class="text-dark font-weight-bold blog-nav-item navbar-default icon-bar" >',
                        'link_after'      => '</span>',
                        'container_class'       => 'blog-nav-item ',

                        'items_wrap'      => '<ul class="nav justify-content-end w-100 %2$s">%3$s</ul>',

                    ));

                    ?>
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