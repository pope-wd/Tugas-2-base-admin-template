@extends('templates.master')
@section('content')

<table class="table table-hover text-nowrap">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">produk</th>
        <th scope="col">jumlah</th>
        <th scope="col">harga</th>
        <th scope="col">aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($getProduk as $item)
        <tr>
            <th> {{$item->id}}</th>
            <td> {{$item->produk}}</td>
            <td> {{$item->jumlah}}</td>
            <td> {{$item->harga}}</td>
            <td><a href={{route('produkdelete',$item->id)}}><button type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button></a></td>
        </tr>
        @endforeach
    </tbody>
  </table>
    
@endsection