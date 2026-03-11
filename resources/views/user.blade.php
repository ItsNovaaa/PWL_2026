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

    <h2>Data User</h2>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>id</th>
            <th>username</th>
            <th>nama</th>
            <th>level_id</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->user_id }}</td>
                <td>{{ $d->username }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->level_id }}</td>
            </tr>
        @endforeach
    </table>

</body>

</html>