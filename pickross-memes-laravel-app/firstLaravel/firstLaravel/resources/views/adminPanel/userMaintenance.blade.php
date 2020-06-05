@extends('adminPanel')

@section('title')
      Users Maintenance
@stop  

@section('section1')

<!-- add action after logic created -->
    {!! Form::open(['method' => 'POST'  ])  !!} 
        <div class="col-lg-8">
            {!! Form::text('username',null,['class'=>'form-control','placeholder'=>'Username','id'=>'username']) !!}
            {!! Form::email('username',null,['class'=>'form-control','placeholder'=>'Email Id','id'=>'email']) !!}
        </div>
        <div class="col-lg-4">
            Filter By : 
            {!! Form::label('type','Admin') !!}
            {!! Form::checkbox('type') !!}
            {!! Form::label('type','User') !!}
            {!! Form::checkbox('type') !!}
            {!! Form::submit('Search',['class'=>'btn btn-primary','id'=>'searchUsers','style'=>'width:100%']) !!}
        </div>
     {!! Form::close()  !!}  
  @stop  
    
    @section('section2')
    
       @yield('content')
        
    @stop
   
   @section('section3')<div class="userCRUD">
       <div class="col-lg-4"></div>
                <div class="col-lg-8">
                    {!! Form::button('Create',['class'=>'btn btn-primary']) !!}
                    {!! Form::button('Edit',['class'=>'btn btn-primary']) !!}
                    {!! Form::button('Delete',['class'=>'btn btn-primary']) !!}
                    {!! Form::button('Email',['class'=>'btn btn-primary']) !!}
                </div>
                <div class="col-lg-4"></div>
                
   </div>
    @stop
    



