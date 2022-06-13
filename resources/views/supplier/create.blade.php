
@extends('layouts.conquer')
@section('title')
      Create Supplier
@endsection
@section('crsupplier')
<form method="POST" action="{{route('suppliers.store')}}">
    @csrf
  <div class="form-body">
      <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Text">
    <small class="form-text text-muted">Isikan nama Supplier Anda.</small>
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Text">
    <small class="form-text text-muted">Isikan Alamat Supplier Anda.</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="cancel">Cancel</button>
</form>
@endsection