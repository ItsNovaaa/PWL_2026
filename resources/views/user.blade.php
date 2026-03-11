<!DOCTYPE html>
<html>

    <head>
        <title>Data User</title>
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

        <h2>Data User (Eloquent ORM)</h2>
        <a href="user/tambah">+tambah user</a>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Nama</th>
                <th>ID Level Pengguna</th>
                <th>Kode Level</th>
                <th>Nama Level</th>

                <th>Aksi</th>
            </tr>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $d->user_id }}</td>
                    <td>{{ $d->username }}</td>
                    <td>{{ $d->nama }}</td>
                    <td>{{ $d->level_id }}</td>
                    <td>{{ $d->level->level_kode }}</td>
                    <td>{{ $d->level->level_nama }}</td>
                    <td><a href="user/ubah/{{ $d->user_id }}">ubah</a> | <a
                            href="user/hapus/{{ $d->user_id }}">hapus</a></td>
                </tr>
            @endforeach
        </table>

    </body>

</html>
