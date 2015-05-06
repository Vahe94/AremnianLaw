<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">

    <?php wp_head(); ?>
</head>

<div class="no-margin row well">

    <h1 class="text-center"><? the_title() ?></h1>

    <?php
    if (have_posts()) : the_post(); ?>
        <p>
            <? the_content() ?>
        </p>
    <?
    endif;
    //Reset Query
    wp_reset_query();
    ?>
</div>