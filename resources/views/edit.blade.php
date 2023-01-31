@extends('layout')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Düzenle
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('products.update', $product->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="isim">Ürün Adı</label>
              <input type="text" class="form-control" id="isim" name="isim" value="{{ $product->isim }}"/>
          </div>
          <div class="form-group">
              <label for="kategori">Kategori</label>
              <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $product->kategori }}"/>
          </div>
          <div class="form-group">
              <label for="adet">Adet</label>
              <input type="number" class="form-control" id="adet" name="adet" value="{{ $product->adet }}"/>
          </div>
          <button type="submit" class="btn btn-block btn-success">Kaydet</button>
          <a href="{{ route('products.index') }}" class="btn btn-block btn-danger">Vazgeç</a>
      </form>
  </div>
</div>
@endsection
