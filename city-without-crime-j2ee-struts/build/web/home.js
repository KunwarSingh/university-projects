var loginpanel=1;
var register=1;
   
  $(document).ready(function() {
    
 $("#login").click(function(){
  if(loginpanel===1){
      
  $("#light").show();
  $("#fade").show();
  loginpanel=0;}
  else{
  $("#light").hide();
  $("#fade").hide();
  loginpanel=1;}
  
});


$("#register").click(function(){
  if(register===1){
      
  $("#light1").show();
  $("#fade1").show();
  register=0;}

  
});
$("#close").click(function(){
  if(register===0){
 
  $("#light1").hide();
  $("#fade1").hide();
  register=1;}
  
});
});