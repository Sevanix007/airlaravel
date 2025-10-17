@extends('layouts.app')
</head>
<body>
    <!-- @include('inc.header') -->



@section('content')
<h3>Roles(Lomas) tabula</h3>
<br>
<a href="/roles/addRole" class="btn btn-primary">Pievienot jaunu lomu</a>
<br>
@foreach($roles as $el)
<div class="alert alert-info">
<h4> 
    <!-- ID : {{ $el->RoleID }} |  -->
     RoleName : {{ $el->RoleName }}</h4>

<a href="/roles/all/{{ $el->RoleID }}/delete"> Dzēst </a>
<a href="/roles/all/{{ $el->RoleID }}/details_r" > Detalizeti </a>

<br><br>
</div>

@endforeach
{{ $roles->links() }} 



@if(session('success1'))

<div class="alert alert-danger">
{{ session('success1') }}
</div>
@endif

@endsection