@extends('layouts.contacts')
@section('content')


<h1>Lidmasinas Redigēšana</h1>






<center>
<form action="/lidmasina/{{$lidmasina->LidmasinasID}}/editLidmasinaSubmit" method="post">
    @csrf
<h1>Edit</h1>



    	<div class="mb-3">
		<label for="RegNumurs" class="form-label">Registracijas numurs</label>
		<input type="text" class="form-control" id="RegNumurs" name="RegNumurs" placeholder="Registrācijas Numurs" value="{{ $lidmasina->RegNumurs }}"style ="width: 400px;" >
	</div>
    	<div class="mb-3">
		<label for="LidmasinasModelis" class="form-label">Lidmasinas modelis</label>
		<input type="text" class="form-control" id="LidmasinasModelis" name="LidmasinasModelis" placeholder="Lidmasinas modelis"  value="{{ $lidmasina->LidmasinasModelis }}"style ="width: 400px;"  >
	</div>
    	<div class="mb-3">
		<label for="LidmasinasVietuSkaits" class="form-label">Vietu skaits</label>
		<input type="number" class="form-control" id="LidmasinasVietuSkaits" name="LidmasinasVietuSkaits" placeholder="Vietu skaits" value="{{ $lidmasina->LidmasinasVietuSkaits }}" style ="width: 400px;" >
	</div>

	<button type="submit" class="btn btn-info">Saglabāt</button>
    <button type="button" class="btn btn-danger" onclick="window.history.back()">Atcelt</button>
</form>

</center>

 

@endsection