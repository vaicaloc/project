<!-- app/views/nerds/create.blade.php -->
@extends('layout.master')

@section('content')
<h1 style="text-align: center;">Insert a Book</h1>
   		<?php 
			$title   =  $errors->first('title');
		    $author  =  $errors->first('author');
			$content =  $errors->first('content');
		?>
	<div class="col-md-4 col-md-offset-4">
		{!! Form::open(array('route' => array('books.update', $book->id), 'method' => 'PUT', 'class' => 'btn')) !!}
			<input type="hidden" name="_token" value="{{ csrf_token() }}" />
			<div class="form-group">
		      	<label for="title">Title</label>
		        <input type="text" class="form-control" name="title"  value ='{!! old('name', isset($book)?$book->title:null) !!}' id="title">
		    	{!! $title  !!}
		    </div>
		    <div class="form-group">
		        <label for="author">Author</label>
		        <input type="text" class="form-control" name="author" value ='{!! old('name', isset($book)?$book->author:null) !!}'id="author">        
		    	{!! $author  !!}
		    </div>
		    <div class="form-group">
		        <label for="content">Content</label>
		        <textarea class="form-control" rows="5" cols="41" name="content" id="content"> {!! isset($book)?$book->content:null !!}</textarea>
		    	{!! $content  !!}
		    </div>
		    <button type="submit" class="btn btn-primary">Submit</button>
		{!! Form::close() !!}
	</div>	
</div>
@stop