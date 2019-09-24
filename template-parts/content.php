
<div class="row justify-content-center">
  <?php

      // Après avoir ouvert la zone de contenu principale <main>, on vérifie que l'on a bien des posts (éléments de contenus) à afficher avec have_posts()
      if ( have_posts() ) :

          // On a des posts, donc on va boucler dessus avec une boucle while (= tant que)
          while( have_posts() ) : // Tant qu'il y a des posts à afficher ...

              // ... prépare-le.
              the_post();
              get_template_part('template-parts/posts');
              // ... et affiche-le en utilisant le template contenu dans le fichier 'content.php' dans le dossier 'template-part/'.
              // Utiliser get_template_part et isoler le contenu de l'article
          endwhile;

          /**
           * On affiche des liens vers les posts précédents/suivants.
           * Attention à ne pas confondre avec the_post_navigation() (singulier) qui s'utilise dans single.php
           * Facile à retenir: single.php -> the_post_navigation (singulier)
           */
          the_posts_navigation();

       else :

          // Si on n'avait aucun posts à afficher pour cette page, on afficher un message d'erreur contenu dans un autre template part.


      endif;

  ?>

</div>
