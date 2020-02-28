@extends('layouts.test')
@section('title', 'Poredak')
@section('header', 'Poredak')
@section('header-subtext','Trenutni poredak')
@section('content')
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