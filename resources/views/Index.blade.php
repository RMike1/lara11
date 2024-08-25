<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Student management</h1>
    <form action="{{ route('store') }}" method="post">
        @csrf
        Name:<input type="text" name="name">
        Age:<input type="text" name="age">
        <button type="submit">Save</button>

    </form>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $info)
            <tr>
                <td>{{$info->name}}</td>
                <td>{{$info->age}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
