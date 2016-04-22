@extends('layout.master')

@section('content')

	<!-- display all record in books table -->
	<div class="col-md-10 col-md-offset-1 table-bordered">
		<div class="col-md-10" >
			<div class="col-md-3"><strong>Title</strong> </div>
			<div class="col-md-9">{!! $book->title !!}</div>
		</div>
		<div class="col-md-10">
			<div class="col-md-3"><strong>Author</strong> </div>
			<div class="col-md-9">{!! $book->author !!}</div>
		</div>
		<div class="col-md-10">
			<div class="col-md-3"><strong>Content</strong> </div>
			<div class="col-md-9">{!! $book->content !!}</div>
		</div>
	</div>
@stop