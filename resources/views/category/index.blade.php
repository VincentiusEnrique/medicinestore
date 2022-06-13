 @extends('layouts.conquer')

 @section('title')
    Daftar Kategori Obat
 @endsection

 @section('content')   
  <table class="table table-bordered">
      <div class="page-toolbar">
        <a href="{{url('kategori_obat/create')}}" class='btn btn-info' type="button">+Category Baru </a>
      </div>
  <thead>
  <tr>
        <th>id</th>
        <th>name</th>
        <th>description</th>
        <th>created_at</th>
        <th>updated_at</th>
      </tr>
  </thead>
  <tbody>
        @foreach($datas as $li)
      <tr>
        <td>{{$li->id}}</td>
        <td>{{$li->name}}</td>
        <td>{{$li->description}}</td>
        <td>{{$li->created_at}}</td>
        <td>{{$li->updated_at}}</td>
        <td><a href="{{ url('kategori_obat/'.$li->id.'/edit')}}" 
        class='btn btn-xs btn-info'>edit </a></td>
        
      </tr>
      @endforeach
    </tbody>
  </table>
  @endsection
