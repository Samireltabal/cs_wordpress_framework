<?php get_header(); ?>
    <div class='container'>
        <div class='col-lg-9'>
            <?php //Main Loop ?>
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <h1><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h1>
                        <p><?php echo get_the_content(); ?></p>
                    <?php endwhile; ?>
                <?php endif; ?>  
            <h1><?php /* Blog Name */ bloginfo('name'); ?></h1>
            <p><?php  /* Blog description */ bloginfo('description'); ?></p>
        </div>
        <div class='col-lg-3'>
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>