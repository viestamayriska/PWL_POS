<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
</head>
<body>
    <h1>Data User</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Name</th>
            <th>ID Level Pengguna</th>
        </tr>
     
        <tr>
            <td>{{ $data->user_id }}</td> <!-- Gunakan $d untuk setiap item dalam iterasi -->
            <td>{{ $data->username }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->level_id }}</td>
        </tr>
       
    </table>
</body>
</html>
