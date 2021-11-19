@extends('templates.master')
@section('content')

<table class="table table-hover text-nowrap">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">email</th>
        <th scope="col">nama</th>
        <th scope="col">alamat</th>
        <th scope="col">telepon</th>
        <th scope="col">aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($getCustomers as $customer)
        <tr>
            <th> {{$customer->id}}</th>
            <td> {{$customer->email}}</td>
            <td> {{$customer->name}}</td>
            <td> {{$customer->address}}</td>
            <td> {{$customer->phone}}</td>
            <td><a href={{route('categoriesdelete',$customer->id)}}><button type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button></a></td>
        </tr>
        @endforeach
    </tbody>
  </table>
    
@endsection