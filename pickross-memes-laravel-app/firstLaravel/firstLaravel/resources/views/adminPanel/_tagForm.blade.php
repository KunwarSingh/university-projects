<div class="form-group" >
                                  {!! Form::label('tagname','Tagname') !!}
                                  {!! Form::text('tagname',null,['class'=>'form-control']) !!}
                  </div>
                  <div class="form-group" >
                                  {!! Form::label('urlname','URLName') !!}
                                  {!! Form::text('urlname',null,['class'=>'form-control']) !!}
                  </div>
                  <div class="form-group" >
                                  {!! Form::label('metakeyword','Meta Keyword') !!}
                                  {!! Form::text('metakeyword',null,['class'=>'form-control']) !!}
                  </div>
                  <div class="form-group" >
                                  {!! Form::label('metatitle','Meta Title') !!}
                                  {!! Form::text('metatitle',null,['class'=>'form-control']) !!}
                  </div>
                  <div class="form-group" >
                                  {!! Form::label('metadesc','Meta Desc') !!}
                                  {!! Form::text('metadesc',null,['class'=>'form-control']) !!}
                  </div>
                  <div class="form-group" >
                    {!! Form::submit($submitBtn,['class'=>'btn btn-primary']) !!}
                  </div>
