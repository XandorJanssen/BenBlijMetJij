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
                        <th scope="col">Prijs</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Kennismaking + tekenen + tekening analyse* (sessie duur: 45 min.):</th>
                        <td>€ 30,-</td>
                    </tr>
                    <tr>
                        <th scope="row">Tekenen + kindermassage + tekening analyse* (sessie duur: 60 min.):</th>
                        <td>€ 35,-</td>
                    </tr>
                    <tr>
                        <th scope="row">Kindermassage (sessie duur: 30 min.):</th>
                        <td>€ 20,-</td>
                    </tr>
                    <tr>
                        <th scope="row">Tekenen + tekening analyse* (sessie duur: 30 min.):</th>
                        <td>€ 20,-</td>
                    </tr>
                </tbody>
            </table>

            *Het analyseren van een tekening gebeurd pas na een sessie.

        </div>
    </div>

@endsection
