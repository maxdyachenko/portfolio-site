<?php
/*
Template Name: About me
*/
?>

<?php get_header(); ?>

<div class="container">
	<h1><?php echo get_the_title() ?></h1>
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="content">
            <div class="info">
                <?php if ( has_post_thumbnail() ): ?>
                    <div class="avatar">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <p class="position"><?php echo get_bloginfo('description') ?></p>
                <?php endif; ?>
            </div>
			<div class="info-content">
				<div class="desc">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	<?php endwhile; wp_reset_query(); ?>
</div>

<?php get_footer(); ?>
