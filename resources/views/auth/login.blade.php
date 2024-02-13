@extends('layouts.main')

@section('head')
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <!-- Custom styles for this login -->
    <link href="/css/sign-in.css" rel="stylesheet">
@endsection

@section('main')
    <div class="row justify-content-center">

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" ></button>
            </div>
        @endif

        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" ></button>
            </div>
        @endif

        <div class="col-md-5">
            <main class="form-signin">
                <div class="container border shadow rounded my-3">
                    <h1 class="h3 my-3 fw-normal text-center py-3">Please Login</h1>
                    <form action="/login" method="POST">
                        @csrf
                        <div class="form-floating">
                            <input type="email" class="form-control @error('email')
                                is-invalid
                            @enderror" name="email" placeholder="name@example.com" autofocus required>
                            <label for="email">Email</label>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            <label for="password">Password</label>
                        </div>
                        <button class="btn btn-primary w-100 py-2 mb-3" type="submit">Login</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
@endsection
