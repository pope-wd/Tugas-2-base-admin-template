@extends('templates.master')
@section('content')

<table class="table table-hover text-nowrap">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">nama</th>
        <th scope="col">deskripsi</th>
        <th scope="col">aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($getCategories as $kategori)
        <tr>
            <th> {{$kategori->id}}</th>
            <td> {{$kategori->name}}</td>
            <td> {{$kategori->description}}</td>
            <td><a href={{route('categoriesdelete',$kategori->id)}}><button type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button></a></td>
        </tr>
        @endforeach
    </tbody>
  </table>
    
@endsection