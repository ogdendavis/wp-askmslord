<!-- content-posts.php -->

<article id = "post-<?php the_ID(); ?>" <?php post_class(); ?> >

  <header class = "entry-header">

    <?php the_title( '<h2><a class="permalink" href="' . get_permalink() . '">', '</a></h2>' ); ?>

    <div class="byline">

      <?php esc_html_e( 'Author:' ); ?> <?php the_author(); ?>

    </div>

  </header>

  <div class = "entry-excerpt">

    <?php the_excerpt(); ?>

  </div>

</article>
