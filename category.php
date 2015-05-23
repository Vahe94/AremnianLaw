<div class="welcome-our-site-div"><span class="welcome-our-site-span">Наши новости</span></div>
<div class="row">
    <? if (have_posts()) : while (have_posts()) : the_post();?>
    <div class="col-sm-6 col-md-3">
        <div class="thumbnail thumbnail-height">
            <? the_post_thumbnail('medium'); ?>
            <div class="caption">
                <h4><? the_title(); ?></h4>
                <p><a href="<? the_permalink(); ?>" class="btn btn-default" role="button">Читать далее</a></p>
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