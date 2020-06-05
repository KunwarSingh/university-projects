<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="View funny pics, photos. Vote on interesting polls.  Browse trending memes. Create your own memes, polls and share with friends. Checkout PickCross now!">
    <meta name="keywords" content="funny images,Funny photos,Comedy jokes,jokes,indian funny pictures,indian meme,sorry shaktiman">
    <meta name="author" property="article:publisher" content="Pickcross">
    <meta name="_token" content="{{ csrf_token() }}"/>
      
    <link rel="shortcut icon" href="{{ asset('/images/favicon.ico') }}"/>
    <title>Pickcross - See funny pics, vote on interesting polls</title>
   
    <script type="text/javascript" src="{{ asset('/js/jquery-2.1.4.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('/js/adminPanel/fillNavbar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/home.js') }}"></script>   
    <script type="text/javascript" src="{{ asset('/js/formValidation/formValidation.min.js') }}"></script>  
    <script type="text/javascript" src="{{ asset('/js/formValidation/bootstrap.min.js') }}"></script>   
    <script type="text/javascript" src="{{ asset('/js/formValidation/loginRegValidation.js') }}"></script>      
    <script type="text/javascript" src="{{ asset('/js/livesearch.js') }}"></script>   
  
   
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">	
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/formValidation/formValidation.min.css') }}" rel="stylesheet">
                                        
 <!-- Place this tag in your head or just before your close body tag. -->
 <script src="https://apis.google.com/js/platform.js" async defer></script>  
        <script>  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));  </script>
       <script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
 
  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };
 
  return t;
}(document, "script", "twitter-wjs"));</script> 
        
       
        
        <script>
            var scroll=1;
                         $(document).ready(function() {
  $('[data-toggle=offcanvas]').click(function() {
    $('#sidebar').fadeToggle();
    if(scroll===1){
        $("#dim").show();
       $('html, body').css({
    'overflow': 'hidden',
    'height': '100%'
     });
       scroll=0;   }
    else{
        $("#dim").hide();
          $('html, body').css({
    'overflow': 'auto',
    'height': 'auto'
}); scroll=1;
    }
  });
});
    
   </script>
    
    <?php  $encrypter = app('Illuminate\Encryption\Encrypter');
           $encrypted_token = $encrypter->encrypt(csrf_token());  ?>

</head>

<body  style="overflow-x: hidden;">
  
    <div class="dim"  id="dim" title="Event" ></div> 
    
    <div id="fb-root"></div>

    <!--   
    <div id="loader-wrapper">
			<div id="loader"></div>

			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

    </div>  -->
   
    <!-- For Mobile Sidebar -->
    @yield('sideContent')
   
     <!-- Sidebar End -->
    
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"  >
        <div class="container-fluid">
            <div class="row">
                  <!-- Brand and toggle get grouped for better mobile display -->
                <div class="col-xs-2 navdrop">
                  <button type="button" class="navbar-toggle " data-toggle="offcanvas" data-target=".sidebar-nav" >
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>    
                </div> 
                
          
            <div class="navbar-header col-lg-2 col-md-2 col-sm-2 col-xs-8" > 
                 <a class="navbar-brand" href="{{ url('/') }}">
                     <div style="text-align: center;"><img src="{{ asset('/images/pickcrossLogo.png') }}" alt="Pickcross" ></div>
                 </a>
            </div>
                  <div class="col-lg-3 col-xs-2 col-md-3 col-sm-4 loginDrop"  >
                
				<ul  id="Bar" style="list-style: none; color:#ffffff;">

                                   
					@if (Auth::guest())
                                        <li id="login" class="DesktopLogin" ><a href="#" style="color:#ffffff;"><span class="glyphicon glyphicon-user" style="color:#ffffff;"></span> Login</a></li>
					<li id="mlogin" class="MobileLogin"><a href="#" style="color:#ffffff;"><span class="glyphicon glyphicon-user" style="color:#ffffff; font-size:20px;"></span></a></li> 
					
					@else
                                       
						<li class="dropdown" style="float:right;">
							<img href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" src="{{ Auth::user()->avatar }}" style="height:30px; width:30px; border-radius:100%; "> </img>
							<ul class="dropdown-menu dropSettings" role="menu" >
							<li><a href="{{ url('/myprofile') }}"></span>My Profile</a></li>
                                                        <li><a href="{{ url('/memeGenerator') }}"></span>Create Meme</a></li>
							@if (Auth::user()->usertype == "1")
								<li><a href="{{ url('adminPanel/contentMaintenance')}}"></span>Admin Panel</a></li>
							@endif
								<li><a href="{{ url('/auth/logout') }}"></span>Logout</a></li>
							</ul>
						</li>
         <!-- Notifications -->                                       
             
                                                
                                                
                                         <li id="notifBtn" > <img src="{{ asset('/images/notif.png') }}" width="13"></img></li>       
					 
                                        <div id="notifPanel" style=" display:none;position:fixed;   overflow-y: auto; overflow-x: hidden; background-color: white;  border:1px solid #19887e; ">
     
     {{--*/ $a=0;  $b=0; /*--}}                                       
     @foreach($notif as $c)
     @if($c->n_likes>0 or $c->n_comments>0)
    <div class="notifViewRow" style='height:56px; width:100%; padding:3px; margin-bottom: 2px; color:black;'>
    <a style="position:absolute; width:100%; height:56px; z-index: 45;" href="{{url('content/'.$c->id)}}"></a>  
    <div class='col-lg-3 col-md-3 col-sm-3 col-xs-3' style='height:50px; overflow: hidden; padding-left:5px; padding-right: 5px;'>
     <a href="{{url('content/'.$c->id)}}" >
        <img src="{{url($c->meme->filelocation)}}" class="img-responsive" onclick="viewCount({{$c->id}},15)" style='height:70px;'></img> </a>
    </div>
    <div class='col-lg-9 col-md-9 col-sm-9 col-xs-9' style='height:50px;'>
        <div class="searchViewTitle" style='height:20px; overflow-x: hidden; overflow-y: hidden; font-size: 14px;font-weight: bold;'>  {{$c->title}}</div>
       @if($c->n_likes>0 and $c->n_comments>0)
        <div class="searchViewTags" style='height:20px; font-size: 14px;'>  (+) {{$c->n_likes}} Likes  & {{$c->n_comments}} Comments </div>
       @elseif($c->n_likes>0 and $c->n_comments==0) 
        <div class="searchViewTags" style='height:20px; font-size: 14px;'>  (+) {{$c->n_likes}} Likes </div> 
       @elseif($c->n_likes==0 and $c->n_comments>0)
        <div class="searchViewTags" style='height:20px; font-size: 14px;'>  (+) {{$c->n_comments}} Comments </div> 
       @endif
    </div>    
    </div>
     @else
     {{--*/ $b++; /*--}}
     @endif
     {{--*/ $a++; /*--}}
@endforeach
     @if( ($notif->isEmpty())  or ($a==$b))
               <div class="notifViewRow" style='height:56px; width:100%; padding:3px; margin-bottom: 2px; color:black;'>
      No New Notifications
     </div>
            @endif
            
         
                                         </div>
                                         
                                         @endif
                                         
					 <li id="memeCreate" class="createButton"> <a href="{{ url('/memeGenerator') }}">Create</a></li>
				</ul>
	  
            </div>
                  
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-lg-7 col-md-7 col-sm-6 col-xs-6 sidebar-offcanvas navmenu " id="sidebar" style="background-color: #19887e; " role="navigation">
                <ul class="nav navbar-nav navbar-left" id="section">
                   <!-- Fillnavbar via ajax -->
             
                    
                        
               </ul>	
            </div>
            
           
	   </div>
        </div>
</nav>
      
	@yield('secondHeader')
	
   
<div style=" float:right; z-index:5;"> @include('auth.login')</div>

@yield('mainContent')

     
    
    
     <div class="container-fluid bottom-bar" >
         <div class="row">
             <div class="col-xs-4 " style="text-align: center;">
                 <a  id="refresh"> <span class="glyphicon glyphicon-refresh"></span></a>
             </div>
             <div class="col-xs-4" style="text-align: center;">
                 <a href="{{ url('/mGenerator') }}" id="memeCreateMobile">  <span class="glyphicon glyphicon-plus"></span></a>
             </div>
             <div  class="col-xs-4" style="text-align: center; ">
                 <a id="searchBtn"> <span  class="glyphicon glyphicon-search"></span></a>
             </div>
         </div>
         
     </div>
       
                   
                        <form action="" method="get" class="" id="searchBar" style="display:none; z-index: 30; width:100%;">
                             <div class="input-group">             
                            <span class="input-group-addon" id="backSearch">  <span  class="glyphicon glyphicon-menu-left" style="color:#19887e;"></span>
                                         </span>
                            <input type="text" class="form-control clearable" id="search"  onkeyup="mSearch(this,'M')"  placeholder="Hot Search" >
                
                                           <span class="input-group-btn">  <button class="btn btn-default"  type="reset"  alt="clear" ><span  class="glyphicon glyphicon-remove" style="color:#19887e;"></span></button> 
                                         </span>
                             </div>
                            <div id="mSearchResult" >  </div>


                        
                   
                                           
                        </form>
            
	
	

 <script type="text/javascript">
 var notif=0;
    $(document).ready(function(){
    $("#notifBtn").click(function(){
        if(notif===0){
        $("#notifPanel").slideDown("slow");notif=1;
           $('html, body').css({
    'overflow': 'hidden',
    'height': '100%'
});
        }
        else{
         $("#notifPanel").slideUp("slow");notif=0;
              $('html, body').css({
    'overflow': 'auto',
    'height': 'auto'
});
        }
        
    });   
});
  
 function mSearch(searchBar,type){
      console.log("type="+type);
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
    $("#mSearchResult").html(data);
     
    }
    });
    
    }

function mSearchEmpty(){
document.getElementById('mSearchResult').innerHTML=" ";

    
    }
 </script>
   
</body>

<footer>
   
    
</footer>

</html>
