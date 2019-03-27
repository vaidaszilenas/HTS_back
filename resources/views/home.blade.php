@extends('layouts.app')

@section('content')
    <meta http-equiv="refresh" content="1.5; {{route('basic')}}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mt-25vh">
                <div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Jūs sėkmingai prisijungėte!!</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
