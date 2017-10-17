@extends('main')

@section('title','| View Post')

@section('content')
<div class = "row">
	<div class = "col-md-8">
	<h1>{{ $post -> title }}</h1>

	<p class = "lead">{{$post -> body }}</p>
	</div>
	<div class ="col-md-4">
	<div class = "well">
		<dl class = "dl-horizontal">
			<dl>Create At:</dl>
			<dd>{{date('M j, Y h:ia',strtotime($post->created_at))}}</dd>
		</dl>


		<dl class = "dl-horizontal">
			<dl>Updated At:</dl>
			<dd>{{date('M j, Y h:ia',strtotime($post->updated_at))}}</dd>
		</dl>
		<div class="row">

			<div class = "col-sm-6">
				{!! Html::linkRoute('posts.edit','Edit',array($post->id),array('class' => 'btn btn-primary bt -block')) !!}
				{{-- //bottom one is okay but lets do blade version routing (location,value to display on screen,array(id to edit), array(anything else like class) --}}
			</div>
			<div class = "col-sm-6">
				{!!Form::open(['route'=>['posts.destroy',$post->id],'method' => 'DELETE'])!!}

				{!!Form::submit('Delete', ['class'=> 'btn btn-danger btn -block'])!!}

				{!!Form::close()!!}
			</div>
		</div>
	</div>
	</div>
</div>
@endsection