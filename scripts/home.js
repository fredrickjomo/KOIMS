$(document).ready(function(){
   $('.toggle-nav').click(function(e){
       
      $(this).toggleClass('active');
              $('.menu ul').toggleClass('active');
                      e.preventDefault();
   });
    
});3