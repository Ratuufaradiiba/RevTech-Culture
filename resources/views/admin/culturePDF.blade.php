<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document PDF Culture</title>
</head>

<body>
    <h3 align="center">DATA CULTURE</h3>
    <table border="1" cellpadding="10" align="center">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Culture</th>
                <th>Kategori</th>
                <th>Deksripsi</th>
            </tr>
        </thead>
        <tbody>
            @php $no=1; @endphp
            @foreach ($culture as $row)
                <tr>
                    <th>{{ $no++ }}</th>
                    <td>{{ $row->nama_culture}}</td>
                    <td>{{ $row->kategori->nama_kategori }}</td>
                    <td>{{ $row->desc_culture }}</td>
                </tr>
            @endforeach
        </tbody>


    </table>

</body>

</html>
