@extends('layouts.app')

@section('content')
  <section>
    <div class="section-container">
      <h1 class="mb-2">Šiaulių apskritis</h1>
      <div class="row">
        @foreach ($utena as $hts)
        <div class="ccol-sm-3 mb-4">
          <div class="section-border">

            <h4>{{$hts['pond']}} <br> {{$hts['district']}}</h4>
            <a href="{{route('show-siauliai', $hts->id)}}">  <img src="{{$hts->getUrlAttribute()}}" alt="" class="img-thumbnail"></a>
            <p class="mt-4"> {{$hts['small-describe']}} </p>

            <p>Sukurta : {{date('Y-m-d', strtotime($hts['created_at']))}}</p>

            @if (Auth::check())
            @if (Auth::user()->isAdmin())
              <form class="" action="{{route('destroy-siauliai', $hts->id)}}" method="post" style="display: inline-block;">
                {{ csrf_field() }}
                {{-- {{ method_field('delete') }} --}}
                <button type="submit" name="button" class="btn btn-danger btn-sm mb-4">Ištrinti</button>
              </form>
          @endif
          @endif
          </div>
        </div>
      @endforeach

    </div>

  <div class="row">
    <div class="col-sm-12">
      @if (Auth::check())
      @if (Auth::user()->isAdmin())
      <a href="{{'/create-siauliai'}}" class="btn btn-primary btn-sm float-left mr-2 mt-4 mb-4">Sukurti naują HTS statinį</a>
    @endif
    @endif
      <ul class="pagination pagination-sm mt-4 pl-2">
        {{$utena->links()}}
      </ul>
    </div>

  </div>
  </section>

@endsection
{{-- <button type="button" name="button" class="btn btn-primary btn-sm float-left mr-2 justify-bottom">Redaguoti</button>
<button type="button" name="button" class="btn btn-danger btn-sm float-left">Ištrinti</button> --}}
