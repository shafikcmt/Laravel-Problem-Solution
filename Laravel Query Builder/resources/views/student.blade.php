<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <table width="100%" border="2" cellpadding="10">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
           @foreach($students as $stu)
            <tr>
                <td>{{$stu->name}}</td>
                <td>{{$stu->email}}</td>
                <td>{{$stu->phone}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
</body>

</html>