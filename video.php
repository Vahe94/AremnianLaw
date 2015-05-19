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
            if($id_get!="0"){
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
            <?

            $query = new WP_Query(array('category_name' => 'videos'));
            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post() ;

                ?>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="caption">
                        <p><?php the_title() ?></p>
                    </div>
                    <div class="thumbnail">
                        <iframe width="260" height="155" src="<?php echo CFS()->get('tipe_video_url_here'); ?>" frameborder="0" allowfullscreen></iframe>
                    </div>
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