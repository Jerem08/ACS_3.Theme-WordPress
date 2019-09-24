<?php



function arrow_scripts(){

    wp_enqueue_style( 'bootstrap_styles', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), null);
    wp_enqueue_style( 'arrow_styles', get_stylesheet_uri(), array(), null);
    wp_enqueue_style( 'arrow_font', 'https://fonts.googleapis.com/css?family=Raleway&display=swap', array(), null);

    wp_enqueue_script( 'fontawesome_script', 'https://kit.fontawesome.com/6fee70888d.js', array(), null, true );
    wp_enqueue_script( 'jquery_script', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), null, true );
    wp_enqueue_script( 'popper_script', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), null, true );
    wp_enqueue_script( 'bootstrap_script', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array(), null, true );
    wp_enqueue_script( 'arrow_script', get_theme_file_uri(), array(), null, true );

}

add_action( 'wp_enqueue_scripts', 'arrow_scripts' );
?>
