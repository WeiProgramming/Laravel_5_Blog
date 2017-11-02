@extends('main')
@section('title', '| Create New Post')

@section('stylesheets')
	{!! Html::style('css/parsley.css')!!}
    {!! Html::style('css/select2.min.css')!!}
@endsection

@section('content')

	<div class = "row">
		<div class = "col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr/>
			{!! Form::open(['route' => 'posts.store','data-parsley-validate'=>'']) !!}
    			{{Form::label('title','Title:')}}
    			{{Form::text('title',null,array('class' => 'form-control','required' =>'','maxlength'=> '255'))}}
    			{{-- //required is for parsley --}}
    			{{Form::label('slug','Slug:')}}
    			{{Form::text('slug', null, array('class' => 'form-control','required' =>'', 'maxlength' => '5','maxlength' => '255'))}}

    			{{Form::label('category_id','Category:')}}
    			<select class ="form-control" name = 'category_id'>
    				@foreach($categories as $category)
    						<option value = '{{$category->id}}'>{{$category->name}}</option>
    				@endforeach
    			</select>

                {{Form::label('tags','Tags:')}} {{-- added an array to the name, passes info of the selected items into the array for association!--}}
                <select class ="form-control select2-multi" name = 'tags[]' multiple = "multiple"> {{-- using the select 2 in js/css --}}
                    @foreach($tags as $tag)
                            <option value = '{{$tag->id}}'>{{$tag->name}}</option>
                    @endforeach
                </select>
     			
    			{{Form::label('body',"Post Body:")}}
    			{{Form::textarea('body',null,array('class' => 'form-control', 'required' => ''))}}

    			{{Form::submit('Create New Post',array('class' => 'btn-success btn-lg btn-block','style' => 'margin-top:20px'))}}
			{!! Form::close() !!}
		</div>
	</div>

@endsection

@section('scripts')
	
	{!!Html::script('js/parsley.min.js')!!}
    {!! Html::style('js/select2.min.js')!!}

    <script type="text/javascript">
$(document).ready(function() {
    $('.select2-multi').select2();
});
    </script>


@endsection