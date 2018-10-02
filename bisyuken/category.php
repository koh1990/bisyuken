<?php get_header(); ?>

	<div class="eyecatch">
		<h1><?php _e( '', 'html5blank' ); single_cat_title(); ?></h1>
	</div>
	<main role="main" class="container">
		<!-- section -->
		<section>
			<ul>
				<?php get_template_part('loop'); ?>
			</ul>
			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
