@extends('layouts.contacts')
@section('content')


<h1>Roles Edit</h1>







<form action="/roles/{{$roles->RoleID}}/editRoles" method="post">
    @csrf
<h1>Edit</h1>
<div class="container" style="max-width: 60%;">
	<div class="mb-3">
		<label for="RoleName" class="form-label">Lomas Nosaukums</label>
		<input type="text" class="form-control" id="RoleName" name="RoleName" placeholder="Vārds" value="{{ $roles->RoleName }}" >
	</div>

	<button type="submit" class="btn btn-info">Saglabāt</button>
    <button type="button" class="btn btn-danger" onclick="window.history.back()">Atcelt</button>
</div>
</form>



 

@endsection