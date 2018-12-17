<?php get_header(); ?>

  <div id = "primary" class = "content-area">

    <main id = "main" class = "site-main" role = "main">

      <!-- This is where the loop will start -->
      <article id = "post-<?php the_ID(); ?>" <?php post_class(); ?> >

        <header class = "entry-header">
          <h1>Ask Ms. Lord!</h1>
        </header>

        <div class = "entry-content">
          <p>A place for students and parents to get information and guidance on the college admission process from an experienced professional</p>
        </div>

      </article>

    </main>

  </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
