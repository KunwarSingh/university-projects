<script>   // script to view title and share on hover
 $(function() {
$(document).ready(function(){
$(".photoPane").hover(function(){
    $(".imgTitle").fadeIn();
    $(".shareInComment").fadeIn();
    }, function(){
    $(".imgTitle").fadeOut();
    $(".shareInComment").fadeOut();
});
});

});

</script>



<div class="container-fluid commentRoot" style="padding:0; height:100%;" >
    {!! Form::hidden('isCommentSection','Yes',['id'=>'isCommentSection']) !!}       
  <!--  <input type="hidden" id="isCommentSection" value="Yes"/> -->
     <div class="col-lg-7 col-md-7 col-sm-7 photoPane" style="background-color: #000; height:100%;  text-align: center; padding-left: 50px; padding-right:50px; padding-top: 25px; padding-bottom:25px; ">
       
         <div class="imgTitle" style="display:none; position:absolute; width:100%; top:0; left:0; background-color: #000; opacity: .7; padding-left: 10px; padding-top:5px; padding-bottom:5px; padding-right:10px; font-size:15px; color:white;">{{$content[0]->title}}</div>
           {{--*/ $pg = str_replace(' ', '-', $content[0]->title); /*--}}   
           <a href="{{url($pg.'-'.$content[0]->id)}}" >
        
         <img src="{{url($content[0]->meme->filelocation)}}" class="img-responsive" style=" max-width: 100%; max-height: 100%; vertical-align: middle;"></img>       
         </a>
         <div class="shareInComment" style=" position:absolute; width:100%; left:0; bottom:0;background-color: #000; opacity: .7; color:white;">
             <div class="col-lg-2">
             @if($content[0]->like==1)
             
             {!! Form::hidden('likeValue',$content[0]->like,['id'=>'likeValue'.$content[0]->id]) !!}    
         <!--     <input type="hidden" id="likeValue{{$content[0]->id}}" value="{{$content[0]->like}}">  -->
              <a id="likebttn_{{$content[0]->id}}" onclick="like({{$content[0]->id}})" style="float: left; color:white; margin-left: 5px;" href="javascript:void(0);"><div id="likebttn_text_{{$content[0]->id}}">Unlike</div></a>    
             
             @else
               {!! Form::hidden('likeValue',$content[0]->like,['id'=>'likeValue'.$content[0]->id]) !!} 
        <!--      <input type="hidden" id="likeValue{{$content[0]->id}}" value="{{$content[0]->like}}"> -->
             <a id="likebttn_{{$content[0]->id}}" onclick="like({{$content[0]->id}})" style="float: left; color:white; margin-left: 5px;" href="javascript:void(0);"><div id="likebttn_text_{{$content[0]->id}}">Like</div></a>
 
             
             @endif
                 
             </div>
            
             
             <div class="col-lg-8" >
                 <ul style="list-style: none; padding-left:30%;">
                
                     <li style="float:left;"><img src="{{url('images/facebook-w.png')}}" onclick="location.href='http://www.facebook.com/share.php?u={{url($pg.'-'.$content[0]->id)}}&title={{$content[0]->title}}';" style=" margin-left: 5px; height:25px;"/></li>
                     <li style="float:left; "><img src="{{url('images/google-w.png')}}" onclick="location.href='https://plus.google.com/share?url={{url($pg.'-'.$content[0]->id)}}&title={{$content[0]->title}}';" style=" margin-left: 5px;  height:25px;"/></li>
                     <li style="float:left; "><img src="{{url('images/twitter-w.png')}}" onclick="location.href='http://twitter.com/home?status={{url($pg.'-'.$content[0]->id)}}';" style=" margin-left: 5px; height:25px;"/></li>
                  <!--  <li style=" float:left;"><img src="{{url('images/instagram-w.png')}}" style=" margin-left: 5px; height:25px;"/></li> -->
                                
            </ul>
                 
                 
             </div>
            
             <div class="col-lg-2" style="text-align: right;">
              @if($content[0]->report==1)
             
             {!! Form::hidden('reportValue',$content[0]->report,['id'=>'reportValue'.$content[0]->id]) !!}
              <a id="reportbttn_{{$content[0]->id}}" onclick="report({{$content[0]->id}})" style="float: left; color:white; margin-left: 5px;" href="javascript:void(0);"><div id="reportbttn_text_{{$content[0]->id}}">UnFlag</div></a>    
             
             @else
               {!! Form::hidden('reportValue','{{$content[0]->like}}',['id'=>'reportValue{{$content[0]->id}}']) !!}
             <a id="reportbttn_{{$content[0]->id}}" onclick="report({{$content[0]->id}})" style="float: left; color:white; margin-left: 5px;" href="javascript:void(0);"><div id="reportbttn_text_{{$content[0]->id}}">Report</div></a>
 
             @endif
                 
             </div>
             
         </div>
      
         
     </div>
   
    
     <div class="col-lg-5 col-md-5 col-sm-5" style="padding:0;">
               
        <div id="close" style="border-radius:100%;"><span id="closeComment" class="toolr closeComment glyphicon glyphicon-remove" onclick="closeComment()" data-toggle="tooltip" data-placement="left" title="Click to close" style="height:25px; color:#ccc; cursor: pointer;"></span></div>
          <script>
          $(document).ready(function(){
           $('[data-toggle="tooltip"]').tooltip();   
          });
         </script>
         
<div class="container-fluid commentsPane" style=" width:100%; overflow-y: auto; background-color: #fff;"> 
     
    <br>
<div class="row">
     <span id="closeComment" class="closeCommentMobile glyphicon glyphicon-arrow-left" onclick="closeComment()" style="font-size:25px; color:#ccc; cursor: pointer; float:left; margin-left: 5px; margin-top:-1px; margin-right:10px;"></span>
       
     @if($content[0]->like==1)
             {!! Form::hidden('likeValue','{{$content[0]->like}}',['id'=>'likeValue{{$content[0]->id}}']) !!} 
        <!--      <input type="hidden" id="likeValue{{$content[0]->id}}" value="{{$content[0]->like}}"> -->
              <a id="likebttn_{{$content[0]->id}}" onclick="like({{$content[0]->id}})" style="float: left; color:white; margin-left: 15px; margin-right: 5px;" href="javascript:void(0);"><span id="likebttn_img2_{{$content[0]->id}}" class="glyphicon glyphicon-thumbs-up" style="color:#19887e; font-size:20px; "></span></a>    
             
             @else
              {!! Form::hidden('likeValue','{{$content[0]->like}}',['id'=>'likeValue{{$content[0]->id}}']) !!} 
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
    <br>
         
     @include ('content.commentPane')
     @if(Auth::user())

<div class="writeCommentArea"  style="">
    <div class="col-xs-2">
       <img href="#"  src="{{ Auth::user()->avatar }}" style="height:30px; margin-top:10px; margin-left: 5px; width:30px; border-radius:100%;  "> </img>
   
    </div>
    <div class="col-xs-10">
    <div class="input-group">
                
                {!! Form::textarea('',null,['id'=>'commentText','class'=>'form-control','placeholder'=>'Write Comment','style'=>'border:none; width:100%; resize:none; height:50px;','required']) !!} 
            <!--    <input required type="text" class="form-control" id="commentText"  placeholder="Write Comment" style="border:none; width:100%;"> -->
                <span onclick="sendComment({{$content[0]->id}})" class="input-group-addon" style="background-color: #fff; border:none;"><img href="#"  src="/images/send.png" style="height:25px; cursor: pointer;"> </img></span></span>
            </div>
    </div>
    
</div>
@else
<div class="writeCommentArea"  style="padding-top:15px;  text-align:center;">
Kindly Login to post Comment. 
</div>
@endif
<br>
     </div>
 
    
</div>