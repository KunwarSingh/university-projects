@extends('app')
@section('content')
 <script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script> 
  <script type="text/javascript" src="{{ asset('/js/jquery-cycle2.js') }}"></script> 
   <script type="text/javascript" src="{{ asset('/js/jquery-cycle2-caraousel.js') }}"></script> 

<script>$.fn.cycle.defaults.autoSelector = '.slideshow';</script>
<script>
    function swapImages(){
      var $active = $('#myGallery .active');
      var $next = ($('#myGallery .active').next().length > 0) ? $('#myGallery .active').next() : $('#myGallery img:first');
       $active.css('display','none');
       $active.removeClass('active');
       $next.css('display','block');
      $next.addClass('active');
     /*
      $active.fadeOut(function(){
      $active.removeClass('active');
      $next.fadeIn().addClass('active');
      }); */
    }
    function swapImagesKitty(){
      var $active = $('#myGalleryKitty .active');
      var $next = ($('#myGalleryKitty .active').next().length > 0) ? $('#myGalleryKitty .active').next() : $('#myGalleryKitty img:first');
       $active.css('display','none');
       $active.removeClass('active');
       $next.css('display','block');
      $next.addClass('active');
     /*
      $active.fadeOut(function(){
      $active.removeClass('active');
      $next.fadeIn().addClass('active');
      }); */}
    function swapImagesMarriage(){
      var $active = $('#myGalleryMarriage .active');
      var $next = ($('#myGalleryMarriage .active').next().length > 0) ? $('#myGalleryMarriage .active').next() : $('#myGalleryMarriage img:first');
       $active.css('display','none');
       $active.removeClass('active');
       $next.css('display','block');
      $next.addClass('active');
     /*
      $active.fadeOut(function(){
      $active.removeClass('active');
      $next.fadeIn().addClass('active');
      }); */
       }
    function swapImagesCommunity(){
      var $active = $('#myGalleryCommunity .active');
      var $next = ($('#myGalleryCommunity .active').next().length > 0) ? $('#myGalleryCommunity .active').next() : $('#myGalleryCommunity img:first');
       $active.css('display','none');
       $active.removeClass('active');
       $next.css('display','block');
      $next.addClass('active');
     /*
      $active.fadeOut(function(){
      $active.removeClass('active');
      $next.fadeIn().addClass('active');
      }); */
    }

    $(document).ready(function(){
      // Run our swapImages() function every 5secs
      setInterval('swapImages()', 3000);
      setInterval('swapImagesKitty()', 4000),
      setInterval('swapImagesMarriage()', 7000),
      setInterval('swapImagesCommunity()', 1000)
    })
  </script>
  
  <style type="text/css">
  
  #home {
  background: url(/images/cover.jpg) no-repeat center center fixed; 
  display: table;
  width: 100%;
  position: relative;
  width: 100%;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
  

  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  


.carousel-indicators li
{
  width: 20%;
  height: 100%;
  background-color: #515151;
  margin: 0;
  margin-right:-3px;
  padding: 0;
  border:1px solid black;
  border-radius: 0;
  box-shadow:1px 0px 1px 1px #d3cbb8 inset;
}

 

.carousel-indicators .active
{
   width: 20%;
  height: 100%;
  background-color: #f2f2f2;
  margin: 0;
  margin-right:-3px;
  padding: 0;
  border:1px solid black;
  border-radius: 0;
  box-shadow:1px 0px 1px 1px #d3cbb8 inset;
}
.mains{ border: 1px solid white; width: 100%; height: 300px; background-color:white; box-shadow:2px 2px 2px 2px #d3cbb8;}
.slideshow { margin: auto; width: 100%;height: 250px;  }

.slideshow img { padding-left: 2px; padding-right: 2px;  }

.cycle-pager { position: static; margin-top: 5px; }
div.vertical { width: 100px; }
.members {position: relative;}

.top
{
  width: 100%;
  border: 1px solid white;
  background-color:white; box-shadow:2px 2px 2px 2px #d3cbb8;
  padding-left: 6px;
  padding-right: 7px;
  padding-bottom:10px;
 
}

.silver
{
  width: 100%;
   border: 1px solid white;
  background-color:white; box-shadow:2px 2px 2px 2px #d3cbb8;
  padding-left: 6px;
  padding-right: 7px;
  padding-bottom:10px;
 
}

.silver .col-lg-4{
  text-align: center;

}


.top .col-lg-4{
  text-align: center;

}
.banquets , .kitty, .marriage, .community
{
  width: 100%;
  /*height: 200px; */
  border: 1px solid #ddd;
  background-color:white;
  text-align: center;
  
}



    #myGallery, #myGalleryKitty , #myGalleryMarriage , #myGalleryCommunity
    {
     /* width: 100%;*/
	  margin:2px;
      text-align: center;	  
	  box-shadow:2px 2px 1px 1px #d3cbb8;

    }
    #myGallery img  ,#myGalleryKitty img , #myGalleryMarriage img , #myGalleryCommunity img{
      /*max-width:150px;  */
      display: none;
      /*position: absolute;*/
      top: 0;
      left: 0;
      width: 100%;
    }
    #myGallery img .active , #myGalleryKitty img .active , #myGalleryMarriage img .active , #myGalleryCommunity img .active
    {
      display: block;
    }
    .reviews
    {
      width: 100%;
       border: 1px solid white;
       background-color:white; box-shadow:2px 2px 2px 2px #d3cbb8;
	  box-shadow:2px 2px 1px 1px #d3cbb8;
    }
    .imguser img
    {
      border-radius: 4px;
      /*border: 1px;*/
      width: 30px;
      height: 30px;
      text-align: center;
      padding-left: 5px;

    }
    .imguser
    {
      text-align: center;
     
   
    }
	
	.text-vcenter {
  display: table-cell;
  text-align: center;
  vertical-align: middle;
  color:white;
}
.text-vcenter h1 {
  font-size: 5.5em;
  font-weight: 300;
  margin: 0;
  padding: 0;
}
.text-vcenter .large {
  font-size: 3.5em;
  font-weight: 1000;
  margin: 0;
  padding: 0;
}
.text-vcenter h4 {
  font-size: 2.0em;
  font-weight: 100;
  margin: 0;
  padding: 0;
}


/* footer  */

.row1
  {
  	border-bottom:  1px solid #ccc;
  	height: 60px;
 
  }
  .row2
  {
  	border-bottom:  1px solid #ccc;
  }
  .row3
  {
  	border-bottom:  1px solid #ccc;
  }
  .row4
  {
  	border-bottom:  1px solid #ccc;
  	text-align: center;
  }
  .text
  {
  	padding: 20px;
  }
  .socialIcons img
  {
  	
  	float: left;
  	margin-left: 10px;
  }
  .textDecoRow2 a
  {
  	margin-left: 10px;

  }
</style>


<div id="home" class="home" style="height:100vh;">
    <div class="text-vcenter">
      <h1>Book My Party Venue</h1>
      <h1 class="large">India's Leading Online Listing of</h1>
	  <h4>Marriage Palaces, Party Halls, Kitty Halls, Community Halls, Banquest Halls ...</h4><br><br><br>
      <a href="#more" class="btn btn-default btn-lg">Explore</a>
    </div>
</div>

<div id="more" class="container" style="width:1080px; padding-top:50px;">
  <div class="col-lg-8" >

  <div class="jumbotron">
    <img class="img-responsive" src={{url('/images/ad.jpg')}} alt="Advertisements Here"/>
  </div>
   <div id="myCarousel" class="carousel slide" data-ride="carousel" style=" box-shadow:2px 2px 1px 1px #d3cbb8;">
    <!-- Indicators -->
    <ol class="carousel-indicators" style="/*border:1px solid brown; */top:220px;margin-left:-50%;width:100%;height:50px;text-align:left;">
   <!--  <div class="lll">-->
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    <!--  </div>-->
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" style="/*width:600px; height:200px;*/">

      <div class="item active">
       <img class="img-responsive" src={{url('/images/halls/hall_9_cover.jpg')}} alt="Gary Gavy Palace">
        <div class="carousel-caption">
          <h3>Gary Gavy Palace</h3>
       <!--   <p>The atmosphere in Switzerland has a touch of Florence and Venice.</p>-->
        </div>
      </div>

      <div class="item">
       <img class="img-responsive" src={{url('/images/halls/hall_13_cover.jpg')}} alt="Blue Hill Palace">
        <div class="carousel-caption">
          <h3>Blue Hills Palace</h3>
        <!--  <p>The atmosphere in Chania has a touch of Florence and Venice.</p>-->
        </div>
      </div>
    
      <div class="item">
        <img class="img-responsive" src={{url('/images/halls/hall_10_cover.jpg')}} alt="Palki Palace">
        <div class="carousel-caption">
          <h3>Palki Palace</h3>
      <!--    <p>Beatiful flowers in Kolymbari, Crete.</p>-->
        </div>
      </div>

      <div class="item">
       <img class="img-responsive" src={{url('/images/halls/hall_9_cover.jpg')}} alt="Kinng Palace">
        <div class="carousel-caption">
          <h3>Kinng Palace</h3>
       <!--   <p>Beatiful flowers in Kolymbari, Crete.</p>-->
        </div>
      </div>
      <div class="item">
        <img class="img-responsive" src={{url('/images/halls/hall_11_cover.jpg')}} alt="Taj Resorts">
        <div class="carousel-caption">
          <h3>Taj Resorts</h3>
       <!--   <p>Beatiful flowers in Kolymbari, Crete.</p>-->
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div><!-- my carousel ends here-->
<br><br><br><br><br>
<div class="mains responsive">
<p class="members"><b><center>Gold Subscribers</center></b></p>
<div class="slideshow" 
    data-cycle-fx="carousel"
    data-cycle-timeout="1000"
     data-cycle-carousel-visible="4"
    data-cycle-carousel-fluid="true"
   
    >

  
    <img class="img-responsive" src={{url('/images/halls/hall_10_gold_cover.jpg')}}>
    <img class="img-responsive" src={{url('/images/halls/hall_11_gold_cover.jpg')}}>
    <img class="img-responsive" src={{url('/images/halls/hall_13_gold_cover.jpg')}}>
    <img class="img-responsive" src={{url('/images/halls/hall_9_gold_cover.jpg')}}>
    <img class="img-responsive" src={{url('/images/halls/hall_11_gold_cover.jpg')}}>
    <img class="img-responsive" src={{url('/images/halls/hall_13_gold_cover.jpg')}}>
 </div>
 </div><!-- gold div ends here--><br><br><br><br>
 
 <div class="top">
  <p><center>Top Trending</center></p>
  
  <div class="row rowr">
  <div  class="col-lg-4" >
  <img class="img-responsive" src={{url('/images/halls/hall_13_banner.jpg')}}>
  </div>
  <div  class="col-lg-4" >
  <img class="img-responsive" src={{url('/images/halls/hall_10_banner.jpg')}}>
  </div>
  <div  class="col-lg-4" >
 <img class="img-responsive" src={{url('/images/halls/hall_9_banner.jpg')}}>
  </div>
   </div>
   <br><br>
   <div class="row">
  <div   class="col-lg-4" >
  <img class="img-responsive" src={{url('/images/halls/hall_10_banner.jpg')}}>
  </div>
  <div   class="col-lg-4" >
  <img class="img-responsive" src={{url('/images/halls/hall_11_banner.jpg')}}>
  </div>
  <div   class="col-lg-4" >
    <img class="img-responsive" src={{url('/images/halls/hall_13_banner.jpg')}}>
  
  </div>
  </div>

  

 </div><!-- top div ends here-->
 <br><br><br><br>

 <div class="silver">
  <p><center>Silver</center></p>
  
  <div class="row ">
  <div  class="col-lg-2 col-lg-offset-1" >
  <img class="img-responsive" src={{url('/images/halls/hall_10_silver_cover.jpg')}}>
  </div>
  <div  class="col-lg-2" >
   <img class="img-responsive" src={{url('/images/halls/hall_9_silver_cover.jpg')}}>
  </div>
  <div  class="col-lg-2" >
  <img class="img-responsive" src={{url('/images/halls/hall_11_silver_cover.jpg')}}>
  </div>
   <div  class="col-lg-2" >
  <img class="img-responsive" src={{url('/images/halls/hall_13_silver_cover.jpg')}}>
  </div>
  <div  class="col-lg-2" >
    <img class="img-responsive" src={{url('/images/halls/hall_10_silver_cover.jpg')}}>
  </div>
   </div>
   <br><br>
 <div class="row ">
  <div  class="col-lg-2 col-lg-offset-1" >
   <img class="img-responsive" src={{url('/images/halls/hall_9_silver_cover.jpg')}}>
  </div>
  <div  class="col-lg-2" >
    <img class="img-responsive" src={{url('/images/halls/hall_11_silver_cover.jpg')}}>
  </div>
  <div  class="col-lg-2" >
  <img class="img-responsive" src={{url('/images/halls/hall_13_silver_cover.jpg')}}>
  </div>
   <div  class="col-lg-2" >
  <img class="img-responsive" src={{url('/images/halls/hall_10_silver_cover.jpg')}}>
  </div>
  <div  class="col-lg-2" >
  <img class="img-responsive" src={{url('/images/halls/hall_9_silver_cover.jpg')}}>
  </div>
   </div>

  

 </div><!-- silver ends here-->
 <br><br><br><br>

 
  </div><!-- col lg-8 ends here-->
  <div class="col-lg-4">
 
  <div class="banquets">

    Banquets halls
    <div id="myGallery">
    <img  src={{url('/images/halls/hall_10_banner.jpg')}} class="active" />
    <img  src={{url('/images/halls/hall_9_banner.jpg')}}  />
    <img  src={{url('/images/halls/hall_11_banner.jpg')}}  />
    <img  src={{url('/images/halls/hall_13_banner.jpg')}} />
    <img  src={{url('/images/halls/hall_9_banner.jpg')}}  />
    
  </div>
  </div><!-- banquets end here-->
  <br><br>

  <div class="kitty">
    Kitty
    <div id="myGalleryKitty">
    <img  src={{url('/images/halls/hall_11_banner.jpg')}} class="active" />
    <img  src={{url('/images/halls/hall_10_banner.jpg')}}  />
    <img  src={{url('/images/halls/hall_9_banner.jpg')}}  />
    <img  src={{url('/images/halls/hall_13_banner.jpg')}} />
    <img  src={{url('/images/halls/hall_11_banner.jpg')}}  />
    
  </div>
  </div><!-- kittys end here-->
  <br><br>
  <div class="marriage">
    Marriage Halls
    <div id="myGalleryMarriage">
    <img  src={{url('/images/halls/hall_13_banner.jpg')}} class="active" />
    <img  src={{url('/images/halls/hall_10_banner.jpg')}}  />
    <img  src={{url('/images/halls/hall_9_banner.jpg')}} />
    <img  src={{url('/images/halls/hall_13_banner.jpg')}} />
    <img  src={{url('/images/halls/hall_11_banner.jpg')}}  />
    
  </div>
  </div><!-- marriage end here-->
  <br><br>
  <div class="community">
    Community Halls
    <div id="myGalleryCommunity">
    <img  src={{url('/images/halls/hall_9_banner.jpg')}} class="active" />
    <img  src={{url('/images/halls/hall_10_banner.jpg')}}  />
    <img  src={{url('/images/halls/hall_11_banner.jpg')}}  />
    <img  src={{url('/images/halls/hall_13_banner.jpg')}} />
    <img  src={{url('/images/halls/hall_11_banner.jpg')}}  />
    
  </div>
  </div><!-- community end here-->
  <br><br>
    <div class="reviews">
    <b><center>Reviews</center></b>
    <br>
    <div class="row">
    <div class="col-lg-3 imguser">
    <img class="img-responsive" src={{url('/images/vindiesel.jpg')}}>
    </div>
    <div class="col-lg-9">
    <p>here are your reviews</p>
    </div>
    </div>
    <hr />
    <div class="row">
    <div class="col-lg-3 imguser">
    <img class="img-responsive" src={{url('/images/AamirKhan.jpg')}}>
    </div>
    <div class="col-lg-9">
    <p>here are your reviews</p>
    </div>
    </div>
     <hr />
    <div class="row">
    <div class="col-lg-3 imguser">
    <img class="img-responsive" src={{url('/images/therock.jpg')}}>
    </div>
    <div class="col-lg-9">
    <p>here are your reviews</p>
    </div>
    </div>
     <hr />
    <div class="row">
    <div class="col-lg-3 imguser">
    <img class="img-responsive" src={{url('/images/ak.jpg')}}>
    </div>
    <div class="col-lg-9">
    <p>here are your reviews</p>
    </div>
    </div>
     <hr />
    <div class="row">
    <div class="col-lg-3 imguser">
    <img class="img-responsive" src={{url('/images/sk.jpg')}}>
    </div>
    <div class="col-lg-9">
    <p>here are your reviews</p>
    </div>
    </div>

    </div>

  </div><!-- col-lg-4 ends here-->

  </div>

  <hr style="width:100%;" />
  
  <div class="container">
	<div class="row row1">
	<p class="text" style="font-size:20px;"><b>Business with Us</b></p>
	</div>
	<div class="row row2">
	<div class="col-lg-8">

    <div class="textDecoRow2">
	<a href="#">About Us</a>
	
	
	<a href="#">Contact</a> 
	
	
	<a href="#">Our Blog</a>
	</div>
	</div>  
	<div class="col-lg-4" style="float:right;">    
	
	<div class="socialIcons">
	 <img class="img-responsive img-circle" src={{url('/images/fb.jpeg')}}  width="20" height="20"> 
	 <img class="img-responsive img-circle" src={{url('/images/google+.png')}}  width="20" height="20"> 
	 <img class="img-responsive img-circle" src={{url('/images/twitter.jpeg')}}  width="20" height="20"> 
	 <img class="img-responsive img-circle" src={{url('/images/instagram.jpeg')}}  width="30" height="20"> 
	 </div>
	 <p >Keep In Touch</p>
	</div>
	</div>
	<div class="row row3">
	<div class="col-lg-4">
	<a href="#"><center>Business Policy</center></a>
	</div>
	<div class="col-lg-4">
	<a href="#"><center>Terms Of Service</center></a>
	</div> 
	<div class="col-lg-4">
	 <a href=""><center>Privacy Policy</center></a> 
	</div>
	</div>
	<div class="row row4">
	Copyright © 2015 BookMyPartyVenue.com
	</div>
	</div>

@stop