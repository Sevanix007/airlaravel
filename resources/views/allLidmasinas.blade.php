@extends('layouts.app')
</head>
<body>
    <!-- @include('inc.header') -->



@section('content')
<h3>Lidmasinas tabula</h3>
<br>
<a href="/lidmasinas/addLidmasina" class="btn btn-primary">Pievienot jaunu Lidmasinu</a>
<br>
<table class="table table-bordered border-primary">
    <tr>
        <th>RegNumurs</th>
        <th>LidmasinasModelis</th>
        <th>LidmasinasVietuSkaits</th>
        <th>Darbibas</th>
    </tr>
    @foreach($lidmasina as $el)
    <tr>
        <td>{{ $el->RegNumurs }}</td>
        <td>{{ $el->LidmasinasModelis }}</td>
        <td>{{ $el->LidmasinasVietuSkaits }}</td>
        <td>
            <a href="/lidmasina/{{ $el->LidmasinasID }}/delete"
               class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
               Dzēst
            </a>
            <a href="/lidmasina/{{ $el->LidmasinasID }}/details_l"
                  class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
               Detalizeti
            </a>
        </td>
    </tr>
    @endforeach
</table>
{{ $lidmasina->links() }} 



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






