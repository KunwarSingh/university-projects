    $(function() {
  $(document).ready(function() 
 {

 
           $.ajax({
          type: "GET",
          async: true,
          url: "/fillNavbar",
          headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
       //  data:  {'_token': $('input[name=_token]').val()},
       //data : "_token=" + tok,
          beforeSend: function() {
            $("#loader_message").html("").hide();
            $('#loader_image').show();
          },
          success: function(html1) {
             // console.log(html1);
            $("#section").html(html1);
          


          }
        });
        
    
});
});




