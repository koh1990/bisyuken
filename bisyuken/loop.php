<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<li>
		<?php
		$cat = get_the_category();
		$catname = $cat[0]->cat_name;
		$catslug = $cat[0]->slug;
		?>
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->
			<p>
				<span class="time"><?php the_time('Y.m.d'); ?></span>
				<span class="cat <?php echo $catslug; ?>"><?php echo $catname; ?></span>
			</p>
			<a href="<?php the_permalink(); ?>">
				<?php
				if(mb_strlen($post->post_title, 'UTF-8')>35){
					$title= mb_substr($post->post_title, 0, 35, 'UTF-8');
					echo $title.'…';
				}else{
					echo $post->post_title;
				}
				?>
			</a>

		</article>
		<!-- /article -->
	</li>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'すみません。記事が見当たりません。', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
