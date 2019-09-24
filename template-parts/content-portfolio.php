<section id="portfolio-container" class="d-flex flex-column justify-content-between">
  <div class="overflow-background2">
  </div>
  <div class="title-and-paragraph">
    <h3 class="title-white font-weight-bolder">OUR PORTFOLIO</h3>
    <hr class="hr-white">
  </div>
  <div class="container mt-5 align-items-center container-portfolio-items flex-column flex-shrink d-flex justify-content-center">
    <div class="d-flex">
      <div class="items-portfolio d-flex">
        <img src="<?php bloginfo('template_directory'); ?>/img/p1.jpg" alt="">
        <figcaption class="d-flex justify-content-center flex-column align-items-center text-center position-absolute overlay-items-portfolio">
          <p class="mb-4">iphone App UI design</p>
          <i class="fas fa-plus"></i>
        </figcaption>
      </div>
      <div class="items-portfolio d-flex">
        <img src="<?php bloginfo('template_directory'); ?>/img/p2.jpg" alt="">
        <figcaption class="d-flex justify-content-center flex-column align-items-center text-center position-absolute overlay-items-portfolio">
          <p class="mb-4">iphone App UI design</p>
          <i class="fas fa-plus"></i>
        </figcaption>
      </div>
      <div class="items-portfolio d-flex">
        <div class="ticle" style="">
        <?php
        if ( have_posts() ) {
          while( have_posts() ) {
            the_post(); }
          the_posts_navigation();
        } else {
            get_template_part( 'content', 'none' );
          }
          ?>
        ?>
        </div>
        <figcaption class="d-flex justify-content-center flex-column align-items-center text-center position-absolute ">
          <p class="mb-4"><?php the_title(); // Permet d'afficher le titre de l'article. ?></p>
          <a href="#"></a>
        </figcaption>

      </div>
    </div>
    <div class="d-flex">
      <div class="items-portfolio d-flex">
        <img src="<?php bloginfo('template_directory'); ?>/img/p4.jpg" alt="">
        <figcaption class="d-flex justify-content-center flex-column align-items-center text-center position-absolute overlay-items-portfolio">
          <p class="mb-4">iphone App UI design</p>
          <i class="fas fa-plus"></i>
        </figcaption>
      </div>
      <div class="items-portfolio d-flex">
        <img src="<?php bloginfo('template_directory'); ?>/img/p5.jpg" alt="">
        <figcaption class="d-flex justify-content-center flex-column align-items-center text-center position-absolute overlay-items-portfolio">
          <p class="mb-4">iphone App UI design</p>
          <i class="fas fa-plus"></i>
        </figcaption>
      </div>
      <div class="items-portfolio d-flex">
        <img src="<?php bloginfo('template_directory'); ?>/img/p6.jpg" alt="" />
        <figcaption class="d-flex justify-content-center flex-column align-items-center text-center position-absolute overlay-items-portfolio">
          <p class="mb-4">iphone App UI design</p>
          <i class="fas fa-plus"></i>
        </figcaption>
      </div>
    </div>
  </div>
  <div class="overflow-background1">

  </div>
</section>
