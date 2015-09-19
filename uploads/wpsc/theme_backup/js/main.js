function browser()
{
    var ua = navigator.userAgent;
    
    if (ua.search(/MSIE/) > 0) return 'IE';
    if (ua.search(/Firefox/) > 0) return 'Firefox';
    if (ua.search(/Opera/) > 0) return 'Opera';
    if (ua.search(/Chrome/) > 0) return 'Google Chrome';
    if (ua.search(/Safari/) > 0) return 'Safari';
    if (ua.search(/Konqueror/) > 0) return 'Konqueror';
    if (ua.search(/Iceweasel/) > 0) return 'Debian Iceweasel';
    if (ua.search(/SeaMonkey/) > 0) return 'SeaMonkey';
    
    // Браузеров очень много, все вписывать смысле нет, Gecko почти везде встречается
    if (ua.search(/Gecko/) > 0) return 'Gecko';

    // а может это вообще поисковый робот
    return 'Search Bot';
}
$(document).ready(function(){
    
    //меняем класс активной картинки
    $("#content_container .pic").click(function(){
        $(this).toggleClass("active");
        return false;  
    });
    //выделяем текущее элемнт меню
    var index = $("#menu_container li:last").attr('id');
    if(index!=0){
        $("#menu_container ul.menu li:eq("+index+") a").attr("class","selected");
    }
    
    if(browser()=='Firefox'){
        $(".menu #button").css({
            "padding":"5px 8px"
        });
        $("body, body.custom-font-enabled").css({
            "font-family": 'GabriolaSec'
        });
    }
    //функция скроллинга
    function scroll_to_top(coef) {
        
        var coef = coef/1000;
        var documentHeight = $(document).height();        
        speed =  documentHeight/coef;
            
        $('body,html').animate({
            scrollTop: 0
        }, speed);
    }
    $("#article_container #footer #up").click(function(){
        scroll_to_top(2300);
    });
});

