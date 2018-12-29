<!-- content-none.php -->

<article id = "post-<?php the_ID(); ?>" <?php post_class(); ?> >

  <header class = "entry-header">
    <h1><?php esc_html_e( 'Oops! That page doesn\'t exist.', 'askmslord' ); ?></h1>
  </header>

  <div class = "entry-content">

    <p>Ms. Lord regrets to inform you that this page doesn't exist! Perhaps you'd like to take this opporunity to search her site for some content related to what you were looking for?</p>

    <?php echo get_search_form(); ?>

  </div>
</article>
