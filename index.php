<?php get_header('header-header'); ?>

    <div class="container">
      <div class="row">
        <div class="col-8">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="post">
              <div class="post_titl">
                <a href="<?php the_permalink(); ?>">
                  <h1><?php the_title(); ?></h1>
                </a>
                <small><?php the_time('j F Y'); ?></small>
              </div>
              <h2><?php
              the_excerpt();
              // echo excerpt(50);
              ?></h2>
              <h4>Scritto da: <?php the_author_posts_link(); ?></h4>
              <h4>Categorie: <?php the_category(); ?></h4>

            </div>
          <?php endwhile; else: ?>
            <p><?php _e('Nessun articolo corrisponde ai criteri di ricerca.'); ?></p>
          <?php endif; ?>
        </div>
        <div class="col-4">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
