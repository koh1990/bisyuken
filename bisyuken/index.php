<?php get_header(); ?>
	<div class="mv"></div>

	<main id="point" role="main">
		<section id="news">
			<div class="container">
				<h2>新着情報<br><span>Information</span></h2>

				<input id="panel-1-ctrl" class="panel-radios" type="radio" name="tab-radios" checked>
				<input id="panel-2-ctrl" class="panel-radios" type="radio" name="tab-radios">
				<input id="panel-3-ctrl" class="panel-radios" type="radio" name="tab-radios">
				<input id="panel-4-ctrl" class="panel-radios" type="radio" name="tab-radios">

				<ul id="tabs-list">
				    <li id="li-for-panel-1">
				      <label class="panel-label" for="panel-1-ctrl">新着</label>
				    </li>
				    <li id="li-for-panel-2">
				      <label class="panel-label" for="panel-2-ctrl">イベント</label>
				    </li>
				    <li id="li-for-panel-3">
				      <label class="panel-label" for="panel-3-ctrl">新商品</label>
				    </li>
				    <li id="li-for-panel-4">
				      <label class="panel-label" for="panel-4-ctrl">その他</label>
				    </li>
				</ul>

				<article id="panels">
					<div class="p_container">
						<div id="panel-1">
							<div>
								  <?php
								   $newslist = get_posts( array(
								  'posts_per_page' => 8
								  ));
								   if( $newslist ):
									?>
								<ul>
								<?php
								    foreach( $newslist as $post ):
								    setup_postdata( $post );
								?>
									<li>
										<?php
										$cat = get_the_category();
										$catname = $cat[0]->cat_name;
										$catslug = $cat[0]->slug;
										?>

										<article>
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
									</li>
								<?php
								  endforeach;
								  wp_reset_postdata();
								?>
								</ul>
								<?php else: ?>
								<p class="nopost">まだ記事がありません。</p>
								<?php endif; ?>
								<a href="<?php echo home_url(); ?>/news/" class="btn">
									<p>
										一覧へ
									</p>
								</a>
							</div>
						</div>
						<div id="panel-2">
							<div>
								  <?php
								   $newslist = get_posts( array(
								  'category_name' => 'event',
								  'posts_per_page' => 8
								  ));
								   if( $newslist ):
									?>
								<ul>
								<?php
								    foreach( $newslist as $post ):
								    setup_postdata( $post );
								?>
									<li>
										<?php
										$cat = get_the_category();
										$catname = $cat[0]->cat_name;
										$catslug = $cat[0]->slug;
										?>

										<article>
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
									</li>
								<?php
								  endforeach;
								  wp_reset_postdata();
								?>
								</ul>
								<?php else: ?>
								<p class="nopost">まだ記事がありません。</p>
								<?php endif; ?>
								<a href="<?php echo home_url(); ?>/news/category/event" class="btn">
									<p>
										一覧へ
									</p>
								</a>
							</div>
						</div>
						<div id="panel-3">
							<div>
								  <?php
								   $newslist = get_posts( array(
								  'category_name' => 'product',
								  'posts_per_page' => 8
								  ));
								   if( $newslist ):
									?>
								<ul>
								<?php
								    foreach( $newslist as $post ):
								    setup_postdata( $post );
								?>
									<li>
										<?php
										$cat = get_the_category();
										$catname = $cat[0]->cat_name;
										$catslug = $cat[0]->slug;
										?>

										<article>
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
									</li>
								<?php
								  endforeach;
								  wp_reset_postdata();
								?>
								</ul>
								<?php else: ?>
								<p class="nopost">まだ記事がありません。</p>
								<?php endif; ?>
								<a href="<?php echo home_url(); ?>/news/category/product" class="btn">
									<p>
										一覧へ
									</p>
								</a>
							</div>
						</div>
						<div id="panel-4">
							<div>
								  <?php
								   $newslist = get_posts( array(
								  'category_name' => 'other',
								  'posts_per_page' => 8
								  ));
								   if( $newslist ):
									?>
								<ul>
								<?php
								    foreach( $newslist as $post ):
								    setup_postdata( $post );
								?>
									<li>
										<?php
										$cat = get_the_category();
										$catname = $cat[0]->cat_name;
										$catslug = $cat[0]->slug;
										?>

										<article>
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
									</li>
								<?php
								  endforeach;
								  wp_reset_postdata();
								?>
								</ul>
								<?php else: ?>
								<p class="nopost">まだ記事がありません。</p>
								<?php endif; ?>
								<a href="<?php echo home_url(); ?>/news/category/other" class="btn">
									<p>
										一覧へ
									</p>
								</a>
							</div>
						</div>
					</div>
				</article>
			</div>
		</section>
		<section id="intro">
			<div class="container">
				<h2>県産酒紹介<br><span>Yamagata Breweries</span></h2>
				<div class="stage">
					<h3><span>SAKE</span>酒蔵</h3>
					<div>
						<?php
						   $newslist = get_posts( array(
						  'post_type' => 'introduce',
						  'taxonomy' =>'sake_tax',
						  'term' =>'sake',
						  'posts_per_page' => 60
						  ));
						   if( $newslist ):
						?>
						<ul>
						<?php
						    foreach( $newslist as $post ):
						    setup_postdata( $post );
						?>
						<?php
						  endforeach;
						  wp_reset_postdata();
						?>
						</ul>
						<?php else: ?>
						<p>あてはまる情報はまだありません。</p>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
		<section id="sns">
			<div class="container">
				<div>
					<div class="fb-page" data-href="https://www.facebook.com/bisyukenyamagata/" data-tabs="timeline" data-width="450" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/bisyukenyamagata/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/bisyukenyamagata/">日本一美酒県山形ファンクラブ</a></blockquote></div>
				</div>
				<div>
					<a class="twitter-timeline" data-width="450" data-height="500" href="https://twitter.com/bisyuken_ymgt?ref_src=twsrc%5Etfw">Tweets by bisyuken_ymgt</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
			</div>
		</section>
	</main>

<?php get_footer(); ?>
