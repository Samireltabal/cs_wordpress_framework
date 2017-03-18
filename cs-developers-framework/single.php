<?php get_header(); ?>
    <div class='container'>
        <div class='col-lg-12'>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                    <p><?php echo get_the_content(); ?></p>
                    <p><?php  the_tags(); ?></p>
                <?php endwhile; ?>
                <?php endif; ?>   
                <?php comments_template(); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>