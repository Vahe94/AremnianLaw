<?php
/*
Template Name: services
*/
?>
<div class="row ">
    <div class="welcome-our-site-div"><span class="welcome-our-site-span">Наши услуги</span></div>
</div>
<div class="col-sm-4 services_left_side">
    <?php $query = new WP_Query(array('category_name' => 'services'));
    $id_get=($_GET["id"]);
        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();;?>
        <div class="float-left"> <? echo the_post_thumbnail('thumbnail'); ?></div>
    <div class="float-left"><a href="/services?id=<? echo $post_id ?>"><p class="text-center"> <?php the_title() ?></p></a></div>
    <?

    endwhile;

    endif;

    // Reset Query

    //wp_reset_query();
    ?>
</div>
<div class="col-sm-8">
    <?php
    $id_get=($_GET["id"]);
    if($id_get!="0"){
        $query = new WP_Query("p=$id_get");
        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post() ;
            ?>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="caption">
                    <h2><?php the_content() ?></h2>
                </div>
            </div>
        <?

        endwhile;

        endif;

        // Reset Query

        //wp_reset_query();


    }
  ?>


endwhile;

endif;

// Reset Query

//wp_reset_query();
if($k!=0) echo '</div>';
?>
</div>