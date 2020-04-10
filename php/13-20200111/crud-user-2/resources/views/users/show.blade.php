<html>
    <head>
        <h1>SHOW INFO</h1>
        <style>
            table{border-collapse: collapse;}
        </style>
    </head>
    <body>
        <table border=1>
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
            </thead>
            <tbody>
                <th>{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
            </tbody>
        </table>
    </body>
</html>

