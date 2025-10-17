@extends('layouts.app')
</head>
<body>
    <!-- @include('inc.header') -->



@section('content')
<h1>Roles - Detalizēti</h1>
<br>

<div class="alert alert-info">
<h4> ID : {{ $roles->RoleID }} |  RoleName : {{ $roles->RoleName }}</h4>

<a href="/roles/all/{{ $roles->RoleID }}/delete"> Dzēst </a>
  <a class="btn btn-warning" href="/roles/all/{{$roles->RoleID}}/edit"> Rediget </a>

<br><br>
</div>




@if(session('success1'))

<div class="alert alert-danger">
{{ session('success1') }}
</div>
@endif

@endsection