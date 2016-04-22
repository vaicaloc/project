<!-- app/views/nerds/create.blade.php -->
@extends('layout.master')

@section('content')

<h1 style="text-align: center;">Insert a Book</h1>
	<div class="col-md-4 col-md-offset-4">
		<?php 
			 $title   =  $errors->first('title');
			 $author  =  $errors->first('author');
			 $content =  $errors->first('content');
		?>
		<form method="POST" action="{{ route('books.store') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
		<div class="form-group">
	      	<label for="title">Title</label>
	        <input type="text" class="form-control" name="title" id="title">
	        {!! $title  !!}
	    </div>
	    <div class="form-group">
	        <label for="author">Author</label>
	        <input type="text" class="form-control" name="author" id="author">
	        {!! $author !!}
	    </div>
	    <div class="form-group">
	        <label for="content">Content</label>
	        <textarea class="forn-control" rows="5" cols="41" name="content" id="content"></textarea> 
	        {!! $content !!}
	    </div>
	    <button type="submit" class="btn btn-primary">Submit</button>
	</form>
	</div>	
@stop