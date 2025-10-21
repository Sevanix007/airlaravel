    @extends('layouts.app')

    @section('content')
    <h1>Lidojums - Detalizēti</h1>
    <br>

    <div class="alert alert-info">
        <h4>
            ID : {{ $lidojums->LidojumaID }}
            | Numurs : {{ $lidojums->LidojumaNumurs }}
        </h4>

        <p>
            Izlidošanas lidosta :
            {{ $lidojums->izlidesLidosta->LidostasNosaukums ?? 'ID: '.$lidojums->IzlidesLidosta }}
        </p>

        <p>
            Ielidošanas lidosta :
            {{ $lidojums->ielidesLidosta->LidostasNosaukums ?? 'ID: '.$lidojums->IelidesLidosta }}
        </p>

        <p>
            Izlides laiks :
            {{ \Carbon\Carbon::parse($lidojums->IzlidesLaiks)->format('Y-m-d H:i') ?? $lidojums->IzlidesLaiks }}
        </p>

        <p>
            Ielides laiks :
            {{ \Carbon\Carbon::parse($lidojums->IelidesLaiks)->format('Y-m-d H:i') ?? $lidojums->IelidesLaiks }}
        </p>

        <p>
            Lidmašīna :
            {{ $lidojums->lidmasina->RegNumurs ?? 'ID: '.$lidojums->LidmasinasID }}
            {{ $lidojums->lidmasina->LidmasinasModelis ? ' ('.$lidojums->lidmasina->LidmasinasModelis.')' : '' }}
        </p>

        <p>
            Pilots 1 :
            {{ $lidojums->pilots1->Vards .' '. $lidojums->pilots1->Uzvards ?? 'ID: '.$lidojums->Pilots1 }}
        </p>

        <p>
            Pilots 2 :
            {{ $lidojums->pilots2 ? ($lidojums->pilots2->Vards .' '. $lidojums->pilots2->Uzvards) : ($lidojums->Pilots2 ? 'ID: '.$lidojums->Pilots2 : 'Nav') }}
        </p>

        <p>
            Darbinieks 1 :
            {{ $lidojums->darbinieks1->Vards .' '. $lidojums->darbinieks1->Uzvards ?? 'ID: '.$lidojums->Darbinieks1 }}
        </p>

        <p>
            Darbinieks 2 :
            {{ $lidojums->darbinieks2 ? ($lidojums->darbinieks2->Vards .' '. $lidojums->darbinieks2->Uzvards) : ($lidojums->Darbinieks2 ? 'ID: '.$lidojums->Darbinieks2 : 'Nav') }}
        </p>

        <a class="btn btn-danger" href="/lidojums/{{ $lidojums->LidojumaID }}/delete"> Dzēst </a>
        <a class="btn btn-warning" href="/lidojums/{{ $lidojums->LidojumaID }}/edit"> Rediģēt </a>

        <br><br>
    </div>

    @if(session('success1'))
    <div class="alert alert-danger">
        {{ session('success1') }}
    </div>
    @endif

    @endsection
