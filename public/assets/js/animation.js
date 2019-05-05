window.onload = function() {


        let maVitessedeVoiture = 1000;


        $('#voiture').animate({left:'+=950'},maVitessedeVoiture);
        
};




/* $(document).ready (function() {
    
    setInterval(callMe);
});
    
    function callMe(){
    let maVitessePub = 2500;

    document.getElementById('image').src = "assets/images/pub" + Math.round(Math.random()*4+1) + ".gif";

    $('.pub').animate({left:'-=0'},maVitessePub);
    $('.pub').animate({left:'-=420'},maVitessePub);
    $('.pub').animate({left:'+=420'},maVitessePub);


 
};

 */


 $('.slide>div').hide();
 temp = $('.slide:eq('+Math.floor(Math.random()*$('.slide.length')-1)+')')
 .fadeIn(2000);
 setInterval(function(){
     temp.fadeOut(2000);
     temp = $('.slide:eq('+Math.floor(Math.random()*$('.slide.length')-1)+')')
     .fadeIn(2000);
 },5000);
