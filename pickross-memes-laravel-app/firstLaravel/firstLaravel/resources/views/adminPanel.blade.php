@extends('master')
@section('mainContent') 
	
<div class="container-fluid adminContentContainer" style="max-width:1250px;">
	<div class="row">
	    <!-- Blog Entries Column -->
         
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 " >
			@include ('adminPanel.sideMenu')
        </div>    
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 adminMain" >
			



                          <div class="row title">
                            @yield('title')
                          </div> 
                          <div class="row section1">
                            @yield('section1')        
                           </div>
    
                           <div class="row section2">
                           @yield('section2')       
                           </div>
                            <br>
    <div class="row section3">
        @yield('section3') 
        
    </div>
    




        </div>
          
             

</div>
</div>
@stop   
    
    
   