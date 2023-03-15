@extends('layouts/main')

@section('container')
    <h1>Halaman About</h1>
    <table border="2">
        <tr>
            <th>Nama</th>
            <td><?= $nama; ?></td>
        </tr>
        <tr>
            <th>Tempat</th>
            <td><?php echo $tempat; ?></td>
        </tr>
        <tr>
            <th>Jenkel</th>
            <td>{{ $jenkel }}</td>
        </tr>
    </table>
    <img src="img/uit.jpg" alt="uit-photo">
@endsection