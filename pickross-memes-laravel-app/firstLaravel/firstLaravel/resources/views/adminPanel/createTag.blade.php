@extends('adminPanel.webUIMaintenance')
@section('content') 

{!! Form::open(['method' => 'POST' , 'action' => ['WebUIMaintController@createTag'] ])  !!}
                  
                  
                  @include('adminPanel._tagForm', ['submitBtn' => ' Create Tag '])
                 {!! Form::close()  !!}
@stop