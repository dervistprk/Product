@extends('layout')

@section('content')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
    <a href="{{ route('products.create') }}" class="btn btn-success btn-sm text-white mb-2">Ürün Ekle</a>
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Ürün Adı</td>
          <td>Kategori</td>
          <td>Adet</td>
          <td class="text-center">Eylem</td>
        </tr>
    </thead>
    <tbody>
        @foreach($product as $products)
        <tr>
            <td>{{$products->id}}</td>
            <td>{{$products->isim}}</td>
            <td>{{$products->kategori}}</td>
            <td>{{$products->adet}}</td>
            <td class="text-center">
                <a href="{{ route('products.edit', $products->id)}}" class="btn btn-primary btn-sm">Düzenle</a>
                <form action="{{ route('products.destroy', $products->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"" type="submit">Sil</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
