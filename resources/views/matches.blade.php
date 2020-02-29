@extends('layouts.test')
@section('title', 'Rezultati i raspored')
@section('header', 'Rezultati i raspored')
@section('header-subtext','Raspored i rezultati svih utakmica Eura 2020')
@section('content')
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
        @foreach ($matches as $match_date => $game)
            <div class="card-header font-weight-bold">
                <div class="d-flex align-items-center">
                    <h4 class="mr-auto mb-0">
                        {{$match_date}}
                    </h4>
                </div>
            </div>
                @foreach ($game as $match)

            <div class="d-flex mdivf">
                <div class="p-2 col-4 d-none d-xl-block det">
                      <div>{{$match->Date->format('D j M Y H:i')}}</div>
                      <div>{{$match->Group}}</div>
                      <div>{{$match->Location}}</div>
                      <!-- <div>Moscow</div> -->
                </div>
                <div class="p-2 col-12 col-lg-6 align-self-center">
                    <div class="row align-self-center">
                        <div class="media  align-self-center col-4">
                            <div class="media-body align-self-center">
                            <p class="mt-0 mb-1 text-right pl-2 pr-lg-4 pr-4 text-wrap d-none d-sm-block">{{$match->Home_Team}}</p>
                            </div>
                            <span title="RUS" class="tfl flag flag-{{$match->Home_Team}} "></span>
                        </div>
                        <div class="p-2 align-self-center col-3 col-lg-1">
                            <h5 class="text-center mscore">{{$match->matchresult->home_score ?? '0'}}-{{$match->matchresult->away_score ?? '0'}}</h5>
                        </div>
                        <div class="media align-self-center col-4">
                            <span title="RUS" class="tfr flag flag-{{str_replace(' ', '', $match->Away_Team)}} "></span>
                            <div class="media-body align-self-center">
                                <p class="mt-0 mb-1 pl-lg-4 pl-4 text-wrap d-none d-sm-block">{{$match->Away_Team}}</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            @endforeach

        @endforeach
</div>
@endsection