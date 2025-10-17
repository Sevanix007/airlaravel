@extends('layouts.contacts')
@section('content')

<h1>Lidostas Rediģēšana</h1>

<center>
<form action="/lidosta/{{$lidosta->LidostasID}}/editLidostaSubmit" method="post">
    @csrf
    <h1>Edit</h1>

    <div class="mb-3">
        <label for="LidostasNosaukums" class="form-label">Lidostas Nosaukums</label>
        <input type="text" class="form-control" id="LidostasNosaukums" name="LidostasNosaukums" placeholder="Lidostas Nosaukums" value="{{ $lidosta->LidostasNosaukums }}" style="width: 400px;">
    </div>
    <div class="mb-3">
        <label for="LidostasKods" class="form-label">Lidostas Kods</label>
        <input type="text" class="form-control" id="LidostasKods" name="LidostasKods" placeholder="Lidostas Kods" value="{{ $lidosta->LidostasKods }}" style="width: 400px;">
    </div>
    <div class="mb-3">
        <label for="Valsts" class="form-label">Valsts</label>
        <input type="text" class="form-control" id="Valsts" name="Valsts" placeholder="Valsts" value="{{ $lidosta->Valsts }}" style="width: 400px;">
    </div>
    <div class="mb-3">
        <label for="Pilseta" class="form-label">Pilsēta</label>
        <input type="text" class="form-control" id="Pilseta" name="Pilseta" placeholder="Pilsēta" value="{{ $lidosta->Pilseta }}" style="width: 400px;">
    </div>

    <button type="submit" class="btn btn-info">Saglabāt</button>
    <button type="button" class="btn btn-danger" onclick="window.history.back()">Atcelt</button>
</form>
</center>

@endsection
