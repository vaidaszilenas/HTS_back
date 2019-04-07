@extends('layouts.app')

@section('content')
  <p>{{$utena->photo}}</p>
@foreach ($utena->photo as $key)
<p>{{$key['photo']}}</p>


@endforeach


@endsection
