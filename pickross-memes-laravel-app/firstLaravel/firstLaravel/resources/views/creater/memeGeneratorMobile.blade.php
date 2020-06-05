@extends('plainapp')

@section('content')


 <div class="container" id="memeBoxMobile" style="   width:100%; display: block; z-index: 20; background-color:white;  ">
     <form id="memeForm" method="POST" action="{{ url('/mGenerator') }}" files="true" onsubmit="return validateMemeForm();"> 
              <input type="hidden" name="ctype" value="M">       
     
     <div class="row memeTitleBarMobile">
                <div class="col-xs-6">
                    Meme Generator
                </div>
                <div class="col-xs-6" style="text-align: right;">
                    <a class="upload-button " href="javascript:void(0);"  style=" font-size:10px; color: #fff;  text-decoration: none;  width:100px; height: 30px; padding:5px 5px 5px 5px; background-color:#19887e; border: 1px solid #19887e;cursor: pointer;">
                        Upload new image</a>
                     {!! Form::file('pollcontent1',['id'=>'ifile','class'=>'uploadFileDivMobile','autocomplete'=>'off','onchange'=>'makeOrientationBlock()']) !!}
                   
                </div>
            </div>
            <div style='float:right; font-size:9px; margin-top: 3px;'>ImageType( GIF, JPG, PNG, BMP,) (Max size: 5MB)</div>
            
    <hr>
     {{--*/   $image_types = array(
         'gif' => 'image/gif',
         'png' => 'image/png',
         'jpg' => 'image/jpeg',);
         $k=0;/*--}}
    @foreach (scandir('assets/thumbnails/thumbs') as $entry) 
    @if(!is_dir($entry))
        @if(in_array(mime_content_type('assets/thumbnails/thumbs/'. $entry), $image_types))
        {{--*/ $library[$k]="/assets/thumbnails/thumbs/".$entry; $k++; /*--}} 
        @endif
    @endif
@endforeach
    
    {{--*/ $k=0; /*--}}
   
    <div class="row" id="library">
    <div  class="container" style="width:100%;">
        @for($j=0;$j<=11;$j++)
        <div class="row" style="margin-bottom: 20px;">
            @for($i=0;$i<=2;$i++)
             
            <div class="col-xs-4" style="overflow:hidden; height:105px">
                <img src="{{$library[$k]}}"  class="ifile2 img-responsive" style="cursor:pointer; min-height:105px; width:105px;" id="{{$j}}{{$i}}"></img>
             {{--*/ $k++; /*--}}
            </div>
            @endfor
        </div>
        @endfor
    </div>
    </div>
    
    
  
    
    
    
    
   
    <div id="box2" style="display:none;">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
 <input type="hidden"  name="pollcontent" id="file" style="display:none;"> 
    <div class="row " >
    <div class="col-xs-12"  >
        {!! Form::textarea('title',null,['id'=>'title','class'=>'form-control','maxlength'=>'140','placeholder'=>'Title','tabindex'=>'1','onKeyUp'=>'limitText(this);', 'required','style'=>'width: 100%; height:60px; resize:none;']) !!}
        <div  id="countdown" >140 Characters Left</div> 
        <div   style="" id="titleErrorMsg" ></div>
    </div></div>
         <div class="row " >
    <div class="col-xs-12"  >
               @if (Auth::guest())
             
           <label><input type="checkbox"  id="signatureRadio" >Add Signature</label> <!-- Html facade checkbox error -->
             <div class="form-group"> 
               {!! Form::text('signature',null,['id'=>'signatureText','class'=>'form-control','maxlength'=>'15','placeholder'=>'Signature','style'=>'width: 100%; display:none;']) !!} 
  
             <!--    <input maxlength="15" class="form-control" id="signatureText" name="signature" type="text" placeholder="Signature" style=" width: 100%; display:none;"> -->
             </div>
             @else
             
            <label><input type="checkbox"  id="signatureRadio" >Add Signature</label> 
             <div class="form-group">
                  {!! Form::text('signature',null,['id'=>'signatureText','class'=>'form-control','maxlength'=>'15','placeholder'=>Auth::user()->username,'style'=>'width: 100%; display:none;']) !!} 
  
            <!--     <input maxlength="15" class="form-control" id="signatureText" name="signature" type="text" placeholder="Signature" style=" width: 100%; display:none;" value="{{ Auth::user()->username }}">  -->
             </div>            
             @endif
    </div>
             
             
    
    </div>
 
   <div class="row">
            <div class="col-xs-12"  >
            <div style='padding:0;' id='canvasArea' ><div id='orientation' class="changeOrientation"  style='display:none; position:absolute; top:0px; vertical-align: middle; text-align: center;   background-color: white; opacity:0.2;'>   
              <img src="{{url('images/rotate-right.svg')}}" style=" width:100px; opacity:1; "/><br>
          Rotate Right 
         </div>
            <canvas id="c" width="550" height="0"></canvas> </div>
              
            </div></div>
            
 <br>
  <div class="col-xs-12"><label style="width:35%; float:left;">Text Color</label> 
           
                <div style='background-color: white; color:black; width:30%; float:left; padding: 5px 0px 0px 8px; border-radius:4px; border:1px solid black; margin-right: 2px;'>
                     {!! Form::radio('color','White',true,['id'=>'c1']) !!}
                      <!--   <input type="radio" name="color" id="c1" checked="checked" value="white"/> -->
                     {!! Form::label('color','White') !!}
                </div>
                 <div style='background-color: black; color:white; width:30%; float:left; padding: 5px 0px 0px 8px; border-radius:4px; border:1px solid black; margin-left: 2px;'>
                    {!! Form::radio('color','Black',null,['id'=>'c2']) !!}
        
                      {!! Form::label('color','Black') !!} 
                </div>
           
       
        </div><br><br>
 
 
        <div class="row">
            
                <div class="col-xs-12">
          {!! Form::textarea('top',null,['id'=>'topline','class'=>'form-control','max-length'=>'120','placeholder'=>'Top Text','tabindex'=>'1','style'=>'width: 100%; height:80px; resize:none;']) !!}
      <!--  <textarea maxlength="50" class="form-control" id="topline" placeholder="Top Text" tabindex="1" style="width: 100%; height:80px; resize:none;" ></textarea> -->
       <div style="padding-top: 10px; padding-right:  15px; padding-left:  10px;">
            <label id="topPad">Top Padding</label>  <label style="float:right;">Font Size</label>  
       </div>    
   <div class="textarea-control">
                                <ul class="segment-control" style="list-style: none;">
                                 <li style="float:right;"><button type="button" class="btn btn-default"href="javascript:void(0);" id="top-increase-font-size"><span class="glyphicon glyphicon-plus"></span></button></li> 
                                   
                                    <li style="float:right;"><button type="button" class="btn btn-default" href="javascript:void(0);" id="top-decrease-font-size"><span class="glyphicon glyphicon-minus"></span></button></li>
                                </ul>
                            </div>
       
  
  
   <input type="range" class="form-control" name="points" id="topPadding" value="50" min="0" max="150" style="width:60%;"> 
      
                </div> </div> <br>
          <div class="row">
            <div class="col-xs-12">
           {!! Form::textarea('bottom',null,['id'=>'bottomline','class'=>'form-control','max-length'=>'120','placeholder'=>'Bottom Text','tabindex'=>'2','style'=>'width: 100%; height:80px; resize:none;']) !!}
 
         <!--   <textarea maxlength="50" class="form-control" id="bottomline" placeholder="Bottom Text" tabindex="2" style="width: 100%; height:80px; resize:none;"></textarea> -->
         <div style="padding-top: 10px; padding-right:  15px; padding-left:  10px;">
            <label id="topPad">Bottom Padding</label>  <label style="float:right;">Font Size</label>  </div>    
            <div class="textarea-control">
                                <ul class="segment-control" style="list-style: none;">
                                    <li style="float:right;"><button type="button" class="btn btn-default"href="javascript:void(0);" id="bottom-increase-font-size"><span class="glyphicon glyphicon-plus"></span></button></li>
                                    
                                    <li style="float:right;"><button type="button" class="btn btn-default" href="javascript:void(0);" id="bottom-decrease-font-size"><span class="glyphicon glyphicon-minus"></span></button></li>
                                </ul>
                            </div>
   <input type="range" class="form-control" name="points" id="bottomPadding" value="50" min="0" max="150" style="width:60%;"> 
  
                    </div></div>
            
   

           
            
            
            
             <br><br>
           
        
            
              
            
            <div class="row" style="font-weight: bold;">Choose Tags (max. 2)</div>
            <ul class="checkbox-grid" style="list-style:none; padding-left:0;">
            {{--*/ $i=1; /*--}}
            @foreach($tags as $tag)
               @if($i<6)
                      <li>  {!! Form::checkbox('tags[]',$tag->id,null,['class'=>'moreTagCheck']) !!}
                      {!! Form::label('tags[]',$tag->tagname) !!} </li>
               @else
                       <li class='moreTags' style='display:none;'>  {!! Form::checkbox('tags[]',$tag->id,null,['class'=>'moreTagCheck']) !!}
                      {!! Form::label('tags[]',$tag->tagname) !!} </li>
               @endif
           {{--*/ $i++; /*--}}
            @endforeach
            <li>{!! Form::button('More Tags',['id'=>'moretags','class'=>'btn btn-default']) !!}</li>
             </ul> 
            
           
     
            
        
             <br>
                  <div class="row " >
    <div class="col-xs-12"  >
               @if (Auth::guest())        
            {!! Form::hidden('userType','Guest',['id'=>'userType']) !!}
          <!--   <input type="hidden" name="userType" id="userType" value="Guest"> -->
             <div class="form-group"> 
                  {!! Form::text('email',null,['id'=>'email','class'=>'form-control','placeholder'=>'Email Id is Must','style'=>'width: 100%;','required']) !!} 
            <!--     <input class="form-control" type="email" id="email" name="email" placeholder="Email Id" style=" width: 100%;" required>  -->
             </div>
             <div id="EmailErrorMsg" ></div>                   
             @endif
    </div>
             
             
    
    </div>
             <br>
            
             <div class="col-xs-6">  <a id="downloadLink" href="#"class="btn btn-default" >Download</a></div>
              <div class="col-xs-6">
                 <button type="submit" id="SubmitMeme" class="btn btn-default">Submit</button>
              </div>
        
        
     <img src="{{ asset('/images/pickcrossLogoExtended-s1.png') }}" alt="Pickcross" id="watermark1" style="display:none;">
        <img src="{{ asset('/images/pickcrossLogoExtended-greenbg.png') }}" alt="Pickcross" id="watermark2" style="display:none;">    
         <img src="{{ asset('/images/pickcrossLogoExtended-s3.png') }}" alt="Pickcross" id="watermark3" style="display:none;"> 
         <br><br><br><br><br><br>
        
        
            </div>
     </form>
        </div>
    

        
    
    

 <script type="text/javascript" src="{{ asset('/js/memeGenerator.js') }}"></script>

@stop


