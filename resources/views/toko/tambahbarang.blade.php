<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Barang</title>
</head>
<body>

    <a href="/barang">kembali</a>
    <h1 style="text-align: center; margin: 10px;">Tambah Barang</h1>
    <center>
        <form action="/barang" method="post">
            @csrf
            <label for="barang">Nama Barang</label>
            <input type="text" name="nama" id="barang"><br>
            <label for="harga">harga</label>
            <input type="text" name="harga" id="harga"><br>
            <button type="submit">
                Simpan Data
            </button>
        </form>
    </center>

</body>
</html>