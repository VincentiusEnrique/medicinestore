<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
  <style>
    div{
      border:1px solid black;
    }
  </style>
<body>

<div class="container">
  <h2>Show Medicines</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>       
  @if($message)     
  <table class="table table-bordered">
  <thead>
  <tr>
        <th>Name</th>
        <th>Form</th>
        <th>Restriction Formula</th>
        <th>Description</th>
        <th>Faskes tk 1</th>
        <th>Faskes tk 2</th>
        <th>Faskes tk 3</th>
        <th>price</th>
        <th>CategoryName</th>
      </tr>
  </thead>
  <tbody>
      <tr>
        <td>{{$message->generic_name}}</td>
        <td>{{$message->form}}</td>
        <td>{{$message->restriction_formula}}</td>
        <td>{{$message->description}}</td>
        <td>{{$message->faskes_tk1}}</td>
        <td>{{$message->faskes_tk2}}</td>
        <td>{{$message->faskes_tk3}}</td>
        <td>{{$message->price}}</td>
        <td>{{$message->category->name}}</td>
        <!-- <td>{{$message->image}}</td>  -->
      </tr>
    </tbody>
  </table>
  @else
       <h2> Tidak ada data</h2>
  @endif
</div>

</body>
</html>



