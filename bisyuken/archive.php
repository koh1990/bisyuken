<?php get_header(); ?>

	<div class="eyecatch">
		<h1><?php _e( '新着情報一覧', 'html5blank' ); ?></h1>
	</div>
	<main id="point" role="main" class="container">
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
