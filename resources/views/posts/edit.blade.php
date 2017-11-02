@extends('main')

@section('title', '| Edit')

@section('content')

@section('stylesheets')
    {!! Html::style('css/parsley.css')!!}
    {!! Html::style('css/select2.min.css')!!}
@endsection

<div class = "row">
    {!!Form::model($post,['route' => ['posts.update',$post->id],'method' => 'PUT'])!!}
    <div class = "col-md-8">
        {{Form::label('title','Title:')}}
        {{Form::text('title',null,['class'=>'form-control input-lg'])}}{{-- needs to the same as sql column (name of column, size of form, route
        }--}}
        {{Form::label('slug','Slug:',['class' => 'form-spacing-top']) }}
        {{Form::text('slug',null, array('class'=> 'form-control')) }}
        {{-- //blade version of select --}}
        {{Form::label('category_id',"Category:",['class'=>'form-spacing-top'])}}
        {{Form::select('category_id',$cats,null,['class'=> 'form-control'])}}

        {{Form::label('tags','Tags:',['class'=>'form-spacing-top'])}}
        {{Form::select('tags[]',$tags,null,['class'=>'select2-multi','multiple'=>'multiple'])}}

         {{Form::label('body','Body:',['class'=>'form-spacing-top'])}}
        {{Form::textarea('body',null,['class' => 'form-control form-spacing-top'])}}
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
                {!! Html::linkRoute('posts.show','Cancel',array($post->id),array('class' => 'btn btn-danger btn-block')) !!}
                {{-- //bottom one is okay but lets do blade version routing (location,value to display on screen,array(id to edit), array(anything else like class) --}}
                </a>
            </div>
            <div class = "col-sm-6">
                    {{Form:: submit('Save Changes', ['class' => 'btn btn-success btn-block'])}}

            </div>
        </div> <!-- end of row -->
    </div> <!-- end well -->
    </div>
        {!!Form::close()!!}
</div>

@endsection

@section('scripts')
    {!! Html::style('css/select2.min.css')!!}
        <script type="text/javascript">
$(document).ready(function() {
    $('.select2-multi').select2();
});
    </script>
@endsection