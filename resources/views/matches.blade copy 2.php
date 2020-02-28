@extends('layouts.test')
@section('title', 'Match Results')
@section('header', 'Match Results')
@section('header-subtext','Current match results')
@section('content')

        @foreach ($matches as $match_date => $game)
            <div class="card-header font-weight-bold mb-2">
                <div class="d-flex align-items-center">
                    <h4 class="mr-auto mb-0">
                        {{$match_date}}
                    </h4>
                </div>
            </div>
                @foreach ($game as $match)

                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="row pt-1">
                            <div class="col-auto">
                                <p class="text-left ml-lg-1">{{$match->Group}}</p>
                            </div>
                            <div class="col-auto d-none d-sm-block">
                                <p class="text-left ">{{$match->Location}}</p>
                            </div>
                        </div>
                    </div>  
                    <div class="col-12 col-lg-6">
                        <div class="row pt-1">
                            <div class="col-6 col-lg-3 mt-1 order-2">
                                <p class="text-lg-right">{{$match->Home_Team}}</p>
                            </div>
                            <div class="col-6 col-lg-2 order-3">
                                <input class="form-control text-center" type="text" name="match[{{$match->id}}][home]" value="{{$match->bet->home_score ?? ''}}"
                                @if ($match->started())
                                    readonly
                                @endif >
                            </div>
                            <div class="col-12 col-lg-auto mt-1 order-1 order-lg-10 d-none d-sm-block">
                                <p class=" ">{{$match->Date->format('H:i')}}</p>
                            </div>
                            <div class="col-6 col-lg-2 order-5 order-lg-11">
                                <input class="form-control text-center" type="text" name="match[{{$match->id}}][away]" value="{{$match->bet->away_score ?? ''}}"
                                @if ($match->started())
                                    readonly
                                @endif>
                            </div>
                            <div class="col-6 col-lg-3 mt-1 order-4 order-lg-12">
                                <p class="text-left text-truncate">{{$match->Away_Team}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        @endforeach
@endsection