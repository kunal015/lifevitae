<html>
    <head>
    <meta charset="utf-8">
        <title>Profile Page</title>
         <style>
                <link  href="C:\xampp\htdocs\lifevitae\bootstrap\css" rel="stylesheet"/>
                <link  href="{{asset("bootstrap/css/bootstrap.css")}} rel="stylesheet"/>
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
        <div class="container">
            <div class="row" style="margin-top:45px">
                <div class="col-md-6 col-md-offset-3">
                <h2>Profile</h2>
                    <table class="center">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date Of Birth</th>
                            <th>Gender</th>
                            <th>Description</th>
                            <th>Operation</th>
                            <th>Operation</th>
                            <th>Operation</th>
                            <th>Operation</th>
                        </tr>
                            <tr>
                                <td>{{$LoggedUserInfo->name}}</td>
                                <td>{{$LoggedUserInfo->email}}</td>
                                <td>{{$LoggedUserInfo->dob}}</td>
                                <td>{{$LoggedUserInfo->gender}}</td>
                                <td>{{$LoggedUserInfo->desc}}</td>
                                <td><a href="logout">Logout</a></td>
                                <td><a href={{"delete/".$LoggedUserInfo['id']}}>Delete</a></td>
                                <td><a href="list">List</a></td>
                                <td><a href={{"edit/".$LoggedUserInfo['id']}}>Update</a></td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
