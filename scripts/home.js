$(document).ready(function(){
  var slides=$('.slideShow>li');
  var slideCount=0;
  var totalSlides=slides.length;
  var slideCache=[];
  (function preloader(){
      if(slideCount<totalSlides){
          //load images
          slideCache[slideCount]=new Image();
          slideCache[slideCount].src=slides.eq(slideCount). find('img'). attr('src');
          slideCache[slideCount]. onload=function (){
              slideCount++;
                preloader();
          }
      }else{
          //run the slide show
          slideCount=0;
          SlideShow();
          
      }
  }());
    function SlideShow(){
        slides.eq(slideCount).fadeIn(3000).delay(5000).fadeOut(3000,function (){
            slideCount<totalSlides-1 ? slideCount++:slideCount=0;
            SlideShow();
        });
        
    }
});