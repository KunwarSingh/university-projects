<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <meta name="_token" content="{{ csrf_token() }}"/>
        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="{{ asset('/js/jquery-2.1.4.min.js') }}"></script>     
        <script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script> 
		<!--<script type="text/javascript" src="{{ asset('/js/bootstrap.offcanvas.min.js') }}"></script> -->
        <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">	
        <link href="{{ asset('/css/loginReg.css') }}" rel="stylesheet">
		<!--<link href="{{ asset('/css/bootstrap.offcanvas.min.css') }}" rel="stylesheet"> -->
	    <style>
		.offmenu{
			float:left;
			display:block;
		}
	#sidebar {
  height: 100vh;
  padding-right: 0;
  padding-top: 20px;
}

#sidebar .affix {
  position:fixed;
  top:50px;
  
}

#sidebar .affix-top {
  position:absolute;
  top:50px;
  width:97%;
  
}

#sidebar .nav {
  width: 95%;
}
#sidebar li {
  border:0 #1e1e1e solid;
  border-bottom-width:1px;
}
#sidebar li a {
  padding-left:1px;
}
#sidebar li a:hover {
  background-color:#222222;
  color:#ffffff;
}

  .row-offcanvas {
    position: relative;
    -webkit-transition: all 0.25s ease-out;
    -moz-transition: all 0.25s ease-out;
    transition: all 0.25s ease-out;
  }
   #sidebar {
    background-color:#3b3b3b;
    padding-top:0;
  }
  #sidebar .nav>li {
    color: #ddd;
    background: linear-gradient(#3E3E3E, #383838);
    border-top: 1px solid #484848;
    border-bottom: 1px solid #2E2E2E;
    padding-left:10px;
  }
  #sidebar .nav>li:first-child {
    border-top:0;
  }
  #sidebar .nav>li>a {
    color: #ddd;
  }
  #sidebar .nav>li>a>img {
    max-width: 14px;
  }
  #sidebar .nav>li>a:hover, #sidebar .nav>li>a:focus {
    text-decoration: none;
    background: linear-gradient(#373737, #323232);
    color: #fff;  
  }
  #sidebar .nav .caret {
    border-top-color: #fff;
    border-bottom-color: #fff;
  }
  #sidebar .nav a:hover .caret{
    border-top-color: #fff;
    border-bottom-color: #fff;
  }
  .searchBarSmXs{display:none;}
/* collapsed sidebar styles */
@media (min-width: 1200px) {

  .row-offcanvas-right
  .sidebar-offcanvas {
    right: -25%;
  }

  .row-offcanvas-left
  .sidebar-offcanvas {
    left: -25%;
  }
  .row-offcanvas-right.active {
    right: 25%;
  }
  .row-offcanvas-left.active {
    left: 25%;
  }
  .sidebar-offcanvas {
    position: absolute;
    top: 0;
    width: 25%; 
  }
 
}
@media screen and (min-width: 992px) and (max-width: 1199px) {
	.navbar-brand{font-size:16px;}
	.btnMenu{margin-left:-30px;}
}

@media screen and (min-width: 768px) and (max-width: 1199px) {
	 .row-offcanvas-right
  .sidebar-offcanvas {
    right: -33.3%;
  }

  .row-offcanvas-left
  .sidebar-offcanvas {
    left: -33.3%;
  }
  .row-offcanvas-right.active {
    right: 33.3%;
  }
  .row-offcanvas-left.active {
    left: 33.3%;
  }
  .sidebar-offcanvas {
    position: absolute;
    top: 0;
    width: 33.3%; 
  }
}
@media screen and (min-width: 992px){
.selectCity{
	border-top-right-radius:0;
	border-bottom-right-radius:0;
}
.search{
	border-radius:0;
}
.searchBtn{
	border-top-left-radius:0;
	border-bottom-left-radius:0;
	background-color:#cb202d;
	color:white;
	border: 1px solid #cb202d;
	width:100%;
}
}

@media (max-width: 991px){
.navbar-header{text-align:center;}	
.navbar-brand{float:none; position:absolute; margin-left: -40%;
    width: 100%;}
	.navbar-brand{font-size:16px;}
	.btnMenu{margin-left:-30px;}
	
.selectCity{
	border:none;
	border-radius:0;
	color:white;
	background-color:transparent;
}
.search{
	width:90%;
	border:none;
	border-radius:0;
	color:white;
	background-color:transparent;
 	border-bottom:1px solid white;
    float:left;	
}
.searchLeftBorder1{
	position:relative;
	float:left;
	width:1px; height:10px; background-color:transparent;
}
.searchLeftBorder2{
	position:relative;
	top:24px;
	float:left;
	width:1px; height:10px; background-color:white;
}
.searchRightBorder1{
	position:relative;	
	float:left;
	width:1px; height:10px; background-color:transparent;
}
.searchRightBorder2{
	position:relative;	
	top:24px;
	float:left;
	width:1px; height:10px; background-color:white;
	left:-1px;
}
.searchBtn{
	border:none;
	border-radius:0;
	background-color:#cb202d;
	color:white;
	border: 1px solid #cb202d;
	width:100%;
}}

@media screen and (min-width: 768px) and (max-width: 991px) {
	.searchBarLgMd{display:none;}
	.searchBarSmXs{display:block;}
}
@media screen and (min-width: 767px){
	.MobileLogin{display:none; float:right;}
    .DesktopLogin{display:block; float:right;}
}
@media screen and (max-width: 767px){
		 .row-offcanvas-right
  .sidebar-offcanvas {
    right: -50%;
  }

  .row-offcanvas-left
  .sidebar-offcanvas {
    left: -50%;
  }
  .row-offcanvas-right.active {
    right: 50%;
  }
  .row-offcanvas-left.active {
    left: 50%;
  }
  .sidebar-offcanvas {
    position: absolute;
    top: 0;
    width: 50%; 
  }
  
  .MobileLogin{display:block; float:right;}
  .DesktopLogin{display:none; float:right;}
}

inner-addon { 
    position: relative; 
}

/* style icon */
.inner-addon .glyphicon {
  position: absolute;
  padding: 10px;
  pointer-events: none;
}

/* align icon */
.left-addon .glyphicon  { left:  15px;}
.right-addon .glyphicon { right: 0px;}

/* add padding  */
.left-addon input  { padding-left:  30px; }
.right-addon input { padding-right: 30px; }


.loginDrop{padding-top:15px;}
#dim{position:fixed;
top:0;
left:0;
height:100%;
width:100%;
background-color:black;
opacity:0.8;
z-index:1050;}
.scroll{
	overflow:hidden;
	height:100%;
}
		</style>
		<script type='text/javascript'>
        
        $(document).ready(function() {
        
            $('[data-toggle=offcanvas]').click(function() {
                 $('.row-offcanvas').toggleClass('active');
				 $('body').toggleClass('scroll');
            });


$('.btn-toggle').click(function() {
  $(this).find('.btn').toggleClass('active').toggleClass('btn-default').toggleClass('btn-primary');
});

            $('#loginBtn').click(function() {
			    $('#dim').show();	
                $('.loginPopup').show();
            });
        
		    $('.lCloseBtn').click(function() {
			    $('#dim').hide();	
                $('.loginPopup').hide();
            });
			 $('.lCloseBtn').tooltip({title: "Click to Close", animation: true ,placement: "left"});
			   $('#logBtn').click(function() {
			    $('#dim').show();	
				$('.registerPopup').hide();
                $('.loginPopup').show();
				
            });
			  $('#regBtn').click(function() {
			    $('#dim').show();	
                $('.loginPopup').hide();
				$('.registerPopup').show();
            });
			
			$('.regCloseBtn').click(function() {
			    $('#dim').hide();	
                $('.registerPopup').hide();
            });
			 $('.regCloseBtn').tooltip({title: "Click to Close", animation: true ,placement: "left"});
			 
		
});
        
        </script>
        
        
    </head>
    <body class="">
	<div id="dim"  style="display:none;"></div> 
	
	 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    	<div class="navbar-header col-lg-7 col-md-7 col-sm-7 col-xs-7">
           <button type="button" class="navbar-toggle offmenu btnMenu" data-toggle="offcanvas" data-target=".sidebar-nav">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="#">Book My Party Venue</a>
    	</div>
	
		<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" style="padding-top:15px;">
	 
				<ul  id="" style="list-style: none; color:#ffffff;">
                         
						 <li class="dropdown" style="float:right; margin-left:10px;">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
							<span class="glyphicon glyphicon-arrow-down" style="color:#ffffff; font-size:20px;"></span></a>
							<ul class="dropdown-menu" style="left:-100px;"  >
                            <li><a href="{{ url('/memeGenerator') }}"></span>Settings</a></li>						
							<li><a href="{{ url('/auth/logout') }}"></span>Logout</a></li>
							</ul>
						 </li>
                         <li id="notifBtn" style="float:right;  margin-left:10px;"> <img src="{{ asset('/images/notif.png') }}" width="13"></img></li>                         
					     <li class="Inbox" style="float:right;  margin-left:10px;"><a href="#" style="color:#ffffff;"><span class="glyphicon glyphicon-envelope" style="color:#ffffff; font-size:20px;"></span></a></li> 					
					     <li style="float:right;  margin-left:10px; color:white;"><img href="#" class="profile-btn" src="" style="height:20px; width:30px; border-radius:10%; "> </img> Profile </li>                               
						                                           
                        
                   						 
				</ul>
				
	  
            
		</div>

    </nav>
	
    <div class="container-fluid" style="z-index:10;">
      <div class="row row-offcanvas row-offcanvas-left">	
	  <!--sidebar-->
        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div data-spy="affix" data-offset-top="45" data-offset-bottom="90">
            <ul class="nav" id="sidebar-nav">
              <li><a href="#">Home</a></li>
			  <li><a href="#section1">My Profile</a></li>
			  <li><a href="#section1">Hall Settings</a></li>
              <li><a href="#section1">Auth Person</a></li>
              <li><a href="#section2">Passwords</a></li>
              <li><a href="#section3">Security Privacy</a></li>
              <li><a href="#">Mobile</a></li>
			  <li><a href="#">Email Notification</a></li>
			  <li><a href="#">Web Notification</a></li>
            </ul>
           </div>
        </div><!--/sidebar-->
		
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" data-spy="scroll" data-target="#sidebar-nav">
          <div class="row" style="/*position:absolute;*/ top:50px;">
		   @yield('content')
		  
		  </div>
		</div>
	  </div>
	</div>
	
	
	
	
   
	
	
       
    </body>
</html>
