@extends('layout.main')

@section('container')

<div class="row justify-content-center mt-5">
    <div class="col-lg-5">
     <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
        <form>
            <div class="form-floating mb-2">
            <input type="text" name="name" class="form-control" id="name" placeholder="Name">
            <label for="name">Name</label>
            </div>

            <div class="form-floating mb-2">
            <input type="text" name="username" class="form-control" id="username" placeholder="username">
            <label for="username">Username</label>
            </div>

            <div class="form-floating mb-2">
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
            <label for="email">Email address</label>
            </div>

            <div class="form-floating mb-2">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            <label for="password">Password</label>
            </div>

        <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Regiter</button>
        </form>
        <small class="d-block text-center mt-2">Already Registed? <a href="/applications/coba-laravel/public/login">Login!</a></small>
     </main>
    </div>
</div>


@endsection