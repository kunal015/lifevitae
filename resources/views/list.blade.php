<html>
    <head>
    <meta charset="utf-8">
        <title>Profile Page</title>
         <style>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
                table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
table.center {
  margin-left: auto;
  margin-right: auto;
}
tr:nth-child(even) {
  background-color: #dddddd;
}
        </style>
    </head>
<body>
    <h1>Member List</h1>
    <table>
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Gender</td>
                <td>Date Of Birth</td>
                <td>Description</td>
                <td>Operation</td>
            </tr>
            @foreach( $members as $item)
                <tr>
                    <td>{{$item['name']}}</td>
                    <td>{{$item['email']}}</td>
                    <td>{{$item['gender']}}</td>
                    <td>{{$item['dob']}}</td>
                    <td>{{$item['desc']}}</td>
                    <td><a href={{"delete/".$item['id']}}>Delete</a></td>
                </tr>
            @endforeach
    </table>
</body>
</html>
