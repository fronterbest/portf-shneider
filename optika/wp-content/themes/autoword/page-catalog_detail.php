<?php
/*
Template Name: catalog_detail
Template Post Type: page
*/
?>	<?php
/**
 */

get_header(); ?>        
									
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
							<a href="/catalog/ID=<?=get_the_ID()?>/" class="sitebar_section_item_link">
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
							<a href="/catalog/ID=<?=get_the_ID()?>/" class="btn_view_goods_productions" >Подробнее  <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
						</div>				
					</div>
						<?php
					}
					wp_reset_postdata();
					?>	
		</div>                    	
		</div>
	</div>
</div>
</div>
		</div>
	</div>
<?php get_footer(); ?>