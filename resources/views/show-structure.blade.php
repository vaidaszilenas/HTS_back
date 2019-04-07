@extends('layouts.app')

@section('content')


  <section class="section-container">
    <h1 class="mb-3">{{$utena['pond']}}</h1>
    <div class="row">
      <div class="col-6">
          <p class="text-justify"> {{$utena['describe']}} </p>

      </div>
      <div class="col-6 maps">
        <iframe src="https://www.google.com/maps/d/embed?mid=1zOCAAkM_46qYRqA9cSS4cXf3fkUY8CBp" width="100%" height="350"></iframe>
      </div>
    </div>
  </section>
  <section class="section-container">
        <div class="tz-gallery">
            <div class="row mb-3">
                <div class="col-2">
                    <div class="card">
                        <a class="lightbox" href="{{$utena->nextGetUrlAttribute()}}">
                          <img src="{{$utena->nextGetUrlAttribute()}}" alt="Park" class="card-img-top">
                        </a>
                    </div>
                </div>

                <div class="col-2">
                    <div class="card">
                        <a class="lightbox" href="images/bg.png">
                        <img src="images/bg.png" alt="Park" class="card-img-top">
                        </a>
                    </div>
                </div>

                <div class="col-2">
                    <div class="card">
                        <a class="lightbox" href="images/bg.png">
                        <img src="images/bg.png" alt="Park" class="card-img-top">
                        </a>
                    </div>
                </div>


                <div class="col-2">
                    <div class="card">
                        <a class="lightbox" href="images/bg.png">
                        <img src="images/bg.png" alt="Park" class="card-img-top">
                        </a>
                    </div>
                </div>

                <div class="col-2">
                    <div class="card">
                        <a class="lightbox" href="images/bg.png">
                        <img src="images/bg.png" alt="Park" class="card-img-top">
                        </a>
                    </div>
                </div>

                <div class="col-2">
                    <div class="card">
                        <a class="lightbox" href="images/bg.png">
                        <img src="images/bg.png" alt="Park" class="card-img-top">
                        </a>
                    </div>
                </div>
            </div>
        <button type="button" name="button" class="btn btn-success btn-sm float-left mr-2">Sukurti</button>
        <button type="button" name="button" class="btn btn-primary btn-sm float-left mr-2">Redaguoti</button>
        <button type="button" name="button" class="btn btn-danger btn-sm float-left">Ištrinti</button>

  </section>
@endsection
