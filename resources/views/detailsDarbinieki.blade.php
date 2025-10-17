@extends('layouts.app')
</head>
<body>
    <!-- @include('inc.header') -->

@section('content')
<h1>Darbinieki - Detalizēti</h1>
<br>

<div class="alert alert-info">
<h4> {{ $darbinieki->id }} |  Vārds : {{$darbinieki->Vards}} | Uzvārds : {{$darbinieki->Uzvards}} | Email : {{$darbinieki->EMAIL}} |   Login {{$darbinieki->Login_name}} | Parole : {{$darbinieki->Pass}} | LomasID : {{$darbinieki->RoleID}}</h4>

<a class="btn btn-danger" href="/darbinieki/{{ $darbinieki->id }}/delete"> Dzēst </a>
<a class="btn btn-warning" href="/darbinieki/{{ $darbinieki->id }}/edit"> Rediģēt </a>

<br><br>
</div>  

@if(session('success1'))
<div class="alert alert-danger">
{{ session('success1') }}
</div>
@endif

@endsection
