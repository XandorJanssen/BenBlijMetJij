@extends('layouts.app')

@section('content')

<div class="jumbotron p-4 p-md-5 text-white rounded header-test boven-aanpassing shadow-sm headerHeight">
    <div class="row">

        <div class="col-md-2">
        </div>

        <div class="col-md-8 px-0 headerCenter">
            <p class="lead my-3 fancy fancy-size"><span class="fancy-size-title">Jij</span> mag zijn zoals je bent, om
                te worden wie je bent maar nog niet kunt zijn. Je mag het worden op jouw manier, in jouw tijd.</p>
        </div>
    </div>
</div>

<div class="card-group shadow-sm">

    <div class="card">
        <img src="/images/kinderen.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Tekeningen</h5>
            <p class="card-text">
                Kinderen en volwassenen laten in tekeningen zien wat hen bezighoudt,
                het zegt iets over hun persoonlijkheid en geeft een kijkje in de ziel.
                Met de informatie die uit een tekening gehaald wordt kunnen kinderen maar ook volwassenen geholpen
                worden.
                Je tekent onbewust, niet toevallig!
            </p>
        </div>
        <div class="card-footer">
            <a href="#Tekeningen">Lees meer...</a>
        </div>
    </div>

    <div class="card">
        <img src="/images/kinderen2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Magnetiseren</h5>
            <p class="card-text">
                Met magnetiseren wordt oude, overtollige en negatieve energie afgevoerd en vervangen door nieuwe,
                schone en positieve energie.
                Het doel is om het zelfhelend vermogen van lichaam en geest te activeren en te stimuleren.
            </p>
        </div>
        <div class="card-footer">
            <a href="#Magnetiseren">Lees meer...</a>
        </div>
    </div>

    <div class="card">
        <img src="/images/kinderen3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Aromatherapie</h5>
            <p class="card-text">
                Door middel van essentiële oliën wordt de gemoedstoestand en gezondheid beïnvloed.
                De essentiële oliën worden door de huid of door inademing opgenomen en komen terecht in de bloedbaan.
                Op die manier hebben essentiële oliën hun uitwerking op het gehele lichaam.
            </p>
        </div>
        <div class="card-footer">
            <a href="#Aromatherapie">Lees meer...</a>
        </div>
    </div>

    <div class="card">
        <img src="/images/kinderen3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Massage</h5>
            <p class="card-text">
                Massage maakt sterk en minder kwetsbaar.
                Door een massage wordt het immuunsysteem versterkt, stress neemt af en er treedt diepe ontspanning op.
                Masseren is vooral heilzaam voor drukke kinderen of voor iedereen die uit balans is geraakt.
            </p>

        </div>

        <div class="card-footer">
            <a href="#Massage">Lees meer...</a>
        </div>
    </div>
</div>


<!-- START THE FEATURETTES -->

<hr class="featurette-divider">

<div class="row featurette  row-left ">
    <div class="col-md-7 card shadow-sm">
        <h2 class="featurette-heading">Over ons</h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
            semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
            commodo.</p>
        <p class="lead mb-0"><a href="/overons" class="font-weight-bold">Lees verder...</a></p>
    </div>
    <div class="col-md-5">
        <img src="/images/Placeholder-overons.jpg" class="featurette-image img-fluid mx-auto shadow-sm" width="500"
            height="500">
    </div>
</div>

<!-- /END THE FEATURETTES -->
@endsection
