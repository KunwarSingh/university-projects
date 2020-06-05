@extends('adminPanel.userMaintenance')
@section('content')
 
<div class="container userGridList" style="width:100%;" >
            <div class="row userHead" style="font-weight: 200; font-size: 20px; height:30px; background-color: #D0D0D0; ">
                <div class="col-lg-1 ">Id</div>
                <div class="col-lg-2 ">Username</div>
                <div class="col-lg-3 ">Email</div>
                <div class="col-lg-1 ">Type</div>
                <div class="col-lg-2 ">MPlay </div>
                <div class="col-lg-2 ">Loyalty </div>
                <div class='col-lg-1'></div>
            </div>
            <?php $i =0; ?>
            @foreach($user as $u)
            <div class="row uRow" id="row{{$i}}" onclick="userRow(this)">
                 <div class="col-lg-1" id="userId" >{{$u->id}}</div>
               <div class="col-lg-2">{{$u->username}}</div>
                <div class="col-lg-3">{{$u->email}}</div>
                <div class="col-lg-1">{{$u->usertype}}</div>
                <div class="col-lg-2">{{$u->mplaypoints}}</div> 
                <div class="col-lg-2">{{$u->loyaltypoints}}</div> 
                <div class="col-lg-1" ><a href='{{url('adminPanel/userMaintenance/editUser/'.$u->id)}}'>Edit</a></div> 
            </div>
            {{--*/ $i++; /*--}}
            @endforeach
            <script>   // script to select color and i for current
    var prevId="AA"; 
    var prevBGColor="AA";
    function userRow(id){
        if(prevId!=="AA"){
        prevId.style.background=prevBGColor;
        }
        prevBGColor=id.style.background;
    
        id.style.background= "#4DB870";
        prevId=id;
       // document.write(prevId.style.background);
    
}

            </script>   
        </div>
@stop