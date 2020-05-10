<?php   get_header();?>


<?php if(have_posts()){ ?>
<?php while(have_posts()){  ?>
<?php the_post(); ?>

<h2>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
</h2>

<div>
    Posted on
    <a href="<?php echo get_permalink(); ?>">
        <time><?php echo get_the_date('l,F,j,Y'); ?></time>
    </a>

</div>
<?php }  ?>
<?php } else { ?>
<p>Sorry, no posts match your critaria .</p>
<?php } ?>




<?php get_footer();?>