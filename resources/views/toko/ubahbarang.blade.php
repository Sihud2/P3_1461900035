<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah Barang</title>
</head>
<body>

    <a href="/barang">Kembali</a>
    <h1 style="text-align: center; margin: 10px;">Ubah Barang</h1>

    <center>
        <form action="/barang/updatebarang" method="post">
            {{csrf_field()}}
            <label for="barang">Nama Barang</label>
            @foreach ($barang as $brg)
            <input type="hidden" name="id" value="{{ $brg->id }}">
            <input type="text" name="nama" id="barang" value="{{ $brg->nama }}"><br>
            <label for="harga">harga</label>
            <input type="text" name="harga" id="harga" value="{{ $brg->harga }}"><br>
            @endforeach
            <button type="submit">
                Ubah Data
            </button>
        </form>
    </center>

</body>
</html>