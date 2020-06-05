     
     
     
      var busy = false;
      var limit = 15;
      var offset = 0;
    //  e.preventDefault();
      

      function displayRecords(lim, off , tagname) {
        //  $.get('/page', onSuccess);
         
          console.log(tagname);
         $.ajax({
          type: "POST",
          async: true,
          url: "/page",
          headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
          data: "limit=" + lim + "&offset=" + off + "&tagname=" + tagname,
       //  data:  {'_token': $('input[name=_token]').val()},
       //data : "_token=" + tok,
          beforeSend: function() {
            $("#loader_message").html("").hide();
            $('#loader_image').show();
         
          },
          success: function(html) {
            $("#results").append(html);
              console.log("ex");
              console.log("html="+html);

            $('#loader_image').hide();
            if (html === "") {
              $("#loader_message").html('<button class="btn btn-default" type="button">No more records.</button>').show();
            } else {
              $("#loader_message").html('<button class="btn btn-default" type="button">Loading please wait...</button>').show();
            }
            window.busy = false;


          }
        }); 
          
      }
      
 
 $(function() {
      $(document).ready(function() {
        // start to load the first set of data
   /*     if (busy === false) {
          busy = true;
          // start to load the first set of data
          displayRecords(limit, offset);
        } */

        
        $(window).scroll(function() {
          // make sure u give the container id of the data to be loaded in.
          if ($(window).scrollTop() + $(window).height() > $("#results").height() && !busy) {
            busy = true;
            offset = limit + offset;

            // this is optional just to delay the loading of data
            setTimeout(function() { displayRecords(limit, offset , document.getElementById('tagname').value); }, 500);

            
            // displayRecords(limit, offset);

          }
        });

      });
      });