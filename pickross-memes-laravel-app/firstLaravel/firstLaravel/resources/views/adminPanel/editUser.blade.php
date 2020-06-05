@extends('adminPanel.userMaintenance')
@section('content')
 

{!! Form::model($user,['method' => 'PATCH' , 'action' => ['UserMaintController@updateUser',$user->id] ])  !!}
                 
                  

                  <div class="form-group" >
                                  {!! Form::label('username','UserName') !!}
                                  {!! Form::text('username',null,['class'=>'form-control']) !!}
                  </div>
                  <div class="form-group" >
                                  {!! Form::label('email','Email') !!}
                                  {!! Form::email('email',null,['class'=>'form-control']) !!}
                  </div>
                  <div class="form-group" >
                                  {!! Form::label('usertype','User Type [ Admin:1  , User:0 ]') !!}
                                  {!! Form::text('usertype',null,['class'=>'form-control']) !!}
                  </div>
                  
                  <div class="form-group" >
                    {!! Form::submit('Update User',['class'=>'btn btn-primary']) !!}
                  </div>


                 {!! Form::close()  !!}


@stop