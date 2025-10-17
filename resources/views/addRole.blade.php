@extends ('layouts.contacts')

@section('content')


<h1>Contacts</h1>
<!-- Bloks kluda -->
@if($errors->any())
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $kluda)

<li>

{{ $kluda}}  </li>

@endforeach 

</ul>
</div>
@endif





<form action="/roles/newRole" method="post">
    @csrf
<h1>Kontakti</h1>
<div class="container" style="max-width: 60%;">
	<div class="mb-3">
		<label for="RoleName" class="form-label">Lomas nosaukums</label>
		<input type="text" class="form-control" id="RoleName" name="RoleName" placeholder="Name">
	</div>

	<button type="submit" class="btn btn-info">Pievienot</button>
</div>
</form>



 

@endsection