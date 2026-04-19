<h1>Tambah Barang</h1>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<form action="{{ route('barang.store') }}" method="POST">
    @csrf

    <input type="text" name="nama_barang" placeholder="Nama Barang"><br><br>
    <input type="number" name="harga" placeholder="Harga"><br><br>
    <input type="number" name="stok" placeholder="Stok"><br><br>

    <button type="submit">Simpan</button>
</form>