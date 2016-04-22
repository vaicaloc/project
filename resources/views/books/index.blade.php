@extends('layout.master')

@section('content')
	<!-- display all record in books table -->
	<table class="table table-striped table-bordered">
	    <thead>
	        <tr>
	            <td>ID</td>
	            <td>title</td>
	            <td>author</td>
	            <td>Actions</td>
	        </tr>
	    </thead>
	    <tbody>
	    @foreach($books as $key => $value)
	        <tr>
	            <td>{{ $value->id }}</td>
	            <td>{{ $value->title }}</td>
	            <td>{{ $value->author }}</td>
	            <td>
	                <a class="btn btn-small btn-success" href="#" data-toggle="modal" data-target="#myModal{{$value->id}}">Show this Customer</a>
	                <a class="btn btn-small btn-info" href="{{ URL::to('books/' . $value->id . '/edit') }}">Edit this Book</a>
	                <a class="btn btn-small btn-danger" href="{{ URL::to('books/delete/'. $value->id) }}">Delete this Book</a>
	            </td>
	        </tr>
	        <!-- begin dialog -->
			<div class="modal fade" id="myModal{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			    
			      <div class="modal-body">
			      	<div class="col-md-12 table-bordered">
						<div class="col-md-12" >
							<div class="col-md-2"><strong>Title</strong> </div>
							<div class="col-md-10">{!! $value->title !!}</div>
						</div>
						<div class="col-md-12">
							<div class="col-md-2"><strong>Author</strong> </div>
							<div class="col-md-10">{!! $value->author !!}</div>
						</div>
						<div class="col-md-12">
							<div class="col-md-2"><strong>Content</strong> </div>
							<div class="col-md-10">{!! $value->content !!}</div>
						</div>
						<div class="clearfix"></div>
					</div>
			      </div>
			      <div class="clearfix"></div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>	
			<!-- the end dialog -->
	    @endforeach
	    	
    	</tbody>
	</table>
@stop