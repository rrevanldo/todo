@extends('layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center mt-5">
    <form method="POST" action="{{route('login.auth')}}" class="card py-4 px-4">
        @csrf
        @if (Session::get('success'))
             <div class="alert alert-success w-75">
                 {{ Session::get('success') }}
            </div>
        @endif
        @if (Session::get('fail'))
             <div class="alert alert-danger">
                 {{ Session::get('fail') }}
            </div>
        @endif
        @if (Session::get('notAllowed'))
             <div class="alert alert-danger">
                 {{ Session::get('notAllowed') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="text-center logo">
            <i class="fas fa-user-circle"></i>
        </div>
        <div class="text-center mt-3">
            
        <span class="info-text">silahkan mengisi username dan password untuk login</span>
        
        </div>
        <div class="position-relative mt-3 form-input">
            <label>Username</label>
            <input class="form-control" type="text" name="username">
        </div>
        <div class="position-relative mt-3 form-input">
            <label>Password</label>
            <input class="form-control" type="password" name="password">
        </div>
        
        <div class=" mt-5 d-flex justify-content-between align-items-center">
            <span><a class="logres" href="{{route('register')}}" style="text-decoration: underline;">Tidak punya akun?</a></span>
            <button type="submit" class="btn btn-success">Login</button>
        </div>
    </form>
</div>
@endsection
