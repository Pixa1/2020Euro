@extends('layouts.test')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verificiraj svoju Email adresu') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
                    
                    {{ __('Prije nastavka provjerite svoj email u kojem se nalazi link za verifikaciju.') }}
                    {{ __('Ako niste primili email') }},                    
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('pritisnite da vam pošaljemo novi') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
