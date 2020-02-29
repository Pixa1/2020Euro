@extends('layouts.test')
@section('title', 'Pravila igre')
@section('header', 'Pravila igre')

@section('content')
<div class="min-height-200px">
    <div class="faq-wrap">
        <h4 class="mb-20"></h4>
        <div id="accordion">
            <div class="card">
                <div class="card-header">
                    <button class="btn btn-block" data-toggle="collapse" data-target="#faq1">
                        Postavljanje rezultata
                    </button>
                </div>
                <div id="faq1" class="collapse show" data-parent="#accordion">
                    <div class="card-body">
                        Rezultati se mogu postaviti do jedan sat prije službenog početka utakmice
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq2">
                        Bodovanje
                    </button>
                </div>
                <div id="faq2" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        <p>Bodovanje se vrši prema sljedećim pravilima:</p>
                            <p>
                                <ol>
                                    <li>1. Točan rezultat = 15 Bodova</li>
                                    <li>2. Točan pobjednik = 5 Bodova</li>
                                </ol>
                            </p>
                       <p> U slučaju jednakog broja bodova, prednost će se dati igraču koji će imati više pogođenih točnih rezultat <p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection