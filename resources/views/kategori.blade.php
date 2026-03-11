<!DOCTYPE html>
<html>

    <head>
        <title>Data Kategori Barang</title>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th,
            td {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>

    <body>

        <h2>Data Kategori Barang (Query Builder)</h2>

        <table>
            <tr>
                <th>ID</th>
                <th>Kode Kategori</th>
                <th>Nama Kategori</th>
            </tr>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $d->kategori_id }}</td>
                    <td>{{ $d->kategori_kode }}</td>
                    <td>{{ $d->kategori_nama }}</td>
                </tr>
            @endforeach
        </table>

    </body>

</html>
