@extends('layouts.contacts')
@section('content')

<h1>Lidojuma Rediģēšana</h1>

<center>
<form action="/lidojums/{{$lidojums->LidojumaID}}/editLidojumsSubmit" method="post">
    @csrf

    <div class="mb-3">
        <label for="LidojumaNumurs" class="form-label">Lidojuma numurs</label>
        <input type="text" class="form-control" id="LidojumaNumurs" name="LidojumaNumurs" placeholder="Lidojuma numurs" value="{{ $lidojums->LidojumaNumurs }}" style="width:400px;">
    </div>

    <div class="mb-3">
        <label for="IzlidesLidosta" class="form-label">Izlidošanas lidosta (ID)</label>
        <input type="number" class="form-control" id="IzlidesLidosta" name="IzlidesLidosta" placeholder="Izlidošanas lidostas ID" value="{{ $lidojums->IzlidesLidosta }}" style="width:400px;">
    </div>

    <div class="mb-3">
        <label for="IelidesLidosta" class="form-label">Ielidošanas lidosta (ID)</label>
        <input type="number" class="form-control" id="IelidesLidosta" name="IelidesLidosta" placeholder="Ielidošanas lidostas ID" value="{{ $lidojums->IelidesLidosta }}" style="width:400px;">
    </div>

    <div class="mb-3">
        <label for="IzlidesLaiks" class="form-label">Izlidošanas laiks</label>
        <input type="datetime-local" class="form-control" id="IzlidesLaiks" name="IzlidesLaiks"
               value="{{ $lidojums->IzlidesLaiks ? date('Y-m-d\\TH:i', strtotime($lidojums->IzlidesLaiks)) : '' }}" style="width:400px;">
    </div>

    <div class="mb-3">
        <label for="IelidesLaiks" class="form-label">Ielidošanas laiks</label>
        <input type="datetime-local" class="form-control" id="IelidesLaiks" name="IelidesLaiks"
               value="{{ $lidojums->IelidesLaiks ? date('Y-m-d\\TH:i', strtotime($lidojums->IelidesLaiks)) : '' }}" style="width:400px;">
    </div>

    <div class="mb-3">
        <label for="LidmasinasID" class="form-label">Lidmašīnas ID</label>
        <input type="number" class="form-control" id="LidmasinasID" name="LidmasinasID" placeholder="Lidmasinas ID" value="{{ $lidojums->LidmasinasID }}" style="width:400px;">
    </div>

    <div class="mb-3">
        <label for="Pilots1" class="form-label">Pilots1 (Darbinieka ID)</label>
        <input type="number" class="form-control" id="Pilots1" name="Pilots1" placeholder="Pilots1 ID" value="{{ $lidojums->Pilots1 }}" style="width:400px;">
    </div>

    <div class="mb-3">
        <label for="Pilots2" class="form-label">Pilots2 (Darbinieka ID)</label>
        <input type="number" class="form-control" id="Pilots2" name="Pilots2" placeholder="Pilots2 ID (var būt tukšs)" value="{{ $lidojums->Pilots2 ?? '' }}" style="width:400px;">
    </div>

    <div class="mb-3">
        <label for="Darbinieks1" class="form-label">Darbinieks1 (ID)</label>
        <input type="number" class="form-control" id="Darbinieks1" name="Darbinieks1" placeholder="Darbinieks1 ID" value="{{ $lidojums->Darbinieks1 }}" style="width:400px;">
    </div>

    <div class="mb-3">
        <label for="Darbinieks2" class="form-label">Darbinieks2 (ID)</label>
        <input type="number" class="form-control" id="Darbinieks2" name="Darbinieks2" placeholder="Darbinieks2 ID (var būt tukšs)" value="{{ $lidojums->Darbinieks2 ?? '' }}" style="width:400px;">
    </div>

    <button type="submit" class="btn btn-info">Saglabāt</button>
    <button type="button" class="btn btn-danger" onclick="window.history.back()">Atcelt</button>
</form>
</center>

@endsection
