@extends('layouts.app')

@section('content')
<h3>Darbinieku tabula</h3>
<br>
<a href="/darbinieki/addDarbinieks" class="btn btn-primary">Pievienot jaunu Darbinieku</a>
<br>
<table class="table table-bordered border-primary">
    <tr>
        <th>Vārds</th>
        <th>Uzvārds</th>
        <th>Email</th>
        <th>Login Name</th>
        <th>RoleID</th>
        <th>Darbības</th>
    </tr>
    @foreach($darbinieki as $el)
    <tr>


        <td>{{ $el->Vards }}</td>
        <td>{{ $el->Uzvards }}</td>
        <td>{{ $el->EMAIL }}</td>
        <td>{{ $el->Login_name }}</td>
         <td>{{ $el->roles->RoleName ?? '—' }}</td>
        <td>
            <a href="/darbinieki/{{ $el->id }}/delete"
               class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
               Dzēst
            </a>
            <a href="/darbinieki/{{ $el->id }}/details_d"
               class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
               Detalizēti
            </a>
        </td>
    </tr>
    @endforeach
</table>
{{ $darbinieki->links() }}

@if(session('success1'))
<div class="alert alert-danger">
{{ session('success1') }}
</div>
@endif

@if(session('successp'))
<div class="alert alert-info">
{{ session('successp') }}
</div>
@endif

@endsection
