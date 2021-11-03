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
  <h2>Create Jadwal</h2>
  <form action="{{ url('jadwal')}}" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <label for="mahasiswa">mahasiswa:</label>
      <select class="form-control" id="sel1" name="mahasiswa">
          @foreach($dataMahasiswa as $mahasiswa)
          <option value = '{{$mahasiswa->id}}'>{{$mahasiswa->nama}}</option>
          @endforeach
        </select>

    </div>
    <div class="form-group">
      <label for="dosen">Dosen:</label>
      <select class="form-control" id="sel1" name = "dosen">
          @foreach($dataDosen as $dosen)
          <option value = '{{$dosen->id}}'>{{$dosen->nama}}</option>
          @endforeach
        </select>
    
    <div class="form-group">
      <label for="judul">Judul:</label>
      <input type="text" class="form-control" id="judul" placeholder="Masukkan judul" name="judul">
    </div>

    <div class="form-group">
      <label for="deskripsi">Deskripsi:</label>
      <textarea class="form-control" rows="5" id="deskripsi" name="deskripsi"></textarea>
    </div>

    <div class="form-group">
      <label for="awal">Awal:</label>
      <input type="datetime-local" class="form-control" id="awal" placeholder="" name="awal">
    </div>

    <div class="form-group">
      <label for="akhir">Akhir:</label>
      <input type="datetime-local" class="form-control" id="akhir" placeholder="" name="akhir">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
