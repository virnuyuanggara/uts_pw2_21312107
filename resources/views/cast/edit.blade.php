@extends('layout.master')

@section('judul')
Tambah Cast
@endsection

@section('content')

<form action="/cast/{{ $cast ->id }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="{{ $cast->nama }}" class="form-control">
        @error('nama')
            <div class="btn btn-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label>Umur</label>
        <input type="number" name="umur" value="{{ $cast->umur }}" class="form-control">
        @error('umur')
            <div class="btn btn-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label>Bio</label>
        <textarea name="bio" class="form-control">{{ $cast->bio }}</textarea>
        @error('bio')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
