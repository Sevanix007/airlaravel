@extends('layouts.app')

    @section('content')
    <h1>Lidojums - Detalizēti</h1>
    <br>

    <div class="alert alert-info">
        <h4>
            ID: {{ $lidojums->LidojumaID }} |
            Numurs: {{ $lidojums->LidojumaNumurs }}
        </h4>

        <p><b>Izlides Lidosta:</b>
            {{ $izlidesLidosta->LidostasNosaukums ?? $lidojums->IzlidesLidosta }}
        </p>

        <p><b>Ielides Lidosta:</b>
            {{ $ielidesLidosta->LidostasNosaukums ?? $lidojums->IelidesLidosta }}
        </p>

        <p><b>Izlides Laiks:</b> {{ $lidojums->IzlidesLaiks }}</p>
        <p><b>Ielides Laiks: </b>{{ $lidojums->IelidesLaiks }}</p>

        <p><b>Lidmašīna:</b>
            @if($lidmasina)
                {{ $lidmasina->RegNumurs ?? '' }} {{ $lidmasina->LidmasinasModelis ? '('.$lidmasina->LidmasinasModelis.')' : '' }}
            @else
                {{ $lidojums->LidmasinasID }}
            @endif
        </p>

        <p><b>Pilots 1:</b>
            @if($pilots1)
                {{ $pilots1->Vards ?? '' }} {{ $pilots1->Uzvards ?? '' }} (ID: {{ $pilots1->id ?? $pilots1->DarbinieksID ?? '—' }})
            @else
                {{ $lidojums->Pilots1 }}
            @endif
        </p>

        <p><b>Pilots 2:</b>
            @if($pilots2)
                {{ $pilots2->Vards ?? '' }} {{ $pilots2->Uzvards ?? '' }} (ID: {{ $pilots2->id ?? $pilots2->DarbinieksID ?? '—' }})
            @else
                {{ $lidojums->Pilots2 ?? '—' }}
            @endif
        </p>

        <p><b>Darbinieks 1:</b>
            @if($darbinieks1)
                {{ $darbinieks1->Vards ?? '' }} {{ $darbinieks1->Uzvards ?? '' }} (ID: {{ $darbinieks1->id ?? $darbinieks1->DarbinieksID ?? '—' }})
            @else
                {{ $lidojums->Darbinieks1 }}
            @endif
        </p>

        <p><b>Darbinieks 2:</b>
            @if($darbinieks2)
                {{ $darbinieks2->Vards ?? '' }} {{ $darbinieks2->Uzvards ?? '' }} (ID: {{ $darbinieks2->id ?? $darbinieks2->DarbinieksID ?? '—' }})
            @else
                {{ $lidojums->Darbinieks2 ?? '—' }}
            @endif
        </p>

        <a class="btn btn-danger" href="/lidojums/{{ $lidojums->LidojumaID }}/delete">Dzēst</a>
        <a class="btn btn-warning" href="/lidojums/{{ $lidojums->LidojumaID }}/edit">Rediģēt</a>
    </div>

    @if(session('success1'))
        <div class="alert alert-success">
            {{ session('success1') }}
        </div>
    @endif
    @endsection
