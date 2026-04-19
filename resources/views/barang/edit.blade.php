<h1>Edit Barang</h1>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<form action="{{ route('barang.update', $barang->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nama_barang" value="{{ $barang->nama_barang }}"><br><br>
    <input type="number" name="harga" value="{{ $barang->harga }}"><br><br>
    <input type="number" name="stok" value="{{ $barang->stok }}"><br><br>

    <button type="submit">Update</button>
</form>