@extends('layout')
@section('container')
<!DOCTPE html>
<html>
    <head>
    <title>View Student Records</title>
    </head>
    <body>
        <div style="overflow-x:auto; padding: 20px;">
            <table border = "1" style="width: 100%; color: #fff;">
                <tr>
                    <td>Id</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Email</td>
                    <td>Gender</td>
                    <td>IP Address</td>
                </tr>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->ip_address }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>
@stop
