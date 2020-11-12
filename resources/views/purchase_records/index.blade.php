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
        <th>訂單編號</th>
        <th>購買日期</th>
        <th>序號</th>
        <th>會員編號</th>
        <th>商品編號</th>

    </tr>
    @foreach($stored1 as $stored)

        <tr style="color:red;">
            <td>{{ $stored->id }}</td>
            <td>{{ $stored->b_number }}</td>
            <td>{{ $stored->b_date }}</td>
            <td>{{$stored->serial_number }}</td>
            <td>{{ $stored->a_id }}</td>
            <td>{{ $stored->p_id }}</td>
        </tr>

    @endforeach
</table>
</body>
</html>
