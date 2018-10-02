<?php get_header(); ?>

	<div class="eyecatch">
		<div>
			<h1>
				<?php the_title(); ?>
			</h1>
			<p>
				<span class="date">
					<?php the_time('Y.m.d'); ?>		
				</span>
				<?php
				$cat = get_the_category();
				$catname = $cat[0]->cat_name;
				$catslug = $cat[0]->slug;
				?>
				<span class="cat <?php echo $catslug; ?>">
					<?php echo $catname; ?>
				</span>
			</p>
		</div>
	</div>
	<main id="point" role="main" class="container">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="para">
				<?  
				//画像(返り値は「画像ID」)
				$img = get_field('post_img');
				$imgurl = wp_get_attachment_image_src($img, 'full');
				if($imgurl){ ?><a href="<? echo $imgurl[0]; ?>" target="_blank"><div class="imgDiv"><img src="<? echo $imgurl[0]; ?>" alt=""></div></a>
				<? } ?>
				<div>
					<?  
					//Wysiwyg エディタ
					$editor = get_field('post_content'); 
					if($editor){ ?><p><? echo $editor; ?></p>
					<? } ?>
				</div>
			</div>
			<div class="para">
				<?  
				//画像(返り値は「画像ID」)
				$img = get_field('post_img02');
				$imgurl = wp_get_attachment_image_src($img, 'full');
				if($imgurl){ ?><a href="<? echo $imgurl[0]; ?>" target="_blank"><div class="imgDiv"><img src="<? echo $imgurl[0]; ?>" alt=""></div></a>
				<? } ?>
				<div>
					<?  
					//Wysiwyg エディタ
					$editor = get_field('post_content02'); 
					if($editor){ ?><p><? echo $editor; ?></p>
					<? } ?>
				</div>
			</div>
			<div class="para">
				<?  
				//画像(返り値は「画像ID」)
				$img = get_field('post_img03');
				$imgurl = wp_get_attachment_image_src($img, 'full');
				if($imgurl){ ?><a href="<? echo $imgurl[0]; ?>" target="_blank"><div class="imgDiv"><img src="<? echo $imgurl[0]; ?>" alt=""></div></a>
				<? } ?>
				<div>
					<?  
					//Wysiwyg エディタ
					$editor = get_field('post_content03'); 
					if($editor){ ?><p><? echo $editor; ?></p>
					<? } ?>
				</div>
			</div>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'すみません。記事が見当たりません。', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
