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
<body>

<div class="container">
  <h2>DOSEN</h2>
  <a href = '/dosen/create'>
  <button type="button" class="btn btn-success">Create Dosen</button></a>     
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIDN</th>
        <th>Alamat</th>
        <th>Kontak</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($dosen as $data)
      <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->nama}}</td>
        <td>{{$data->nidn}}</td>
        <td>{{$data->alamat}}</td>
        <td>{{$data->kontak}}</td>
        <td>
          <a href='/dosen/show/{{$data->id}}'>
        <button type="button" class="btn btn-info">Show</button> </a>
        
          <a href='/dosen/{{$data->id}}/edit'>
        <button type="button" class="btn btn-primary">Edit</button></a>

        <a href='/dosen/delete/{{$data->id}}'>
        <button type="button" class="btn btn-danger">Delete</button></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>