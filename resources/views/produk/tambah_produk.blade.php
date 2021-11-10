@extends('templates.master')
@section('content')

<form>
    <div class="form-group">
      <label for="exampleFormControlTextArea1">Nama Produk</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" aria-describedby="emailHelp" placeholder="Nama Produk">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextArea1">Harga</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Harga">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextArea1">jumlah</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jumlah">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @endsection