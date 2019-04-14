@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <form class="form-horizontal" method="post" action="{{route('utena-store')}}" enctype="multipart/form-data">
      {!!csrf_field() !!}
      <div class="form-group">
        <label for="title" class="control-label ml-3 float-left">Tvenkinys</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="pond" value="{{old('pond')}}" placeholder="Įveskite tvenkinio pavadinimą">
          @if ($errors->has('pond'))
          <span style="color:red;" class="float-left">Įveskite tvenkinio pavadinimą</span><br>
          @endif
        </div>
      </div>

      <div class="form-group">
        <label for="sel1" class="control-label ml-3 float-left">Rajonai:</label>
        <div class="col-sm-10">
          <select class="form-control" name="district">
            <option value="Anykščių">Anykščių raj.</option>
            <option value="Ignalinos">Ignalinos raj.</option>
            <option value="Molėtų">Molėtų raj.</option>
            <option value="Utenos">Utenos raj.</option>
            <option value="Zarasų">Zarasų raj.</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="price" class="control-label ml-3 float-left">Trumpas aprašymas</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="small-describe" rows="5" placeholder="Įveskite tekstą">{{old('small-describe')}}</textarea>
          @if ($errors->has('small-describe'))
          <span style="color:red;" class="float-left">Įveskite aprašymą</span><br>
          @endif
        </div>
      </div>
      <div class="form-group">
        <label for="price" class="control-label ml-3 float-left">Aprašymas</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="describe" rows="5" placeholder="Įveskite tekstą">{{old('describe')}}</textarea>
          @if ($errors->has('describe'))
          <span style="color:red;" class="float-left">Įveskite aprašymą</span><br>
          @endif
        </div>
      </div>
      <div class="form-group">
        <label for="image_url" class="control-label ml-3 float-left">Pridėkite nuotrauką</label>
        <div class="col-sm-10">
          <input style="padding-top: 5px;" id="image_url" type="file" class="" name="file_name" value=""><br>
          @if ($errors->has('file_name'))
          <span style="color:red;" class="float-left">Pridėkite paveikslėlį</span><br>
          @endif
        </div>
      </div>
      <button type="submit" class="btn btn-primary float-left ml-3">
        Saugoti
      </button>

      <a href="{{'/county-utena'}}" class="btn btn-danger float-left ml-1">
        Grįžti
      </a>

    </form>
  </div>
</div>
@endsection
{{-- <form class="form-horizontal" action="{{route('upload', $id)}}" method="post" enctype="multipart/form-data"> --}}
