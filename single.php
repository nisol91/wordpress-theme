<?php get_header('header-header'); ?>

    <div class="container">
      <div class="row">
        <div class="col-8">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="post">
              <!-- per mettere la thumbnail sopra al singolo post -->
              <?php the_post_thumbnail(); ?>
              <div class="post_titl">
                  <h1><?php the_title(); ?></h1>
                <small><?php the_time('j F Y'); ?></small>
              </div>
              <h2><?php
              the_content();
              ?></h2>
              <h4>Scritto da: <?php the_author_posts_link(); ?></h4>
              <h4>Categorie: <?php the_category(); ?></h4>
<!-- questa sezione qua sotto riguarda i tag e i commenti al post singolo -->
              <?php
                  $postTags = wp_get_post_tags($post->ID);
              ?>

              <?php if (!empty($postTags)) { ?>
                  <?php the_tags('Questi sono i tag del post: ', ', ', '.<br>'); ?>
              <?php } ?>

              <?php comments_template(); ?>
<!--****  -->
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


<!-- questo e' il singolo articolo su cui va automaticamente wordpress quando ci clicco sopra. e' leggermente diverso dall index.php -->
