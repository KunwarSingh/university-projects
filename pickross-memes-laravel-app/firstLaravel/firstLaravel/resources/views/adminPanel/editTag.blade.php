@extends('adminPanel.webUIMaintenance')
@section('content')

{!! Form::model($currentTag,['method' => 'PATCH' , 'action' => ['WebUIMaintController@updateTag',$currentTag->id] ])  !!}
                 
                  
                  @include('adminPanel._tagForm', ['submitBtn' => ' Update Tag '])
                  
                 {!! Form::close()  !!}
                 
                 {!! Form::open(['method' => 'DELETE' , 'action' => ['WebUIMaintController@deleteTag',$currentTag->id] ])  !!}
                    <div class="form-group" >
                    {!! Form::submit('Delete Tag',['class'=>'btn btn-primary delete','style'=>'background-color:red;']) !!}
                  </div>
                  {!! Form::close()  !!}
@stop