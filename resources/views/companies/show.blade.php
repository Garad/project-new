@extends('/companies/app')

@section('content')

<h1>{{ $company1->company_name }}</h1> <article>{{ $company1->company_address }}</article>
<h2>{{ $company1->company_type }}</h2>
@stop