<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link " aria-current="page" href="/">Kendaraan</a>
        <a class="nav-link active" href="/metode">Metode Pembayaran</a>
        <a class="nav-link" href="/transaksi">Transaksi Pencucian</a>
      </div>
    </div>
  </div>
</nav>    

<table class="table table-success table-striped-columns">
<a href='/tambahmetode'><button type="button" class="btn btn-success" >tambah</button></a>
  <thead>
    <tr>
      <th scope="col">ID Metode</th>
      <th scope="col">Jenis Pembayaran</th>
      <th scope="col">Keterangan Bayar</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <tr>
        @foreach($metode as $r)
			<td>{{ $r->id_metodebayar }}</td>
			<td>{{ $r->jenis_bayar }}</td>
			<td>{{ $r->keterangan_bayar }}</td>
			<td>
      <a href='/editmetode/{{$r->id_metodebayar}}'><button type="button" class="btn btn-warning" >Update</button></a>
      <a href='/deletemetode/{{ $r->id_metodebayar }}'><button type="button" class="btn btn-danger" >Delete</button></a>
			</td>
		</tr>
        @endforeach
  </tbody>
</table>
</body>
</html>