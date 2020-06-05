var most_wanted=0;
var category=0;
var latest_popular=0;
var advsearch=1;
$(function() {

$(document).ready(function() {
    
 $("#advsearchbar").click(function(){
  if(advsearch===1){
      
  $("#advsearchform").slideDown("slow");
  
  advsearch=0;}
  else{
  $("#advsearchform").slideUp("slow");
  advsearch=1;}
  
});
});
$(document).ready(function() {
    
 $("#cat1").click(function(){
 if(category===0){
  
  $("#cat2").slideUp("slow");
  category=1;
  }
   else{
 
  $("#cat2").slideDown("slow");
  category=0;
  }
  
});
   
});


$(document).ready(function() {
    
 $("#mwc").click(function(){
 if(most_wanted===0){
  $("#pop1").animate({
      
      height:'50px'
    });
  $("#mwc1").slideUp("slow");
  most_wanted=1;
  }
   else{
  $("#pop1").animate({
      
      height:'280px'
    });
  $("#mwc1").slideDown("slow");
  most_wanted=0;
  }
  
});
   
});

$(document).ready(function() {
    
 $("#lp").click(function(){
 if(latest_popular===0){
  $("#pop2").animate({
      
      height:'50px'
    });
  $("#lp1").slideUp("slow");
  latest_popular=1;
  }
   else{
  $("#pop2").animate({
      
      height:'280px'
    });
  $("#lp1").slideDown("slow");
  latest_popular=0;
  }
  
});
   
});

$(document).ready(function() {
    
 $("#advbtn").click(function(){

  $("#pop1").animate({
      
      height:'50px'
    });
  $("#mwc1").slideUp("slow");
  most_wanted=1;
  $("#pop2").animate({
      
      height:'50px'
    });
  $("#lp1").slideUp("slow");
  latest_popular=1;
  $("#sa").animate({
      top:'235px',
      height:'1250px'
    });
  
  
   
  
});
   
});

/*$("button").click(function(){
    $("div").animate({
      left:'250px',
      opacity:'0.5',
      height:'150px',
      width:'150px'
    });
  });*/


});