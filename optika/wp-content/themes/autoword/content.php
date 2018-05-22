<?php
/*
Theme Name: Autoword
Description: Used to style the TinyMCE editor.
*/
?>
			<div id="comp_04584bccfcc7e6d79aa14a42d5d12757">
					<div class="owl-carousel" id="main_banner_carusel">
					<?php
					global $post;
					$args = array( 'posts_per_page' => 5, 'category' => 2 );
					$myposts = get_posts( $args );
					foreach( $myposts as $post ){ setup_postdata($post);
						?>
						<?
						$thumb_id = get_post_thumbnail_id();
						$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
						?>
						<div class="item">
							<div class="header_part3" style="background:url('<?php echo $thumb_url[0] ?>') center center">
								<div class="container">
									<div class="header_part3_inside ">
									<? $img = wp_get_attachment_image_src($post->ID,'thumbnail-size', true);?>
										<h1><?php the_title(); ?> </h1>
										<!--p>Автомобили различной ценовой политики</p-->
									</div>
									<a class="btn_hover" href="<?=get_the_content();?>">Побробнее а нас &#160;&#160;<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						<?php
					}
					wp_reset_postdata();
					?>	

					</div>
			</div>
			<div class="block_advantages">
				<div class="container">
						<div class="row">
				<?php
					global $post;
					$args = array( 'posts_per_page' => 5,'category' => 3 );
					$myposts = get_posts( $args );
					foreach( $myposts as $post ){ setup_postdata($post);
						?>
						<?
						$thumb_id = get_post_thumbnail_id();
						$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
						?>
							<div class="col col-xs-12 col-sm-4 block_advantages_item" >
								<div class="block_advantages_item_up">
									<img src="<?php echo $thumb_url[0] ?>" class = "img-responsive">
								</div>
								<div class="block_advantages_item_down">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/advanteges_icon2.png">
									<h5><?php the_title(); ?></h5>
									<p>
										<?=get_the_content();?></p>
													<a class="btn_hover" href="/about/">Узнать больше&#160;&#160;<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
											</div>
							</div>	
						<?php
					}
					wp_reset_postdata();
					?>	
						</div>	
				</div>
			</div>
<?/*
<div class="block_blue">
<?$post_blue_block = get_post( 19, ARRAY_A);?>
<?=$post_blue_block["post_content"];?>
</div>
*/?>
</div>
<div class="block_atradol">
	<div class="container">
		<table>
			<tr>
				<td>
					<h2>
						<?$post_for_banner = get_post( 25, ARRAY_A);?>
						<?=$post_for_banner["post_content"];?>						
					</h2>
				</td>
			</tr>
		</table>	
	</div>
</div>
<div class="block_gallery">
	<div class="container">
				<?php
					global $post;
					$args = array( 'posts_per_page' => 5,'category' => 5 );
					$myposts = get_posts( $args );
					foreach( $myposts as $post ){ setup_postdata($post);
						?>
						<?
						$thumb_id = get_post_thumbnail_id();
						$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
						?>
									<div class="block_gallery_item" >
										<div class="block_gallery_item_inside ">
											<a href="<?php echo $thumb_url[0] ?>" data-lightbox="example-set" data-title="Галерея ">
												<img src="<?php echo $thumb_url[0] ?>">
											</a>
										</div>
									</div>
						<?php
					}
					wp_reset_postdata();
					?>
	</div>
</div>
<div class="block_algoritm">
	<h5 class="wrapper_h5">Алгоритм работы с нами</h5>
	<div class="row">
				<?php
					global $post;
					$args = array( 'posts_per_page' => 5,'category' => 6 );
					$myposts = get_posts( $args );
					foreach( $myposts as $post ){ setup_postdata($post);
						?>
						<?
						$thumb_id = get_post_thumbnail_id();
						$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
						?>
							<div class="col col-sm-3">
								<span>
									<img src="<?php echo $thumb_url[0] ?>">
								</span>
								<p><?php the_title(); ?></p>
							</div>
						<?php
					}
					wp_reset_postdata();
					?>	
	</div>
</div>
<div class="block_now_order parallax-block hidden-xs" data-stellar-background-ratio="0.2">
	<div class="parallax_inside">
		<table>
			<tr>
				<td>
					<h2>
						<?$post_for_banner = get_post( 27, ARRAY_A);?>
						<?=$post_for_banner["post_content"];?>	
					<br>
					<span>8 800 000 00 00</span>
					</h2>				
				</td>
			</tr>
		</table>
	</div>
</div>
<?/*
<div class="block_news">
	<div class="container">
		<div class="row">
			<div class="col col-xs-12 col-sm-8 block_news_left">
				<h5>Новости</h5>	
				<div id="comp_cb5ae92226f34e10df6a8e2edded3432">
				<div class="row">
					<div class="col col-xs-12 col-sm-6 news_item"  id="bx_565502798_22">
						<img src="images/site.png" class = "img-responsive">
						<p class="label_date">28 Февраля 2017 </p>
						<p class="name_news">
							Создание сайта, отвечающего современным тенденциям...
							<a href="/news/novost-dnya/">...&#160;&#160;<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
						</p>			
					</div>		
					<div class="col col-xs-12 col-sm-6 news_item"  id="bx_565502798_22">
						<img src="images/site.png" class = "img-responsive">
						<p class="label_date">28 Февраля 2017 </p>
						<p class="name_news">
							Создание сайта, отвечающего современным тенденциям...
							<a href="/news/novost-dnya/">...&#160;&#160;<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
						</p>			
					</div>	
					<div class="col col-xs-12 col-sm-6 news_item"  id="bx_565502798_22">
						<img src="images/site.png" class = "img-responsive">
						<p class="label_date">28 Февраля 2017 </p>
						<p class="name_news">
							Создание сайта, отвечающего современным тенденциям...
							<a href="/news/novost-dnya/">...&#160;&#160;<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
						</p>			
					</div>	
					<div class="col col-xs-12 col-sm-6 news_item"  id="bx_565502798_22">
						<img src="images/site.png" class = "img-responsive">
						<p class="label_date">28 Февраля 2017 </p>
						<p class="name_news">
							Создание сайта, отвечающего современным тенденциям...
							<a href="/news/novost-dnya/">...&#160;&#160;<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
						</p>			
					</div>		
				</div>
			</div>					
			</div>
			<div class="col col-xs-12 col-sm-4 block_news_right">
				<h5>Статьи</h5>
					
				<div id="comp_b2735df535e21064e3492c2e8555666a">			
				<p id="bx_1454625752_10">
					На ''Нижегородском кольце'' завершился третий этап Чемпионата и Кубка России по автомобильным кольцевым гонкам серии СМП РСКГ. Соревнования посетил Президент ПАО ''АВТОВАЗ'' Николя Мор.

					Суббота принесла команде LADA Sport ROSNEFT сразу три кубка: ''серебро'' в первой гонке класса ''Туринг'' завоевал Владимир Шешенин; Михаил Митяев взял ''бронзу'' в классе ''Супер-продакшн''; Егор Санин также поднялся на третью ступеньку подиума, но уже в самом массовом классе СМП РСКГ ''Национальный''.

					В воскресенье самыми успешными стали пилоты LADA Sport ROSNEFT, выступающие в классе ''Супер-продакшн''. В результате упорной борьбы Михаил Митяев и Владислав Незванкин заняли 2 и 3 место соответственно. По сумме очков команда LADA Sport ROSNEFT также стала серебряным призером нижегородского этапа.

				</p>	
				<a class="btn_hover" href="/articles/androdol/razrabotka-novykh-preparatov/">Читать дальше&#160;&#160;<i class="fa fa-chevron-right" aria-hidden="true"></i></a>	
			</div>				
			</div>
		</div>
	</div>
</div>
*/?>
<div class="block_reviews">
	<div class="container">
		<h5 class="wrapper_h5">Отзывы</h5>
          <div class="owl-carousel" id="reviews_carusel">
		  				<?php
					global $post;
					$args = array( 'posts_per_page' => 5,'category' => 7 );
					$myposts = get_posts( $args );
					foreach( $myposts as $post ){ setup_postdata($post);
						?>
						<?
						$thumb_id = get_post_thumbnail_id();
						$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
						?>
						<div class="item">
							<img src="<?php echo $thumb_url[0] ?>">
							<div class="reviews_carusel_item_contant">
								<h2><?php the_title(); ?></h2>
								
								<p>
								<?=get_the_content();?>
							</p>
							</div>
						</div>
						<?php
					}
					wp_reset_postdata();
					?>
          </div>		
	</div>
</div>
<div id="block_partners">
	<div class="container">
	<h5 class="wrapper_h5">
		Наши партнеры
	</h5>
		<div class="owl-carousel" id="partners">
					<?php
					global $post;
					$args = array( 'posts_per_page' => 5,'category' => 8 );
					$myposts = get_posts( $args );
					foreach( $myposts as $post ){ setup_postdata($post);
						?>
						<?
						$thumb_id = get_post_thumbnail_id();
						$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
						?>
							<div class="item">
								<a href="<?=get_the_content();?>">
									<img src="<?php echo $thumb_url[0] ?>" class="img-responsive">
									<p ><?php the_title(); ?></p>
								</a>
							</div>
						<?php
					}
					wp_reset_postdata();
					?>			
		</div>
	</div>
</div>
<div class="block_incorfarm">
	<div class="container">
	<?$post_for_banner = get_post( 66, ARRAY_A);?>
		<?//var_dump($post_for_banner)?>	
		<h5 class="wrapper_h5">
			<?=$post_for_banner["post_title"];?>
		</h5>
		<div class="row">
			<div class="col col-xs-12 col-sm-8 block_incorfarm_left">
				<p class="wrapper_text">
				<?=$post_for_banner["post_content"];?>					
				</p>
			</div>
			<div class="col col-xs-12 col-sm-4 block_incorfarm_right">
				<img alt="hands.png" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hands.jpg" class="img-responsive">					
			</div>
		</div>
	</div>
