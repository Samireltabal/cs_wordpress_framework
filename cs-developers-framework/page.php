<?php get_header(); ?>
    <div class='container'>
        <div class='col-lg-12'>
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
            <?php endwhile; ?>
            <?php endif; ?>   
            <?php wp_link_pages(); ?>
        </div>
    </div>
<?php get_footer(); ?>