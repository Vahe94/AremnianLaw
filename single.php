<?php
$category = get_the_category();
$category_id=$category[0]->cat_ID;
if($category_id!=48){
    get_template_part('templates/content', 'single');
}else{
?>
<div class="row">
    <div class="welcome-our-site-div"><span class="welcome-our-site-span">Видео</span></div>
    <div id="videos">
            <?php
            $id_get=get_the_ID();
            if(isset($id_get)){
                $query = new WP_Query("p=$id_get");
                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post() ;
                    ?>
                    <div class="col-xs-12">
                        <div class="caption">
                            <h2><?php the_title() ?></h2>
                        </div>
                        <div class="thumbnail">
                            <iframe width="1160" height="523" src="<?php echo CFS()->get('tipe_video_url_here'); ?>" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                <?
                endwhile;
                endif;
                // Reset Query
                //wp_reset_query();
            }
            ?>
<?php $query = new WP_Query(array('category_name' => 'videos','posts_per_page' => 4));
if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();?>
    <div class="col-xs-3 posts-video">
        <p class="date"><?php echo get_the_date(); ?></p>
        <div class="thumbnail">
            <a href="<? the_permalink(); ?>" class="video-play">
                <? echo get_the_post_thumbnail($id, 'medium'); ?>
                <span class="video-play-icon"></span>
            </a>
        </div>
        <p class="description"><?php the_title() ?></p>
    </div>
<?
endwhile;
endif;
// Reset Query
//wp_reset_query();
?>
</div>
</div>
<?
}
?>

