<!-- app/views/custumer/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('custumer') }}">View All Customeres</a></li>
        <li><a href="{{ URL::to('custumer/create') }}">Create a Customer</a>
    </ul>
</nav>

<h1>Showing {{ $custumer->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $custumer->name }}</h2>
        <p>
            <strong>Email:</strong> {{ $custumer->email }}<br>
            <strong>Level:</strong> {{ $custumer->user_level }}
        </p>
    </div>

</div>
</body>
</html>