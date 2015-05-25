<footer class="content-info" role="contentinfo">
    <div class="container">
        <div id="publications">
            <?
            $category_id = get_cat_ID( 'publications' );
            $category_link = get_category_link( $category_id );
            ?>
            <h2 class="publics-title">
                <hr><a><span class="left-span">•</span>Публикации<span class="right-span">•</span></a>
                <a href="<?=$category_link;?>" class="btn btn-default btn-all-posts btn-xs">Все публикации</a>
            </h2>
            <div class="row">
                <?php $query = new WP_Query(array('category_name' => 'publications','posts_per_page' => 4));
                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-md-3 col-sm-4 col-xs-6 posts" onclick="window.location.href='<? the_permalink(); ?>'">
                        <p class="date"><?php echo get_the_date(); ?></p>
                        <div class="thumbnail">
                            <? echo get_the_post_thumbnail($id, 'medium'); ?>
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
        <div id="publications">
            <?
            $category_id = get_cat_ID( 'news' );
            $category_link = get_category_link( $category_id );
            ?>
            <h2 class="publics-title">
                <hr><a><span class="left-span">•</span>Наши новости<span class="right-span">•</span></a>
                <a href="<?=$category_link;?>" class="btn btn-default btn-all-posts btn-xs">Все новости</a>
            </h2>
            <div class="row">
                <?php $query = new WP_Query(array('category_name' => 'news','posts_per_page' => 4));
                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-md-3 col-sm-4 col-xs-6 posts" onclick="window.location.href='<? the_permalink(); ?>'">
                        <p class="date"><?php echo get_the_date(); ?></p>
                        <div class="thumbnail">
                            <? echo get_the_post_thumbnail($id, 'medium'); ?>
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
        <div id="videos">
            <h2 class="publics-title"><hr><a href="<?=$category_link;?>"><span class="left-span">•</span>Видео<span class="right-span">•</span></a></h2>
            <div class="row">
                <?php $query = new WP_Query(array('category_name' => 'videos','posts_per_page' => 4));
                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                    $post_id=get_the_ID();?>
                    <div class="col-md-3 col-sm-4 col-xs-6 posts-video">
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
<!--    <div class="clients">-->
<!--        <div class="useful">-->
<!--            <h2> Клиенты и партнеры</h2>-->
<!--        </div>-->
<!--        <div class="partners-img_1 partners-img"> </div>-->
<!--        <div class="partners-img_2 partners-img"> </div>-->
<!--        <div class="partners-img_3 partners-img"> </div>-->
<!--        <div class="partners-img_4 partners-img"></div>-->
<!--        <div class="partners-img_5 partners-img"></div>-->
<!--        <div class="partners-img_6 partners-img"> </div>-->
<!--        <div class="partners-img_7 partners-img"></div>-->
<!--    </div>-->
    <div class="footer-under-div">
        <div class="container">
            <div class="row">
            <div class="footer-left-logo col-lg-5">
               <p> © 2015. Юридический центр «Адвокат Вардан Хечяан»</p>
               <p> +(374)10 32-02-02</p>
               <p> advokat@advokat.am</p>

                <div class="disclaimer-div">
                    <a href="#" class="float-left disclaimer"> Disclaimer &nbsp;|</a>

                    <a href="#" class="float-left disclaimer">&nbsp; Terms&Conditions </a>
                </div>
            </div>
                <div class="footer-left-logo col-lg-3">
                    <div class="col-xs-12">
                        <div id="follow-icons-fb" class="col-xs-4 follow-icons"></div>
                        <div id="follow-icons-tw" class="col-xs-4 follow-icons"></div>
                        <div id="follow-icons-in" class="col-xs-4 follow-icons"></div>
                    </div>
                    <div class="col-xs-12">
                        <div id="follow-icons-gplus" class="follow-icons col-xs-4"></div>
                        <div id="follow-icons-youtube" class="follow-icons col-xs-4"></div>
                        <div id="follow-icons-skype" class="follow-icons col-xs-4"></div>
                    </div>
            </div>
            <div class="footer-right-menu col-lg-4">
                <?php
                if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary_navigation',
                            'walker' => new Roots_Nav_Walker(),
                            'menu_class' => 'menu-items-ul'
                        )
                    );
                endif;
                ?>

            </div>
        </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<a id="scroll-to-top">
</a>