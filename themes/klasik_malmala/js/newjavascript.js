/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(document).ready(function($){
    

//    $(".sf-menu li a").bind("mouseover", function(){
//       $(this).toggleClass("over");
//    });
//    $(".sf-menu li a").bind("mouseleave", function(){
//        $(this).toggleClass("over");
//    });
    var nav = $('#nav-wrap');
    
    var position;
    
    
      $(window).scroll(function () {
            position = $('#navigation').offset().top - $(window).scrollTop();
            
        if ($(this).scrollTop() > position+$(this).scrollTop()) {
            nav.addClass("f-nav");
        } else {
            nav.removeClass("f-nav");
        }
    });
});
