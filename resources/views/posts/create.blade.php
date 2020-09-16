@extends('layouts.app')

@section('title', 'Tambah Data')

@section('content')
<div class="row">
<div class="col-lg-6 mx-auto">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('posts.store') }}">
     @csrf
        <div class="form-group">
            <label for="post-title">Nama barang</label>
            <input type="text" name="title" 
                   value="{{ old('title') }}" class="form-control" id="post-title">
        </div>
        <div class="form-group">
            <label for="post-description">Deskripsi barang</label>
            <textarea name="description" class="form-control" id="post-description" rows="3">{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label for="post-price">Harga</label>
            <input type="text" name="price" 
                   value="{{ old('price') }}" class="form-control" id="post-price">
        </div>
        <button type="submit" class="btn btn-success">Tambah</button>
    </form>
</div>
</div>
@endsection