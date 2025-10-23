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




            <a href="/roles/all/{{ $el->RoleID }}/delete"
               class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
               Dzēst
            </a>
            <a href="/roles/all/{{ $el->RoleID }}/details_r"
                  class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
               Detalizēti
            </a>

<br><br>
</div>

@endforeach
{{ $roles->links('pagination::bootstrap-5') }}




@if(session('success'))

<div class="alert alert-info">
{{ session('success') }}
</div>
@endif


@if(session('success1'))

<div class="alert alert-danger">
{{ session('success1') }}
</div>
@endif

@endsection