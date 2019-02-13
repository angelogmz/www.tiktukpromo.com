

    <div class="posts-loop">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<div class="posts-item">

		<?php
		$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'front-size'); 
		$featured_img_url = $featured_img_url ?: get_template_directory_uri() .'/img/sample-320-240.jpg';

		$postPerma = get_the_permalink();
		$posttitle = get_the_title();
		$posttags = get_the_tags();
		$categories = get_the_category();
		?> 

			<div class="post-thumbnail">
				<a href="<?php echo $postPerma; ?>"><img src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>"/></a>
			</div>
			<div class="post-text">
				<div class="content">    
					<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
					<div class="item-details">
					<?php
						if ($posttags) {
					?>   
					<div class="tags-list">
						<?php
							foreach($posttags as $tag) {
								echo $tag->name . ' ';
							}
						?>
					</div>
					<?php
					}
					?>
					<div class="cat-list">
					<?php
						if ( ! empty( $categories ) ) {
						echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
						}
					?>
					</div>


					</div>
					

					<?php the_excerpt(); ?>
				</div>
			</div>
		</div>
	<!-- /article -->

<?php endwhile; ?>

<!-- pagination here -->
<?php
	if ( function_exists( 'custom_pagination' ) ) {
	custom_pagination($the_query->max_num_pages,"",$paged);
}
?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>

</div>
