@extends('layouts.test')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Molimo napravite uplatu') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Da bi mogli sudjelovati potrebno je izvršiti prijavu.') }}
                    {{ __('Ako ste izvršili uplatu, ova poruka će se maknuti u roku nekoliko sati.') }}
                    {{ __('Da bi brže procesirali vaš zahtjev, kod uplate koristitie ove podatke:') }}
                    <p>
                    ID:{{ Auth::user()->id}} - email: {{Auth::user()->email}} </p>
<!--                     <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection