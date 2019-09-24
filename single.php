
<?php
/**
 * single.php
 *
 * Ce fichier est le modèle pour les articles.
 * Quand vous cliquez sur un article pour le lire, c'est ce fichier que WordPress va chercher.
 * Il est fortement recommandé de l'inclure dans chaque thème.
 *
 */

// D'abord, on va charger l'entête du document et la navigation du thème. La fonction ci-dessous va chercher un fichier appelé header.php.
get_header(); ?>

<?php
    // Quand on jette un oeil au prototype, on voit que l'image à la une sort du container <main>, mais reste dans <div class="content-area">
    the_post_thumbnail();
?>

<main class="main-content">

    <?php
        /**
         * Pas besoin de vérifier si on a des posts, vu que ce template est appelé uniquement quand on veut afficher un article.
         * On passe donc directement dans notre boucle While
         * La boucle va en fait boucler une seule fois, vu qu'il n'y a qu'une pièce de contenu à afficher.
         */
        while( have_posts() ) { // Tant qu'il y a des posts à afficher ...

            // ... prépare-le.
            the_post();

            // ... et affiche-le en utilisant le template contenu dans le fichier 'content.php' dans le dossier 'template-part/'.
            get_template_part( 'template-parts/content' );
        }

        /**
         * On affiche des liens vers LE posts précédents/suivants.
         * Attention à ne pas confondre avec the_posts_navigation() (pluriel) qui s'utilise dans les pages d'archives.
         * Facile à retenir: single.php -> the_post_navigation (singulier)
         */
        the_post_navigation();
    ?>
    </main>
<?php
// Nous sommes toujours dans le <div class="content-area">. On va charger la zone de widget principale en appelant le fichier sidebar.php
get_sidebar();
// Puis, on peut inclure le fichier footer.php qui va fermer la zone de contenu et afficher notre pied de page.
get_footer();
