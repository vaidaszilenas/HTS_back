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
<section class="section-container">

  <div class="tz-gallery">
    <div class="row mb-3">
      <h5 class="col-12 text-left">Nuotraukos:</h5>
      @foreach ($utena->photo as $key)
      <?php

                  if ($key->photo ) {
                    $data = $key['photo'];
                    $photoUrl = explode('/', $data);
                    $photoUrl[0] = 'storage';
                    $photoUrl = implode('/', $photoUrl);

                }
                ?>
                <?php
                    $data = explode('.', $photoUrl);
                    $ext = end($data);
                 ?>
                @if ($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg' || $ext == 'gif' || $ext == 'svg')
                  <div class="col-2">
                    <div class="card mt-2">
                      <a class="lightbox" href="{{url($photoUrl)}}">
                        <img src="{{url($photoUrl)}}" alt="Park" class="card-img-top img-fluid" style="max-height: 250px;">
                      </a>
                    </div>
                  </div>
                @endif
      @endforeach
    </div>


    <div id="accordion">

  <div class="card">
    <div class="card-header" style="background-color: #70d6e3; border-style: none;">
      <a class="card-link" data-toggle="collapse" href="#collapseOne" style="color: black;">
        Dokumentai
      </a>
    </div>
    <div id="collapseOne" class="collapse" data-parent="#accordion">
      <div class="card-body">
        <div class="row">
        @foreach ($utena->photo as $key)
        <?php

                    if ($key->photo ) {
                      $data = $key['photo'];
                      $photoUrl = explode('/', $data);
                      $photoUrl[0] = 'storage';
                      $photoUrl = implode('/', $photoUrl);

                  }
                  ?>
                  <?php
                      $data = explode('.', $photoUrl);
                      $ext = end($data);
                   ?>
                  @if ($ext == 'pdf')
                    <div class="col-2">
                      <div class="mt-2">
                        <a class="lightbox" href="{{url($photoUrl)}}">
                          <img src="{{asset('images/pdf.png')}}" alt="Park" class="card-img-top img-fluid" style="max-height: 150px;  max-width: 100px;">
                        </a>
                        <p><?php
                          $title = explode('/', $data[0]);
                          echo end($title);
                         ?>
                        </p>
                      </div>
                    </div>
                  @endif
        @endforeach
      </div>
    </div>
  </div>
</div>

  <div class="card mt-2">
    <div class="card-header" style="background-color: #70d6e3;">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo" style="color: black;">
      Vaizdo įrašai
      </a>
    </div>
    <div id="collapseTwo" class="collapse" data-parent="#accordion">
      <div class="card-body" style="background-color: none;">
        <div class="row">

          @foreach ($utena->photo as $key)
          <?php

                      if ($key->photo ) {
                        $data = $key['photo'];
                        $photoUrl = explode('/', $data);
                        $photoUrl[0] = 'storage';
                        $photoUrl = implode('/', $photoUrl);

                    }
                    ?>
                    <?php
                        $data = explode('.', $photoUrl);
                        $ext = end($data);
                     ?>
                    @if ($ext == 'mp4')

                        <div class="col-4">
                          <div class="card mt-2">
                            <video src="{{url($photoUrl)}}" class="card-img-top img-fluid" style="max-height: 300px;" controls>

                            </video>
                          </div>
                        </div>
                    @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>




@if (Auth::check())
@if (Auth::user()->isAdmin())
    <div class="row">
      <div class="col-12">
        <form class="form-horizontal mt-4" method="post" action="{{route('telsiaiphoto-store')}}" enctype="multipart/form-data">
          {!!csrf_field() !!}
          <div class="form-group">
            <label for="image_url" class="control-label text-left col-12 p-0">Pridėkite daugiau nuotraukų / dokumentų / vaizdo įrašų</label>
            <div class="col-12 clearfix p-0">
              <input style="padding-top: 5px;" id="image_url" type="file" multiple='true' class="float-left" name="photo[]" value=""><br>
              @if ($errors->has('photo.*'))
              <span style="color:red;">{{$errors->first('photo.*')}}</span><br>
              @endif
            </div>
          </div>
          <div class="form-group">
            <input type="hidden" name="telsiai_id" value="{{$utena['id']}}">
          </div>
          <button type="submit" class="btn btn-success btn-sm float-left">
            Saugoti
          </button>
        </form>
        <a href="{{route('telsiai')}}" class="btn btn-primary btn-sm float-left ml-2">Grįžti</a>
      </div>
    </div>
  @endif
  @endif


</section>


@endsection
