@extends('layouts.app')

@section('content')
  <section>
    <div class="section-container">
      <h1 class="mb-2">Utenos apskritis</h1>
      <div class="row">
        @foreach ($utena as $hts)
        <div class="col-3">
          <div class="section-border">

            <h4>{{$hts['pond']}} <br> {{$hts['district']}} raj.</h4>
            <a href="{{route('hts-show', $hts->id)}}">  <img src="{{$hts->getUrlAttribute()}}" alt="" class="img-thumbnail"></a>
            <p class="mt-4"> {{$hts['small-describe']}} </p>
            <p>Sukurta : {{date('Y-m-d', strtotime($hts['created_at']))}}</p>
          
          </div>

        </div>
      @endforeach

    </div>
    <a href="{{'/create-structure'}}" class="btn btn-success btn-sm float-left mr-2 mt-4 mb-4">Sukurti naują HTS statinį</a>
  </section>

@endsection
