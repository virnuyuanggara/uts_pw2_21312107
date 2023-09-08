@extends('layout.master')

@section('judul')
Tambah Cast
@endsection

@section('content')

<form action="/cast" method="post">
    @csrf
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror">
        @error('nama')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label>Umur</label>
        <input type="number" name="umur" value="{{ old('umur') }}" class="form-control @error('umur') is-invalid @enderror">
        @error('umur')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label>Bio</label>
        <textarea type="text" name="bio" value="{{ old('bio') }}" class="form-control @error('bio') is-invalid @enderror"></textarea>
        @error('bio')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
