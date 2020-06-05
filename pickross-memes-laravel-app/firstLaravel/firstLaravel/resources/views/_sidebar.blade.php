<style>
    .searcsdsdhResult{
        
        background-color: white;
        display: block; position:relative;  width:100%; height:50px;  
    }
    
</style>


	<aside id="asideB">
		<div class="well" >
                    <div class="info container-fluid">
                        <div class="row" style="margin-left: -15px;">
                            <div class="col-lg-12 col-md-12 " style="padding-left:15px; padding-right: 15px;">
                                <ul style="list-style: none;">
                                        <li style="float:right; background-color: #19887e; padding:0px 3px 0px 3px; border-radius:2px;"> <a href="#" style="color:white;"> Contact Us</a> </li>
                          
                                    <li style="float:right;">
<!-- Place this tag where you want the widget to render. -->
<div class="g-follow" data-annotation="none" data-height="20" data-href="//plus.google.com/u/0/107592931159122790010" data-rel="publisher"></div>     
                                    </li>
                                    <li style="float:right;"> 

                                        
                                            <div class="fb-like" data-href="https://www.facebook.com/pickcross" data-width="10" data-layout="button" data-action="like" data-show-faces="true" data-share="false"></div>   
                                    </li></ul>
                                
                            
                                
                            </div>
                            
                        </div>
                    </div>
                 <div class="input-group" >
              {!! Form::text('search',null,['class'=>'form-control','placeholder'=>'Search By Title','id'=>'searchD','onkeyup'=>'search(this,"S")','onblur'=>'searchEmp()']) !!}       
                <!--   <input type="text" class="form-control search" id="searchD" onkeyup="search(this)" placeholder="Hot Search"> -->
                <span class="input-group-addon"><span class="glyphicon glyphicon-search" style="color:#19887e;" ></span></span>
                
            </div>
                    
                    <div id="searchResult" >

                    </div>
                    
        	<h4>@if($tagname=='Trending')
                    Fresh
                    @else
                    #Trending
                    @endif
                </h4>
                <div class="row contentSide">
                    <ul>
                @foreach($cont as $a)
                <li>
                       {{--*/ $pg = str_replace(' ', '-', $a->title); /*--}}
                    <a href="{{url($pg.'-'.$a->id)}}" style="position:absolute; width:100%; height:120px; cursor:pointer; z-index:45;"  ></a> 
                    <div style="overflow:hidden; height:18px;">
                    <a href='#'>{{$a->title}} </a>
                    </div>
                    <div style="overflow:hidden; height:100px;">
                         
                         <img  src="{{url($a->meme->filelocation)}}"  style="position:relative; top:-150px; left:-50px; width:400px;"></img>
                    </div>
                </li>
                @endforeach
                       
            	
					                </ul>
			</div>
		</div>
	</aside>  
<script>
    function search(searchBar,type){
         console.log("type="+type);
 var id =searchBar.id;
 console.log("id="+id);
  console.log(document.getElementById(id));
var value=document.getElementById(id).value;
console.log("value="+document.getElementById(id).value); // Value unable to fetch
//console.log(search.value);


    $.ajax({
    type: "POST",
    url: "/liveSearch",
    headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
    data: "search="+value+"&type="+type,
    cache: false,
    success: function(data)
    {
        console.log(data);
      
     $("#searchResult").html(data);
     $("#searchResult").show();
    }
    });
    
    }

 function searchEmp(){
      
      $("#searchResult").fadeOut(1000);
      //document.getElementById('searchResult').innerHTML=' ';
 }


    
    </script>
