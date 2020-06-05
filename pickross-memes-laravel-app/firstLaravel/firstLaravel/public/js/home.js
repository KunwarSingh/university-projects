



var loginpanel=1;
var register=1;
var slider=0; 
var memecreate=1;

   
   $(function() {
       
       
       

		

		    
                        $(window).scroll(function() {
		    	 $(".bottom-bar").hide();
    			clearTimeout( $.data( this, "scrollCheck" ) );
    			$.data( this, "scrollCheck", setTimeout(function() {
    				if($( window ).width()<768){ 
                            $(".bottom-bar").show();}
    			}, 250) );

    		});
                
	
       
       
       
       $(window).scroll(
    {
        previousTop: 0
    }, 
    function () {
    var currentTop = $(window).scrollTop();
    if (currentTop < this.previousTop) {
       
        $(".navbar").show();
    } else {
       if($( window ).width()<768){ 
        $(".navbar").hide();}
    }
    this.previousTop = currentTop;
});
       
      

 
      
      
        $(document).ready(function() {
    
 $("#searchBtn").click(function(){
     $(".navbar").hide();
     $(".bottom-bar").hide();
     $('html, body').css({
    'overflow': 'hidden',
    'height': '100%'
});
  $("#searchBar").show();
  $("#searchBar").css({"position": "fixed", "top": "-5px"});
     $(".dim").show();
//  $("#box").show();
 
  
 
  
});
});
        $(document).ready(function() {
    
 $(".dim").click(function(){
     $(".createButton").css({"border": "1px outset #ffffff"});
     $(".navbar").show();
     $(".bottom-bar").show();
    $('html, body').css({
    'overflow': 'auto',
    'height': 'auto'
});
  $("#searchBar").hide();
 
     $(".dim").hide();

 
  
 
  
});
});

        $(document).ready(function() {
    
 $("#backSearch").click(function(){
     $(".navbar").show();
     $(".bottom-bar").show();
    $('html, body').css({
    'overflow': 'auto',
    'height': 'auto'
});
  $("#searchBar").hide();
 
     $(".dim").hide();

 
  
 
  
});
});




       
    
  
  
 
  
       
  $(document).ready(function() {
    
 $("#login").click(function(){
  if(loginpanel===1 && register===1){
    $("#box").slideDown("slow"); 
     $('html, body').css({
    'overflow': 'hidden',
    'height': '100%'
});
 
  loginpanel=0;}
  else{
  $("#box").slideUp("slow"); 
  $("#registerBox").slideUp("slow");
  register=1;
  loginpanel=1;
     $('html, body').css({
    'overflow': 'auto',
    'height': 'auto'
});
     }
  
});
});

  $(document).ready(function() {
    
 $("#mlogin").click(function(){
  if(loginpanel===1 && register===1){
    $("#box").slideDown("slow"); 
  $('html, body').css({
    'overflow': 'hidden',
    'height': '100%'
});
 
  loginpanel=0;}
  else{
  $("#box").slideUp("slow"); 
  $("#registerBox").slideUp("slow");
  register=1;
  loginpanel=1;
   $('html, body').css({
    'overflow': 'auto',
    'height': 'auto'
});
     }
  
});
});

 $(document).ready(function() {
    
 $("#login2").click(function(){
  if(loginpanel===1){
    $("#box").slideDown("slow"); 
//  $("#box").show();
$("#registerBox").slideUp("slow"); 
  //$("#fade").hide();
  register=1;
 
  loginpanel=0;}
 
  
});
});

 $(document).ready(function() {
$("#register").click(function(){
   
     if(register===1){
          $("#box").slideUp("slow"); 
          loginpanel=1;
     /*     $("#registerBox").animate({
        bottom: '500px',
       // opacity: '0.5',
       // height: '150px',
       // width: '150px'
    }); */
    $("#registerBox").slideDown("slow"); 
//  $("#box").show();
 
  register=0;}
 
}); 
});

 $(document).ready(function() {
$("#slideIn").click(function(){
    $width=($( window ).width())/2;
    $("#slider").css("width", $width);
    if(slider===0){
    $(".info").hide();
    $(".input-group").hide();
    $(".well").show();
    $(".contentSide a").hide();
    $(".dim").show();
    $("#slider").show();
      $("#In").animate({
        right: $width
        
    });
     $("#slider").animate({
        right: '0px'
        
    });
    slider=1;
    }
    else{
         $(".info").hide();
    $(".input-group").hide();
    $(".well").hide();
    $(".dim").hide();
    $("#slider").hide();
      $("#In").animate({
        right: '0px'
        
    });
     
    slider=0;
        
        
    }
}); 
}); 

$(document).ready(function() {
$("#refresh").click(function(){
location.reload(true);
});});
});