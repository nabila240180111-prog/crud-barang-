<h1>Data Barang</h1>

<a href="{{ route('barang.create') }}">+ Tambah Barang</a>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<table border="1" cellpadding="10">
    <tr>
        <th>Nama</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

    @foreach ($barang as $b)
    <tr>
        <td>{{ $b->nama_barang }}</td>
        <td>{{ $b->harga }}</td>
        <td>{{ $b->stok }}</td>
        <td>
            <a href="{{ route('barang.edit', $b->id) }}">Edit</a>

            <form action="{{ route('barang.destroy', $b->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>