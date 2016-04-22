<!-- app/views/nerds/index.blade.php -->

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

<h1>All the Customeres</h1>
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Customer Level</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($custumer as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->user_level }}</td>
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('custumer/' . $value->id) }}">Show this Customer</a>
                <a class="btn btn-small btn-info" href="{{ URL::to('custumer/' . $value->id . '/edit') }}">Edit this Customer</a>
                {!! Form::open(array('route' => array('custumer.destroy', $value->id), 'method' => 'DELETE', 'class' => 'btn')) !!}
                   <button type="submit"  class="btn btn-small btn-danger" value="Delete" name="Delete" >Delete this Customer</button>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>