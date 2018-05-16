<!DOCTYPE html>
<html lang="ru">
<head>
<title>Главная</title>
	<link rel="shortcut icon" href="/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="x-rim-auto-match" content="none"> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" type="text/css"  rel="stylesheet" />
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/lightbox.css" type="text/css"  rel="stylesheet" />
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.carousel.min.css" type="text/css"  rel="stylesheet" />
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.theme.default.min.css" type="text/css"  rel="stylesheet" />
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.theme.green.min.css" type="text/css"  rel="stylesheet" />
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap-theme.min.css" type="text/css"  rel="stylesheet" />
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css" type="text/css"  rel="stylesheet" />
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" type="text/css"  rel="stylesheet" />
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-3.1.1.min.js"></script>	
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>		
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.maskedinput.js"></script>		
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/script.js"></script>	
	<!--script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/lightbox.js"></script-->
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/owl.carousel.min.js"></script>
	<?php wp_head(); ?>
</head>
<body>
	<div id="wrap">
		<div id="main" class="clearfix">
			<div id="panel"></div>	
			<div class="menu_xs visible-xs">
				<div class="menu_head">
					<div class="row">
						<div class="col col-xs-3">
							<a class="brand_href" href="/">
								<img src = "<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo_header.png" class = "" alt = "logo" >
							</a>
						</div>
						<div class="col col-xs-6 menu_slogan">
						</div>
						<div class="col col-xs-3">
							<div class="menu_btn">меню</div>
						</div>						
					</div>
				</div>
				<div class="menu_body">
					<ul>
			<li><a href="/" >Главная</a></li>
		
			<li><a href="/catalog/">Каталог</a></li>
		
			<li><a href="/about/">О компании</a></li>
		
			<li><a href="/contacts/">Контакты</a></li>

			</ul>		
				</div>
			</div>
			<header>
				<div class="header_part1">
					<div class="container">
						<div class="row">
							<div class="col col-xs-12 col-sm-4 col-lg-5 header_part1_email">
								<div id="comp_f89908df0aa4ad23660be3f67f050df4">		<a href="tel:avtomir@gmail.com">
									<i class="fa fa-envelope" aria-hidden="true"></i>&#160;&#160;avtomir@gmail.com		</a>
								</div>							
							</div>
							<div class="col col-xs-12 col-sm-2   col-lg-2 hidden-xs header_part1_search">
							<div  >
									<form action="/search/index.php">

										<input type="text" class = "header_but_search"  id = 'q' name="q" value="" size="13" maxlength="50"  placeholder="Поиск..." />			
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/arrow_search.png">
									</form>
							</div> 								
							</div>
							<div class="col col-xs-12  col-sm-3 col-lg-2 header_part1_phone">
								<div id="comp_d7fac72b041b2ebf8c6de2aeacb4fe0f">	
						<?$post = get_post( 105, ARRAY_A);?>
						<?//get_post_meta($post["ID"],"phone", true)?>									
								<a href="tel:<?=get_post_meta($post["ID"],"phone", true)?>">
									<i class="fa fa-phone" aria-hidden="true"></i>&#160;<?=get_post_meta($post["ID"],"phone", true)?>	</a>
								</div>							
							</div>
							<div class="col col-xs-12 col-sm-3 col-md-3 col-lg-3  header_part1_callback_bll">								
								<div class="header_part1_callback btn_hover" data-target="#myModalRequest" data-toggle="modal">
									Обратный звонок
									</div>
							</div>	
						</div>
					</div>
				</div>
				<div class="header_part2">
					<div class="container">
						<div class="row">
							<div class="col col-xs-12 col-sm-3 col-md-3 col-lg-3 header_part2_logo">
								<table>
									<tr>
										<td>
											<a href="/">
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo_header.png" class="img img-responsive" alt="logo">
											</a>
										</td>
									</tr>
								</table>								
							</div>
							<div class="col col-xs-12 col-sm-9 col-md-9 col-lg-9 hidden-xs header_part2_menu">
								<ul>
										<li><a href="/" class="selected">Главная</a></li>
									
										<li><a href="/catalog/">Каталог</a></li>
									
										<li><a href="/about/">О компании</a></li>
									
										<li><a href="/contacts/">Контакты</a></li>
									

							</ul>
							
							</div>
						</div>
					</div>
				</div>
			</header>   