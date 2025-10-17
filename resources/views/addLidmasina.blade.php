@extends ('layouts.contacts')

@section('content')


<h1>Izveidot jaunu Lidmasinu</h1>
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





<form action="/lidmasina/newLidmasina" method="post">
    @csrf
<div class="container" style="max-width: 60%;">

    	<div class="mb-3">
		<label for="RegNumurs" class="form-label">Registracijas numurs</label>
		<input type="text" class="form-control" id="RegNumurs" name="RegNumurs" placeholder="Registrācijas Numurs">
	</div>
    	<div class="mb-3">
		<label for="LidmasinasModelis" class="form-label">Lidmasinas modelis</label>
		<input type="text" class="form-control" id="LidmasinasModelis" name="LidmasinasModelis" placeholder="Lidmasinas modelis">
	</div>
    	<div class="mb-3">
		<label for="LidmasinasVietuSkaits" class="form-label">Vietu skaits</label>
		<input type="text" class="form-control" id="LidmasinasVietuSkaits" name="LidmasinasVietuSkaits" placeholder="Vietu skaits">
	</div>

	<button type="submit" class="btn btn-info">Pievienot</button>
</div>
</form>



 

@endsection