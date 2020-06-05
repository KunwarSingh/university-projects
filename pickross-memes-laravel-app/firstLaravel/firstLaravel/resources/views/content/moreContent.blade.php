<!-- pagination yields via this  -->
 


@foreach($cont as $a)
<article class="container-fluid">
    <div class="row">
        
<div class="title col-lg-11 col-md-11 col-sm-12 col-xs-12" style="margin-left: 17px; ">
    <a href='#'>{{$a->title}}</a></div>
        
</div>
<div class="row"> 
    <div class="tags col-lg-6 col-md-6 col-sm-6 col-xs-12" style="font-size:13px;">

        @if(!$a->tags->isEmpty())    
        <ul style="list-style: none; padding-left:0;">    
    @foreach($a->tags as $tag)
    <a href="{{url('/'.$tag->tagname)}}"><li style='border-radius:4px; cursor:pointer; margin-right: 5px; padding-left: 3px; padding-right: 3px;  margin-bottom: 2px; float:left; border:1px solid #19887e; color:#19887e; background-color: #fff;'> {{$tag->tagname}}</li></a>
    @endforeach
        </ul>
    @endif
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 nview1" style="text-align: right;">{{number_format($a->nviews)}} views</div>
    
</div> 
    <div class="row">
        
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
   {{--*/ $pg = str_replace(' ', '-', $a->title); /*--}}   
   <a href="{{url($pg.'-'.$a->id)}}" >
        <img src="{{url($a->meme->filelocation)}}" class="img-responsive" onclick="viewCount({{$a->id}},15)"></img> </a>

</div>
    
    </div>
   
     

    <div class="row sharebar " style="margin-top:10px; ">
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" > 
                @if($a->like==1)
               {!! Form::hidden('likeValue',$a->like,['id'=>'likeValue'.$a->id]) !!}
              <!--  <input type="hidden" id="likeValue{{$a->id}}" value="{{$a->like}}"> -->
              <a id="likebttn_{{$a->id}}" onclick="like({{$a->id}})" style="float: left; margin-left: 10px;" href="javascript:void(0);"><span id="likebttn_img_{{$a->id}}" class="glyphicon glyphicon-thumbs-up" style="color:#19887e; font-size:20px; "></span></a>    
             
             @else
            {!! Form::hidden('likeValue',$a->like,['id'=>'likeValue'.$a->id]) !!}
         <!--    <input type="hidden" id="likeValue{{$a->id}}" value="{{$a->like}}"> -->
             <a id="likebttn_{{$a->id}}" onclick="like({{$a->id}})" style="float: left; margin-left: 10px;" href="javascript:void(0);"><span id="likebttn_img_{{$a->id}}" class="glyphicon glyphicon-thumbs-up" style="color:#999999; font-size:20px; "></span></a>
 
             
             @endif
                  
            @if($a->comment==1) 
            <a  href="javascript:void(0);"  onclick="comment({{$a->id}})" style="margin-left: 10px;"><span id="commentbttn_img_{{$a->id}}" class="glyphicon glyphicon-comment" style="color:#19887e; font-size:20px;"></span> </a>
            @else
             <a  href="javascript:void(0);"  onclick="comment({{$a->id}})" style="margin-left: 10px;"><span id="commentbttn_img_{{$a->id}}" class="glyphicon glyphicon-comment" style="color:#999999; font-size:20px;"></span> </a>
         
            @endif
            
             @if($a->report==1)
              {!! Form::hidden('reportValue',$a->report,['id'=>'reportValue'.($a->id)]) !!}
            <a class="tool" id="reportbttn_{{$a->id}}" onclick="report({{$a->id}})" style=" margin-left: 10px; margin-right:-10px;" data-toggle="tooltip" data-placement="right" title="Report"><span id="reportbttn_img_{{$a->id}}" class="glyphicon glyphicon-flag" style="font-size:20px; color:#999999;"></span></a>
             @else
                {!! Form::hidden('reportValue',$a->report,['id'=>'reportValue'.($a->id)]) !!}
            <a class="tool" id="reportbttn_{{$a->id}}" onclick="report({{$a->id}})" style=" margin-left: 10px; margin-right:-10px;" data-toggle="tooltip" data-placement="right" title="Report"><span id="reportbttn_img_{{$a->id}}" class="glyphicon glyphicon-flag" style="font-size:20px; color:#999999;"></span></a>   
             @endif      
             <script>
          $(document).ready(function(){
           $('[data-toggle="tooltip"]').tooltip();   
          });
         </script>
         
            
      
         
         </div>

   <div class="col-lg-4 col-md-4 col-sm-4" id="middle" ></div>
        
       <div class="col-lg-4 col-md-4 col-sm-4" id="desktopShareIcons" >
            <ul style="list-style: none; ">
               <!--   <link rel="canonical" href="https://dev.twitter.com/web/tweet-button"> -->
                       <!--   <link rel="canonical" href="https://dev.twitter.com/web/tweet-button"> -->
                    <li style="float:left;">
                    <link rel="me" href="https://twitter.com/pickcrossdotcom">
                    <a  href="https://twitter.com/intent/tweet?text=Look%20at%20this%20awesome%20Meme&hashtags=IndianMemeStation,Pickcross&url={{url($pg.'-'.$a->id)}}"  >
                    <img src="{{url('images/twitter-r.png')}}"  />                   
                    </a></li>
  <li style="float:left;">
<!-- Place this tag where you want the share button to render. -->
<!--<div class="g-plus" data-action="share" data-annotation="none" data-href="{{url($pg.'-'.$a->id)}}"></div> -->

<a href="https://plus.google.com/share?url={{url($pg.'-'.$a->id)}}&title={{$a->title}}" target="_blank"> 
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
                    <a href="http://www.facebook.com/share.php?u={{url($pg.'-'.$a->id)}}&title={{$a->title}}" target="_blank">
                        <img src="{{url('images/facebook-r.png')}}" /></a>
<!--<div class="fb-share-button" data-href="{{url($pg.'-'.$a->id)}}" data-layout="button"></div> -->
                </li>
            
  
            </ul>
             
         
    </div>
        
     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 nviews" style="text-align:  right;" >
    {{$a->nviews}} Views
</div>
        
        
    </div>
    
    <div class="row mobileShareIcons " style="margin-top:5px; padding-left: 15px; padding-right: 15px; ">
        
           <div class=" col-xs-3 " style="text-align: center; background-color: #F63D27;" >
       <a href="https://plus.google.com/share?url={{url($pg.'-'.$a->id)}}&title={{$a->title}}" target="_blank">  
           <img src="{{url('images/google.png')}}" /></a>
     <!--  <a href="https://plus.google.com/share?url={{url($pg.'_'.$a->id)}}&title={{$a->title}}" style="position:absolute;  left:0; width:100%; height:100%;"/>
-->
      </div>
        <div class=" col-xs-3 " style="text-align: center; background-color: #3C5B9B;" >
     <a href="http://www.facebook.com/share.php?u={{url($pg.'-'.$a->id)}}&title={{$a->title}}" target="_blank">  
           <img src="{{url('images/facebook.png')}}" /></a>
        
      </div>
        <div class=" col-xs-3 " style="text-align: center; background-color:#2DAAE1;" >
       <a href="https://twitter.com/intent/tweet?text=Checkout%20this%20awesome%20Meme&hashtags=IndianMemeStation,Pickcross&url={{url($pg.'-'.$a->id)}}" target="_blank">  
           <img src="{{url('images/twitter.png')}}" /></a>  
      </div>
        <div class="col-xs-3 " style="text-align: center; background-color: #3C8A38;">
         <!--   <a href="whatsapp://send" data-text="Take a look at this awesome meme" data-href="{{url($pg.'-'.$a->id)}}" class="wa_btn wa_btn_s" data-action="share/whatsapp/share" style=" height:25px; display:block;">
            <img src="{{url('images/whatsapp.svg')}}"/></a> -->
           <img src="{{url('images/whatsapp.svg')}}" onclick="location.href='whatsapp://send?text=Checkout%20this%20awesome%20Meme:%20 {{url($pg.'-'.$a->id)}}';" data-action="share/whatsapp/share" />
   
        </div> 
        
    </div>
    

    
    
	</article>
	
@endforeach

