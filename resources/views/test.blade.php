@extends('layouts.app')

@section('content')
@foreach ($data as $key)
<p>{{$key['photo']}}</p>

@endforeach
@foreach ($data2 as $key)
  <p>{{$key['photo']}}</p>
@endforeach

@endsection
