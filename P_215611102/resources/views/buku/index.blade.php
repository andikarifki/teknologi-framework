<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buku</title>
</head>
<body>
    <form action='/buku/cari' method='get' enctype='multipart/form-data'>
        <input type='text' placeholder='Cari Jududl Buku..' name='search'>
        <button type='submit'>Cari</button>
        </form>
        <a href='/buku/create' class='btn btn-default'>Tambah Buku</a></br></br>
        <table border='1'><tr>
            <th>Id</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
            <th>Alamat</th>
            </tr>
        @foreach ($brs as $abrs)
        
        <tr><td>{{ $abrs->id }}</td><td>
                {{ $abrs->judul }}</td><td>
                 {{ $abrs->pengarang }}</td><td>
                 {{ $abrs->tahun_terbit }}</td><td>
                 {{ $abrs->getPenerbit->penerbit }}</td><td>
                 {{ $abrs->getPenerbit->alamat }}</td></tr>
        @endforeach
        </table>
</body>
</html>