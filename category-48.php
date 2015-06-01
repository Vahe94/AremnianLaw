<?php
/*
Template Name: video
*/
?>
<div class="row">
    <div class="welcome-our-site-div"><span class="welcome-our-site-span">Видео</span></div>
        <div class="row">
            <?php $query = new WP_Query(array('category_name' => 'videos','posts_per_page' => 4));
            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                $post_id=get_the_ID();?>
                <div class="col-xs-3 posts-video">
                    <p class="date"><?php echo get_the_date(); ?></p>
                    <div class="thumbnail">
                        <a href="<? the_permalink(); ?>" class="video-play">
                            <? echo get_the_post_thumbnail($id, 'medium'); ?>
                            <!--                                <iframe width="853" height="480" src="--><?php //echo CFS()->get('tipe_video_url_here'); ?><!--" frameborder="0" allowfullscreen></iframe>-->
                            <span class="video-play-icon"></span>
                        </a>
                    </div>
                    <p class="description"><?php the_title() ?></p>
                </div>
            <?
            endwhile;

            ?>
        </div>
    </div>
</div>
<div class="clear-both"></div>
<nav class="text-center">
    <?
    global $wp_query;

    $total_pages = $wp_query->max_num_pages;

    if ($total_pages > 1){

        $current_page = max(1, get_query_var('paged'));

        $pages = paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page ,
            'total' => $total_pages,
            'prev_text' => '&laquo;',
            'next_text' => '&raquo;',
            'type' => 'list'
        ));

        $pages = str_replace("page-numbers","pagination",$pages);
        $pages = str_replace("<li><span","<li class='active'><span",$pages);
        echo $pages;
    }
    endif;
    // Reset Query
    //wp_reset_query();
    ?>
</nav>