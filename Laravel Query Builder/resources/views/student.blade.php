<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Query Builder in Laravel</title>
</head>

<body>
    <table width="100%" border="2" cellpadding="10">
       <h2>Retrieving All Rows from Table</h2>
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
    
     <table width="100%" border="2" cellpadding="10">
       <h2>Retrieving Single Row/Column from Table</h2>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
           
            <tr>
                <td>{{$students1->name}}</td>
                <td>{{$students1->email}}</td>
                <td>{{$students1->phone}}</td>
            </tr>
            <tr>
                <td>{{$students2->name}}</td>
                <td>{{$students2->email}}</td>
                <td>{{$students2->phone}}</td>
            </tr>
           
        </tbody>

    </table>
</body>

</html>