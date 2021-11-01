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
  <h2>SHOW DOSEN</h2>         
  <table class="table">
    <tbody>
      <tr>
        <td>Nama</td>
        <td>{{$dosen->nama}}</td>
      </tr>
      <tr>
        <td>NIM</td>
        <td>{{$dosen->nidn}}</td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>{{$dosen->alamat}}</td>
      </tr>
      <tr>
        <td>Kontak</td>
        <td>{{$dosen->kontak}}</td>
      </tr>
    </tbody>
  </table>
</div>
<a href='/dosen'>
<button type="button" class="btn-deffault" style="margin-left: 205px;">Back</button> </a>

</body>
</html>