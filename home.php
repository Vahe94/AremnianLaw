<?php
/*
Template Name: Home
*/
?>

<div class="clear-both"></div>
<div class="container">
    <!--    <div class="col-sm-4 lawyer-05">    </div>-->
    <div class="col-xs-12">
        <h2>Вардан Хечян</h2>

        <p class="justify">Lorem ipsum dolor sit amet,consectetur adipisicing elit. A ad aspernatur, corporis cupiditate
            dolor
            doloremque eligendi eos eum incidunt iure iusto magnam maiores necessitatibus nisi non odit perspiciatis
            placeat possimus quam quis quisquam, repellat reprehenderit sit temporibus totam vel vitae. A, accusamus
            alias aliquam amet, cum debitis ducimus ea harum illo iure laborum magnam maiores neque perspiciatis
            provident
            temporibus vel? Alias deserunt earum expedita fuga hic illo ipsum laboriosam laborum maiores, minus modi
            nisi
            perferendis qui, repellat repellendus sequi similique soluta voluptatum. Ab accusantium
            autem ex exercitationem, expedita fugit harum, illo illum impedit ipsa, ipsam libero nulla pariatur saepe
            ullam.
        </p>
    </div>
</div>
<div class="clear-both"></div>
<div class="container welcome">
    <div class="row">
        <div class="welcome-our-site-div"><span class="welcome-our-site-span">Добро пожаловать на сайт</span></div>
        <div class="row text-center">
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail bg-purple">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A at, commodi fugit ipsam sit
                        totam.</p>

                    <div class="thumb under-thumbnail-margin"><img width="69" height="71"
                                                                   src="http://dev1.smartproductionllc.com/wp-content/uploads/2014/12/clock.png"
                                                                   class="attachment-medium wp-post-image" alt="clock">
                    </div>
                    <div class="caption">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A at, commodi fugit ipsam sit
                            totam.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail bg-purple">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A at, commodi fugit ipsam sit
                        totam.</p>

                    <div class="thumb under-thumbnail-margin"><img width="69" height="71"
                                                                   src="http://dev1.smartproductionllc.com/wp-content/uploads/2014/12/clock.png"
                                                                   class="attachment-medium wp-post-image" alt="clock">
                    </div>
                    <div class="caption">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A at, commodi fugit ipsam sit
                            totam.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail bg-purple">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A at, commodi fugit ipsam sit
                        totam.</p>

                    <div class="thumb under-thumbnail-margin"><img width="69" height="71"
                                                                   src="http://dev1.smartproductionllc.com/wp-content/uploads/2014/12/clock.png"
                                                                   class="attachment-medium wp-post-image" alt="clock">
                    </div>
                    <div class="caption">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A at, commodi fugit ipsam sit
                            totam.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail bg-purple">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A at, commodi fugit ipsam sit
                        totam.</p>

                    <div class="thumb under-thumbnail-margin"><img width="69" height="71"
                                                                   src="http://dev1.smartproductionllc.com/wp-content/uploads/2014/12/clock.png"
                                                                   class="attachment-medium wp-post-image" alt="clock">
                    </div>
                    <div class="caption">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A at, commodi fugit ipsam sit
                            totam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <h2 class="publics-title"><a href=""> Публикации</a></h2>
        <div id="publications">
            <div class="row">
                <?php $query = new WP_Query(array('category_name' => 'publications'));
                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="thumbnail">
                            <a href="<? the_permalink(); ?>"><? echo get_the_post_thumbnail($id, 'medium'); ?></a>
                        </div>
                            <div class="caption">
                                <p><?php the_date(); ?></p>
                                <a href="<? the_permalink(); ?>"><p><?php the_title() ?></p></a>
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
    <div class="row">
        <h2 class="publics-title"><a href="#">Видео</a></h2>
        <div id="videos">
            <div class="row">
                <?php $query = new WP_Query(array('category_name' => 'videos'));

                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();  $date= the_date();?>

                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="thumbnail">
                            <a href="<? the_permalink(); ?>">
                                <? echo get_the_post_thumbnail($id, 'medium'); ?>
<!--                                <iframe width="853" height="480" src="--><?php //echo CFS()->get('tipe_video_url_here'); ?><!--" frameborder="0" allowfullscreen></iframe>-->
                                <span class="video-play-icon"></span>
                            </a>
                        </div>
                            <div class="caption">
                                <p><? echo $date?></p>
                                <a href="<? the_permalink(); ?>"><p><?php the_title() ?></p></a>
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
</div>
