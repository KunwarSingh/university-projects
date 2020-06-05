@extends('master')
@section('sideContent') 
    <!-- No Sidebar -->


@section('mainContent') 	
<div class="container-fluid ">
	<div class="row">
	    <!-- Blog Entries Column -->
              
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contentClass" >
		
<div class="row">
    @yield('bodyContent')
    
</div>

        </div>
          
             

</div>
</div>
 <script type="text/javascript" src="{{ asset('/js/sharebar.js') }}"></script>
 <script type="text/javascript" src="{{ asset('/js/userProfilePagination.js') }}"></script>
 <script>   // script to view title and share on hover
 $(function() {
$(document).ready(function(){
$(".avatar").hover(function(){
    $(".uploadAvatar").fadeIn();
    }, function(){
        
        if ($('.uploadAvatar').is(':hover')) {
           
    }else{$(".uploadAvatar").fadeOut(3000);}
});
});


});

function uploadImg(){
    var av=document.getElementById('avatarUpload');
     if (av.files[0].size>2097152)
             { alert("Select image with size less than 2MB"); return; }  
             if (!(/\.(gif|jpg|jpeg|png)$/i).test(av.value))
             { alert("Select image of type gif,jpg,jpeg,png"); return; }
    
var data = new FormData();
jQuery.each(jQuery('#avatarUpload')[0].files, function(i, file) {
    data.append('file-'+i, file);
});

jQuery.ajax({
    url: '/myprofile/upload',
    data: data,
    cache: false,
    contentType: false,
    processData: false,
    headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
    type: 'POST',
    success: function(data){
       location.reload(true);	
        console.log(data);
    }
}); 
}

</script>
 @stop    
    
    
   