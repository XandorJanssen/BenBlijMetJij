@extends('layouts.app')

@section('content')

<div class="jumbotron p-4 p-md-5 text-white rounded header-test3 boven-aanpassing shadow-sm">

    <div class="col-md-8 px-0 ">
        <h1 class="display-4 fancy">Tarieven</h1>
    </div>
</div>



<div class="card shadow-sm">
    <div class="card-body">
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
                    <td>45 min</td>
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
                    <th scope="row">Ontspanningsmassage (intuïtief) volwassenen 30 minuten</th>
                    <td>45 min</td>
                    <td>€&nbsp;20,-</td>
                </tr>

                <tr>
                    <th scope="row">Massage + magnetiseren + chakra balans 60 minuten</th>
                    <td>75 min</td>
                    <td>€&nbsp;40,-</td>
                </tr>
            </tbody>
        </table>

        <em>*Het analyseren van een tekening vindt achteraf plaats.</em>


    </div>
</div>

@endsection
