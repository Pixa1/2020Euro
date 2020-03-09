@extends('layouts.test')
@section('title', 'Poredak')

@section('content')
<div class="row clearfix progress-box">
    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
        <div class="bg-white pd-20 box-shadow border-radius-5 ">
            <div class="project-info clearfix">
                <div class="project-info-left">
                    <div class="icon box-shadow bg-blue text-white">
                    <i class="icon-copy fa fa-user-o" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="project-info-right">
                    <span class="no text-blue weight-500 font-24">{{$usercount}}</span>
                    <p class="weight-400 font-18">Broj igrača</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
        <div class="bg-white pd-20 box-shadow border-radius-5 ">
            <div class="project-info clearfix">
                <div class="project-info-left">
                    <div class="icon box-shadow bg-light-green text-white">
                    <i class="icon-copy fa fa-eur" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="project-info-right">
                    <span class="no text-light-green weight-500 font-24">{{$usercount*50}}kn</span>
                    <p class="weight-400 font-18">Fond nagrada</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
        <div class="bg-white pd-20 box-shadow border-radius-5 ">
            <div class="project-info clearfix">
                <div class="project-info-left">
                    <div class="icon box-shadow bg-light-orange text-white">
                        <i class="fa fa-list-alt"></i>
                    </div>
                </div>
                <div class="project-info-right">
                    <span class="no text-light-orange weight-500 font-24">2 Lakhs</span>
                    <p class="weight-400 font-18">Projects Complete</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
        <div class="bg-white pd-20 box-shadow border-radius-5">
            <div class="project-info clearfix">
                <div class="project-info-left">
                    <div class="icon box-shadow bg-light-purple text-white">
                        <i class="fa fa-podcast"></i>
                    </div>
                </div>
                <div class="project-info-right">
                    <span class="no text-light-purple weight-500 font-24">5.1 Lakhs</span>
                    <p class="weight-400 font-18">Pending Business</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
    <div class="col-md-6 offset-md-3">
    <p>Trenutni redosljed</p>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Igrač</th>
                    <th scope="col">Bodovi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($userpoints as $index=>$points)
                    
                <tr>
                    <td>{{$index+1}}</td>
                    <td>{{$points->name}}</td>
                    <td>{{$points->TotalPoints}}</td>
                </tr>

                @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection