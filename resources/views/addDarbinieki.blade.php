    @extends ('layouts.contacts')

    @section('content')

    <h1>Izveidot jaunu Darbinieku</h1>
    @if($errors->any())
    <div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $kluda)
    <li>{{ $kluda }}</li>
    @endforeach
    </ul>
    </div>
    @endif

    <form action="/darbinieki/newDarbinieks" method="post">
        @csrf
    <div class="container" style="max-width: 60%;">

        <div class="mb-3">
            <label for="Vards" class="form-label">Vārds</label>
            <input type="text" class="form-control" id="Vards" name="Vards" placeholder="Vārds">
        </div>
        <div class="mb-3">
            <label for="Uzvards" class="form-label">Uzvārds</label>
            <input type="text" class="form-control" id="Uzvards" name="Uzvards" placeholder="Uzvārds">
        </div>
        <div class="mb-3">
            <label for="EMAIL" class="form-label">E-pasts</label>
            <input type="email" class="form-control" id="EMAIL" name="EMAIL" placeholder="E-pasts">
        </div>
        <div class="mb-3">
            <label for="Login_name" class="form-label">Login vārds</label>
            <input type="text" class="form-control" id="Login_name" name="Login_name" placeholder="Login vārds">
        </div>
        <div class="mb-3">
            <label for="Pass" class="form-label">Parole</label>
            <input type="password" class="form-control" id="Pass" name="Pass" placeholder="Parole">
        </div>
        <div class="mb-3">
            <label for="RoleID" class="form-label">Loma ID</label>
            <input type="number" class="form-control" id="RoleID" name="RoleID" placeholder="Loma ID">
        </div>

        <button type="submit" class="btn btn-info">Pievienot</button>
    </div>
    </form>

    @endsection
