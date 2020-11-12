<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
    table,th,td{
        border: 1px solid black;
    }
    </style>
</head>
<body>
<table >
<tr>
    <th>編號</th>
    <th>會員名稱</th>
    <th>生日</th>
    <th>帳號</th>
    <th>餘額</th>
</tr>
@foreach($stored1 as $stored)

        <tr style="color:red;">
            <td>{{ $stored->id }}</td>
            <td>{{ $stored->a_name }}</td>
            <td>{{ $stored->birth }}</td>
            <td>{{$stored->account }}</td>
            <td>{{ $stored->balance }}</td>
        </tr>

        @endforeach
        </table>
</body>
</html>
