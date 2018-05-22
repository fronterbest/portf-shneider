<?php 
/*
Template Name: about
Template Post Type: page
*/
?><?php
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
						<a href="/about/" title="Продукция" itemprop="url">
							<span itemprop="title">О компании</span>
						</a>
					</div>
				</div>				
			</div>	
					<div class="page_productions">
				<div class="container">
						<h1 class="page_title_birds">О компании</h1>
						<p class="wrapper_text">
						<?$post_for_banner = get_post( 66, ARRAY_A);?>	
						<?=$post_for_banner["post_content"];?>	
						</p>
				</div>

			</div>
			
			</div>
</div>	
<?php get_footer(); ?>