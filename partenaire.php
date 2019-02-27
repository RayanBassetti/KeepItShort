<?php
/* Template Name: Partenaire */
?>

<?php get_header(); ?>


<?php if ( have_posts() ) : 
    while ( have_posts() ) : 
        the_title('<h3>', '</h3>');
        the_post();
        the_content();
    endwhile; 
    
else: 

?>

<?php endif; ?>

</body>
<?php get_footer(); ?>