@extends('layout.main')

@section('container')

<div class="row justify-content-center mt-5">
    <div class="col-lg-5">
     <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
        <form action="/applications/coba-laravel/public/register" method="post">
            @csrf

            <div class="form-floating">
            <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required>
            <label for="name">Name</label>
            @error('name')
                <div class="invalid-tooltip">
                    {{ $message }}
                </div>
            </div>
            @enderror

            <div class="form-floating">
            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" value="{{ old('username') }}" placeholder="username" required>
            <label for="username">Username</label>
            @error('username')
                <div class="invalid-tooltip">
                    {{ $message }}
                </div>
            </div>
            @enderror
            </div>

            <div class="form-floating">
            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required>
            <label for="email">Email address</label>
            @error('email')
                <div class="invalid-tooltip">
                    {{ $message }}
                </div>
            </div>
            @enderror
            </div>

            <div class="form-floating">
            <input type="password" class="form-control" name="password @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
            <label for="password">Password</label>
            @error('password')
                <div class="invalid-tooltip">
                    {{ $message }}
                </div>
            </div>
            @enderror
            </div>

        <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Regiter</button>
        </form>
        <small class="d-block text-center mt-2">Already Registed? <a href="/applications/coba-laravel/public/login">Login!</a></small>
     </main>
    </div>
</div>


@endsection