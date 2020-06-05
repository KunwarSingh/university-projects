var userpanel=1;
$(function() {
$(document).ready(function() {
    
 $("#u1").click(function(){
  if(userpanel===1){
       $("#cat").hide();
        $("#u").animate({
      
      height:'500px'
    });
  $("#u2").slideDown("slow");
  
  userpanel=0;}
  else{
        $("#u").animate({
      
      height:'50px'
    });
  $("#u2").slideUp("slow");
   $("#cat").show();
  userpanel=1;}
  
});
});
});