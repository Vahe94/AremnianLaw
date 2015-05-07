<?php
/*
Template Name: Home
*/
?>
<!---->
<!--<div id="owl-example" class="owl-carousel">-->
<!---->
<!--    --><?php //$query = new WP_Query(array('category_name' => 'slider'));
//
//    if ($query->have_posts()) : while ($query->have_posts()) :
//
//        $query->the_post(); ?>
<!---->
<!--        <div class="general-slider">-->
<!---->
<!--            <div class="sl-items">-->
<!---->
<!--                --><?// echo get_the_post_thumbnail($id); ?>
<!---->
<!--            </div>-->
<!---->
<!--        </div>-->
<!---->
<!--    --><?//
//
//    endwhile;
//
//    endif;
//
//    // Reset Query
//
//    //wp_reset_query();
//
//    ?>
<!---->
<!--</div>-->

<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
<div class="slider" style="background-image:url(<?php echo $url ?>)"></div>
<div class="row no-margin custom-well">
    <?php while (have_posts()) : the_post(); ?>
        <div class=""><? get_template_part('templates/content', 'page'); ?></div>
    <?  endwhile; ?>

    <?php $query = new WP_Query(array('category_name' => 'services'));
    // Заголовок 1
    $category_id = get_cat_ID('Услуги');
    $i= get_category($category_id)->category_count;
    $i= get_category($category_id)->category_count;
    $x=6;
    if($i<5 && $i!=0){
        $x=12/$i;
    }elseif($i!=0){
        $x=4;
    }
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

        <div class="min-height col-sm-6 col-md-<?php echo $x ?>">

            <div class="thumbnail thumnbnail-center">

                <div class="caption"><h3> <? the_title() ?> </h3></div>

                <a href="<? the_permalink(); ?>"><? echo get_the_post_thumbnail($id, 'thumbnail'); ?></a>
                <p class="Description_of_item"><?php echo CFS()->get('Description_of_item'); ?></p>
                <p class="badge price_of_item "><?php echo CFS()->get('Price'); ?></p><br>

                <!-- Button trigger modal -->
                <div class="btn btn-danger div-contact-button" data-toggle="modal" data-target="#myModal<?php if( CFS()->get('write_or_buy')==1){ echo '1';}?>">
                    <p class="div-p-contact-button">
                        <?php if( CFS()->get('write_or_buy')==1)
                        {
                            echo "купить";
                        }else{
                            echo "написать";
                        }
                        ?>
                    </p>
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
<!--заголовок 2-->
<?php while (have_posts()) : the_post(); ?>
    <div class="row no-margin custom-well">
        <div class="text-center"><h2><?php echo CFS()->get('home_header2'); ?></h2></div>
        <div><?php echo CFS()->get('redactor2'); ?></div>
    </div>


    <!-- Заголовок 3-->
<div class="row no-margin custom-well">

    <div class="text-center"><h2><?php echo CFS()->get('home_header3'); ?></h2></div>
    <div><?php echo CFS()->get('redactor3'); ?></div>
    <?php endwhile; ?>

    <?php $query = new WP_Query(array('category_name' => 'products'));
    $category_id = get_cat_ID('Товары');
    $i= get_category($category_id)->category_count;
    $x=6;
    if($i<5 && $i!=0){
        $x=12/$i;
    }elseif($i!=0){
        $x=4;
    }
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

        <div class="min-height col-sm-6 col-md-<?php echo $x?>">

            <div class="thumbnail thumnbnail-center">

                <div class="caption"><h3><? the_title() ?></h3></div>

                <a href="<? the_permalink(); ?>"><? echo get_the_post_thumbnail($id, 'thumbnail'); ?></a>
                <p class="Description_of_item"><?php echo CFS()->get('Description_of_item'); ?></p>
                <p class="badge price_of_item"><?php echo CFS()->get('Price'); ?></p><br>
                <!-- Button trigger modal -->
                <div class="btn btn-danger div-contact-button" data-toggle="modal" data-target="#myModal<?php if( CFS()->get('write_or_buy')==1){ echo '1';}?>">
                    <p class="div-p-contact-button">
                        <?php if( CFS()->get('write_or_buy')==1)
                        {
                            echo "купить";
                        }else{
                            echo "написать";
                        }
                        ?>
                    </p>
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
<!--заголовок 4-->
<?php while (have_posts()) : the_post(); ?>
    <div class="row no-margin custom-well">
        <div class="text-center"><?php echo CFS()->get('home_header4'); ?></div>
        <div><?php echo CFS()->get('redactor4'); ?></div>
    </div>
<?php endwhile; ?>
