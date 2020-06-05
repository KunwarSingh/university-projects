function showHint() {
 

         $.ajax({
          type: "GET",
          async: true,
          url: "/navbarTags",
          data: "action=getNavbarTags",
          headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
       
          beforeSend: function() {
          
          },
          success: function(html1) {
              //console.log(html);
            $("#data").html(html1);
          


          }
        });
        
    
    
}

function update(currentSelectTag){
    var value=currentSelectTag.value;  //new to be updated
    var id=currentSelectTag.id;
    
        $.ajax({
          type: "GET",
          async: true,
          url: "/updateTag",
          data: "value="+value+"&id="+id,
          headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
       //  data:  {'_token': $('input[name=_token]').val()},
       //data : "_token=" + tok,
          beforeSend: function() {
          
          },
          success: function(html) {
              console.log(html);
           // $("#data2").make(html);
          
           fillNavbar();
           showHint();
          }
        });

}

function updateMore(currentSelectTag){
    var value=currentSelectTag.value;  //new to be updated
    var id=currentSelectTag.id;
    
        $.ajax({
          type: "GET",
          async: true,
          url: "/updateMoreTag",
          data: "value="+value+"&id="+id,
          headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
       //  data:  {'_token': $('input[name=_token]').val()},
       //data : "_token=" + tok,
          beforeSend: function() {
          
          },
          success: function(html) {
              console.log(html);
           // $("#data2").make(html);
          
           fillNavbar();
           showHint();
          }
        });
}

function deleteSection(currentSection){
    
    var id=currentSection.id;
    
      $.ajax({
          type: "GET",
          async: true,
          url: "/deleteTag",
          data: "id="+id,
          headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
       //  data:  {'_token': $('input[name=_token]').val()},
       //data : "_token=" + tok,
          beforeSend: function() {
          
          },
          success: function(html1) {
             console.log(html1);
            $("#data2").html(html1);
          fillNavbar();
          showHint();


          }
        });
    
   
    
}

function addNew(currentSection){
    
    var id=currentSection.id;
    var id2=document.getElementsByClassName("sec"+id);
    console.log(id2);
        document.getElementById(id).style.display = "block";
        id2[0].style.display = "block";
        id2[1].style.display = "block";
}

function removeNew(currentSection){
    
    var id=currentSection.id;
        var r=id.split("e");
        var id2=document.getElementsByClassName("sec"+r[2]);
        document.getElementById(r[2]).style.display = "none";
        id2[0].style.display = "none";
        id2[1].style.display = "none";
  
}

function addMoreNew(currentSection){
    
    var id=currentSection.id;
    var id2=document.getElementsByClassName("secMore"+id);
    console.log(id2);
        document.getElementById(id).style.display = "block";
        id2[0].style.display = "block";
        id2[1].style.display = "block";
}

function removeMoreNew(currentSection){
    
    var id=currentSection.id;
        var r=id.split("e");
        var id2=document.getElementsByClassName("secMore"+r[2]);
        document.getElementById(r[2]).style.display = "none";
        id2[0].style.display = "none";
        id2[1].style.display = "none";
  
}


function addSection(currentSection){
    var value=currentSection.value;
    var id=currentSection.id;
    var prev =id-1;
   
    
  
      $.ajax({
          type: "GET",
          async: true,
          url: "/addTag",
          data: "id="+id+"&value="+value,
          headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
       //  data:  {'_token': $('input[name=_token]').val()},
       //data : "_token=" + tok,
          beforeSend: function() {
          
          },
          success: function(html1) {
              //console.log(html);
            $("#data2").html(html1);
          fillNavbar();
          showHint();


          }
        }); 
     
}
function deleteMoreSection(currentSection){
    
    var id=currentSection.id;
    
   
    $.ajax({
          type: "GET",
          async: true,
          url: "/deleteMoreTag",
          data: "id="+id,
          headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
       //  data:  {'_token': $('input[name=_token]').val()},
       //data : "_token=" + tok,
          beforeSend: function() {
          
          },
          success: function(html1) {
             console.log(html1);
            $("#data2").html(html1);
          fillNavbar();
          showHint();


          }
        });
}
function addMoreSection(currentSection){
    var value=currentSection.value;
    var id=currentSection.id;
    
    
       
     $.ajax({
          type: "GET",
          async: true,
          url: "/addMoreTag",
          data: "id="+id+"&value="+value,
          headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
       //  data:  {'_token': $('input[name=_token]').val()},
       //data : "_token=" + tok,
          beforeSend: function() {
          
          },
          success: function(html1) {
              //console.log(html);
            $("#data2").html(html1);
          fillNavbar();
          showHint();


          }
        });
     
}

