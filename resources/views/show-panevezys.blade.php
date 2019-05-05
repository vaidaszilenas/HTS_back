@extends('layouts.app')

@section('content')


<section class="section-container">
  <h1 class="mb-3">{{$utena['pond']}}, {{$utena['district']}}</h1>
  <div class="row">
    <div class="col-6">
      <p class="text-justify"> {{$utena['describe']}} </p>
    </div>
    <div class="col-6 maps">
      <iframe src="https://www.google.com/maps/d/embed?mid=1zOCAAkM_46qYRqA9cSS4cXf3fkUY8CBp" width="100%" height="350"></iframe>
    </div>
  </div>
</section>

@endsection
