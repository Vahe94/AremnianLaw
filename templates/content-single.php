<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
<!--    <header>-->

<!--    </header>-->
    <div class="entry-content">

        <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('medium',array('class' => "float-left mr15"));
        }
        ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
  </article>
<?php endwhile; ?>
