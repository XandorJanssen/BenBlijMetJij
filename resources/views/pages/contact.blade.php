@extends('layouts.app')

@section('content')

<h1>Contact</h1>

<div class="row">

    <div class="col-md-6">

        <div class="container box">
            <h3 >How Send an Email in Laravel</h3><br />
            @if (count($errors) > 0)
             <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <ul>
               @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
               @endforeach
              </ul>
             </div>
            @endif
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
             <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
            </div>
            @endif
            <form method="post" action="{{url('sendemail/send')}}">
             {{ csrf_field() }}
             <div class="form-group">
              <label>Enter Your Name</label>
              <input type="text" name="name" class="form-control" value="" />
             </div>
             <div class="form-group">
              <label>Enter Your Email</label>
              <input type="text" name="email" class="form-control" value="" />
             </div>
             <div class="form-group">
              <label>Enter Your Message</label>
              <textarea name="message" class="form-control"></textarea>
             </div>
             <div class="form-group">
              <input type="submit" name="send" class="btn btn-info" value="Send" />
             </div>
            </form>

           </div>

        <small class="form-text text-muted">
            Velden met een * zijn optioneel
        </small>
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
