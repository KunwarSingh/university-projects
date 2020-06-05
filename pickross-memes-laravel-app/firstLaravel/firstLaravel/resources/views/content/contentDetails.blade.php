@extends('master')

<head>
<meta property="og:image" name="twitter:image" content="{{url($content[0]->meme->filelocation)}}"/>
<meta property="og:title" name="twitter:title" content="{{$content[0]->title}}"/>
<meta property="og:site_name" content="Pickcross"/>
<meta property="og:type" content="website"/>
<meta property="og:description" name="twitter:description" content="Pickcross is largest collection of funny Indian Memes & Jokes. Checkout Pickcross and start creating awesome memes today.">
<meta name="twitter:site" content="@pickcrossdotcom">
<meta name="twitter:card" content="summary_large_image">
<!--<meta name="twitter:creator" content="@AdityaMalla">-->
<meta name="twitter:domain" content="http://www.pickcrossbeta.co.in">

</head>
@section('sideContent') 
 <!--  <div class="slideInBtn" id="slideIn" >
         <
     </div>
   
     <div class="sliderContent" id="slider" ></div>  -->  
     <!-- Sidebar End -->
 @stop   
 
 @section('secondHeader')	
	<div class="container-fluid second-heading">
    	   <div class="container">
	
        	<div class="col-lg-12 col-md-12 col-sm-12 heading">
            	View funny pictures. Vote on interesting polls.
        	</div>
			
           </div>
        </div>
 @stop
 

@section('mainContent')	
<div class="container contentContainer">
	<div class="row">
	    <!-- Blog Entries Column -->
              
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 contentClass" >
	
        <article class="container-fluid">
<div class="row">      
<div class="title col-lg-11 col-md-11 col-sm-12 col-xs-12" style="margin-left: 17px; ">
    <a href='#'>{{$content[0]->title}}</a></div>
        
</div>
<div class="row"> 
     <div class="tags col-lg-6 col-md-6 col-sm-6 col-xs-12" style="font-size:13px;">

        @if(!$content[0]->tags->isEmpty())    
        <ul style="list-style: none; padding-left: 0;">    
    @foreach($content[0]->tags as $tag)
    <a href="{{url('/'.$tag->tagname)}}"><li style='border-radius:4px; cursor:pointer; margin-right: 5px; padding-left: 3px; padding-right: 3px;  margin-bottom: 2px; float:left; border:1px solid #19887e; color:#19887e; background-color: #fff;'> {{$tag->tagname}}</li></a>
    @endforeach
        </ul>
    @endif
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 nview1" style="text-align: right;">{{number_format($content[0]->nviews)}} views</div>
   
</div>   
<div class="row">       
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
     {{--*/ $pg = str_replace(' ', '-', $content[0]->title); /*--}}
  
    <a href="{{url($pg.'-'.$content[0]->id)}}" >
        <img src="{{url($content[0]->meme->filelocation)}}" class="img-responsive" ></img> </a>
</div>
</div>
   
     

    <div class="row sharebar " style="margin-top:10px; ">
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" > 
             
            Points {{number_format($content[0]->pscore)}}          
      
         </div>

   
         <div class="col-lg-4 col-md-4 col-sm-4" id="middle" ></div>
       <div class="col-lg-4 col-md-4 col-sm-4" id="desktopShareIcons" >
            <ul style="list-style: none; ">
               <!--   <link rel="canonical" href="https://dev.twitter.com/web/tweet-button"> -->
                       <!--   <link rel="canonical" href="https://dev.twitter.com/web/tweet-button"> -->
                    <li style="float:left;">
                    <link rel="me" href="https://twitter.com/pickcrossdotcom">
                    <a  href="https://twitter.com/intent/tweet?text=Look%20at%20this%20awesome%20Meme&hashtags=IndianMemeStation,Pickcross&url={{url($pg.'-'.$content[0]->id)}}"  >
                    <img src="{{url('images/twitter-r.png')}}"  />                   
                    </a></li>
  <li style="float:left;">
<!-- Place this tag where you want the share button to render. -->
<!--<div class="g-plus" data-action="share" data-annotation="none" data-href="{{url($pg.'-'.$content[0]->id)}}"></div> -->

<a href="https://plus.google.com/share?url={{url($pg.'-'.$content[0]->id)}}&title={{$content[0]->title}}" target="_blank"> 
<img src="{{url('images/google-r.png')}}" />
</a>
<!-- Place this tag after the last share tag. -->
<!--
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script> -->
                </li>
                <li style="float:left;">
                    <a href="http://www.facebook.com/share.php?u={{url($pg.'-'.$content[0]->id)}}&title={{$content[0]->title}}" target="_blank">
                        <img src="{{url('images/facebook-r.png')}}" /></a>
<!--<div class="fb-share-button" data-href="{{url($pg.'-'.$content[0]->id)}}" data-layout="button"></div> -->
                </li>
            
  
            </ul>
             
         
    </div>
        
     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 nviews" style="text-align:  right;" >
       @if($content[0]->report==1)
              {!! Form::hidden('reportValue',$content[0]->report,['id'=>'reportValue'.($content[0]->id)]) !!}
            <a class="tool" id="reportbttn_{{$content[0]->id}}" onclick="report({{$content[0]->id}})" style=" " data-toggle="tooltip" data-placement="right" title="Report"><span id="reportbttn_img_{{$content[0]->id}}" class="glyphicon glyphicon-flag" style="font-size:20px; color:#999999;"></span></a>
             @else
                {!! Form::hidden('reportValue',$content[0]->report,['id'=>'reportValue'.($content[0]->id)]) !!}
            <a class="tool" id="reportbttn_{{$content[0]->id}}" onclick="report({{$content[0]->id}})" style="  " data-toggle="tooltip" data-placement="right" title="Report"><span id="reportbttn_img_{{$content[0]->id}}" class="glyphicon glyphicon-flag" style="font-size:20px; color:#999999;"></span></a>   
             @endif
          <script>
          $(document).ready(function(){
           $('[data-toggle="tooltip"]').tooltip();   
          });
         </script>
</div>
        
        
    </div>
  <div class="row mobileShareIcons " style="margin-top:5px; padding-left: 15px; padding-right: 15px; ">
        
           <div class=" col-xs-3 " style="text-align: center; background-color: #F63D27;" >
       <a href="https://plus.google.com/share?url={{url($pg.'-'.$content[0]->id)}}&title={{$content[0]->title}}" target="_blank">  
           <img src="{{url('images/google.png')}}" /></a>
   
      </div>
        <div class=" col-xs-3 " style="text-align: center; background-color: #3C5B9B;" >
     <a href="http://www.facebook.com/share.php?u={{url($pg.'-'.$content[0]->id)}}&title={{$content[0]->title}}" target="_blank">  
           <img src="{{url('images/facebook.png')}}" /></a>
        
      </div>
        <div class=" col-xs-3 " style="text-align: center; background-color:#2DAAE1;" >
       <a href="https://twitter.com/intent/tweet?text=Checkout%20this%20awesome%20Meme&hashtags=IndianMemeStation,Pickcross&url={{url($pg.'-'.$content[0]->id)}}" target="_blank">  
           <img src="{{url('images/twitter.png')}}" /></a>  
      </div>
        <div class="col-xs-3 " style="text-align: center; background-color: #3C8A38;">
        
           <img src="{{url('images/whatsapp.svg')}}" onclick="location.href='whatsapp://send?text=Checkout%20this%20awesome%20Meme:%20 {{url($pg.'-'.$content[0]->id)}}';" data-action="share/whatsapp/share" />
   
        </div> 
        
    </div>
    

    
    
	</article>    
            <hr>

    <div class="col-lg-10 col-sm-12 col-md-10 col-xs-12" style="padding:0;">
      
         
<div class="container-fluid commentsPane" id="commentsPane" style=" width:100%;  background-color: #fff;"> 
     
    <br>
<div class="row">
      
     @if($content[0]->like==1)
             {!! Form::hidden('likeValue',$content[0]->like,['id'=>'likeValue'.$content[0]->id]) !!} 
        <!--      <input type="hidden" id="likeValue{{$content[0]->id}}" value="{{$content[0]->like}}"> -->
              <a id="likebttn_{{$content[0]->id}}" onclick="like({{$content[0]->id}})" style="float: left; color:white; margin-left: 15px; margin-right: 5px;" href="javascript:void(0);"><span id="likebttn_img2_{{$content[0]->id}}" class="glyphicon glyphicon-thumbs-up" style="color:#19887e; font-size:20px; "></span></a>    
             
             @else
              {!! Form::hidden('likeValue',$content[0]->like,['id'=>'likeValue'.$content[0]->id]) !!} 
          <!--    <input type="hidden" id="likeValue{{$content[0]->id}}" value="{{$content[0]->like}}"> -->
             <a id="likebttn_{{$content[0]->id}}" onclick="like({{$content[0]->id}})" style="float: left; color:white; margin-left: 15px; margin-right: 5px;" href="javascript:void(0);"><span id="likebttn_img2_{{$content[0]->id}}" class="glyphicon glyphicon-thumbs-up" style="color:#999999; font-size:20px; "></span></a>
 
             
             @endif
    
    

<ul style="list-style: none; padding-left:5px; float:left; font-weight: bold;">
    <li id="likeValue">{{$content[0]->nlikes}} Likes  </li>
</ul>
<ul style=" float:left;padding-left:25px; font-weight: bold;">
    <li id="commentValue">{{$content[0]->ncomments}} Comments  </li>
</ul>
       
    
</div>       
        
      
        @if(Auth::user())

<div class="row writeCommentArea2"  style="float:left; margin-bottom: 10px;">
    <div class="col-xs-2 col-lg-2" style='float:left;'>
       <img href="#"  src="{{ Auth::user()->avatar }}" style="height:30px; margin-top:10px; margin-left: 5px; width:30px; border-radius:100%;  "> </img>
   
    </div>
    <div class="col-xs-10 col-lg-10">
    <div class="input-group">
                
                {!! Form::textarea('',null,['id'=>'commentText','class'=>'form-control','placeholder'=>'Write Comment','style'=>'border:none; width:100%; height:60px; resize:none;','required']) !!} 
            <!--    <input required type="text" class="form-control" id="commentText"  placeholder="Write Comment" style="border:none; width:100%;"> -->
                <span onclick="sendComment2({{$content[0]->id}})" class="input-group-addon" style="background-color: #fff; border:none;"><img href="#"  src="/images/send.png" style="height:25px; cursor: pointer;"> </img></span></span>
            </div>
    </div>
    
</div>
@else
<div class="row writeCommentArea2"  style="padding-top:15px;  margin-bottom: 10px; text-align:center;">
Kindly Login to post Comment. 
</div>
@endif
    
<br>
<div id="newcomment2"></div>


                @include ('content.commentPane')
    </div>
            
            
                       
        </div>
          
           <div class="col-lg-4 col-md-4 sidebar" style="z-index:1;">
			@include ('._sidebar')
        </div>

</div>
            
            
       
</div>
</div>
    
    
    <script>
        
        function sendComment2(contentId){
     
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
              $("#newcomment2").prepend(html);
                console.log(html);
                
          }
       
        });
    
      
    
    
    
}
        
        </script>
 <script type="text/javascript" src="{{ asset('/js/sharebar.js') }}"></script>       
@stop     
    
    
       
                   
