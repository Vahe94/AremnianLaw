<div class="welcome-our-site-div"><span class="welcome-our-site-span">Наши новости</span></div>
<div class="row">
    <? if (have_posts()) : while (have_posts()) : the_post();?>
    <div class="col-md-3 col-sm-4 col-xs-6">
        <div class="thumbnail-height">
            <p class="date"><?php echo get_the_date(); ?></p>
            <div class="thumbnail">
                <? echo get_the_post_thumbnail($id, 'medium'); ?>
            </div>
            <p class="description"><?php the_title() ?></p>
        </div>
    </div>
    <?
    endwhile;
    endif;
    // Reset Query
    //wp_reset_query();
    ?>
</div>