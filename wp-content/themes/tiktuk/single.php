<?php get_header(); ?>
	<main role="main">
<div class="container single-post">
    <div class="container-inner-wrap">
		<div class="col-12 col-sm-12 col-lg-8">


	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
			<div class="post-thumb">
				<?php the_post_thumbnail(); // Fullsize image for the single post ?>			
			</div>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h1 class="single-h1"><?php the_title(); ?></h1>
			<!-- /post title -->

			<!-- post details -->
			
			<div class="post-info">
				<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
				<span><?php the_tags( __( 'Location : ', 'html5blank' ), ', ', ''); // Separated by commas ?></span>
				<span><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></span>
				<span><?php _e( 'Advertised by ', 'html5blank' ); the_author(); ?></span>
			</div>

			<?php the_content(); // Dynamic Content ?>



			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->

	<section>
		<?php
		//for use in the loop, list 5 post titles related to first tag on current post
		$tags = wp_get_post_tags($post->ID);
		$pCat = get_the_category($post->ID);

		if ($tags) {
		echo 'Related Posts';
		$first_tag = $tags[0]->term_id;
		$first_cat = $pCat[0]->slug;
		
		$args=array(
		'category__and' => $pTag,
		'tag__in' => array($first_tag),
		'post__not_in' => array($post->ID),
		'posts_per_page'=>4,
		'caller_get_posts'=>1
		);
		$my_query = new WP_Query($args);
		if( $my_query->have_posts() ) {
		while ($my_query->have_posts()) : $my_query->the_post();
		
		?>
		
		<div class="rel-post-item">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
		<?php the_post_thumbnail('feat-size'); // Fullsize image for the single post ?>
		<?php the_title(); ?>
		</a>
		</div>
		
		<?php
		endwhile;
		}
		wp_reset_query();
		}
		?>
	</section>

	</div>

	<div class="feat-ads col-lg-3 col-md-12 col-sm-12">
        <?php get_template_part( 'page-includes/comp', 'feat-ads' ); ?>
	</div>
	
	</div>
	</div>
	</main>



<?php get_footer(); ?>
