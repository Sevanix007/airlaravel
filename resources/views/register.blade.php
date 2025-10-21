@extends ('layouts.null')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1
.3/css/bootstrap.min.css"/>
<link rel="stylesheet" href="{{ asset('public/login.css') }}">
<div class="wrapper">
        <div class="logo">
            <img src="https://blog.uniqkey.eu/wp-content/uploads/2023/08/password-recovery-methods.jpg" alt="">
        </div>
        <div class="text-center mt-4 name">
            Registrācija
        </div>
        <form class="p-3 mt-3" action="/registerSubmit" method="post">
            @csrf

                        <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="name" id="name" placeholder="Lietotajvards">
            </div>

            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="email" id="userName" placeholder="Email">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Parole">
            </div>
            <button type="submit" class="btn mt-3">Izveidot kontu</button>
        </form>
        <div class="text-center fs-6">
            Ir konts? <a href="/login">Ieet!</a>
        </div>
    </div>


@if(session('success'))
<center>
<div class="alert alert-info">
{{ session('success') }}
</div>
</center>
@endif
@endsection