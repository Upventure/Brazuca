 <?php get_header('');?>


  <div class="container-pagina">

         <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
             <div class="">
                  <h1> <?php the_title();  ?>  <h1>
              </div>

             <div class="">
                  <p>  <?php the_content();?>  </p>

             </div>

                  <?php endwhile; else : ?>
                    <p> no content found</p>
                  <?php endif; ?>


    </div>



<?php get_footer(); ?>
