<?php
/* Template Name: Participer */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : 
    while ( have_posts() ) : 
?>


<section id="Participer">
    <div id="ParticiperContent">

    <h2 class="TitreH2"><?php the_title(); ?></h2>
        <?php
            the_post();
            the_content();
            endwhile; 
        
            else: 
        ?>
        <?php endif; ?>
    <a class="typeform-share button" href="https://rayanbassetti.typeform.com/to/nVdsgK" data-mode="popup" 
        target="_blank">Participer 
    </a> 
        
        <script> (function() {
             var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; 
             if(!gi.call(d,id)){
                  js=ce.call(d,"script"); 
                  js.id=id; js.src=b+"embed.js"; 
                  q=gt.call(d,"script")[0]; 
                  q.parentNode.insertBefore(js,q) 
                  } 
                })() 
        </script>
</section>

<?php get_footer(); ?>