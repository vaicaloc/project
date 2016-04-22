<!-- app/views/custumer/edit.blade.php -->
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

<h1 style="text-align: center;">Create a Custumer</h1>
    <div class="col-md-4 col-md-offset-4">
        @if (count($errors) > 0)
            @foreach($errors->all() as $errors)
            {!! $errors !!}
            @endforeach
        @endif 

        {!! Form::open(array('route' => array('custumer.update', $custumer['id']), 'method' => 'PUT')) !!}
            <div class="form-group">
                <label for="name">username</label>
                <input type="text" value ='{!! old('name', isset($custumer)?$custumer['name']:null) !!}' class="form-control" name="nameUD" id="name">
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="email" value ='{!! $custumer['email']?$custumer['email'] :"" !!}' class="form-control" name="emailUD" id="email"> 
            </div>
            <div class="form-group">
                <label for="level">user level</label>
                <select name="levelUD" class="form-control" id="level">
                    <option value="1" {!! ($custumer['user_level']==1)? 'selected' :"" !!} >
                        level 1
                    </option>
                    <option value="2" {!! ($custumer['user_level']==2)? 'selected' :"" !!}>
                        level 2
                    </option>
                    <option value="3" {!! ($custumer['user_level']==3)? 'selected' :"" !!}>
                        level 3
                    </option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        {!! Form::close() !!}
    </div>
</div>
</body>
</html>