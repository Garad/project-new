@extends('/companies/app')

@section('content')     

{!! Form::model($company1, ['method' => 'PATCH', 'action' => ['CompaniesController@update', $company1]]) !!}
              
              @include('companies.form', ['submitButtonText' => 'Update Company'])
      
              {!! Form::close() !!} 
          
            @include('errors.list')
@stop