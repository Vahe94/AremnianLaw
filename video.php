<?php
/*
Template Name: video
*/
?>
<div class="row">
    <h2 class="publics-title"><a href="#">Видео</a></h2>
    <div id="videos">
        <div class="row">
            <?php
            $id_get=($_GET["id"]);
            if(isset($id_get)){
                $query = new WP_Query("p=$id_get");
                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post() ;
                    ?>
                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="caption">
                            <h2><?php the_title() ?></h2>
                        </div>
                        <div class="thumbnail">
                            <iframe width="853" height="480" src="<?php echo CFS()->get('tipe_video_url_here'); ?>" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                <?

                endwhile;

                endif;

                // Reset Query

                //wp_reset_query();


            }
            ?>
        </div>
        <div class="row">
            <?php $query = new WP_Query(array('category_name' => 'videos','posts_per_page' => 4));
            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                $post_id=get_the_ID();?>
                <div class="col-xs-3 posts-video">
                    <p class="date"><?php echo get_the_date(); ?></p>
                    <div class="thumbnail">
                        <a href="/video?id=<? echo $post_id ?>" class="video-play">
                            <? echo get_the_post_thumbnail($id, 'medium'); ?>
                            <!--                                <iframe width="853" height="480" src="--><?php //echo CFS()->get('tipe_video_url_here'); ?><!--" frameborder="0" allowfullscreen></iframe>-->
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
</div>