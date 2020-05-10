<?php   get_header();?>


<?php if(have_posts()){ ?>

<?php while(have_posts()){  ?>
<?php the_post(); ?>

<h2>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
</h2>

<div>
    <?php my_first_theme_post_meta(); ?>

</div>
<div>
    <?php the_excerpt( ); ?>
</div>
<?php my_first_theme_read_more_link(); ?>


<?php }  ?>

<?php the_posts_pagination( ); ?>
<?php } else { ?>
<p><?php _e('Sorry, no posts match your critaria .','my_first_theme'); ?></p>
<?php } ?>

<?php

    $comments= 3;
    printf(_n('One Comment','%s comments', $comments ,'my_first_theme'), $comments);

?>



<?php get_footer();?>