<!-- content-none.php -->

<article id = "post-<?php the_ID(); ?>" <?php post_class(); ?> >

  <header class = "entry-header">
    <h1><?php esc_html_e( '404', 'askmslord' ); ?></h1>
  </header>

  <div class = "entry-content">
    <p><?php esc_html_e( 'Oops! That page doesn\'t exist.', 'askmslord' ); ?></p>
  </div>
</article>
