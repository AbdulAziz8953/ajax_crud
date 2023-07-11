<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <table>
                <tr>
                    
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
</tr>
<tr>
    @foreach($data as $datas)
    <td>{{$datas->id}}</td>
    <td>{{$datas->name}}</td>
    <td>{{$datas->email}}</td>
    <td><a href="#">Edit</td>
    <td>Delete</td>

</tr>
@endforeach
</table>
</div>
</body>
</html>