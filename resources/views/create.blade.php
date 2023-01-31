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
    Ürün Ekle
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
      <form method="post" action="{{ route('products.store') }}">
          <div class="form-group">
              @csrf
              <label for="isim">Ürün Adı</label>
              <input type="text" class="form-control" name="isim" id="isim"/>
          </div>
          <div class="form-group">
              <label for="kategori">Kategori</label>
              <input type="text" class="form-control" name="kategori" id="kategori"/>
          </div>
          <div class="form-group">
              <label for="adet">Adet</label>
              <input type="number" class="form-control" name="adet" id="adet"/>
          </div>
          <button type="submit" class="btn btn-block btn-success">Ürün Ekle</button>
          <a href="{{ route('products.index') }}" class="btn btn-block btn-danger">Vazgeç</a>
      </form>
  </div>
</div>
@endsection
