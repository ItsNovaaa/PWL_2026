<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Form tambah data user</title>
    </head>

    <body>
        <h1>Form Tambah Data User</h1>
        <form method="POST" action="{{ url('/user/tambah_simpan') }}">
            {{ csrf_field() }}
            <label> Username </label>
            <input type="text" name="username" placeholder="masukkan username">
            <br>
            <label> Nama </label>
            <input type="text" name="nama" placeholder="masukkan nama">
            <br>
            <label> Password </label>
            <input type="password" name="password" placeholder="masukkan password">
            <br>
            <label> Level ID </label>
            <input type="number" name="level_id" placeholder="masukkan level id">
            <br>
            <input type="submit" class="btn btn-success" value="Simpan Data">
        </form>
    </body>

</html>
