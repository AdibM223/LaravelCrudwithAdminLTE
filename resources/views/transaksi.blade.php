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
        <a class="nav-link" href="/metode">Metode Pembayaran</a>
        <a class="nav-link active" href="/transaksi">Transaksi Pencucian</a>
      </div>
    </div>
  </div>
</nav>    

<table class="table table-success table-striped-columns">
<a href='/tambahtransaksi'><button type="button" class="btn btn-success" >tambah</button></a>
  <thead>
    <tr>
      <th scope="col">ID Transaksi</th>
      <th scope="col">Status Pembayaran</th>
      <th scope="col">Nominal Bayar</th>
      <th scope="col">Tanggal Transaksi</th>
      <th scope="col">ID Metode Pembayaran</th>
      <th scope="col">ID Kendaraan </th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <tr>
        @foreach($transaksi as $t)
			<td>{{ $t->id_transaksibayar }}</td>
			<td>{{ $t->statuspembayaran }}</td>
			<td>{{ $t->nominalbayar }}</td>
			<td>{{ $t->tanggal_transaksi }}</td>
            <td>{{ $t->id_metode }}</td>
            <td>{{ $t->id_kendaraan }}</td>
            <td>
      <a href='/edittransaksi/{{$t->id_transaksibayar}}'><button type="button" class="btn btn-warning" >Update</button></a>
      <a href='/deletetransaksi/{{ $t->id_transaksibayar }}'><button type="button" class="btn btn-danger" >Delete</button></a>
			</td>
		</tr>
        @endforeach
  </tbody>
</table>
</body>
</html>