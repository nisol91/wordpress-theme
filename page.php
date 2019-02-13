<?php get_header('header-header'); ?>

    <div class="container">
      <div class="row">
        <div class="col-8">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="post">
              <div class="post_titl">
                  <h1><?php the_title(); ?></h1>
              </div>
              <h2><?php
              the_content();
              ?></h2>

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


<!-- questo e' la pagina statica su cui va automaticamente wordpress quando clicco sopra una pagina statica nel menu dell header. e' leggermente diverso dall index.php -->
