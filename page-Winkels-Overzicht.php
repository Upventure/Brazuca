<?php
/* Template Name: Winkels overzichtspagina */
?>
<?php get_header(); ?>


<style>






.item-standard-border{
  /* background-color: rgba(230, 228, 224, 0.97); */
    background-color: white;
    color: black;
  /* width: 325px; */
  margin: 10px;
}
.wrapper-white-sections {
max-width: 1100px;


/* linear-gradient(); */
}
.section-home-page{
border: none;
}

.section-home-page{
  /* background-color: #6BAD6F; */
  margin: auto;
}


.item-standard{
  border: 10px solid white;
/* url('localhost/Images_Brazuca/AdobeStock_76901866_Preview.svg'); */
/* border-image:  url('../Images_Brazuca/AdobeStock_76901866_Preview.svg') 30 round;
/* border-image: url(border.png) */






  border-radius: 8px;
}


</style>


<!-- <div class="background-image2 back-home">
    <div class="mask-layer">
        <div class="content-hoofd-foto">


            <h1>Vestigingen</h1>
            <div class="line-white"></div>
            <p>"De Brazuca vestigingen door heel nederland"</p>
            <p class="ondertitel">Amsterdam | Rotterdam</p>
        </div>
    </div>
</div> -->


<?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="franchise-content">
        <p>  <?php the_content();?>  </p>
    </div>

<?php endwhile; else : ?>
    <p> no content found</p>
<?php endif; ?>

<!-- MULTIPLE ITEMS TESTING -->

<!-- <div class="referal-advertisement-div">

    <div class="multiple-items-standard">
        <div class="item-standard">
            <div class="image-standard">
                <a href="localhost/rijnstraat"><img src="../wp-content/themes/Brazuca/Images_Brazuca/879-2.JPG"></a>
            </div>
            <div class="content-standard">
                <h4 style="text-align: center; margin-top: 5px;">Rijnstraat 22, Amsterdam</h4>
                <p>
                    Dingen die een omschrijving geven van de locatie.
                </p>
            </div>
            <div class="flex-active">
                <a class="button-standard" href="localhost/rijnstraat">Naar deze vestiging</a>
            </div>
        </div>
        <div class="item-standard">
            <div class="image-standard">
                <a href="localhost/ferdinand-bolstraat"><img src="../wp-content/themes/Brazuca/Images_Brazuca/879-2.JPG"></a>
            </div>
            <div class="content-standard">
                <h4 style="text-align: center; margin-top: 5px;">Ferdinand Bolstraat 113 H, Amsterdam</h4>
                <p>
                    Dingen die een omschrijving geven van de locatie.
                </p>
            </div>
            <div class="flex-active">
                <a class="button-standard" href="localhost/ferdinand-bolstraat">Naar deze vestiging</a>
            </div>
        </div>
        <div class="item-standard">
            <div class="image-standard">
                <a href="localhost/markthal"><img src="../wp-content/themes/Brazuca/Images_Brazuca/879-2.JPG"></a>
            </div>
            <div class="content-standard">
                <h4 style="text-align: center; margin-top: 5px;">Markthal, Rotterdam</h4>
                <p>
                    Dingen die een omschrijving geven van de locatie.
                </p>
            </div>
            <div class="flex-active">
                <a class="button-standard" href="localhost/markthal">Naar deze vestiging</a>
            </div>
        </div>
        <div class="item-standard">
            <div class="image-standard">
                <a href="localhost/julianaplein"><img src="../wp-content/themes/Brazuca/Images_Brazuca/879-2.JPG"></a>
            </div>
            <div class="content-standard">
                <h4 style="text-align: center; margin-top: 5px;">Julianaplein 4, Amsterdam</h4>
                <p>
                    Dingen die een omschrijving geven van de locatie.
                </p>
            </div>

            <div class="flex-active">
                <a class="button-standard" href="localhost/julianaplein">Naar deze vestiging</a>
            </div>
        </div>
    </div>
</div> -->

<div style="background: #1a8734; color: white; text-align: center;">
    <h2>Bekijk alle Brazuca locaties op de kaart</h2>
    <div style="height: 500px;">
        <?php get_template_part("maps"); get_map_all(); ?>
    </div>
    <h2><br></h2>
</div>

<div style="margin-top: 100px;"></div>
<div class="wrapper-top-section" style="border-top:  6px solid rgb(232, 237, 230);">
    <div class="advertisements-winkels">
        <div class="section-winkel-page light winkel-achtergrond">
            <div class="flex wrappper-winkel-sections" style="">
                <div class="wrapper-white-section-section-50-50 home-section">
                    <!-- <div class="image-white-section"></div>       -->

                    <!-- MULTIPLE ITEMS TESTING -->

                    <div class="referal-advertisement-div-winkels">
              <h1 style="color:white; text-align:center;"> Brazuca winkels</h1>
              <p style="font-style:italic; text-align:center; color:white; padding-bottom:10px">Bezoek de brazuca winkel bij u in de buurt</p>
                        <div class="multiple-items-standard">
                            <div class="item-standard-border">
                              <h2>Amsterdam Rijnstraat</h2>
                                <div class="image-standard">
                                    <a href="localhost/rijnstraat">
        <img src="<?php bloginfo('template_url')?>/Images_Brazuca/Brazuca-rotterdam-tablet.jpg">
                                    </a>
                                </div>
                                <div class="content-standard" style="padding: 9px 9px;">
                                    <!-- <h4 style="text-align: center; margin-top: 5px;">Rijnstraat 22, Amsterdam</h4> -->
                                    <p>
                                      Brazuca Coffee Ferdinand Bolstraat<br>
                                     Ferdinand Bolstraat 113 H <br>
                                     1072 LE Amsterdam<br>
                                    </p>
                                </div>
                                <div class="flex-active">
                                    <a class="button-standard" href="localhost/rijnstraat">Naar deze vestiging</a>
                                </div>
                                        <br>
                            </div>




                            <div class="item-standard-border">
                                          <h2>Amsterdam Ferdinand bolstraat</h2>
                                <div class="image-standard">
                                    <a href="localhost/ferdinand-bolstraat">
                              <img src="<?php bloginfo('template_url')?>/Images_Brazuca/Brazuca-rotterdam-tablet.jpg">
                                    </a>
                                </div>
                                  <div class="content-standard" style="padding: 9px 9px;">
                                    <!-- <h4 style="text-align: center; margin-top: 5px;">Ferdinand Bolstraat 113 H, Amsterdam</h4> -->
                                    <p>
                                      Brazuca Coffee Ferdinand Bolstraat<br>
                                     Ferdinand Bolstraat 113 H <br>
                                     1072 LE Amsterdam<br>
                                    </p>
                                </div>
                                <div class="flex-active">
                                    <a class="button-standard" href="localhost/ferdinand-bolstraat">Naar deze vestiging</a>

                                </div>
                                        <br>
                            </div>


                            <div class="item-standard-border">
                                <h2>Rotterdam Markthal</h2>
                                <div class="image-standard">
                                    <a href="localhost/markthal">
                                      <!-- <img src="../wp-content/themes/Brazuca/Images_Brazuca/879-2.JPG"> -->
                                      <img src="<?php bloginfo('template_url')?>/Images_Brazuca/Brazuca-rotterdam-tablet.jpg">
                                    </a>
                                </div>
                                <div class="content-standard" style="padding: 9px 9px;">
                                    <!-- <h4 style="text-align: center; margin-top: 5px;">Markthal, Rotterdam</h4> -->
                                    <p>

                                      Brazuca Coffee Ferdinand Bolstraat<br>
                                     Ferdinand Bolstraat 113 H <br>
                                     1072 LE Amsterdam<br>
                                    </p>

                                </div>
                                <div class="flex-active">
                                    <a class="button-standard" href="localhost/markthal">Naar deze vestiging</a>

                                </div>
                                        <br>
                            </div>


                            <!-- <div class="item-standard">
                                <div class="image-standard">
                                    <a href="localhost/julianaplein"><img src="../wp-content/themes/Brazuca/Images_Brazuca/879-2.JPG"></a>
                                </div>
                                <div class="content-standard">
                                    <h4 style="text-align: center; margin-top: 5px;">Julianaplein 4, Amsterdam</h4>
                                    <p>
                                        Dingen die een omschrijving geven van de locatie.
                                    </p>
                                </div>
                                <div class="flex-active">
                                    <a class="button-standard" href="localhost/julianaplein">Naar deze vestiging</a>
                                </div>
                            </div> -->



                        </div>
                    </div>

            </div>
        </div>
    </div>






<?php get_template_part("footer", "main"); get_footer_main(); ?>
