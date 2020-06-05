@extends('plainapp')

@section('content')


<ul class="nav nav-tabs" role="tablist" id="myTab">
<li role="presentation"><a href="" aria-controls="profile" role="tab" data-toggle="tab">Create a(n) </a></li>
  <li role="presentation" class="active"><a href="#Poll" aria-controls="home" role="tab" data-toggle="tab">Poll</a></li>
  <li role="presentation"><a href="#Meme" aria-controls="profile" role="tab" data-toggle="tab">Meme</a></li>
  <li role="presentation"><a href="#Faceoff" aria-controls="messages" role="tab" data-toggle="tab">Faceoff</a></li>
  <li role="presentation"><a href="#Article" aria-controls="settings" role="tab" data-toggle="tab">Article</a></li>
  <li role="presentation"><a href="#Admin" aria-controls="settings" role="tab" data-toggle="tab">Admin</a></li>
  <li role="presentation"><a href="#Tag" aria-controls="settings" role="tab" data-toggle="tab">Tag</a></li>
  <li role="presentation"><a href="#Delete" aria-controls="settings" role="tab" data-toggle="tab">Delete</a></li>
  
				
  
</ul>

<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="Poll">
  
 <h1> New Poll </h1>

<hr>

{!! Form::open(['files' => true]) !!}

	{!! Form::hidden('ctype', 'P')!!}

{!! Form::hidden('tags', 'Test')!!}
		<div class ="form-group">
		{!! Form::label('title', 'Title:')!!}
		{!! Form::text('title', null, ['class' => 'form-control']) !!}
	</div>	



	<div class ="form-group">
		{!! Form::label('content', 'Content:')!!}
		{!! Form::file('pollcontent') !!}
	</div>

	<div class ="form-group">
		{!! Form::label('Option1', 'Option 1:')!!}
		{!! Form::text('option[]', null, ['class' => 'form-control']) !!}
	</div>

	<div class ="form-group">
		{!! Form::label('Option2', 'Option 2:')!!}
		{!! Form::text('option[]', null, ['class' => 'form-control']) !!}
	</div>
	
<div class ="form-group">
		{!! Form::label('Option3', 'Option 3:')!!}
		{!! Form::text('option[]', null, ['class' => 'form-control']) !!}
	</div>
	
	<div class ="form-group">
		{!! Form::label('Option4', 'Option 4:')!!}
		{!! Form::text('option[]', null, ['class' => 'form-control']) !!}
	</div>


	<div class ="form-group">
		{!! Form::Submit('submit', ['class' => 'btn btn-primary form-control']) !!}
	</div>
{!! Form::close() !!}

@if($errors->any())

	<ul class= "alert alert-danger">
		@foreach($errors->all() as $error )
		<li>{{ $error }}</li>
		@endforeach
	</ul>

@endif
  
  </div>
  
  
  
  <div role="tabpanel" class="tab-pane" id="Meme">
  
   <h1> New Meme </h1>

<hr>
  {!! Form::open(['files' => true]) !!}
  
  {!! Form::hidden('ctype', 'M')!!}
		<div class ="form-group">
		{!! Form::label('title', 'Title:')!!}
		{!! Form::text('title', null, ['class' => 'form-control']) !!}
	</div>	



	<div class ="form-group">
		{!! Form::label('content', 'Content:')!!}
		{!! Form::file('pollcontent') !!}
	</div>



	<div class ="form-group">
		{!! Form::Submit('submit', ['class' => 'btn btn-primary form-control']) !!}
	</div>
{!! Form::close() !!}
  
 
 
 </div>
  <div role="tabpanel" class="tab-pane" id="Faceoff">
   
   <h1> New Faceoff </h1>

<hr>
  
  {!! Form::open(['files' => true]) !!}
  
  {!! Form::hidden('ctype', 'F')!!}
		<div class ="form-group">
		{!! Form::label('title', 'Title:')!!}
		{!! Form::text('title', null, ['class' => 'form-control']) !!}
	</div>	



	<div class ="form-group">
		{!! Form::label('content', 'Content:')!!}
		{!! Form::file('pollcontent') !!}
	</div>



	<div class ="form-group">
		{!! Form::Submit('submit', ['class' => 'btn btn-primary form-control']) !!}
	</div>
{!! Form::close() !!}
  
  
  </div>
  <div role="tabpanel" class="tab-pane" id="Article">
  
   <h1> New Article </h1>

<hr>
  {!! Form::open(['files' => true]) !!}
  {!! Form::hidden('ctype', 'A')!!}
		<div class ="form-group">
		{!! Form::label('title', 'Title:')!!}
		{!! Form::text('title', null, ['class' => 'form-control']) !!}
	</div>	



	<div class ="form-group">
		{!! Form::label('content', 'Content:')!!}
		{!! Form::textarea('option', null, ['class' => 'form-control']) !!}
	</div>



	<div class ="form-group">
		{!! Form::Submit('submit', ['class' => 'btn btn-primary form-control']) !!}
	</div>
{!! Form::close() !!}
  
  
  </div>
</div>

<script>
  $(function () {
    $('#myTab a:last').tab('show');
  });
</script>




@stop