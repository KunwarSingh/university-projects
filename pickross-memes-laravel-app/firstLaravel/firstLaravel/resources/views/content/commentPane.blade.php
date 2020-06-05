

  
   
@if(!$userAction->isEmpty())

@foreach($userAction as $u)
<div class="row">
    <div class="col-xs-2 col-lg-2" style="padding:auto;">
    <img href="#"  src="{{ $u->avatar }}" style=" margin-left:5px; height:30px; width:30px; border-radius:100%; "> </img>
    </div>
    
    <div class="col-xs-10 col-lg-10">
        <div style="font-size: 15px; font-weight: bold;">{{$u->username}}</div>
        <div style="font-size: 12px; font-weight: normal;" class="commentRow">{{$u->actioncontent}}</div>
        <div style="font-size: 8px; font-weight: normal; color:#ccc;"> {{ $u->datediff}}</div>
        
    </div>
    
</div>
<br>
@endforeach
@endif
<div id="newcomment"></div>
<div style="height:50px"></div>

</div>



    