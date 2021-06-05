<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Barang</title>
</head>
<body>

    <a href="/pelanggan">kembali</a>
    <h1 style="text-align: center; margin: 10px;">Tambah Pelanggan</h1>
    <center>
        <form action="/pelanggan" method="post">
            @csrf
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama"><br>
            <label for="alamat">alamat</label>
            <input type="text" name="alamat" id="alamat"><br>
            <button type="submit">
                Tambah Data
            </button>
        </form>
    </center>

</body>
</html>