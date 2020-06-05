

<div class='col-lg-4'>
  <div class='row'>Navbar Menu Order</div>

@if(!$navbarMain->isEmpty()) 
  
@foreach($navbarMain as $main)
<div class='row'>Section {{$main->navbarMainOrder}} <select class='form-control' name="section{{$main->navbarMainOrder}}" id="{{$main->navbarMainOrder}}" onchange='update(this)'>

      @foreach($tags as $t)
         @if($main->tagname==$t->tagname)
        
           <option selected="selected" value="{{$t->id}}">{{$t->tagname}}</option>
           
          @else
            <option value="{{$t->id}}">{{$t->tagname}}</option>;
          @endif  
        
      @endforeach



</select> 
</div>
@endforeach


@for($i=$navbarMain->last()->navbarMainOrder+1;$i<=10;$i++)
<div class="row sec{{$i}}" style="display: none;">Section {{$i}} </div>
<div class='row input-group' style="width:100%;"> <select class='form-control' name="section{{$i}}" id="{{$i}}" onchange='addSection(this)' style="display:none;">
 
       <option selected="selected" >Null</option>
   
      @foreach($tags as $t) <!-- only tags with no column id will be shown -->
            @if($t->navbarMainOrder==0 || $t->navbarMainOrder=='') 
            <option value="{{$t->id}}">{{$t->tagname}}</option>;
            @endif
            @endforeach
           
        </select> <span class="input-group-addon sec{{$i}}" style="display: none;"><span onclick='removeNew(this)' id="remove{{$i}}" class='glyphicon glyphicon-remove-circle' style='font-size: 15px; color:black; cursor:pointer;'></span></span>
</div>
@endfor



    <button id="{{$navbarMain->last()->navbarMainOrder}}" class='delete btn ' onclick='deleteSection(this)' >Delete Last </button>
  <!--  <button id="{{$navbarMain->last()->navbarMainOrder+1}}" class='add btn' onclick='addSection(this)' >Add New </button> -->
     <button id="{{$navbarMain->last()->navbarMainOrder+1}}" class='add btn' onclick='addNew(this)' >Add New </button>
 @else 
 <div class='row input-group' style="width:100%;"> <select class='form-control' name="section1" id="1" onchange='addSection(this)' >
 
       <option selected="selected" >Null</option>
   
         @foreach($tags as $t) <!-- if no more section this will execute once -->           
            @if($t->navbarMainOrder==0 || $t->navbarMainOrder=='') 
            <option value="{{$t->id}}">{{$t->tagname}}</option>;
            @endif           
            @endforeach
           
        </select> 
</div>
      
@endif

</div>
<div class='col-lg-4'></div>

<div class='col-lg-4'>
<div class='row'>More Section Order</div>

@if(!$navbarMore->isEmpty())

@foreach($navbarMore as $more)
<div class='row'>Section {{$more->navbarMainOrder}}<select class='form-control' name="more_section{{$more->navbarMainOrder}}" id="{{$more->navbarMainOrder}}" onchange='updateMore(this)'>


   @foreach($tags as $t)
         @if($more->tagname==$t->tagname)
      
        <option selected="selected" value="{{$t->id}}">{{$t->tagname}}</option>
        @else
            <option value="{{$t->id}}">{{$t->tagname}}</option>
        @endif
       
    @endforeach

    </select> </div> 
@endforeach

@for($i=$navbarMore->last()->navbarMainOrder+1;$i<=15;$i++)
<div class="row secMore{{$i}}" style="display: none;">Section {{$i}} </div>
<div class='row input-group' style="width:100%;"> <select class='form-control' name="section{{$i}}" id="{{$i}}" onchange='addMoreSection(this)' style="display:none;">
 
       <option selected="selected" >Null</option>
   
      @foreach($tags as $t) <!-- only tags with no column id will be shown -->
            @if($t->navbarMainOrder==0 || $t->navbarMainOrder=='') 
            <option value="{{$t->id}}">{{$t->tagname}}</option>;
            @endif
            @endforeach
           
        </select> <span class="input-group-addon secMore{{$i}}" style="display: none;"><span onclick='removeMoreNew(this)' id="remove{{$i}}" class='glyphicon glyphicon-remove-circle' style='font-size: 15px; color:black; cursor:pointer;'></span></span>
</div>
@endfor



    


  <button id="{{$navbarMore->last()->navbarMainOrder}}" class='delete btn' onclick='deleteMoreSection(this)' >Delete Last </button>
    <button id="{{$navbarMore->last()->navbarMainOrder+1}}" class='add btn' onclick='addMoreNew(this)' >Add New </button>
@else
<div class='row input-group' style="width:100%;"> <select class='form-control' name="section11" id="11" onchange='addMoreSection(this)' >
 
       <option selected="selected" >Null</option>
   
         @foreach($tags as $t) <!-- if no more section this will execute once -->           
            @if($t->navbarMainOrder==0 || $t->navbarMainOrder=='') 
            <option value="{{$t->id}}">{{$t->tagname}}</option>;
            @endif      
            @endforeach
           
        </select> 
</div>
@endif

   
</div>
