/*/////////////////////////MENU-XS/////////////////////////////////////////////*/
$(document).ready(function(){
	
	$('.menu_btn').click(function(){
		if($(this).hasClass('open')){			
			$('.menu_xs').stop().animate({'height':'56px'},150);
			$(this).removeClass('open');
		}else{
			$('.menu_xs').stop().animate({'height':(70+$('.menu_body').height()+30)},150);
			$(this).addClass('open'); 
		}
	});
	$(document).on('click','.menu_body a',function(){
			$('.menu_xs').stop().animate({'height':'56px'},150);
			$(this).removeClass('open');	
	});
	
///////////////////////////CAROUSEL_MAIN_BANNER///////////////////////////////////////

/*=================================PATTERNS-DETAIL==================================================*/
    $(document).on("click", ".btn_patterns", function () {
        var array_src_attr;
        array_src_attr = JSON.parse($(this).attr("attr"));
        $("#myModalBox .name_patterns").text(array_src_attr.NAME);
        $("#myModalBox .manual_patterns").text(array_src_attr.PREVIEW_TEXT);
        $("#myModalBox img").attr('src', array_src_attr.IMG);
        $("#myModalBox").modal('show');
    });
/*=================================MODAL-WINDOW==================================================*/	
    $(".phone").mask("+7 (999) 999-99-99");
    $(document).on('click', '.order_modal_window', function () {
        var name = $(this).parents(".modal_window").find(".name");
        var phone = $(this).parents(".modal_window").find(".phone");
		text_error_name = "Р—Р°РїРѕР»РЅРёС‚Рµ РёРјСЏ ";
		text_error_phone = "Р—Р°РїРѕР»РЅРёС‚Рµ С‚РµР»РµС„РѕРЅ ";

        if (name.val() == '') {
            name.val(text_error_name);
            name.css('border-color', 'red');
            name.css('color', 'red');
            setTimeout(function () {
                name.val("");
                name.css('border-color', '#643d50');
                name.css('color', 'black');
            }, 1000);
        }else if (phone.val() == '') {
            phone.val(text_error_phone);
            phone.css('border-color', 'red');
            phone.css('color', 'red');
            setTimeout(function () {
                phone.val("");
                phone.css('border-color', '#643d50');
                phone.css('color', 'black');
				}, 1000);
		} else {
            $('.ajax_loader_block').fadeIn("300", function () {
                $.post("/inc/handler_form.php", {name: name.val(), phone: phone.val()}, function (data) {
                    console.log(data);
                    if (data.substr(-2, 2) == "OK") {
                        $('.ajax_loader_block').fadeOut("300");
                        $(this).val("РћС‚РїСЂР°РІР»РµРЅРѕ");
                        $(".result_modal").css('display', 'block');
                        $(".result_modal").animate({height: "100%", }, "200");

                    } else {
                    }
                });
            });
        }
    });
	$(document).on('click',"#myModalRequest .result_modal i",function(){
		$("#myModalRequest").modal('hide');
		setTimeout(function(){
			$("#modal_name").val("");
			$("#modal_phone").val("");
			$(".result_modal").css('height','1px');	
			$(".result_modal").fadeOut("100");
		},300);
	})	
/*/////////////////////////FORM-ANOTHER-PAGE/////////////////////////////////////////////*/
	function validateEmail(email) {
		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	}

    $(document).on('click', '#msgSubmit', function () {
        var name = $(this).parents(".form_another_page").find("#name");
        var email = $(this).parents(".form_another_page").find("#email");
        var message = $(this).parents(".form_another_page").find("#msg");
		text_error_name = "Р—Р°РїРѕР»РЅРёС‚Рµ РёРјСЏ ";
		text_error_email = "РџРѕС‡С‚Р° РЅРµ РєРѕСЂСЂРµРєС‚РЅР°";
		
		console.log(name.val(),email.val());
        if (name.val() == '') {
            name.val(text_error_name);
            name.css('border-color', 'red');
            name.css('color', 'red');
            setTimeout(function () {
                name.val("");
                name.css('border-color', '#fff');
                name.css('color', '#fff');
            }, 1000);
        }else if (email.val() == '' || !validateEmail(email.val())) {
            email.val(text_error_email);
            email.css('border-color', 'red');
            email.css('color', 'red');
            setTimeout(function () {
                email.val("");
                email.css('border-color', '#fff');
                email.css('color', '#fff');
				}, 1000);
		} else {
           //$('.ajax_loader_block').fadeIn("300", function () {
                $.post("/inc/handler_form.php", {name: name.val(), email: email.val(),message: message.val(),src_msg: "form_another_page"}, function (data) {
                    console.log(data);
                    if (data.substr(-2, 2) == "OK") {
                        //$('.ajax_loader_block').fadeOut("300");
                        $(".form_another_page").css("display","none");
                        $(".result_form").fadeIn("300");
                    } else {
                    }
                });
			//});
		}
    });
	/*///////////////////////////////////////////////////////////////*/
      var owl1 = $('#reviews_carusel');
      owl1.owlCarousel({
        loop: true,
		nav:true,
		navText: [' <img src="images/feedback_arrow_left.png">', ' <img src="images/feedback_arrow_right.png">'],
		items: 2,
        responsive: {
          0: {
            items: 1
          },
          768: {
            items: 2
          },
          1000: {
            items: 2
          }
        }	
      })
      var owl2 = $('#main_banner_carusel');
      owl2.owlCarousel({
		autoplay:true,
		autoplaySpeed: 1000,
		fluidSpeed:1000,
		smartSpeed:1000,
        loop: true,
		items: 1,
		dots: true,
		nav:true,
		navText: ['<div class="banner_nav banner_prev hidden-xs"></div>', '<div class="banner_nav banner_next hidden-xs"></div>'],		
      })		  
      var owl3 = $('#partners');
      owl3.owlCarousel({
		nav:true,
		navText: [' <img src="images/feedback_arrow_left.png">', ' <img src="images/feedback_arrow_right.png">'],		  
		autoplay:true,
        loop: true,
		items: 3,
		dots: true,
      })	  
	/*///////////////////////////////////////////////////////////////*/
	
});

/*/////////////////////////////////////PARALLAX_EFFECT//////////////////////////////*/
/*
	$('.block_now_order').stellar({
		horizontalScrolling: false,
		parallaxBackgrounds: true,
		responsive: true,
		horizontalOffset: -30,
		verticalOffset: -30,
		scrollProperty: 'transform',
  		positionProperty: 'transform'
	});
	*/ 