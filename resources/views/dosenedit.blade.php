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
  <h2>{{$title}}</h2>
  <form action="{{ url('dosen/add')}}" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
    </div>
    <div class="form-group">
      <label for="nidn">NIDN:</label>
      <input type="text" class="form-control" id="nidn" placeholder="Masukkan NIDN" name="nidn">
    </div>
    <div class="form-group">
      <label for="kontak">Kontak:</label>
      <input type="phoneNumber" class="form-control" id="kontak" placeholder="Masukkan Kontak" name="kontak">
    </div>
    <div class="form-group">
      <label for="alamat">Alamat:</label>
      <textarea class="form-control" rows="5" id="alamat" name="alamat"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    
    <button type="submit" class="btn btn-deffault">Back</button>
  </form>
</div>

</body>
</html>
