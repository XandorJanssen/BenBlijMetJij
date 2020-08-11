@extends('layouts.app')

@section('content')

    <div class="jumbotron p-4 p-md-5 text-white rounded header-test boven-aanpassing shadow-sm headerHeight">
        <div class="row">

            <div class="col-md-2">
            </div>

            <div class="col-md-8 px-0 headerCenter">
                {{-- <h1 class="display-4 fancy">Jij</h1> --}}
                <p class="lead my-3 fancy fancy-size"><span class="fancy-size-title">Jij</span> mag zijn zoals je bent, om
                    te worden wie je bent maar nog niet kunt zijn. Je mag het worden op jouw manier, in jouw tijd.</p>
            </div>

            <div class="col-md-2">
            </div>

        </div>
    </div>


    {{-- <div
        class="jumbotron p-4 p-md-5 text-white rounded header-test boven-aanpassing shadow-sm headerHeight">
        <div class="row">

            <div class="col-md-8 px-0 headerCenter">
                <h1 class="display-4 fancy">Jij</h1>
                <p class="lead my-3 fancy fancy-size"><span class="fancy-size-title">Jij</span> mag zijn zoals je bent, om
                    te worden wie je bent maar nog niet kunt zijn. En je mag het worden op jouw manier en in jouw tijd.</p>
            </div>

            <div class="col-md-2 d-none d-sm-none d-md-none d-lg-block headerLogoCenter">
                <img src="/images/logo.png" width="100%" height="100%" class="img-fluid" alt="Ben blij met jij">
            </div>

        </div>
    </div> --}}


    {{-- <div
        class="jumbotron p-4 p-md-5 text-white rounded header-test  boven-aanpassing shadow-sm">
        <div class="row test">

            <div class="col-md-8 px-0 test">
                <h1 class="display-4 fancy">Ben blij met jij</h1>
                <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
                    efficiently about what’s most interesting in this post’s contents.</p>
            </div>

            <div class="col-md-2 d-none d-sm-none d-md-none d-lg-block test">
                <img src="/images/logo.png" width="100%" height="100%" class="img-fluid" alt="Ben blij met jij">
            </div>

        </div>
    </div> --}}


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

    <hr class="featurette-divider">

    <div class="row featurette row-right">
        <div class="col-md-7 order-md-2 card shadow-sm">
            <h2 class="featurette-heading">Behandelingen</h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
                semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                commodo.</p>
            <p class="lead mb-0"><a href="/behandelingen" class="font-weight-bold">Lees verder...</a></p>
        </div>
        <div class="col-md-5 order-md-1 row-right">
            <img src="/images/Placeholder-kinderen.jpg" class="featurette-image img-fluid mx-auto shadow-sm" width="500"
                height="500">
        </div>
    </div>

    {{--
    <hr class="featurette-divider">

    <div class="row featurette row-left">
        <div class="col-md-7 card shadow-sm">
            <h2 class="featurette-heading">Ouders</h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
                semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                commodo.</p>
            <p class="lead mb-0"><a href="/ouders" class="font-weight-bold">Lees verder...</a></p>
        </div>
        <div class="col-md-5">
            <img src="/images/Placeholder-ouders.jpg" class="featurette-image img-fluid mx-auto shadow-sm" width="500"
                height="500">
        </div>
    </div> --}}


    <!-- /END THE FEATURETTES -->
@endsection
