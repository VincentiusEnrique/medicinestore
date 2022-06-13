
@extends('layouts.conquer')
@section('title')
      Edit Category
@endsection
@section('edsupplier')

<h1> Form Category </h1>
<form method ="POST" action="{{url('suppliers/'.$datas->id)}}">
    @csrf
    @method("PUT")
<form action="/action_page.php">
  <div class="form-group">
    <label for="name">Name </label>
    <input type="name" class="form-control" id="nama" name="nama" value="{{$datas->nama}}">
  </div>
  <div class="form-group">
    <label for="adr">Address</label>
    <input type="address" class="form-control" id="address" name="address" value="{{$datas->address}}">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection