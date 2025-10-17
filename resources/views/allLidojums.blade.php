@extends('layouts.app')

@section('content')
<h3>Lidojumu tabula</h3>
<br>
<a href="/lidojums/addLidojums" class="btn btn-primary">Pievienot jaunu Lidojumu</a>
<br>
<table class="table table-bordered border-primary">
    <tr>
        <th>LidojumaNumurs</th>
        <th>IzlidesLidosta</th>
        <th>IelidesLidosta</th>
        <th>IzlidesLaiks</th>
        <th>IelidesLaiks</th> 
        <th>LidmasinasID</th>
        <th>Pilots1</th>
        <th>Pilots2</th>
        <th>Darbinieks1</th>
        <th>Darbinieks2</th>
        <th>Darbības</th>
    </tr>
    @foreach($lidojums as $el)
    <tr>
        <td>{{ $el->LidojumaNumurs }}</td>
        <td>{{ $el->lidostas->LidostasNosaukums ?? '—' }}</td>
        <td>{{ $el->IelidesLidosta }}</td>
        <td>{{ $el->IzlidesLaiks }}</td>
        <td>{{ $el->IelidesLaiks }}</td>
        <td>{{ $el->LidmasinasID }}</td>
        <td>{{ $el->Pilots1 }}</td>
        <td>{{ $el->Pilots2 }}</td>

         <td>{{ $el->darbinieki->Vards ?? '—' }}</td>
        <td>{{ $el->Darbinieks2 }}</td>
        <td>
            <a href="/lidojums/{{ $el->LidojumaID }}/delete"
               class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
               Dzēst
            </a>
            <a href="/lidojums/{{ $el->LidojumaID }}/details"
                  class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
               Detalizēti
            </a>
        </td>
    </tr>
    @endforeach
</table>
{{ $lidojums->links() }}

@if(session('success1'))
<div class="alert alert-danger">
{{ session('success1') }}
</div>
@endif

@if(session('successp'))
<div class="alert alert-info">
{{ session('successp') }}
</div>
@endif

@endsection
