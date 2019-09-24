<?php get_header(); ?>

<main class="main-content">
  <div class="row">

    <?php

        // Après avoir ouvert la zone de contenu principale <main>, on vérifie que l'on a bien des posts (éléments de contenus) à afficher avec have_posts()
        if ( have_posts() ) :

            // On a des posts, donc on va boucler dessus avec une boucle while (= tant que)
            while( have_posts() ) : // Tant qu'il y a des posts à afficher ...

                // ... prépare-le.
                the_post(); ?>

                <div class="card col-3">
                <h3 class="post-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <p class="post-info">
                Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
                </p>
                <div class="post-content">
                <?php the_excerpt(); ?>
                </div>
                </div>
              <?php endwhile; ?>
          <?php else : ?>
            <p class="nothing">
              Il n'y a pas de Post à afficher !
            </p>
          <?php endif; ?>
  </div>
</main>
    <!---FOOTER--->
<?php get_footer();
