<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>News</h1>
    <p>This is my news page.</p>
    <p>News id: {{$my_news}}</p> <!-- Showing id from the route -->
    <p>Name: {{$name}}</p>
    <p>Email: {{$email}}</p>



    <!-- using for each loop to access array -->
    <ul>
        @foreach($departments as $d)
        <li>{{$d}}</li>
        @endforeach
    </ul>


    <!-- using for each loop to access array of array -->
    <ul>
        @foreach($departmentWithArray as $d)
        <ul>{{$d['name']}}: {{$d['code']}}</ul>
        @endforeach
    </ul>



    <!-- Generating table -->
    <table>
        <thead>
            <th>Name</th>
            <th>Code</th>
        </thead>
        <tbody>
            @foreach($departmentWithArray as $newD)
            <tr>
                <td>{{$newD['name']}}</td>
                <td>{{$newD['code']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>