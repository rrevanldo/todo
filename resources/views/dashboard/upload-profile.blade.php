@extends('layout')

@section('content')
<div class="container pt-5">
    <div class="card d-block m-auto p-3">
        <form action="{{route('todo.profile.change')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group mb-3">
                <label for="image_upload">Pilih Gambar</label>
                <input type="file" name="image_profile" class="form-control" id="image_upload">
            </div>
                <button type="submit" class="btn btn-primary me-3">Ubah</button>
                <a href="/todo/profile" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection