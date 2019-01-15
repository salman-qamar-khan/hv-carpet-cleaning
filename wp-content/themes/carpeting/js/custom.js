jQuery(document).ready(function($){

var windowHeight = jQuery(window).height();
console.log(windowHeight);
jQuery(window).scroll(function(){
  if(jQuery(this).scrollTop() > windowHeight){
    jQuery('.navbar-default').css({'background':'#ffffff'});
  } else{
    jQuery('.navbar-default').css({'background':'rgba(255,255,255,0.6)'});
  }
}); 
// var offset_t = jQuery('.services').offset();
// jQuery(window).scroll(function(){
//     if(jQuery(this).scrollTop()==offset_t) {
//       jQuery('.services').css({'padding-top':'130px'});
//     }
//     else
//     {
    
//     }
// });


});