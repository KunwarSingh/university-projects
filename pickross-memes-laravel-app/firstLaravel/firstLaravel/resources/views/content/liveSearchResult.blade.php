<style>
    .searchViewRow:hover{
        background-color: #ddd;
        cursor:pointer;
    } 
    #clickableArea{
        position: absolute;
        width:100%;
        height:56px;
        z-index: 45;
    }
</style>

<div class=" searchView" style="z-index: 40;background-color: white; ">
 @if($type=='A')   
@foreach($content as $c)

<div class=" searchViewRow" style='height:56px; width:100%; padding:3px; margin-bottom: 2px;'>
    <a id='clickableArea' href="{{ action('ContentMaintController@editContent' , $c->id) }}"></a> 
    <div class='col-lg-3 col-md-3 col-sm-3' style='height:50px; overflow: hidden; padding-left:5px; padding-right: 5px;'>
       {{--*/ $pg = str_replace(' ', '-', $c->title); /*--}}
   
   <a href="{{url($pg.'-'.$c->id)}}" >
        <img src="{{url($c->meme->filelocation)}}" class="img-responsive" onclick="viewCount({{$c->id}},15)" style='height:70px;'></img> </a>
    </div>
    <div class='col-lg-9 col-md-9 col-sm-9' style='height:50px;'>
        <div class="searchViewTitle" style='height:20px; overflow-x: hidden; overflow-y: hidden; font-size: 14px;font-weight: bold;'>  {{$c->title}}</div>
        <div class="searchViewTags" style='height:16px; font-size: 12px;'>
        @if(!$c->tags->isEmpty())    

        <ul style="list-style: none; padding-left: 0px; ">    
    @foreach($c->tags as $tag)
    <a href="{{url('/'.$tag->tagname)}}"><li style="display:inline-block;color:black;"> {{$tag->tagname}}</li></a>
    @endforeach
        </ul>   
         @endif
            
        </div>
        
        <div class="searchViewPscore" style='height:14px; font-size: 10px;'>  Pscore {{$c->pscore}}</div>
    </div>    
</div> 
@endforeach

@elseif($type=='S')

@foreach($content as $c)

<div class=" searchViewRow" style='height:56px; width:100%; padding:3px; margin-bottom: 2px;'>
    {{--*/ $pg = str_replace(' ', '-', $c->title); /*--}}   
    <a id='clickableArea' href="{{url($pg.'-'.$c->id)}}"></a>  
    <div class='col-lg-3 col-md-3 col-sm-3' style='height:50px; overflow: hidden; padding-left:5px; padding-right: 5px;'>
      <a href="{{url($pg.'-'.$c->id)}}" >
        <img src="{{url($c->meme->filelocation)}}" class="img-responsive" onclick="viewCount({{$c->id}},15)" style='height:70px;'></img> </a>
    </div>
    <div class='col-lg-9 col-md-9 col-sm-9' style='height:50px;'>
        <div class="searchViewTitle" style='height:20px; overflow-x: hidden; overflow-y: hidden; font-size: 14px;font-weight: bold;'>  {{$c->title}}</div>
        <div class="searchViewTags" style='height:16px; font-size: 12px;'>  
         @if(!$c->tags->isEmpty())    

        <ul style="list-style: none; padding-left: 0px; ">    
    @foreach($c->tags as $tag)
    <a href="{{url('/'.$tag->tagname)}}"><li style="display:inline-block;color:black;"> {{$tag->tagname}}</li></a>
    @endforeach
        </ul>   
         @endif
        </div>
        <div class="searchViewPscore" style='height:14px; font-size: 10px;'>  Pscore {{$c->pscore}}</div>
    </div>    
</div> 
@endforeach

@else($type=='M')

@foreach($content as $c)

<div class=" searchViewRow" style='height:56px; width:100%; padding:3px; margin-bottom: 2px;'>
     {{--*/ $pg = str_replace(' ', '-', $c->title); /*--}}   
    <a id='clickableArea' href="{{url($pg.'-'.$c->id)}}"></a>
    <div class='col-xs-3' style='height:50px; overflow: hidden; padding-left:5px; padding-right: 5px;'>
     <a href="{{url($pg.'-'.$c->id)}}" >
        <img src="{{url($c->meme->filelocation)}}" class="img-responsive" onclick="viewCount({{$c->id}},15)" style='width:100px;'></img> </a>
    </div>
    <div class='col-xs-9' style='height:50px;'>
        <div class="searchViewTitle" style='height:20px; overflow-x: hidden; overflow-y: hidden; font-size: 14px;font-weight: bold;'>  {{$c->title}}</div>
        <div class="searchViewTags" style='height:16px; font-size: 12px;'> 
         @if(!$c->tags->isEmpty())    

        <ul style="list-style: none; padding-left: 0px; ">    
    @foreach($c->tags as $tag)
    <a href="{{url('/'.$tag->tagname)}}"><li style="display:inline-block;color:black;"> {{$tag->tagname}}</li></a>
    @endforeach
        </ul>   
         @endif
        </div>
        <div class="searchViewPscore" style='height:14px; font-size: 10px;'>  Pscore {{$c->pscore}}</div>
    </div>    
</div> 
@endforeach
@endif
</div>
