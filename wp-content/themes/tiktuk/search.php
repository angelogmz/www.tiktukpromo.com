<?php get_header(); ?>
<div class="container">
    <div class="container-inner-wrap">
        <div class="col-12 col-sm-12 col-lg-8">
			<main role="main">
				<!-- section -->
				<section>

					<h1><?php single_cat_title(); ?></h1>

					<?php get_template_part('loop'); ?>


				</section>
				<!-- /section -->
			</main>
		</div>
	</div>
</div>

<?php get_footer(); ?>
