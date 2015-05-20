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
            <?php $query = new WP_Query(array('category_name' => 'welcome'));

            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail bg-purple">
                        <p class=welcome-header><?php echo CFS()->get('welcome_header'); ?></p>

                        <div class="thumb under-thumbnail-margin"> <a href="<? the_permalink(); ?>"><? echo get_the_post_thumbnail($id, 'thumbnail'); ?></a> </div>
                        <div class="caption">
                            <p><?php echo CFS()->get('welcome_footer'); ?><a href="<? the_permalink(); ?>"><? _e(' (читать дальше...)')?></a></p>
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
