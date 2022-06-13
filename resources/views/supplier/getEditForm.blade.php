<form role="form" method="POST" action="{{url('suppliers')}}">
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
  </div>
  <div class="form-actions">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{url('suppliers')}}" class="btn btn-default">cancel</a>
</div>
</form>