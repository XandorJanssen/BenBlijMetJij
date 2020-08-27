@extends('layouts.app')

@section('content')

    <div class="jumbotron p-4 p-md-5 text-white rounded header-test3 boven-aanpassing shadow-sm">

        <div class="col-md-8 px-0 ">
            <h1 class="display-4 fancy">Tarieven</h1>
            {{-- <p class="lead my-3">
                Multiple lines of text that form the lede, informing new readers quickly and efficiently
                about what’s most interesting in this post’s contents.
            </p> --}}
        </div>
    </div>



    {{-- <div class="card-group shadow-sm">
        <div class="card">
            <img src="/images/ouders.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>

            </div>
        </div>
        <div class="card">
            <img src="/images/ouders2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>

            </div>
        </div>
        <div class="card">
            <img src="/images/ouders3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This card has even longer content than the first to show that equal height action.</p>

            </div>
        </div>
    </div> --}}

    <hr>

    <div class="card shadow-sm">
        <div class="card-body">
            {{-- <h1>Body</h1> --}}
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Behandeling</th>
                        <th scope="col">Sessie duur</th>
                        <th scope="col">Prijs</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Kennismaking + tekenen + tekening analyse* </th>
                        <td >45 min</td>
                        <td>€&nbsp;30,-</td>
                    </tr>
                    <tr>
                        <th scope="row">Tekenen + kindermassage 30 min + tekening analyse* </th>
                        <td>75 min</td>
                        <td>€&nbsp;35,-</td>
                    </tr>
                    <tr>
                        <th scope="row">Kindermassage 30 min</th>
                        <td>45 min</td>
                        <td>€&nbsp;20,-</td>
                    </tr>
                    <tr>
                        <th scope="row">Tekenen + tekening analyse*</th>
                        <td>30 min</td>
                        <td>€&nbsp;20,-</td>
                    </tr>

                    <tr>
                        <th scope="row">Ontspanningsmassage (intuïtief) volwassenen 30 minuten:</th>
                        <td>45 min</td>
                        <td>€&nbsp;20,-</td>
                    </tr>

                    <tr>
                        <th scope="row">Massage + magnetiseren + chakra balans  60 minuten:</th>
                        <td>75 min</td>
                        <td>€&nbsp;40,-</td>
                    </tr>
                </tbody>
            </table>

            <em>*Het analyseren van een tekening vindt achteraf plaats.</em>

            <hr class="featurette-divider">

            {{-- <h1>Annuleren</h1>
            <p>
               indien een afsrpaak niet tijdig (minimaal 24u van te voren) wordt afgezegd,
               worden de kosten van de gereserveerde tijd in rekening gebracht
            </p> --}}
        </div>
    </div>

@endsection
