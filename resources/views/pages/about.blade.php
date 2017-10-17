@extends('main')

@section('title', '| About')

@section('content')
      <div class="row">
        <div class="col-md-12">
          <h1>About Me </h1>
          <p>{{$bigd['eball']}} Hi i'm {{$fullname}} and this is my actual full name {{$bigd['full']}}</p>
        </div>
      </div>

@endsection