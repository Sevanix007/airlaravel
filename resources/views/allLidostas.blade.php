@extends('layouts.app')
</head>
<body>
    <!-- @include('inc.header') -->



@section('content')
<h3>Lidostas tabula</h3>
<br>
<a href="/lidosta/addLidosta" class="btn btn-primary">Pievienot jaunu Lidostu</a>
<br>
<table class="table table-bordered border-primary">
    <tr>
        <th>LidostasNosaukums</th>
        <th>LidostasKods</th>
        <th>Valsts</th>
        <th>Pilseta</th>
        <th>Darbibas</th>
    </tr>
    @foreach($lidosta as $el)
    <tr>
        <td>{{ $el->LidostasNosaukums }}</td>
        <td>{{ $el->LidostasKods }}</td>
        <td>{{ $el->Valsts }}</td>
        <td>{{ $el->Pilseta }}</td>
        <td>
            <a href="/lidosta/{{ $el->LidostasID }}/delete"
               class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
               Dzēst
            </a>
            <a href="/lidosta/{{ $el->LidostasID }}/details_lo"
                  class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
               Detalizēti
            </a>
        </td>
    </tr>
    @endforeach
</table>
{{ $lidosta->links() }} 



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






