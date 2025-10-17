@extends ('layouts.contacts')

@section('content')

<h1>Izveidot jaunu Lidojumu</h1>
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $kluda)
			<li>{{ $kluda }}</li>
		@endforeach
	</ul>
</div>
@endif

<form action="/lidojums/newLidojums" method="post">
	@csrf
	<div class="container" style="max-width: 60%;">
		<div class="mb-3">
			<label for="LidojumaNumurs" class="form-label">Lidojuma numurs</label>
			<input type="text" class="form-control" id="LidojumaNumurs" name="LidojumaNumurs" placeholder="Lidojuma numurs">
		</div>
		<div class="mb-3">
			<label for="IzlidesLidosta" class="form-label">Izlidošanas lidosta</label>
			<input type="number" class="form-control" id="IzlidesLidosta" name="IzlidesLidosta" placeholder="Izlidošanas lidostas ID">
		</div>
		<div class="mb-3">
			<label for="IelidesLidosta" class="form-label">Ielidošanas lidosta</label>
			<input type="number" class="form-control" id="IelidesLidosta" name="IelidesLidosta" placeholder="Ielidošanas lidostas ID">
		</div>
		<div class="mb-3">
			<label for="IzlidesLaiks" class="form-label">Izlidošanas laiks</label>
			<input type="datetime-local" class="form-control" id="IzlidesLaiks" name="IzlidesLaiks">
		</div>
		<div class="mb-3">
			<label for="IelidesLaiks" class="form-label">Ielidošanas laiks</label>
			<input type="datetime-local" class="form-control" id="IelidesLaiks" name="IelidesLaiks">
		</div>
		<div class="mb-3">
			<label for="LidmasinasID" class="form-label">Lidmašīnas ID</label>
			<input type="number" class="form-control" id="LidmasinasID" name="LidmasinasID" placeholder="Lidmašīnas ID">
		</div>
		<div class="mb-3">
			<label for="Pilots1" class="form-label">Pilots 1 (ID)</label>
			<input type="number" class="form-control" id="Pilots1" name="Pilots1" placeholder="Pilots 1 ID">
		</div>
		<div class="mb-3">
			<label for="Pilots2" class="form-label">Pilots 2 (ID)</label>
			<input type="number" class="form-control" id="Pilots2" name="Pilots2" placeholder="Pilots 2 ID">
		</div>
		<div class="mb-3">
			<label for="Darbinieks1" class="form-label">Darbinieks 1 (ID)</label>
			<input type="number" class="form-control" id="Darbinieks1" name="Darbinieks1" placeholder="Darbinieks 1 ID">
		</div>
		<div class="mb-3">
			<label for="Darbinieks2" class="form-label">Darbinieks 2 (ID)</label>
			<input type="number" class="form-control" id="Darbinieks2" name="Darbinieks2" placeholder="Darbinieks 2 ID">
		</div>
		<button type="submit" class="btn btn-info">Pievienot</button>
	</div>
</form>

@endsection