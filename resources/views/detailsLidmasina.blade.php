@extends('layouts.app')
</head>
<body>
    <!-- @include('inc.header') -->



@section('content')
<h1>Lidmasina - Detalizēti</h1>
<br>

<div class="alert alert-info">
<h4> ID : {{ $lidmasina->LidmasinasID }} |  RegNumurs : {{ $lidmasina->RegNumurs }} | LidmasinasModelis : {{ $lidmasina->LidmasinasModelis }} | LidmasinasVietuSkaits : {{ $lidmasina->LidmasinasVietuSkaits }}</h4>

<a  class="btn btn-danger" href="/lidmasina/{{ $lidmasina->LidmasinasID }}/delete"> Dzēst </a>
  <a class="btn btn-warning" href="/lidmasina/{{ $lidmasina->LidmasinasID }}/edit"> Rediget </a>

<br><br>
</div>




@if(session('success1'))

<div class="alert alert-danger">
{{ session('success1') }}
</div>
@endif

@endsection