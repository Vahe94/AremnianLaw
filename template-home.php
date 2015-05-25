<?php
/*
Template Name: Home
*/
?>

<div class="clear-both"></div>
<? the_content(); ?>
<div class="clear-both"></div>
<div class="container welcome">
    <div class="row ">
        <div class="welcome-our-site-div"><span class="welcome-our-site-span">Наши услуги</span></div>
        <?php/* dynamic_sidebar('sidebar-footer'); */?>
        <div id="owl-demo" class="owl-carousel owl-theme">
            <?php $query = new WP_Query(array('category_name' => 'services'));
            $k=0;
            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();$post_id=get_the_ID();?>
                <? if($k==0) echo'<div class="item">'; $k++;?>
                <? echo the_post_thumbnail('medium'); ?>
                <a href="/services?id=<? echo $post_id ?>"><p class="text-center"> <?php the_title() ?></p></a>
                <? if($k==2){ echo'</div>'; $k=0;}?>
            <?

            endwhile;

            endif;

            // Reset Query

            //wp_reset_query();
            if($k!=0) echo '</div>';
            ?>
        </div>

        <div class="welcome-our-site-div"><span class="welcome-our-site-span"><?php echo CFS()->get('slogan'); ?></span></div>
        <div class="row text-center">
            <?php $query = new WP_Query(array('category_name' => 'welcome','posts_per_page' => 4));

            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail bg-purple">
                        <p class=welcome-header><?php echo CFS()->get('welcome_header'); ?></p>

                        <div class="thumb under-thumbnail-margin"> <a href="<? the_permalink(); ?>"><? echo get_the_post_thumbnail($id, 'thumbnail'); ?></a> </div>
                        <div class="caption">
                            <p><?php echo CFS()->get('welcome_footer'); ?><a href="<? the_permalink(); ?>"><? _e(' (читать далее...)')?></a></p>
                        </div>
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
</div>
</div>
</div>
