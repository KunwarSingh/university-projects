function searchContent(searchBar,type){
 var id =searchBar.id;
 console.log("id="+id);
var value=document.getElementById(id).value;
console.log("value="+document.getElementById(id).value); // Value unable to fetch
//console.log(search.value);


    $.ajax({
    type: "POST",
    url: "/liveSearch",
    headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
    data: "search="+value+"&type="+type,
    cache: false,
    success: function(data)
    {
        console.log(data);
        //$("#searchResult").show();
    $("#searchContentResult").html(data);
    $("#searchContentResult").show(); 
    }
    });
    
    }

function searchEmpty(){
     $("#searchContentResult").fadeOut(1000);
 // document.getElementById('searchContentResult').innerHTML=" ";

    
    }