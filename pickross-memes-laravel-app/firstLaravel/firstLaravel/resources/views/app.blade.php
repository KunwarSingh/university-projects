@extends('master')

@section('sideContent') 

     <!-- Sidebar End -->
 @stop   
 
 @section('secondHeader')	
	<div class="container-fluid second-heading">
    	   <div class="container">
	
        	<div class="col-lg-12 heading">
                    @if($tagname=="Trending" or $tagname=="Fresh")
            	    Pickcross is largest collection of funny Indian Memes & Jokes. Checkout Pickcross and start creating awesome memes today.
        	    @else
                         {{$tag->metatitle}}
                    @endif     
                </div>
			
           </div>
        </div>
 @stop
 

@section('mainContent')	
<div class="container contentContainer">
	<div class="row">
	    <!-- Blog Entries Column -->
              
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 contentClass" >
			@yield('content')
                       
                        <div id="results">  <!-- Pagination --> </div>
                            
                        
                        <div id="loader_image" style="width:100%;"><!--<img src="loader.gif" alt="" width="24" height="24"> Loading...please wait</img> --></div>
                        
                         <div id="loader_message" style="width:100%;"></div>
        </div>
          
             <div class="col-lg-4 col-md-4 sidebar" style="z-index:1;">
                 {{--*/ $cont=$trend; /*--}}
			@include ('._sidebar')
        </div>

</div>
</div>
   <script type="text/javascript" src="{{ asset('/js/sharebar.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/pagination.js') }}"></script> 
@stop     
    
    
       
                   
