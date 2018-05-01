<?php
/* Template Name: Franchise */
?>
<?php get_header(); ?>

<div class="background-image2 back-home">
    <div class="mask-layer">
        <div class="content-hoofd-foto">

            <!-- <img class="img-scrink content-logo" src="<?php bloginfo('template_url')?>/Images_Brazuca/Logo-Brazuca.png"> </img> -->

            <h1>Vestigingen</h1>
            <div class="line-white"></div>
            <p>"De Brazuca vestigingen door heel nederland"</p>
            <p class="ondertitel">Amsterdam | Rotterdam</p>
        </div>
    </div>
</div>


<?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="franchise-content">
        <p>  <?php the_content();?>  </p>
    </div>

<?php endwhile; else : ?>
    <p> no content found</p>
<?php endif; ?>

<!-- MULTIPLE ITEMS TESTING -->
<div class="referal-advertisement-div">
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
</div>

<div style="background: #1a8734; color: white; text-align: center;">
    <h2>Bekijk alle Brazuca locaties op de kaart</h2>
    <div style="height: 500px;">
        <?php get_template_part("maps"); get_map_all(); ?>
    </div>
    <h2><br></h2>
</div>

<?php get_template_part("footer", "main"); get_footer_main(); ?>