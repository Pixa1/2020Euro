@extends('layouts.test')
@section('title', 'Poredak')

@section('content')
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
<div class="min-height-200px">
    <div class="row clearfix progress-box">
        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 mb-10">

        </div>
        
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-10">
                <div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
                    <h4 class="mb-30">Ukupan broj igrača</h4>
                    <div class="device-manage-progress-chart">
                            <p class="display-1 text-center pt-4 weight-500 text-primary">{{$usercount}}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-10">
                <div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
                    <h4 class="mb-30">Fond</h4>
                    <div class="clearfix device-usage-chart">
                        <p class="display-1 text-center pt-4 weight-500 text-success">{{$usercount*50}}kn</p>
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