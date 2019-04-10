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
            <button type="button" name="button" class="btn btn-primary btn-sm mb-4">Redaguoti</button>
            <button type="button" name="button" class="btn btn-danger btn-sm mb-4">Ištrinti</button>


          </div>

        </div>
      @endforeach

    </div>
    <a href="{{'/create-structure'}}" class="btn btn-success btn-sm float-left mr-2 mt-4 mb-4">Sukurti naują HTS statinį</a>
  </section>

@endsection
{{-- <button type="button" name="button" class="btn btn-primary btn-sm float-left mr-2 justify-bottom">Redaguoti</button>
<button type="button" name="button" class="btn btn-danger btn-sm float-left">Ištrinti</button> --}}
