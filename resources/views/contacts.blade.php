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





<form action="/data/newSubmit" method="post">
    @csrf
<h1>Kontakti</h1>
<div class="container" style="max-width: 60%;">
	<div class="mb-3">
		<label for="name" class="form-label">Vārds, Uzvārds</label>
		<input type="text" class="form-control" id="name" name="name" placeholder="Vārds">
	</div>
	<div class="mb-3">
		<label for="email" class="form-label">E-pasta adrese</label>
		<input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
	</div>
	<div class="mb-3">
		<label for="subject" class="form-label">Ziņojuma subject</label>
		<input type="text" class="form-control" id="subject" name="subject" placeholder="Subjext">
	</div>


	<div class="mb-3">
		<label for="message" class="form-label">Ziņojuma teksts</label>
		<textarea class="form-control" id="message" name="message" rows="3"></textarea>
	</div>
	<button type="submit" class="btn btn-info">Pievienot</button>
</div>
</form>



 

@endsection