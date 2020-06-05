@extends('members')
@section('content')
<div class="container" style="max-width:1300px; padding-top:100px;">
{!! Form::model($hall,['method' => 'PATCH' , 'action' => ['MainController@updateHall',$hall->id] ])  !!}
<div class="col-lg-6" >

                  <div class="form-group" >
                                  {!! Form::label('name','Hall Name') !!}
                                  {!! Form::text('name',null,['class'=>'form-control']) !!}
                  </div>
                  <div class="form-group" >
                                  {!! Form::label('description','Description') !!}
                                  {!! Form::textarea('description',null,['class'=>'form-control','style'=>'width: 100%; height:50px; resize:none;']) !!}
                  </div>
				                  
                  <div class="row form-group" >
                                  
								  <div class="col-lg-8">
								  {!! Form::label('address','Address') !!}
								  {!! Form::textarea('street',null,['class'=>'form-control','style'=>'width: 100%; height:55px; resize:none; margin:10px;']) !!}
								  {!! Form::textarea('suburb',null,['class'=>'form-control','style'=>'width: 100%; height:55px; resize:none; margin:10px;']) !!}
								  </div>
								  <div class="col-lg-4">
                                  {!! Form::select('city',['select city','chennai','delhi'],null,['class'=>'form-control','style'=>'margin:5px;']) !!}
								  {!! Form::select('state',['select state','chennai','delhi'],null,['class'=>'form-control','style'=>'margin:5px;']) !!}
								  {!! Form::select('country',['select country','chennai','delhi'],null,['class'=>'form-control','style'=>'margin:5px;']) !!}
								  {!! Form::text('pincode',null,['class'=>'form-control','style'=>'margin:5px;','placeholder'=>'Pincode']) !!}
								  </div>
                  </div>
				  <div class="form-group" >
                                  {!! Form::label('category_list','Categories: (max 3)') !!} <p id="msg" style="color:red;"></p>
                                  {!! Form::select('category_li[]',['Banquet Hall','Marriage Palace','Community Hall','Kitty Hall'],null,['class'=>'form-control','multiple','style'=>'height:100px;']) !!}
                  </div>
                  <div class="row form-group" >
				                  <div class="col-lg-6">
                                  {!! Form::label('website','Website') !!}
                                  {!! Form::text('website',null,['class'=>'form-control']) !!}
								  </div>
								  <div class="col-lg-6">
                                  {!! Form::label('blog','Blog') !!}
                                  {!! Form::text('blog',null,['class'=>'form-control']) !!}
								  </div>
                  </div>
				  <br>
				   <div class="row form-group" >
				                  <div class="col-lg-6">
                                  {!! Form::label('primary_email','Primary Email') !!}
                                  {!! Form::text('primary_email',null,['class'=>'form-control']) !!}
								  </div>
								  <div class="col-lg-6">
                                  {!! Form::label('alternate_email','Alternate Email') !!}
                                  {!! Form::text('alternate_email',null,['class'=>'form-control']) !!}
								  </div>
                  </div><br>
				   <div class="row form-group" >
				                  <div class="col-lg-6">
                                  {!! Form::label('primary_contact','Primary Contact No.') !!}
                                  {!! Form::text('primary_contact',null,['class'=>'form-control']) !!}
								  </div>
								  <div class="col-lg-6">
                                  {!! Form::label('alternate_contact','Alternate Contact No.') !!}
                                  {!! Form::text('alternate_contact',null,['class'=>'form-control']) !!}
								  </div>
                  </div><br>
                  <div class="form-group" >
				                  {!! Form::label('','Choose Subscription') !!} &nbsp &nbsp
				                  {!! Form::radio('subscription','gold',null,['id'=>'s1']) !!}
                                  {!! Form::label('subscription','Gold') !!}
								  {!! Form::radio('subscription','silver',null,['id'=>'s2']) !!}
                                  {!! Form::label('subscription','Silver') !!}
								  {!! Form::radio('subscription','platinum',null,['id'=>'s3']) !!}
                                  {!! Form::label('subscription','Platinum') !!}
								  {!! Form::radio('subscription','free',true,['id'=>'s4']) !!}
                                  {!! Form::label('subscription','Free') !!}
                                  
                  </div>
                  <div class="form-group" >
                    {!! Form::submit('Update Changes',['class'=>'btn btn-primary']) !!}
                  </div>


</div>
<div class="col-lg-6">
                  <div class="row">
				  <div class="col-lg-5">
				  <div class="img-title">Avatar</div>
				  <div class="img-help">250x250</div>
				  <input type="file" id="avatar" name="avatar" onchange="upload(this)">				
				  </div>
				  <div class="col-lg-7">
				  <img id='avatarimg' src='{{url("/images/halls/".$hall->avatar)}}' class="img-responsive" style="max-height:120px;">
				  </div>
				  </div><hr />
				  
				  <div class="row">
				  <div class="col-lg-5">
				  <div class="img-title">Cover</div>
				  <div class="img-help">1200x400</div>
				  <input type="file" id="cover" name="cover" onchange="upload(this)">
				  <input type="button" value="Upload">
				  </div>
				  <div class="col-lg-7">
				  <img id='coverimg' src='{{url("/images/halls/".$hall->cover)}}' class="img-responsive" style="max-height:120px;">
				  </div>
				  </div><hr />
				  
				  <div class="row">
				  <div class="col-lg-5">
				  <div class="img-title">Platinum Cover</div>
				  <div class="img-help">600x200</div>
				  <input type="file" id="platinum_cover" name="platinum_cover" onchange="upload(this)">
				  <input type="button" value="Upload">
				  </div>
				  <div class="col-lg-7">
				  <img id='platinum_coverimg' src='{{url("/images/halls/".$hall->platinum_cover)}}' class="img-responsive" style="max-height:120px;">
				  </div>
				  </div><hr />
				  
				  <div class="row">
				  <div class="col-lg-5">
				  <div class="img-title">Gold Cover</div>
				  <div class="img-help">150x200</div>
				  <input type="file" name="gold_cover" id="gold_cover" onchange="upload(this)">
				  <input type="button" value="Upload">
				  </div>
				  <div class="col-lg-7">
				  <img id='gold_coverimg' src='{{url("/images/halls/".$hall->gold_cover)}}' class="img-responsive" style="max-height:120px;">
				  </div>
				  </div><hr />
				  
				  <div class="row">
				  <div class="col-lg-5">
				  <div class="img-title">Silver Cover</div>
				  <div class="img-help">150x100</div>
				  <input type="file" name="silver_cover" id="silver_cover" onchange="upload(this)">
				  <input type="button" value="Upload">
				  </div>
				  <div class="col-lg-7">
				  <img id='silver_coverimg' src='{{url("/images/halls/".$hall->silver_cover)}}' class="img-responsive" style="max-height:120px;">
				  </div>
				  </div><hr />
				  
				  <div class="row">
				  <div class="col-lg-5">
				  <div class="img-title">Side Banner</div>
				  <div class="img-help">300x200</div>
				  <input type="file" name="banner" id="banner" onchange="upload(this)">
				  <input type="button" value="Upload">
				  </div>
				  <div class="col-lg-7">
				  <img id='bannerimg' src='{{url("/images/halls/".$hall->banner)}}' class="img-responsive" style="max-height:120px;">
				  </div>
				  </div><hr />
				  
				  
				  
				  
                  

</div>

{!! Form::close()  !!}
</div>


<script>
function upload(item){
	console.log(item.name);
	 var file = $("#"+item.id).prop('files')[0]; 
     var data = new FormData();
     data.append('file', file);
     data.append('id',{{$hall->id}});
	 data.append('type',item.name);
console.log(data);
jQuery.ajax({
    url: '/members/settings/uploadimg',
    data: data,
	headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
    cache: false,
    contentType: false,
    processData: false,
    type: 'POST',
    success: function(data){
		console.log(data);
		//$("#result1").append(data);
	//	console.log(document.getElementById(item.id));
		//var str = document.getElementById(item.id).src.split("\");
		document.getElementById(item.id+'img').src=data;
        console.log("success");
    }
}); 
}
</script>

@stop