	</div>
	</div>
	<div id="footer">
		<footer class="">
			<div class="container">
				<div class="row">
					<div class="col col-xs-12 col-sm-6 col-md-4 footer_logo">
						<img src="images/logo_footer.png" class = "img-responsive" alt = "logo">
						<h6>«optika 2017»</h6>
						<p class = "wrapper_text">
							Выполнение государственной программы стратегического развития							
						</p>
						<div id="comp_8d823d152862df85df3b195ed656740c">		<a href="https://yandex.ru/maps/191/bryansk/" class="footer_review_maps"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;Посмотреть на <span>Я</span>ндекс карте</a></div>							
					</div>
					<?/*<div class="col col-xs-12 col-sm-6 col-md-2 network_footer">
						<h5>Мы  в соцсетях</h5>
						<div id="comp_7ef1b00fc96acde2f0d21eee34bde1c5">		
						<ul>
							<li><a href = "https://yandex.ru" target = "_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i>Youtube</a></li>
										<li><a href = "https://vk.com" target = "_blank"><i class="fa fa-vk" aria-hidden="true"></i>VK</a></li>
													<li><a href = "https://yandex.ru" target = "_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i>LinkedLn</a></li>
										<li><a href = "https://facebook.com" target = "_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i>Facebook</a></li>
										<li><a href = "https://twitter.com/" target = "_blank"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</a></li>
				
		</ul>
		</div>						
		</div>*/?>
		<div class="col col-xs-12 col-sm-6 col-md-2 about_footer">
			<h5>О компании</h5>
			<ul>
				<ul>
				<li><a href="/"><i class="fa fa-caret-right" aria-hidden="true"></i>Главная</a></li>
				<li><a href="/catalog/"><i class="fa fa-caret-right" aria-hidden="true"></i>Каталог</a></li>
					<li><a href="/products-page/"><i class="fa fa-caret-right" aria-hidden="true"></i>Контакты</a></li>
					<li><a href="/about/"><i class="fa fa-caret-right" aria-hidden="true"></i>О компании</a></li>
				</ul>
			</ul>			
		</div>
		<div class="col col-xs-12 col-sm-6 col-md-4 write_us">
			<h5>напишите нам</h5>
				<p>
					Если Вы пользовались нашими услугами поделитесь опытом. 								
				</p>
				<p class="sign_up_to_our_newsletter">Подпишитесь на наши новости!</p>
				<input class="footer_input_email" type="text" placeholder="Ваш e-mail">
			</div>
		</div>
		</div>
		</footer>
	</div>
	<!-- Patterns Modal -->
	<div id="myModalBox" class="modal fade">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <!-- Заголовок модального окна -->
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h4 class="modal-title name_patterns"></h4>
		  </div>	  
		  <!-- Основное содержимое модального окна -->
		  <div class="modal-body">
                <img src = "" class = "img-responsive">
                <p class = "manual_patterns wrapper_text"></p>	
		  </div>
		  <!-- Футер модального окна -->
		  <div class="modal-footer">
		  </div>
		</div>
	  </div>
	</div>
	<!-- Request Call Modal -->
	<div id="myModalRequest" class="modal fade modal_window">
	  <div class="modal-dialog">
	  <div class="ajax_loader_block"></div>
		<div class = "result_modal">
			Спасибо, мы Вам обязательно перезвоним!
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>	  
		<div class="modal-content">
		  <!-- Заголовок модального окна -->
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h4 class="modal-title">МЫ ВАМ ПЕРЕЗВОНИМ</h4>
		  </div>
		  
		  <!-- Основное содержимое модального окна -->
		  <div class="modal-body">
			<input type='text' id='modal_name' class="name" placeholder='Заполните  имя'/><br/>
			<input type='text' id='modal_phone' class="phone" placeholder='Заполните телефон'/><br/>
			<input type='button'  value='Заказать' class="order_modal_window" id = 'order' />
		  </div>
		  <!-- Футер модального окна -->
		  <div class="modal-footer">
		  </div>
		</div>
	  </div>
	</div>	

	<script>
		lightbox.option({
			'wrapAround': true,
			'albumLabel': "",
		})
	</script>	
</body>
</html>