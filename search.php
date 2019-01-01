<!-- search.php -->

<?php get_header(); ?>

  <div id = "primary" class = "content-area">

    <main id = "main" class = "site-main" role = "main">

      <header class="search__header">
        <h1>
          <?php esc_html_e( 'Search Results', 'askmslord' ) ?>
        </h1>

        <span class="search__subtitle">
          <?php esc_html_e( 'Results for:', 'askmslord' ) ?>
          "<?php echo get_search_query(); ?>"
        </span>
      </header>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', 'search' ); ?>

      <?php endwhile; else: ?>

          <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>

    </main>

  </div>

<?php get_sidebar( 'page' ); ?>

<?php get_footer(); ?>
