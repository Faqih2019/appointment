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
  <h2>SHOW JADWAL</h2>         
  <table class="table">
    <tbody>
      <tr>
        <td>Mahasiswa</td>
        <td>{{$jadwal->getMahasiswa()->nama}}</td>
      </tr>
      <tr>
        <td>Dosen</td>
        <td>{{$jadwal->getDosen()->nama}}</td>
      </tr>
      <tr>
        <td>Judul</td>
        <td>{{$jadwal->judul}}</td>
      </tr>
      <tr>
        <td>Deskripsi</td>
        <td>{{$jadwal->deskripsi}}</td>
      </tr>
      <tr>
        <td>Awal</td>
        <td>{{$jadwal->awal}}</td>
      </tr>
      <tr>
        <td>Akhir</td>
        <td>{{$jadwal->akhir}}</td>
      </tr>
    </tbody>
  </table>
</div>
<a href='/jadwal'>
<button type="button" class="btn-deffault" style="margin-left: 205px;">Back</button> </a>

</body>
</html>