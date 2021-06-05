<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Tambah Pelanggan</title>
  </head>
  <body>
    {{-- <h1>Hello, world!</h1> --}}
          <a href="/pelanggan" class="btn btn-success mt-3" style="margin-left: 10%;">Kembali</a>
          <br>
          <div class="container">
            <table class="table ">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($pelanggan as $p) 
                <tr> 
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $p->nama }}</td>
                  {{-- <td>Rp. {{ number_format($p->harga) }}</td> --}}
                  <td>{{ $p->alamat }}</td>
                  <td>
                    <a href="/pelanggan/{{ $p->id }}" onclick="return confirm(Anda Yakin Ingin Menghapus?)">Hapus</a> | 
                    <a href="/pelanggan/ubahbarang/{{ $p->id }}">Edit</a>
                  </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>