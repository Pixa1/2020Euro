@extends('layouts.test')
@section('title', 'Admin Content - Match Results')
@section('content')


<form action="/submitresult" method="post">
    @csrf
        @foreach ($matches as $match_date => $game)
            <div class="card-header font-weight-bold mb-2">
                <div class="d-flex align-items-center">
                    <h4 class="mr-auto mb-0">
                        {{$match_date}}
                    </h4>
                    <button class="btn btn-outline-primary" type="submit" >Submit</button>
                </div>
            </div>
                @foreach ($game as $match)

            <input type="hidden" name="match[{{$match->id}}][id]" value="{{$match->id}}">
            <div class="row ">

                <div class="col-auto col-lg-1 mt-1 align-self-center">
                    <p class="text-left ml-1">{{$match->Group}}</p>
                </div>
                <div class="col-auto col-lg-2 mt-1 align-self-center">
                    <p class="text-left ">{{$match->Location}}</p>
                </div>
                <div class="col-lg-2 mt-1 align-self-center">
                </div>
                <div class="col-auto col-lg-2 mt-1 align-self-center">
                    <p class="text-right ml-1">{{$match->Home_Team}}</p>
                </div>
                <div class="col-2 col-lg-1 ">
                    <input class="form-control text-center" type="text" name="match[{{$match->id}}][home]" value="{{$match->matchResult->home_score ?? ''}}">
                </div>
                <div class="col-auto col-lg-1 mt-1 align-self-center">
                    <p class="text-center ">{{$match->Date->format('H:i')}}</p>
                </div>
                <div class="col-2 col-lg-1">
                    <input class="form-control text-center" type="text" name="match[{{$match->id}}][away]" value="{{$match->matchResult->away_score ?? ''}}">
                </div>
                <div class="col-auto col-lg-2 mt-1 align-self-center">
                    <p class="text-left">{{$match->Away_Team}}</p>
                </div>
            </div>
            @endforeach

        @endforeach
</form>



@endsection

