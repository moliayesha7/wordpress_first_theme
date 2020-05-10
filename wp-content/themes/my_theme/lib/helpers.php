<?php function my_first_theme_post_meta(){ ?>

Posted on
<a href="<?php echo esc_url(get_permalink()); ?>">
    <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
</a>
By <a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta('ID'))); ?>">
    <?php echo esc_html(get_the_author( )); ?>
</a>

<?php } ?>

<?php function my_first_theme_read_more_link(){ ?>

<a href="<?php echo esc_url(get_permalink()); ?>" title="<?php the_title_attribute(['echo' => false]); ?>">
    Read More <span class="u-screen-reader-text">About <?php the_title(); ?></span>
</a>

<?php } ?>