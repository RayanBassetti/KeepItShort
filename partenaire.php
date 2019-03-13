<?php
/* Template Name: Devenir Partenaire */
?>

<?php get_header(); ?>


<?php if ( have_posts() ) : 
    while ( have_posts() ) : 
?>

<section id="DevenirPartenaire">
    <div id="DevenirPartenaireContent">
        <h2 class="TitreH2"><?php the_title(); ?></h2>
        
        <p>

        <?php
            the_post();
            the_content();
    endwhile; 
    
    else: 

    ?>

<?php endif; ?>

        </p>


    </div>
</section>

</body>
<?php get_footer(); ?>