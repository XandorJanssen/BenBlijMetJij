@extends('layouts.app')

@section('content')

<h1>Contact</h1>

<div class="row">

    <div class="col-md-8">

        @if( ! session()->has('successs'))
        <form action="{{ route('contact.store') }}" method="POST">
            <div class="form-group">
                <label for="name">Naam</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                <div class="text-danger">{{ $errors->first('name') }}</div>
            </div>

            <div class="form-group">
                <label for="email">E-mailadres</label>
                <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                <div class="text-danger">{{ $errors->first('email') }}</div>
            </div>

            <div class="form-group">
                <label for="tel">Telefoonnummer*</label>
                <input type="text" name="tel" value="{{ old('tel') }}" class="form-control">
                <div>{{ $errors->first('tel') }}</div>
            </div>

            <div class="form-group">
                <label for="message">Bericht</label>
                <textarea name="message" id="message" cols="30" rows="7"
                    class="form-control">{{ old('message') }}</textarea>
                <div class="text-danger">{{ $errors->first('message') }}</div>
            </div>


            <p>
                <div class="g-recaptcha" data-sitekey="6Ld4SN8ZAAAAAA7q8z-WY36RUYUI8OYFS2sFTwMz"></div>
                <div class="text-danger">{{ $errors->first('g-recaptcha-response') }}</div>
            </p>


            @csrf

            <button type="submit" class="btn btn-success DarkGreen-background">Versturen</button>
        </form>

        <small class="form-text text-muted">
            Velden met een * zijn optioneel
        </small>
        @endif

        @if(session()->has('successs'))
        <div class="alert alert-success" role="alert">
            <strong>Verzonden!</strong> {{ session()->get('successs') }}
        </div>
        @endif




    </div>

    <div class="col-md-4">


        <div class="card mb-4 shadow-sm">
            @map([
            'lat' => 51.585730,
            'lng' => 5.350840,
            'zoom' => 13,
            'markers' => [
            [
            'title' => 'Ben Blij Met Jij',
            'lat' => 51.585730,
            'lng' => 5.350840,
            'popup' => '<h5>Ben Blij Met Jij</h5>
            <p>De Volder 9, 5283 ZA, Boxtel</p>',
            ],
            ],
            ])


            <div class="card-body">
                <p class="card-text">


                    <ul class="list-unstyled mb-0">
                        <li>
                            <p> <i class="fas fa-map-marked-alt"></i> De Volder 9, 5283 ZA, Boxtel</p>
                        </li>

                        <li>
                            <b>Vera van Schaik</b>
                            <p><i class="fas fa-phone"></i> +31-613935042</p>
                            <b>Willianne van Schaik</b>
                            <p><i class="fas fa-phone"></i> +31-613936336</p>
                        </li>

                        <li>
                            <p><i class="fas fa-envelope"></i> benblijmetjij@gmail.com</p>
                        </li>
                    </ul>


                </p>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
