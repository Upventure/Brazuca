 <?php get_header('');?>


<div class="container-pagina">

    <!-- <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="">
            <h1> <?php the_title();  ?>  <h1>
        </div>

        <div class="">
            <p>  <?php the_content();?>  </p>
        </div>

    <?php endwhile; else : ?>
        <p> no content found</p>
    <?php endif; ?>


    <?php
    /* Template Name: Açai bowl*/
    ?>
    <?php get_header();?> -->


    <div class="background-image2 back-home">
    <div class="mask-layer">
      <div class="content-hoofd-foto">

        <!-- <img class="img-scrink content-logo" src="<?php bloginfo('template_url')?>/Images_Brazuca/Logo-Brazuca.png"> </img> -->

        <h1>Brazuca Coffee</h1>
        <div class="line-white"></div>
        <p>"Lorem ipsum dolor sit amet,"</p>
        <p class="ondertitel">Amsterdam | Rotterdam</p>
        </div>
        </div>
        </div>

<div style="background: linear-gradient(rgba(9, 9, 9, 0.93),rgba(11, 75, 5, 0.35), rgba(0, 6, 5, 0.37) ,   rgba(1, 1, 1, 1)    );; height: 100px; width: 100%">

</div>

    <?php get_template_part('content', 'general'); ?>
    <div class="advertisements">
        <?php webpost_referal("localhost/rotterdam-markthal/", "Coffee", "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.", "localhost/wp-content/themes/Brazuca/Images_Brazuca/879-2.JPG",   "Ontdek onze koffie") ?>





    </div>
    </div>


<?php get_footer(); ?>
