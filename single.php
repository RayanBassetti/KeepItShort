<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>azeaze</p>
<?php endif; ?>

</body>
<?php get_footer(); ?>