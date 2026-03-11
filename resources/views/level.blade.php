<!DOCTYPE html>
<html>

    <head>
        <title>Data Level Pengguna</title>
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

        <h2>Data Level Pengguna (DB Facade)</h2>

        <table>
            <tr>
                <th>ID</th>
                <th>Kode Level</th>
                <th>Nama Level</th>
            </tr>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $d->level_id }}</td>
                    <td>{{ $d->level_kode }}</td>
                    <td>{{ $d->level_nama }}</td>
                </tr>
            @endforeach
        </table>

    </body>

</html>
