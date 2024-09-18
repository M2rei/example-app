<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buku</title>
</head>
<body>
    <a href="{{ route('buku.create') }}" class="btn btn-primary float-end">Tambah Buku</a>
    <table class="table ">
        <thead>
            <tr>
                <th>id</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Tanggal Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_buku as $buku )
            <tr>
                <td>{{ $buku->id }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->penulis }}</td>
                <td>Rp. {{ number_format($buku->harga, 2, ',', '.') }}</td>
                <td>{{ date('y/m/d', strtotime($buku->tgl_terbit)) }}</td>
                <td>
                    <form method="POST" action="{{ route('buku.delete', $buku->id) }}">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin mau di hapus?')" type="submit"
                        class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>    
            @endforeach
        </tbody>
    </table>
</body>
</html>