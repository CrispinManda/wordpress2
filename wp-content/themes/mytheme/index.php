
<?php get_header();?>


 <h5> this is my index file</h5>
 <?php
if(have_posts()):
    while(have_posts()): the_post();
        the_title();
        the_content();
        the_category();
    endwhile;
endif;
?>

<?php get_sidebar();?>

<?php get_footer();?>
