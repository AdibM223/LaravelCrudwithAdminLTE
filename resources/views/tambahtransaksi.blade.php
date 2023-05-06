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
<form action='/inputtransaksi' method='post'>
{{ csrf_field() }}
<div class="form-group">
    <label for="exampleFormControlSelect1">Jenis Cuci</label>
    <select class="form-control" name='statuspembayaran'>
      <option>belum bayar</option>
      <option>lunas</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nominal Bayar</label>
    <input type="text" class="form-control"  name='nominalbayar'>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Tanggal Transaksi</label>
    <input type="date" class="form-control"  name='tanggal_transaksi'>
  </div>
<div class="form-group">
    <label for="exampleFormControlSelect1">ID Kendaraan</label>
    <select class="form-control" name='id_kendaraan' >
        @foreach($kendaraan as $p)
      <option>{{$p->idkendaraan}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">ID Metode Pembayaran</label>
    <select class="form-control" name='id_metode' >
      @foreach($metode as $r)
      <option>{{$r->id_metodebayar}}</option>
      @endforeach
    </select>
  </div>
  
 <div>
 <input class="btn btn-primary" type="submit" value="Input">
</div>
</form>
<a href='/transaksi'><button type="button" class="btn btn-danger" >Kembali</button></a>
 </body>
</html>