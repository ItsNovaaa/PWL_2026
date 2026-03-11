<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Form ubah data user</title>
    </head>

    <body>
        <h1>Form ubah Data User</h1>
        <form method="POST" action="{{ url('/user/ubah_simpan/' . $data->user_id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <label> Username </label>
            <input type="text" name="username" placeholder="masukkan username" value="{{ $data->username }}">
            <br>
            <label> Nama </label>
            <input type="text" name="nama" placeholder="masukkan nama" value="{{ $data->nama }}">
            <br>
            <label> Password </label>
            <input type="password" name="password" placeholder="masukkan password" value="{{ $data->password }}">
            <br>
            <label> Level ID </label>
            <input type="number" name="level_id" placeholder="masukkan level id" value="{{ $data->level_id }}">
            <br>
            <input type="submit" class="btn btn-success" value="Ubah Data">
        </form>
    </body>

</html>
