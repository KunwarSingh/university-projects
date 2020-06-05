<div class="row">
    <div class="col-xs-2" style="padding:auto;">
    <img href="#"  src="{{ Auth::user()->avatar }}" style="height:30px; width:30px; border-radius:100%; "> </img>
    </div>
    
    <div class="col-xs-10">
        <div style="font-size: 15px; font-weight: bold;">{{Auth::user()->username}}</div>
        <div style="font-size: 12px; font-weight: normal;" class="commentRow">{{$userAction->actioncontent}}</div>
        <div style="font-size: 8px; font-weight: normal; color:#ccc;">{{ $userAction->datediff}}</div>
        
    </div>
    
</div>
<br>
<!-- when a new comment is posted view is made -->