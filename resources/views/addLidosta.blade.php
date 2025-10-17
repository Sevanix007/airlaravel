    @extends ('layouts.contacts')

    @section('content')

    <h1>Izveidot jaunu Lidostu</h1>
    @if($errors->any())
    <div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $kluda)
    <li>{{ $kluda }}</li>
    @endforeach
    </ul>
    </div>
    @endif

    <form action="/lidosta/newLidosta" method="post">
        @csrf
    <div class="container" style="max-width: 60%;">

        <div class="mb-3">
            <label for="LidostasNosaukums" class="form-label">Lidostas nosaukums</label>
            <input type="text" class="form-control" id="LidostasNosaukums" name="LidostasNosaukums" placeholder="Lidostas nosaukums">
        </div>
        <div class="mb-3">
            <label for="LidostasKods" class="form-label">Lidostas kods</label>
            <input type="text" class="form-control" id="LidostasKods" name="LidostasKods" placeholder="Lidostas kods">
        </div>
        <div class="mb-3">
            <label for="Valsts" class="form-label">Valsts</label>
            <input type="text" class="form-control" id="Valsts" name="Valsts" placeholder="Valsts">
        </div>
        <div class="mb-3">
            <label for="Pilseta" class="form-label">Pilsēta</label>
            <input type="text" class="form-control" id="Pilseta" name="Pilseta" placeholder="Pilsēta">
        </div>

        <button type="submit" class="btn btn-info">Pievienot</button>
    </div>
    </form>

    @endsection
