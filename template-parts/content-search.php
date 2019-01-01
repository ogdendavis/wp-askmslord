<!-- content-search.php -->

<article id = "post-<?php the_ID(); ?>" class="search__result" >

  <header class = "search__header">

    <h2>
      <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
      </a>
    </h2>

    <span class="search__subtitle">
      <?php echo get_post_type( $post ); ?>
    </span>

  </header>

  <div class = "entry-content">

    <?php the_excerpt(); ?>

  </div>

</article>
