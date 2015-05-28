<div class="welcome-our-site-div"><span class="welcome-our-site-span"><?php
        $category = get_the_category();
        $cat_name=$category[0]->cat_name;
        echo $cat_name;
        ?></span></div>
<div>
    <? if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="col-xs-3 posts thumbnail-height" onclick="window.location.href='<?the_permalink();?>'">
            <p class="date"><?php echo get_the_date(); ?></p>
            <div class="thumbnail">
                <? echo get_the_post_thumbnail($id, 'medium'); ?>
<!--                --><?//if($cat_name!='Video' || 'Видео' || 'Վիդեո'){ echo '<span class="video-play-icon"></span>';} ?>
            </div>
            <p class="description"><?php the_title();?></p>

        </div>
    <?

    endwhile;

    ?>
</div>
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