<?php
/*
Template Name: catalog
Template Post Type: page
*/
?>	<?php
/**
 */

get_header(); ?>        
			<?//var_dump($_REQUEST)?>					
			<div class="container hidden-xs">			
				<div class="bx-breadcrumb">
					<div class="bx-breadcrumb-item" id="bx_breadcrumb_0" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" itemref="bx_breadcrumb_1">
						
						<a href="/" title="Главная" itemprop="url">
							<span itemprop="title">Главная</span>
						</a>
					</div>
					<div class="bx-breadcrumb-item" id="bx_breadcrumb_1" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" itemprop="child">
						<i class="fa fa-angle-right"></i>
						<a href="/productions/" title="Продукция" itemprop="url">
							<span itemprop="title">Каталог</span>
						</a>
					</div>
					<div class="bx-breadcrumb-item">
						<i class="fa fa-angle-right"></i>
						<span>Специальные проекты</span>
					</div><div style="clear:both"></div>
				</div>				
			</div>	
					<div class="page_productions">
<div class="container">
			<h1 class="page_title_birds">ПРОДУКЦИЯ</h1>
	<div class="row">
		<div class="col col-sm-4 col-md-3">
			<div class="left_sitebar">
					<?php
					global $post;
					$args = array( 'posts_per_page' => 15, 'category' => 9 );
					$myposts = get_posts( $args );
					foreach( $myposts as $post ){ setup_postdata($post);
						?>
						<?
						$thumb_id = get_post_thumbnail_id();
						$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
						?>
						<div class="sitebar_item">
							<a href="/catalog/?ID=<?=get_the_ID()?>/" class="sitebar_section_item_link">
								<div class="sitebar_section_item ">
									<span><?php the_title(); ?></span>				
								</div>
							</a>						
						</div>
						<?php
					}
					wp_reset_postdata();
					?>	
			</div>
			<div class="block_help">
				<h3>
					Нужна помощь?					
				</h3>
				<p class="wrapper_text_birds">
					Наши сотрудники всегда ответят на все ваши вопросы				</p>
				<a href="" class="btn_view_goods_productions">Задать вопрос </a> 
			</div>
		</div>
		<div class="col col-sm-8 col-md-9">
					<?if(!$_REQUEST["ID"]){?>
					<?php
					global $post;
					$args = array( 'posts_per_page' => 15, 'category' => 9 );
					$myposts = get_posts( $args );
					foreach( $myposts as $post ){ setup_postdata($post);
						?>
						<?
						$thumb_id = get_post_thumbnail_id();
						$thumb_url = wp_get_attachment_image_src($thumb_id,array(42,42), true);
						?>
					<div class="goods_item">
						<div class="goods_img">
							<img src="<?php echo $thumb_url[0] ?>" alt="car">
						</div>
						<div class="goods_productions">
							<h5 class="goods_name"><?php the_title(); ?></h5>
							<p class="wrapper_text_birds">
								<?
								$content = get_the_content();
								if(strlen($content)< 500 ) echo $content;
									else echo substr($content, 0, 500)."...";
								?>					
							</p>
							<a href="/catalog/?ID=<?=get_the_ID()?>/" class="btn_view_goods_productions" >Подробнее  <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
						</div>				
					</div>
						<?php
					}
					wp_reset_postdata();
					?>	
					<?}else{?>
						<?$post_goods = get_post( $_REQUEST["ID"], ARRAY_A);?>
						<?//var_dump($post_goods)?>	
						<div class="block_pictures_goods">
							<h1><?=$post_goods['post_title']?></h1>
							<br/>
								<?php 
								$mykey_values = get_post_custom($post_goods["ID"]);
								$image_attributes = wp_get_attachment_image_src($mykey_values['image'][0], 'full');
								$image_attributes2 = wp_get_attachment_image_src($mykey_values['image2'][0], 'full');
								$image_attributes3 = wp_get_attachment_image_src($mykey_values['image3'][0], 'full');
								$image_attributes4 = wp_get_attachment_image_src($mykey_values['image4'][0], 'full');
								?>
							<div class="block_pictures_goods_up_part">
								<div class="row">
									<div class="col col-sm-8">
										<a href="<?=$image_attributes[0]?>" data-lightbox="example-set" data-title="AUDI ">
											<img src="<?=$image_attributes[0]?>" class="img-responsive">
										</a>
									</div>
									<div class="col col-sm-2">
										<a href="<?=$image_attributes2[0]?>" data-lightbox="example-set" data-title="Специальные проекты ">
											<img src="<?=$image_attributes2[0]?>" class="img-responsive picture_goods_padding">
										</a>
										<a href="<?=$image_attributes3[0]?>" data-lightbox="example-set" data-title="Специальные проекты ">						
											<img src="<?=$image_attributes3[0]?>" class="img-responsive">
										</a>
										<br/>
										<a href="<?=$image_attributes4[0]?>" data-lightbox="example-set" data-title="Специальные проекты ">						
											<img src="<?=$image_attributes4[0]?>" class="img-responsive">
										</a>
									</div>
								</div>
							</div>
							<div class="block_pictures_goods_down_part">
								<div class="row">
									<div class="col-sm-12">
										<div class="row">
											<div class="col col-xs-4 col-sm-3 col-lg-2 type_sells">
												<p>Цена:</p>						
											</div>
											<div class="col col-xs-8 col-sm-4 col-lg-6 price_sells">
												<p>Уточняйте при связи</p>			
											</div>
											<?/*
											<div class="col col-xs-12 col-sm-5 col-lg-4">
												<a class="btn_order_goods">Заказать <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
											</div>
											*/?>
										</div>
									</div>
									<div class="col-sm-12">
									</div>
								</div>
							</div>
						</div>
						<div class="detail_text_goods">
							<h5 class=""><?=$post_goods['post_title']?></h5>
							<div class="wrapper_text_birds text">
							<?=$post_goods["post_content"]?>
							</div>
							<div class="row high_quality">
								<div class="col col-sm-12 col-md-6 wrapper_text_birds">
									<h5 class="without_padding">Характеристики</h5>
									<br/>
									<?php echo get_post_meta($post_goods["ID"], 'characteristics', true); ?>

								</div>
								<div class="col col-sm-12 col-md-6">
									<iframe width="100%" height="300" src="<?php echo get_post_meta($post_goods["ID"], 'ytube', true); ?>" frameborder="0" allowfullscreen></iframe>
								</div>
							</div>
						</div> 
					<?}?>
		</div>                    	
		</div>
	</div>
</div>
</div>
		</div>
	</div>
<?php get_footer(); ?>