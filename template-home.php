<?php
/*
Template Name: Home
*/
?>

<div class="clear-both"></div>
<? the_content(); ?>
<div class="clear-both"></div>
<div class="container welcome">
    <div >
        <div class="welcome-our-site-div"><span class="welcome-our-site-span">Наши услуги</span></div>
        <?php/* dynamic_sidebar('sidebar-footer'); */?>
        <div id="owl-demo" class="owl-carousel owl-theme">
            <?php $query = new WP_Query(array('category_name' => 'services','posts_per_page' => 50));
            $k=0;
            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();$post_id=get_the_ID();?>
                <? if($k==0) echo'<div class="item">'; $k++;?>
            <a href="<? the_permalink(); ?>"><? echo the_post_thumbnail('medium'); ?><p class="text-center min-height-text"> <?php the_title() ?></p></a>
                <? if($k==2){ echo'</div>'; $k=0;}?>
            <?
            endwhile;
            endif;
            // Reset Query
            //wp_reset_query();
            if($k!=0) echo '</div>';
            ?>
        </div>
        <div class="customNavigation">
            <a class="btn prev">&laquo;</a>
            <a class="btn next">&raquo;</a>
        </div>
        <div class="welcome-our-site-div">
            <span class="welcome-our-site-span">
                <?php while (have_posts()) : the_post();
                    echo CFS()->get('slogan');
                endwhile; ?>
            </span>
        </div>
        <div class="row text-center">
            <?php $query = new WP_Query(array('category_name' => 'welcome','posts_per_page' => 4));

            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

                <div class="col-xs-3 col-md-3">
                    <div class="thumbnail bg-purple">
                        <p class=welcome-header> <?php echo CFS()->get('welcome_header'); ?></p>
                        <div class="thumb under-thumbnail-margin"> <a href="<? the_permalink(); ?>"><? echo get_the_post_thumbnail($id, 'thumbnail'); ?></a> </div>
                        <div class="caption">
                            <p><?php echo CFS()->get('welcome_footer'); ?><a href="<? the_permalink(); ?>"><br><? _e(' (читать далее...)')?></a></p>
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
