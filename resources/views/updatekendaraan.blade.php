<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<body>
@foreach($kendaraan as $p)
<form action='/updatekendaraan' method='post'>
  <!-- @method('put') -->
@csrf
<div class="form-group">
    <label for="exampleFormControlInput1">ID Kendaraan</label>
    <input type="text" class="form-control"  name='idkendaraan' value='{{$p -> idkendaraan}}'>
  </div>
<div class="form-group">
    <label for="exampleFormControlSelect1">Jenis Kendaraan</label>
    <select class="form-control" name='jenis_kendaraan' value='{{$p -> jenis_kendaraan}}'>
      <option>mobil</option>
      <option>motor</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama Pemilik</label>
    <input type="text" class="form-control"  name='nama_pemilik' value='{{$p -> nama_pemilik}}'>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nomor Telepon</label>
    <input type="text" class="form-control" name='notelp' value='{{$p -> notelp}}'>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Jenis Cuci</label>
    <select class="form-control" name='jenis_cuci' value='{{$p -> jenis_cuci}}'>
      <option>full</option>
      <option>spesifik</option>
    </select>
  </div>
 <div>
 <input class="btn btn-primary" type="submit" value="Update">
</div>
</form>
@endforeach
<a href='/'><button type="button" class="btn btn-danger" >Kembali</button></a>
 </body>
</html>