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
                <div class="about-list">

                    <?php global $post; $post_id = $post->ID; ?>
                    <dl>
                        <dt>
                            Education
                        </dt>
	                    <?php
                            $edu = get_post_meta($post_id, 'education', true);
                            if (!empty($edu)){
	                            foreach ($edu as $item) : ?>
                                    <dd>
                                        <?php echo $item; ?>
                                    </dd>
                                <?php endforeach;
                            }
                        ?>
                        <dt>
                            Work experience
                        </dt>
	                    <?php
                            $exp = get_post_meta($post_id, 'experience', true);
                            if (!empty($edu)){
                                foreach ($exp as $item) : ?>
                                    <dd>
                                        <?php echo $item; ?>
                                    </dd>
                                <?php endforeach;
                            }
	                    ?>
                        <dt>
                            Skills
                        </dt>
                        <div class="skills-wrapper">
	                        <?php
	                        $skill = get_post_meta($post_id, 'skills', true);
	                        if (!empty($edu)){
		                        foreach ($skill as $item) : ?>
                                    <dd class="skill">
				                        <?php echo $item; ?>
                                    </dd>
		                        <?php endforeach;
	                        }
	                        ?>
                        </div>
                    </dl>
                </div>
			</div>
		</div>
	<?php endwhile; wp_reset_query(); ?>
</div>

<?php get_footer(); ?>
