@extends('layouts.contacts')
@section('content')

@php
use App\Models\Lidosta;
use App\Models\Lidmasina;
use App\Models\Darbinieki;

// load classifier lists
$lidostas = Lidosta::orderBy('LidostasNosaukums')->get();
$lidmasinas = Lidmasina::orderBy('RegNumurs')->get();
$darbinieki = Darbinieki::orderBy('Vards')->orderBy('Uzvards')->get();

// helper to get primary key value safely
function pk($model) {
    return $model->{$model->getKeyName()};
}
@endphp

<h1>Lidojuma Rediģēšana</h1>

<center>
<form action="/lidojums/{{$lidojums->LidojumaID}}/editLidojumsSubmit" method="post">
    @csrf

    <div class="mb-3">
        <label for="LidojumaNumurs" class="form-label">Lidojuma numurs</label>
        <input type="text" class="form-control" id="LidojumaNumurs" name="LidojumaNumurs"
               value="{{ old('LidojumaNumurs', $lidojums->LidojumaNumurs) }}" style="width:400px;">
        @error('LidojumaNumurs') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label for="IzlidesLidosta" class="form-label">Izlidošanas lidosta</label>
        <select class="form-select" id="IzlidesLidosta" name="IzlidesLidosta" style="width:400px;">
            <option value="">-- izvēlieties --</option>
            @foreach($lidostas as $l)
                <option value="{{ pk($l) }}" {{ (string)pk($l) === (string)old('IzlidesLidosta', $lidojums->IzlidesLidosta) ? 'selected' : '' }}>
                    {{ $l->LidostasNosaukums ?? '—' }}{{ $l->LidostasKods ? ' ('.$l->LidostasKods.')' : '' }}
                </option>
            @endforeach
        </select>
        @error('IzlidesLidosta') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label for="IelidesLidosta" class="form-label">Ielidošanas lidosta</label>
        <select class="form-select" id="IelidesLidosta" name="IelidesLidosta" style="width:400px;">
            <option value="">-- izvēlieties --</option>
            @foreach($lidostas as $l)
                <option value="{{ pk($l) }}" {{ (string)pk($l) === (string)old('IelidesLidosta', $lidojums->IelidesLidosta) ? 'selected' : '' }}>
                    {{ $l->LidostasNosaukums ?? '—' }}{{ $l->LidostasKods ? ' ('.$l->LidostasKods.')' : '' }}
                </option>
            @endforeach
        </select>
        @error('IelidesLidosta') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label for="IzlidesLaiks" class="form-label">Izlidošanas laiks</label>
        <input type="datetime-local" class="form-control" id="IzlidesLaiks" name="IzlidesLaiks"
               value="{{ old('IzlidesLaiks', $lidojums->IzlidesLaiks ? date('Y-m-d\\TH:i', strtotime($lidojums->IzlidesLaiks)) : '') }}" style="width:400px;">
        @error('IzlidesLaiks') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label for="IelidesLaiks" class="form-label">Ielidošanas laiks</label>
        <input type="datetime-local" class="form-control" id="IelidesLaiks" name="IelidesLaiks"
               value="{{ old('IelidesLaiks', $lidojums->IelidesLaiks ? date('Y-m-d\\TH:i', strtotime($lidojums->IelidesLaiks)) : '') }}" style="width:400px;">
        @error('IelidesLaiks') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label for="LidmasinasID" class="form-label">Lidmašīna</label>
        <select class="form-select" id="LidmasinasID" name="LidmasinasID" style="width:400px;">
            <option value="">-- izvēlieties --</option>
            @foreach($lidmasinas as $m)
                <option value="{{ pk($m) }}" {{ (string)pk($m) === (string)old('LidmasinasID', $lidojums->LidmasinasID) ? 'selected' : '' }}>
                    {{ $m->RegNumurs ?? '—' }}{{ $m->LidmasinasModelis ? ' ('.$m->LidmasinasModelis.')' : '' }}
                </option>
            @endforeach
        </select>
        @error('LidmasinasID') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label for="Pilots1" class="form-label">Pilots 1</label>
        <select class="form-select" id="Pilots1" name="Pilots1" style="width:400px;">
            <option value="">-- izvēlieties --</option>
            @foreach($darbinieki as $d)
                <option value="{{ pk($d) }}" {{ (string)pk($d) === (string)old('Pilots1', $lidojums->Pilots1) ? 'selected' : '' }}>
                    {{ ($d->Vards ?? '') . ' ' . ($d->Uzvards ?? '') }} (ID: {{ pk($d) }})
                </option>
            @endforeach
        </select>
        @error('Pilots1') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label for="Pilots2" class="form-label">Pilots 2 (neobligāts)</label>
        <select class="form-select" id="Pilots2" name="Pilots2" style="width:400px;">
            <option value="">-- nav --</option>
            @foreach($darbinieki as $d)
                <option value="{{ pk($d) }}" {{ (string)pk($d) === (string)old('Pilots2', $lidojums->Pilots2) ? 'selected' : '' }}>
                    {{ ($d->Vards ?? '') . ' ' . ($d->Uzvards ?? '') }} (ID: {{ pk($d) }})
                </option>
            @endforeach
        </select>
        @error('Pilots2') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label for="Darbinieks1" class="form-label">Darbinieks 1</label>
        <select class="form-select" id="Darbinieks1" name="Darbinieks1" style="width:400px;">
            <option value="">-- izvēlieties --</option>
            @foreach($darbinieki as $d)
                <option value="{{ pk($d) }}" {{ (string)pk($d) === (string)old('Darbinieks1', $lidojums->Darbinieks1) ? 'selected' : '' }}>
                    {{ ($d->Vards ?? '') . ' ' . ($d->Uzvards ?? '') }} (ID: {{ pk($d) }})
                </option>
            @endforeach
        </select>
        @error('Darbinieks1') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label for="Darbinieks2" class="form-label">Darbinieks 2 (neobligāts)</label>
        <select class="form-select" id="Darbinieks2" name="Darbinieks2" style="width:400px;">
            <option value="">-- nav --</option>
            @foreach($darbinieki as $d)
                <option value="{{ pk($d) }}" {{ (string)pk($d) === (string)old('Darbinieks2', $lidojums->Darbinieks2) ? 'selected' : '' }}>
                    {{ ($d->Vards ?? '') . ' ' . ($d->Uzvards ?? '') }} (ID: {{ pk($d) }})
                </option>
            @endforeach
        </select>
        @error('Darbinieks2') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <button type="submit" class="btn btn-info">Saglabāt</button>
    <button type="button" class="btn btn-danger" onclick="window.history.back()">Atcelt</button>
</form>
</center>

@endsection
