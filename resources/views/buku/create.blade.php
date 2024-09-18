<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        <h4>Tambah Buku</h4>
        <form method="POST" action="{{ route('buku.store') }}">
            @csrf
            <div>
                Judul:
                <input type="text" name="judul" value="{{ old('judul') }}">
                {{-- @error('judul')
                    <div>{{ $message }}</div>
                @enderror --}}
            </div>
            <div>
                Penulis:
                <input type="text" name="penulis" value="{{ old('penulis') }}">
                {{-- @error('penulis')
                    <div>{{ $message }}</div>
                @enderror --}}
            </div>
            <div>
                Harga:
                <input type="text" name="harga" value="{{ old('harga') }}">
                {{-- @error('harga')
                    <div>{{ $message }}</div>
                @enderror --}}
            </div>
            <div>
                Tanggal Terbit:
                <input type="date" name="tgl_terbit" value="{{ old('tgl_terbit') }}">
                {{-- @error('tgl_terbit')
                    <div>{{ $message }}</div>
                @enderror --}}
            </div>
            <div>
                <button type="submit">Tambah Buku</button>
            </div>
            <a href="{{ route('buku.index')}}"></a>
        </form>
    </div>
</body>

</html>
