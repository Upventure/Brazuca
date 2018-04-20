<?php
/* Template Name: pages template*/
?>
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

   <?php get_template_part("advertisements"); ?>
   <div class="advertisements">
       <?php referal_advertisement("localhost/rotterdam-markthal/", "Coffee", "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.", "https://upload.wikimedia.org/wikipedia/commons/thumb/1/11/Een_kopje_koffie.jpg/1200px-Een_kopje_koffie.jpg", "Ontdek onze koffie") ?>



       <div class='referal-advertisement picture-background'>
           <div class='content mask-layer'>
               <div class='title green-brazuca'><h1><br></h1></div>
               <div class='summary summary-extra'><h1>Onze bonen</h1><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, </p></div>
               <div class='hyperlink-center'><a href='localhost' class='button green-brazuca'><b>lees verder</b></a></div>
           </div>
       </div>


       <div class='referal-advertisement'>
           <div class='content'>
               <div class='title green-brazuca'><h1><br></h1></div>
               <div class='summary summary-extra'><h1>Onze bonen</h1><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, </p></div>
               <div class='hyperlink-center'><a href='localhost' class='button green-brazuca'><b>"lees verder"</b></a></div>
           </div>
       </div>

   </div>
</div>



<?php get_footer(); ?>
