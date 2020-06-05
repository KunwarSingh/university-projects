@extends('adminPanel')

@section('title')
      Content Maintenance
@stop  

@section('section1')
<div class="col-lg-4 col-sm-4 col-md-4" >
   <script type="text/javascript" src="{{ asset('/js/adminPanel/contentMaint.js') }}"></script>
   {!! Form::text('searchContent',null,['class'=>'form-control','placeholder'=>'Search By Title','id'=>'searchContent','onkeyup'=>'searchContent(this,"A")','onblur'=>'searchEmpty()']) !!}
   <div id='searchContentResult'></div>   
</div>   
@stop
@section('section2')

 @yield('content')




 @stop


