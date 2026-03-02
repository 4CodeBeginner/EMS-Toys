<!DOCTYPE html>
<html>
<head>
    <title>Data Users</title>
</head>
<body>

<h1>Data Users</h1>
<a href="/users/tambah">tambah user</a>
<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>ID User</th>
        <th>Name</th>
        <th>Role</th>
        <th>Created At</th>
    </tr>

    @foreach($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->id_user }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->role }}</td>
        <td>{{ $user->created_at }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>
