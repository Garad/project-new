@extends('/companies/app')

@section('content')
          <h1>Companies</h1>
          
          @foreach ($companies as $company)
          
          <article>
            <h2>
              <a href="{{ action('CompaniesController@show', [$company->id]) }}">{{ $company->company_name }}</a>
            </h2>
            <div class="body">{{ $company->company_address }}</div>
            
          </article>
          
          
          @endforeach
@stop
