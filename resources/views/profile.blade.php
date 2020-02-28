@extends('layouts.test')
@section('title', 'Frequently asked questions')
@section('content')
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
<div class="min-height-200px">
    <div class="row clearfix progress-box">
        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 mb-10">
            <div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
                <div class="profile-photo">
                    <!-- <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a> -->
                    <img src="src/images/avatar.jpg" alt="" class="avatar-photo">
                    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body pd-5">
                                    <div class="img-container">
                                        <img id="image" src="src/images/avatar.jpg" alt="Picture">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" value="Update" class="btn btn-primary">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="text-center">{{$user->name}}</h5>
                <!-- <p class="text-center text-muted">Lorem ipsum dolor sit amet</p> -->
                <div class="profile-info">
                    <h5 class="mb-20 weight-500">Kontakt informacije</h5>
                    <ul>
                        <li>
                            <span>Email adresa:</span>
                            {{$user->email}}
                        </li>
                </div>
            </div>
        </div>
        
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-10">
                <div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
                    <h4 class="mb-30">Ukupno bodova</h4>
                    <div class="device-manage-progress-chart">
                            <p class="display-1 text-center pt-4 weight-500 text-primary">{{$totalPoints}}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-10">
                <div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
                    <h4 class="mb-30">Trenutna pozicija na tablici</h4>
                    <div class="clearfix device-usage-chart">
                        <p class="display-1 text-center pt-4 weight-500 text-success">{{$user->rank}}</p>
                    </div>
                </div>
            </div>
    </div>
</div>
</div>
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
    <div class="col-md-6 offset-md-3">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Utakmica</th>
                    <th scope="col">Tvoj rezultat</th>
                    <th scope="col">Rezultat utakmice</th>
                    <th scope="col">Bodovi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mybets as $bet)
                    
                <tr>
                    <td>{{$bet->id}}</td>
                    <td>{{$bet->match->Home_Team}} - {{$bet->match->Away_Team}}</td>
                    <td>{{$bet->home_score ?? ''}} - {{$bet->away_score ?? ''}}</td>
                    <td>{{$bet->match->matchresult->home_score ?? ''}} - {{$bet->match->matchresult->away_score ?? ''}}</td>
                    <td>{{$bet->userpoint->points ?? ''}}</td>
                </tr>

                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection