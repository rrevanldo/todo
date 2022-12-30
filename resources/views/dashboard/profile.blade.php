@extends('layout')

@section('content')
<div class="wrapper mt-5">
    <div class="title">
        <h1 class="text-center">Profile Info</h1>
    </div>
    <div class="card body" style="margin-left: 50px;">
        @if(is_null(Auth::user()->image_profile))
          <img src ="{{asset('assets/img/blank.jpg')}}" alt=""
          width = "100" style="border-radius:50%; align: center;" class="d-block m-auto">
        @else
        <img src="{{asset('assets/img/'.Auth::user()->image_profile)}}" alt=""
        width="100" style="border-radius:50%; align: center;" class="d-block m-auto">
        @endif
      <div class="d-flex justify-content-center mt-2">
          <a href="{{'/todo/profile/upload'}}" class="btn btn-primary">Ubah Foto Profile</a>
      </div><br>
    {{-- <div class="d-flex align-items-start justify-content-between">
        @if (Auth::user()->role == 'user')
        @if (is_null($users['image_profile']))
        <img src="{{asset('assets/img/download.png')}}" alt="" srcset="" width="50" style="border-radius: 50%" class="d-block m-auto">
        @else
        <img src="{{asset('assets/img/' .$user['image_profile'])}}" alt="" srcset="" width="50" style="border-radius: 50%" class="d-block m-auto">
        @endif
        <div class="d-flex justify-content-center mt-2">
            <a href="/todo/profile/upload" class="btn btn-primary">Ubah Foto Profile</a>
        </div> --}}
    <div class="nav-user-profile text-center">
        <ul class="mt-3">
        <li><p class="mb-0 nav-user-name">Nama : {{ Auth::user()->nama }}</p></li>
        <li><p class="mb-0 nav-user-name">Username :{{ Auth::user()->username }}</p></li>
        <li><p class="mb-0 nav-user-name">Email : {{ Auth::user()->email }}</p></li>
        </ul>
    </div><br>

    <div class="=ml-md-2">
        <a href="/todo"><i class="fa-solid fa-arrow-left mr-2"></i>Back</a>
    </div>
        {{-- @else  --}}
        {{-- <a href="/user" class="btn btn-primary">Lihat data pengguna</a> --}}
@endsection