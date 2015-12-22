@extends('/companies/app')

@section('content')
<h1>Register a New Company</h1>
<hr>
            {!! Form::open(['url' => 'companies']) !!}
              
              @include('companies.form', ['submitButtonText' => 'Add Company'])
      
              {!! Form::close() !!} 
          
            @include('errors.list')
  @stop