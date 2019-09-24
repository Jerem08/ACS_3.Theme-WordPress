<section id="cliens">

      <?php if( ! is_single() ) : ?>

        <div class="card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



          <?php the_post_thumbnail(); // affiche l'image à la une de l'article, avec 'wp-post-image' comme classe CSS. Attention à bien ajouter le add_theme_support() correspondant dans functions.php ?>
          <div class="container">
            <h4>
              <a href="<?php the_permalink(); // Lien vers l'article ?>"><?php the_title() ?></a>
            </h4>
          <?php endif; ?>

          <p>  <?php
          /**
          *  Permet d'afficher tout le contenu de l'article.
          */
          the_content();

          /**
          * Si le contenu est divisé en plusieurs pages, il faut en afficher la navigation.
          * On fait ça avec la fonction wp_link_pages().
          * Elle prend un tableau de paramètre, qui permetent de personnaliser pas mal de choses.
          * Il y a aussi un filtre qu'on peut utiliser pour personnaliser l'HTML rendu.
          * Mais pour notre exemple, on va faire simple et utiliser les paramètres par défaut.
          */
          wp_link_pages();
          ?></p>
        </div>
      </div>


  </article>
  </div>

  </div>

</section>
