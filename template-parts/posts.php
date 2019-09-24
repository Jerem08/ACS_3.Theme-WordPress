<?php
/**
 * content.php
 *
 * Ce fichier est responsable de l'affichage d'un article. Il est appelé dans la boucle de WordPress pour chaque article à afficher sur la page demandée.
 * Il contient tout ce qui est entre les balises <article>.
 * Utiliser un petit fichier distinct comme celui-là pour le contenu augmente la lisibilité des templates principaux (comme index.php)
 * et permet de réutiliser ce fichier dans un autre template.
 *
 */
?>
<?php
/**
 * Ajouter l'ID de l'article peut être utile. post_class() génère des classes CSS très utiles, en fonction des données du post.
 *  Par exemple, on aura une classe CSS en fonction de la catégorie, des étiquettes, du format, etc...
 */
?>


<article id="post-<?php the_ID(); ?>" class="card justify-content-center">

    <?php
        /**
         * Tout le bloc <header> ne s'affiche que sur les pages de listing d'articles.
         * Sur la page d'article simple (single.php), on peut ne pas l'afficher, car le titre et les métas sont dans l'entête de la page (header.php).
         * On utilise donc is_single() pour vérifier qu'on est pas sur un page d'article.
         */
    ?>


            <?php the_post_thumbnail(); // affiche l'image à la une de l'article, avec 'wp-post-image' comme classe CSS. Attention à bien ajouter le add_theme_support() correspondant dans functions.php ?>
            <h2 class="entry-title">
                <a href="<?php the_permalink(); // Lien vers l'article ?>">
                    <?php the_title(); // Permet d'afficher le titre de l'article. ?>
                </a>
            </h2>



    <div class="entry-content">
        <?php
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


        ?>
    </div>


</article>
