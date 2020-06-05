@extends('adminPanel.contentMaintenance')
@section('content')


<div class="col-lg-2">
    <ul style="list-style: none;">
        <li>Content Id</li>
        <li>User Id</li>
        <li>Pscore</li>
        <li>Type</li>
        <li>Views</li>
        <li>Likes</li>
        <li>Shares</li>
        <li>Comments</li>
        <li>Redflag</li>  
    </ul>           
    
</div>
<div class="col-lg-2">
    <ul style="list-style: none;">
        <li>{{$currentContent->id}}</li>
        <li>{{$currentContent->userid}}</li>
        <li>{{$currentContent->pscore}}</li>
        <li>{{$currentContent->ctype}}</li>
        <li>{{$currentContent->nviews}}</li>
        <li>{{$currentContent->nlikes}}</li>
        <li>{{$currentContent->nshares}}</li>
        <li>{{$currentContent->ncomments}}</li>
        <li>{{$currentContent->redflag}}</li>  
    </ul>           
    
</div>
<div>
 {!! Form::model($currentContent,['method' => 'PATCH' , 'action' => ['ContentMaintController@updateContent',$currentContent->id] ])  !!}
    
<div class="col-lg-5">
                
                  
                  <div class="form-group" >
                                  {!! Form::label('title','Title') !!}
                                  {!! Form::textarea('title',null,['class'=>'form-control','style'=>'height:100px;resize:none;']) !!}
                  </div>
                
                  <div class="form-group" >
                                  {!! Form::label('isvisible','Is Visible') !!}
                                  {!! Form::text('isvisible',null,['class'=>'form-control']) !!}
                  </div>
    
                  <div class="form-group" >
                                  {!! Form::label('isfeatured','Is Featured') !!}
                                  {!! Form::text('isfeatured',null,['class'=>'form-control']) !!}
                  </div>
                  
                
                 
                 
                  
 
                 
 
</div>
 <div class="col-lg-3">
                  <div class="form-group" >
                      {!! Form::label('tag_list','Tags: (max 2)') !!} <p id="msg" style="color:red;"></p>
                                  {!! Form::select('tag_list[]',$tags,null,['class'=>'form-control','multiple','style'=>'height:300px;']) !!}
                  </div>
     
 </div>
  
                  <div class="form-group" >
                    {!! Form::submit('Update Content',['class'=>'btn btn-primary']) !!}
                  </div>

    {!! Form::close()  !!}
</div>


<script>
    $(document).ready(function(){
    $("#moretags").click(function(){
        $(".moreTags").slideToggle("slow");
    });   
});

var limit = 2;
$(document).ready(function(){
$(".moreTagCheck").click(function() {

    var bol = $(".moreTagCheck:checked").length >= 2;     
    $(".moreTagCheck").not(":checked").attr("disabled",bol);

});    
    

});

jQuery(document).ready(function () {

jQuery("select").on("change", function(){
  var msg = $("#msg");

  var count = 0;

  for (var i = 0; i < this.options.length; i++)
  {
    var option = this.options[i];

    option.selected ? count++ : null;

    if (count > 2)
    {
        option.selected = false;
        option.disabled = true;
        msg.html("Please select only two options.");
    }else{
        option.disabled = false;
        msg.html("");
    }
  }
});
});
</script>


@stop
