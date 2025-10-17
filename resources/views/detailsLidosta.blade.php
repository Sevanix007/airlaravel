@extends('layouts.app')
</head>
<body>
    <!-- @include('inc.header') -->

@section('content')
<h1>Lidosta - Detalizēti</h1>
<br>

<div class="alert alert-info">
<h4> ID : {{ $lidosta->LidostasID }} | Nosaukums : {{ $lidosta->LidostasNosaukums }} | LidostasKods : {{ $lidosta->LidostasKods }} | Valsts : {{ $lidosta->Valsts }} | Pilsēta : {{ $lidosta->Pilseta }}</h4>

<a class="btn btn-danger" href="/lidosta/{{ $lidosta->LidostasID }}/delete"> Dzēst </a>
<a class="btn btn-warning" href="/lidosta/{{ $lidosta->LidostasID }}/edit"> Rediģēt </a>

<br><br>
</div>

@if(session('success1'))
<div class="alert alert-danger">
{{ session('success1') }}
</div>
@endif

@endsection
