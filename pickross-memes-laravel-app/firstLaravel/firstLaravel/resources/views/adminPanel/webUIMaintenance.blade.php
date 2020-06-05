@extends('adminPanel')

@section('title')
      Web UI Maintenance
@stop  

@section('section1')


<ul class="nav nav-tabs" role="tablist" id="myTab">

  <li role="presentation" class="active"><a href="#Tags" aria-controls="home" role="tab" data-toggle="tab">Tags</a></li>
  <li role="presentation"><a onclick="showHint()" href="#NavBar" aria-controls="profile" role="tab" data-toggle="tab">Nav Bar</a></li>
  <li role="presentation"><a href="#SideContent" aria-controls="messages" role="tab" data-toggle="tab">Side Content</a></li>
  

</ul>
@stop
@section('section2')
<div class="tab-content">


  <div role="tabpanel" class="tab-pane active" id="Tags">
  
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="container" style="width:100%;">
          <div class="row">
              <div class="col-lg-3">
                 
                  @foreach($tags as $t)
                 
                  <div class="row"><a href="{{ action('WebUIMaintController@editTag' , $t->id) }}">{{$t->tagname}}</a></div>
                   @endforeach
              </div>
              <div class="col-lg-9 ">
                    @yield('content')
              </div>
                  
              
              
          </div>
          
      </div>
     <!-- No need for now
      <div class="userCRUD">
       <div class="col-lg-4"></div>
                <div class="col-lg-8">
                    <button type="submit">Create</button>
                    <button type="button">Edit</button>
                    <button type="button">Delete</button>                   
                </div>
                <div class="col-lg-4"></div>
                
   </div>
  -->
  
  </div>
  
 
  
  <div role="tabpanel" class="tab-pane" id="NavBar">
<script type="text/javascript" src="{{ asset('/js/adminPanel/navbarAdmin.js') }}"></script>
  <div class="container" style="width:80%;">
          <div class="row" id="data">
              
                  
          </div>
      <div class="row" id="data2">
              
                  
          </div>
              
  </div>
  
 
 
 </div>
  <div role="tabpanel" class="tab-pane" id="SideContent">
   asdas asdsad asdsad 
   
  
  
  </div>
</div>



 @stop


