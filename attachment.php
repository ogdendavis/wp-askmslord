<!-- attachment.php -->

<?php get_header(); ?>

  <div id = "primary" class = "content-area">

    <main id = "main" class = "site-main" role = "main">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article id = "post-<?php the_ID(); ?>" <?php post_class(); ?> >

          <header class = "entry-header">

            <?php the_title( '<h1>', '</h1>' ); ?>

          </header>

          <div class = "entry-content">

            <a href="<?php echo esc_url( $post->guid ); ?>">
              <?php if ( wp_attachment_is_image( $post->ID ) ): ?>
                <img src="<?php echo esc_url( $post->guid ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
              <?php else: ?>
                <p>Download</p>
              <?php endif; ?>
            </a>

          </div>

        </article>

      <?php endwhile; else: ?>

          <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>

    </main>

  </div>

<?php get_footer(); ?>
