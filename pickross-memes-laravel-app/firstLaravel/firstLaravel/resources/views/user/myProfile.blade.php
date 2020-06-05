@extends('user.user')
@section('bodyContent') 
<div class=" profileHeader">
    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2">
        <img src="{{Auth::user()->avatar}}" class="avatar img-responsive" id='imgAvatar'> </img>
          <div class="uploadAvatar" >
              <span class="glyphicon glyphicon-camera" style="color:#ddd; font-size:20px; "></span><br>
          Update Picture <input type="file" id="avatarUpload" name="avatar"  onchange="uploadImg()"/>
          </div>
          
                     
    </div>
    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 ">
                       <ul>
                           <li style="font-weight:bold;">@ {{Auth::user()->username}}</li>
                           <li>{{Auth::user()->email}}</li>                   
                           <li><span class="glyphicon glyphicon-time" ></span> Joined {{ Auth::user()->created_at->format('M') }} {{ Auth::user()->created_at->format('Y') }}</li>
                       </ul>
    </div>
    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                       <ul>
                          <li>Mplay Points {{ number_format(Auth::user()->mplaypoints)}}
                         
                         <li>Loyalty Points {{number_format(Auth::user()->loyaltypoints)}}</li>                     
                       </ul>
    </div>
                        
</div>
<div class="" style="border-bottom: 1px solid #ddd;">
    <div class=" col-lg-2 col-md-2 col-sm-2 profilenav"></div>
    <div class="col-xs-12 col-lg-6 col-md-6 col-sm-6 " style=' text-align: center;'>
<ul class="nav nav-tabs" role="tablist" id="myTab" style="padding-left: 8%; border-bottom: none;">

  <li role="presentation" class="{{$postsTab}}"><a onclick="posts()" aria-controls="home" role="tab" data-toggle="tab">Posts</a></li>
  <li role="presentation" class="{{$favTab}}"><a  onclick="fav()" aria-controls="profile" role="tab" data-toggle="tab">Favourites</a></li>
  <li role="presentation" class="{{$commentsTab}}"><a onclick="comments()" aria-controls="messages" role="tab" data-toggle="tab">Comments</a></li>
  
  <script>
      function posts()
      {location.href='{{url('myprofile/Posts') }}';}
      
      function fav()
      {location.href='{{url('myprofile/Favourites') }}';}
      
      function comments()
      {location.href='{{url('myprofile/Comments') }}';}
  
  
  
  </script>
  
</ul>
        </div>
    
    
</div>


<div class="">
<div class="col-lg-2 col-sm-2 col-md-2 col-xs-1 profileSidebar" style="z-index:1; ">
   
			
                      
        </div>


<div class="col-lg-5 col-md-5 col-sm-10 col-xs-10 tab-content">


  <div role="tabpanel" class="row tab-pane active" id="Posts">
    
        @yield('posts')
         <div id="resultsPosts">  <!-- Pagination --> </div>
           
       
  
  </div>
  

  <div role="tabpanel" class="row tab-pane active" id="Favourites">
  
 @yield('favourites')
  <div id="resultsFav">  <!-- Pagination --> </div>
  </div>    
    
 <div role="tabpanel" class="row tab-pane active" id="Comments">
  
  @yield('comments')
   <div id="resultsComments">  <!-- Pagination --> </div>
 </div>
    
</div>
    
<div class="col-lg-3 col-md-3 col-xs-1 sidebar" style="z-index:1; margin-left:70px;">
    {{--*/   $cont=$trend;        /*--}}
    
			@include ('._sidebar')
</div> 
    <br><br><br> 
</div>
@stop