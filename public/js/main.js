/* Переносим пункты меню, которые не вмещаются в одну строку */
function toggleMenu(menu){
    if(menu.is(":visible")){
        var toggleButton = menu.find(".toggleButton"),
            toggleMenu = toggleButton.find(".toggleMenu"),
            listWidth = toggleButton.outerWidth(true),
            freeWidth = 0,
            containerWidth = $("header .wrapper").width(),
            logoWidth = $(".logo").outerWidth(true),
            socialWidth = $(".social").outerWidth(true);
        
        toggleMenu.empty();
        freeWidth = containerWidth - logoWidth - socialWidth - toggleButton.outerWidth(true);
      
        menu.children("li.item").each(function(){
            $(this).removeClass("hide");
            listWidth += $(this).outerWidth(true);
            $(this).addClass("hide");

            if (listWidth >= freeWidth){
                $(this).clone().appendTo(toggleMenu);
                $(this).addClass("hide");
                toggleButton.addClass("show");
            }
            else{
                $(this).removeClass("hide");
                toggleButton.removeClass("show");
            }
        });
    }
}

/*Определение браузера клиента*/
navigator.sayswho = (function(){
    var ua= navigator.userAgent, tem, 
        M = ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
    
    if(/trident/i.test(M[1])){
        tem=  /\brv[ :]+(\d+)/g.exec(ua) || [];
        return 'IE '+(tem[1] || '');
    }
    if(M[1]=== 'Chrome'){
        tem= ua.match(/\b(OPR|Edge)\/(\d+)/);
        if(tem!= null) return tem.slice(1).join(' ').replace('OPR', 'Opera');
    }
    M= M[2]? [M[1], M[2]]: [navigator.appName, navigator.appVersion, '-?'];
    if((tem= ua.match(/version\/(\d+)/i))!= null) M.splice(1, 1, tem[1]);
        return M.join(' ');
})();

/* Прижимаем футер к низу, для тех кто не поддерживает flex */
function fixFlex() {
    var s = document.body || document.documentElement, s = s.style,
        wrapper = $("#container > .content");
        
        // Прекращаем выполнение, если браузер поддерживает flex
        if((s.webkitFlexWrap == '' || s.msFlexWrap == '' || s.flexWrap == '') && (navigator.sayswho != "MSIE 10" && navigator.sayswho != "IE 11")){
            return true;
        }

        // Обнуляем отступ
        wrapper.css("paddingBottom", 0);
        
        var footerH = $("footer").outerHeight(),
            topH = $("header").outerHeight(),
            widH = $(window).height(),
            sum = footerH + topH + wrapper.outerHeight(),
            padding = widH - sum;

        if (widH > sum)
            wrapper.css("paddingBottom",padding);
                else
                    wrapper.css("paddingBottom", 0);
}



$(document).ready(function(e) {
    /* Показ/скрытие toogleMenu */
    $(".toggleButton").click(function() {
        $(this).toggleClass("active");
    });

    /* Попап toggle-меню*/
    $("header nav ul > li.toggleButton, header nav ul > li.toggleButton ul.menu li > a, .fullMenuButton, ul.fullMenu").click(function(e){
        e.stopPropagation();
    });

    // Скрытие toggle-меню по клику за его контентом
    $("html, body").off("click").on('click', function(){
        $(".toggleButton.active, .fullMenuButton.active").removeClass("active");
    });

    /* Открыть/скрыть выпадающее меню */
    $(".fullMenuButton").on("click", function(){
        $(this).toggleClass("active");
    });

    /* Открыть/скрыть форму комментариев */
    $(".buttonComment button").on("click", function(){
        $(this).parents().find(".formComment").toggleClass("active");
    });


    /*Подключаем для каждого IE свой файл стилей*/
    var isIE = false || !!document.documentMode;

    if (isIE) {
        var head  = document.getElementsByTagName("head")[0],
            link  = document.createElement("link");
        link.rel  = "stylesheet";

        if(navigator.sayswho == "MSIE 9")
            link.href = "css/ie9.css";

        head.appendChild(link);
    }

    fixFlex();
});

$(window).on('load', function(){
    toggleMenu($("header ul.fullMenu"));
    fixFlex();
});

$(window).resize(function(e) {
    toggleMenu($("header ul.fullMenu"));
    fixFlex();
});