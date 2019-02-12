<div class="feat-ads-inner col-lg-11 col-md-12 col-sm-12">
	<span class="feat-ad-col-title">Featured Ads</span>
	<?php 
	$query = new WP_Query(array(
		'post_type' => 'featured-ad',
		'post_status' => 'publish'
	));


	while ($query->have_posts()) {
		$query->the_post();
		$post_id = get_the_ID();
		?>

		<div class="feat-ad">
            <div class="feat-title"><h3><?php echo the_title();?></h3></div>
            
            <?php

            $featured_ad_f_img_url = get_the_post_thumbnail_url($post_id,'full');
            $featured_ad_img_url = get_the_post_thumbnail_url($post_id,'feat-size');
            $featured_ad_img_url = $featured_ad_img_url ?: get_template_directory_uri() .'/img/sample-420-300.jpg';

            ?>
            <div class="feat-thumb"><a data-fancybox href="<?php echo $featured_ad_f_img_url; ?>">
            <img src="<?php echo $featured_ad_img_url; ?>" alt="<?php the_title(); ?>"/></a></div>
		</div>
	<?php	
	}
    wp_reset_query();
    wp_reset_postdata();
	?>
</div>