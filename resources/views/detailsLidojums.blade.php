    @extends('layouts.app')

    @section('content')
    <h1>Lidojums - Detalizēti</h1>
    <br>

    <div class="alert alert-info">
        <h4>
            ID: {{ $lidojums->LidojumaID }} |
            Numurs: {{ $lidojums->LidojumaNumurs }}
        </h4>

        <p>Izlides Lidosta ID: {{ $lidojums->IzlidesLidosta }}</p>
        <p>Ielides Lidosta ID: {{ $lidojums->IelidesLidosta }}</p>
        <p>Izlides Laiks: {{ $lidojums->IzlidesLaiks }}</p>
        <p>Ielides Laiks: {{ $lidojums->IelidesLaiks }}</p>
        <p>Lidmašīnas ID: {{ $lidojums->LidmasinasID }}</p>
        <p>Pilots1 ID: {{ $lidojums->Pilots1 }}</p>
        <p>Pilots2 ID: {{ $lidojums->Pilots2 }}</p>
        <p>Darbinieks1 ID: {{ $lidojums->Darbinieks1 }}</p>
        <p>Darbinieks2 ID: {{ $lidojums->Darbinieks2 }}</p>

        <a class="btn btn-danger" href="/lidojums/{{ $lidojums->LidojumaID }}/delete">Dzēst</a>
        <a class="btn btn-warning" href="/lidojums/{{ $lidojums->LidojumaID }}/edit">Rediģēt</a>
    </div>

    @if(session('success1'))
        <div class="alert alert-success">
            {{ session('success1') }}
        </div>
    @endif
    @endsection
