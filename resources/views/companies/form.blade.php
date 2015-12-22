@extends('/companies/app')

@section('content')
<div class="form-group">
              {!! Form::label('company_name', 'Company Name:') !!}
              {!! Form::text('company_name', null, 
                  
                        ['class'=>'form-control',]) !!}
            </div>
            <div class="form-group">
              {!! Form::label('company_address', 'Company Address:') !!}
              {!! Form::text('company_address', null, 
                  
                        ['class'=>'form-control',]) !!}
            </div>
            <div class="form-group">
              {!! Form::label('company_type', 'Company Text:') !!}
              {!! Form::text('company_type', null, 
                  
                        ['class'=>'form-control',]) !!}
            </div>
              

              
              <div class="form-group">
                {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
                </div>
@stop
        