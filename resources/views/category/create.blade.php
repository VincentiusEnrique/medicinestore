@extends('layouts.conquer')
@section('title')
      FORM Category
@endsection
@section('createCat')
  <form method="POST" action="{{route('kategori_obat.store')}}">
      @csrf
  <div class="form-group">
    <label form="name">Name</label>
    <input type="text" class="form-control" id="name" name="name"><br>
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="description">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection