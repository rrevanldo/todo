@extends('layout')

@section('content')
<div class="container">
    <div class="wrapper mt-5">
        <div class="d-flex align-items-start justify-content-between">
            <img src="{{asset('assets/img/')}}" alt="" srcset="" width="30">
            <h3>Anda tidak diperbolehkan mengakses halaman ini.</h3>
            <div class="">
                <a href="{{route('todo.index')}}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>

@endsection