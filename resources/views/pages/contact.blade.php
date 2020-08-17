@extends('layouts.app')

@section('content')

    <h1>Contact</h1>

    <div class="row">

        <div class="col-md-6">

            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName" class="">Naam</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Jan Janssen">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPhone">*Telefoon nummer </label>
                        <input type="text" class="form-control" id="inputPhone" placeholder="06-XXXXXXXX">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Plaat hier uw email-adres">
                </div>
                <div class="form-group">
                    <label for="inputSubject">Onderwerp</label>
                    <input type="text" class="form-control" id="inputSubject" placeholder="Vraag, afspraak">
                </div>

                <div class="form-group">
                    <label for="inputMessage">Bericht</label>
                    <textarea class="form-control" id="inputMessage" placeholder="Type hier uw bericht"
                        rows="12"></textarea>
                </div>


                <button type="Versturen" class="btn btn-primary">Versturen</button>
            </form>

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
