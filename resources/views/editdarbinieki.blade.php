@extends('layouts.contacts')
@section('content')

<h1>Darbinieka Rediģēšana</h1>

<center>
<form action="/darbinieki/{{$darbinieki->id}}/editDarbinieksSubmit" method="post">
    @csrf
    <h1>Edit</h1>

    <div class="mb-3">
        <label for="Vards" class="form-label">Vārds</label>
        <input type="text" class="form-control" id="Vards" name="Vards" placeholder="Vārds" value="{{ $darbinieki->Vards }}" style="width: 400px;">
    </div>
    <div class="mb-3">
        <label for="Uzvards" class="form-label">Uzvārds</label>
        <input type="text" class="form-control" id="Uzvards" name="Uzvards" placeholder="Uzvārds" value="{{ $darbinieki->Uzvards }}" style="width: 400px;">
    </div>
    <div class="mb-3">
        <label for="EMAIL" class="form-label">E-pasts</label>
        <input type="email" class="form-control" id="EMAIL" name="EMAIL" placeholder="E-pasts" value="{{ $darbinieki->EMAIL }}" style="width: 400px;">
    </div>
    <div class="mb-3">
        <label for="Login_name" class="form-label">Login Name</label>
        <input type="text" class="form-control" id="Login_name" name="Login_name" placeholder="Login Name" value="{{ $darbinieki->Login_name }}" style="width: 400px;">
    </div>
    <div class="mb-3">
        <label for="Pass" class="form-label">Parole</label>
        <input type="text" class="form-control" id="Pass" name="Pass" placeholder="Parole" value="{{ $darbinieki->Pass }}" style="width: 400px;">
    </div>
    <div class="mb-3">
        <label for="RoleID" class="form-label">RoleID</label>
        <input type="number" class="form-control" id="RoleID" name="RoleID" placeholder="RoleID" value="{{ $darbinieki->RoleID }}" style="width: 400px;">
    </div>

    <button type="submit" class="btn btn-info">Saglabāt</button>
    <button type="button" class="btn btn-danger" onclick="window.history.back()">Atcelt</button>
</form>
</center>

@endsection
