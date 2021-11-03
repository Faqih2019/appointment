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
  <h2>JADWAL</h2>
  <a href = '/jadwal/create'>
  <button type="button" class="btn btn-success">Create Jadwal</button></a>           
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Mahasiswa</th>
        <th>Dosen</th>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Awal</th>
        <th>Akhir</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($dataJadwal as $data)
      <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->getMahasiswa()->nama}}</td>
        <td>{{$data->getDosen()->nama}}</td>
        <td>{{$data->judul}}</td>
        <td>{{$data->deskripsi}}</td>
        <td>{{$data->awal}}</td>
        <td>{{$data->akhir}}</td>
        <td>
          <a href='/jadwal/{{$data->id}}'>
        <button type="button" class="btn btn-info">Show</button> </a>
          
          <a href='/jadwal/{{$data->id}}/edit'>
        <button type="button" class="btn btn-primary">Edit</button> </a>

        <form method="POST" action="/jadwal/{{$data->id}}">
        @csrf
        @method('Delete')
        <button type="submit" class="btn btn-danger">
          Delete
        </button>
                        </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>