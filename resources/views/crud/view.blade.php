<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script>
        function check() {
            return confirm('Are y sure y want to delete the entites');
        }
    </script>

</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" id="main-navbar" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{URL::to('/')}}" class="navbar-brand">Crud System</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{URL::to('/')}}">Home</a> </li>
                <li><a href="{{URL::to('/view')}}">View</a> </li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron">
    <div class="container">
        <h1>Crud System :: View</h1>
        <h3>Basic Crud System Using laravel</h3>
    </div>
</div>


<div class="container">
    {{Session::get('message')}}
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($student as $students)

            <th scope="row">{{$students->id}}</th>
            <td>{{$students->first_name}}</td>
            <td>{{$students->last_name}}</td>
            <td>{{$students->email}}</td>
            <td><a href="{{URL::to('/edit/'.$students->id)}}">Edit</a> | <a onclick="return check()" href="{{URL::to('/delete/'.$students->id)}}">Delete</a> </td>

        </tr>
        @endforeach
        </tbody>
    </table>

</div>





<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>