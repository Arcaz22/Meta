<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>Kota Asal</th>
            <th>Kota Tujuan</th>
            <th>Aksi</th>

        </thead>
        <tbody>
            @foreach ($jurusan as $js)
            <tr>
                <td>
                    {{ $js->kota_asal }}
                </td>
                <td>
                    {{ $js->kota_tujuan }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>