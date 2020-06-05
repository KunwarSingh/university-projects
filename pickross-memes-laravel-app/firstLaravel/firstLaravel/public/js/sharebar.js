   
function like(contentId){
    console.log(contentId);
   // var userId=document.getElementById('user').innerHTML;
    var likeValue=document.getElementById('likeValue'+contentId);
    console.log(likeValue.value);
    if(likeValue.value==="-1" || likeValue.value===""){
    
    if((document.getElementById('commentsPane'))||(document.getElementById('isCommentSection'))){
      var value=document.getElementById('likeValue').innerHTML.split(" ");
     value[0]=parseInt(value[0])+1;
    document.getElementById('likeValue').innerHTML=value[0]+" "+value[1];
    console.log(value[0]+" "+value[1]);
    if(document.getElementById('likebttn_text_'+contentId)){
    document.getElementById('likebttn_text_'+contentId).innerHTML="UnLike";
                        console.log(document.getElementById('likebttn_text_'+contentId).innerHTML);}
     if(document.getElementById('likebttn_img_'+contentId)){
    document.getElementById('likebttn_img2_'+contentId).style.color="#19887e";}
    
    if(document.getElementById('likebttn_img_'+contentId)){
    document.getElementById('likebttn_img_'+contentId).style.color="#19887e";}
        }else{
            document.getElementById('likebttn_img_'+contentId).style.color="#19887e";
        }
     likeValue.value=1;
    }
else{
    
      if((document.getElementById('commentsPane'))||(document.getElementById('isCommentSection'))){
   // value=document.getElementById('likeValue').innerHTML;
     var value=document.getElementById('likeValue').innerHTML.split(" ");
     value[0]=parseInt(value[0])-1;
    document.getElementById('likeValue').innerHTML=value[0]+" "+value[1];
     console.log(value[0]+" "+value[1]);
    if(document.getElementById('likebttn_text_'+contentId)){
    document.getElementById('likebttn_text_'+contentId).innerHTML="Like";}
 if(document.getElementById('likebttn_img_'+contentId)){
    document.getElementById('likebttn_img2_'+contentId).style.color="#999999";}
    if(document.getElementById('likebttn_img_'+contentId)){
    document.getElementById('likebttn_img_'+contentId).style.color="#999999";}
}
else{
    document.getElementById('likebttn_img_'+contentId).style.color="#999999";
}
   likeValue.value=-1;
}

 $.ajax({
          type: "GET",
          async: true,
          url: "/like",
          headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
          data: "contentId="+contentId+"&likeValue="+parseInt(likeValue.value),
           beforeSend: function() {
            $("#loader_message").html("").hide();
            $('#loader_image').show();
          },
          success: function(html) {
            $("#results").append(html);
            
           console.log(html);


          }
       //
        });
    
         
    
    
    
}


   
function report(contentId){
    console.log(contentId);
   // var userId=document.getElementById('user').innerHTML;
    var reportValue=document.getElementById('reportValue'+contentId);
    console.log(reportValue.value);
    if(reportValue.value==="-1" || reportValue.value===""){
    
    if((document.getElementById('commentsPane'))||(document.getElementById('isCommentSection'))){
    if(document.getElementById('reportbttn_text_'+contentId)){    
    document.getElementById('reportbttn_text_'+contentId).innerHTML="UnFlag";}
if(document.getElementById('reportbttn_img2_'+contentId)){
    document.getElementById('reportbttn_img2_'+contentId).style.color="#19887e";}
    if(document.getElementById('reportbttn_img_'+contentId)){
    document.getElementById('reportbttn_img_'+contentId).style.color="#19887e";}
        }else{
            document.getElementById('reportbttn_img_'+contentId).style.color="#19887e";
        }
     reportValue.value=1;
    }
else{
    
     if((document.getElementById('commentsPane'))||(document.getElementById('isCommentSection'))){
         if(document.getElementById('reportbttn_text_'+contentId)){ 
    document.getElementById('reportbttn_text_'+contentId).innerHTML="Report";}
if(document.getElementById('reportbttn_img2_'+contentId)){
    document.getElementById('reportbttn_img2_'+contentId).style.color="#999999";}
     if(document.getElementById('reportbttn_img_'+contentId)){
    document.getElementById('reportbttn_img_'+contentId).style.color="#999999";}
}
else{
    document.getElementById('reportbttn_img_'+contentId).style.color="#999999";
}
   reportValue.value=-1;
}

 $.ajax({
          type: "GET",
          async: true,
          url: "/report",
          headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
          data: "contentId="+contentId+"&reportValue="+parseInt(reportValue.value),
           beforeSend: function() {
            $("#loader_message").html("").hide();
            $('#loader_image').show();
          },
          success: function(html) {
            $("#results").append(html);
            
           console.log(html);


          }
       //
        });
    
         
    
    
    
}


   
function comment(contentId){
   // var userId=document.getElementById('user').innerHTML;
   

 $.ajax({
          type: "GET",
          async: true,
          url: "/comment",
          headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
          data: "contentId="+contentId,
           beforeSend: function() {
           
          },
          success: function(html) {
                console.log(html);
                $("#commentSection").show();
                 $(".dim").show();
                 $(".dim").css("z-index","130");
            $("#commentSection").html(html);
                $('html, body').css({
    'overflow': 'hidden',
    'height': '100%'
});
            
          // console.log(html);

 viewCount(contentId,5);  
          }
       //
        });
    
         
    
    
    
}

function sendComment(contentId){
     
    var text=document.getElementById('commentText').value;
     var value=document.getElementById('commentValue').innerHTML.split(" ");
     value[0]=parseInt(value[0])+1;
    document.getElementById('commentValue').innerHTML=value[0]+" "+value[1];

 $.ajax({
          type: "GET",
          async: true,
          url: "/sendcomment",
          headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
          data: "contentId="+contentId+"&text="+text,
           beforeSend: function() {
           
          },
          success: function(html) {
              $("#newcomment").append(html);
                console.log(html);
                
          }
          });
    
      
    
    
    
}



function closeComment(){
     $(".dim").hide();
     $("#commentSection").hide();
                 $('html, body').css({
    'overflow': 'auto',
    'height': 'auto'
});
    
    
}

function viewCount(contentId,score){
   
   

 $.ajax({
          type: "GET",
          async: true,
          url: "/viewCount",
          headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
          data: "contentId="+contentId+"&score="+score,
           beforeSend: function() {
           
          },
          success: function(html) {
             
          }
       //
        });
    
         
    
    
    
}



