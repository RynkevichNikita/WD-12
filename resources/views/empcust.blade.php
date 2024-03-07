<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data</title>
</head>
<body>
    <table>
        <th>Customer</th>
        <th>Employee</th>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->customerName }}</td>
                <td>{{ $user->lastName }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>