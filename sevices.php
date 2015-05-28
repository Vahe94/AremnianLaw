<?php
/*
Template Name: services
*/
?>

<div class="welcome-our-site-div"><span class="welcome-our-site-span">Наши услуги</span></div>

<div class="col-sm-4">
    <div class="list-group">
    <?php
    $query = new WP_Query(array('category_name' => 'services'));
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();?>
        <a href="/services?id=<? echo the_ID(); ?>" class="list-group-item <?=($_GET["id"]==get_the_ID())?'active':'';?>"><? echo the_post_thumbnail(array(40, 40)); ?> <? the_title(); ?></a>
    <?
    endwhile;
    endif;
    // Reset Query
    //wp_reset_query();
    ?>
    </div>
</div>
<div class="col-sm-8">
    <?
    $post = get_post($_GET["id"]);
    ?>
        <article>
            <header>
                <h2 class="entry-title mt0"><? echo $post->post_title; ?></h2>
            </header>
            <div class="entry-content">
                <? echo $post->post_content; ?>
            </div>
        </article>
</div>