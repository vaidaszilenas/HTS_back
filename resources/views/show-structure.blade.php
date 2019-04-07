@extends('layouts.app')

@section('content')


  <section class="section-container">
    <h1 class="mb-3">{{$utena['pond']}}</h1>
    <div class="row">
      <div class="col-6">
          <p class="text-justify"> {{$utena['describe']}} </p>
        



          <button type="button" name="button" class="btn btn-primary btn-sm float-left mr-2 justify-bottom">Redaguoti</button>
          <button type="button" name="button" class="btn btn-danger btn-sm float-left">Ištrinti</button>

      </div>
      <div class="col-6 maps">
        <iframe src="https://www.google.com/maps/d/embed?mid=1zOCAAkM_46qYRqA9cSS4cXf3fkUY8CBp" width="100%" height="350"></iframe>
      </div>
    </div>
  </section>
  <section class="section-container">

        <div class="tz-gallery">
            <div class="row mb-3">
              @foreach ($utena->photo as $key)
                <?php

                  if ($key->photo ) {
                    $data = $key['photo'];
                    $photoUrl = explode('/', $data);
                    $photoUrl[0] = 'storage';
                    $photoUrl = implode('/', $photoUrl);

                }
                ?>
                <div class="col-2">
                    <div class="card">
                        <a class="lightbox" href="{{url($photoUrl)}}">
                          <img src="{{url($photoUrl)}}" alt="Park" class="card-img-top">

                        </a>
                    </div>
                </div>

              @endforeach






</div>
<div class="row">
  <div class="col-12">
    <form class="form-horizontal mt-4" method="post" action="{{route('photo-store')}}" enctype="multipart/form-data">
          {!!csrf_field() !!}
            <div class="form-group">
                <label for="image_url" class="control-label ml-3">Pridėkite daugiau nuotraukų</label>
                    <div class="col-12">
                          <input style="padding-top: 5px;"id="image_url" type="file" class="" name="photo" value=""><br>
                          @if ($errors->has('photo'))
                            <span style="color:red;">{{$errors->first('photo')}}</span><br>
                          @endif
                        </div>
                  </div>
                  <div class="form-group">
                        <input type="hidden" name="utena_id" value="{{$utena['id']}}">
                  </div>
          <button type="submit" class="btn btn-success btn-sm float-left ml-3">
                      Saugoti
          </button>
      </form>
  </div>

</div>


  </section>
@endsection
