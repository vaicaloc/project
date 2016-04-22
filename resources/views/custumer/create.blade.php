<!-- app/views/nerds/create.blade.php -->

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

<h1 style="text-align: center;">Create a Customer</h1>

	<div class="col-md-4 col-md-offset-4">
	@if (count($errors) > 0)
		@foreach($errors->all() as $errors)
		{!! $errors !!}
		@endforeach
	@endif
		<form method="POST" action="{{ route('custumer.store') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
		<div class="form-group">
	      	<label for="name">username</label>
	        <input type="text" class="form-control" name="name" id="name">
	    </div>

	    <div class="form-group">
	        <label for="email">email</label>
	        <input type="email" class="form-control" name="email" id="email">
	        
	    </div>

	    <div class="form-group">
	        <label for="level">user level</label>
	        <select name="level" class="form-control">
	        	<option value="1">
	        		level 1
	        	</option>
	        	<option value="2">
	        		level 2
	        	</option>
	        	<option value="3">
	        		level 3
	        	</option>
	        </select>
	    </div>
	    <button type="submit" class="btn btn-primary">Submit</button>
	</form>
	</div>
	
</div>
</body>
</html>