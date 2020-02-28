<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;
use App\MatchResult;

class MatchResultController extends Controller
{
    //
    public function index()
    {


        $matches = Match::All()->groupBy(function ($val) {
            return \Carbon\Carbon::parse($val->Date)->format('l d F Y');
        });
        return view('matches',compact('matches'));


    }
    public function admin()
    {


        $matches = Match::All()->groupBy(function ($val) {
            return \Carbon\Carbon::parse($val->Date)->format('l d F Y');
        });
        return view('admin',compact('matches'));


    }
    public function store(Request $request)
    {
        //return $request;

        foreach ($request['match'] as $match) {
            # code...
                //dd($match['id']);
                //echo $match['home'];

            if ($match['home'] || $match['away']){
                 $matchResult = MatchResult::where('match_id',$match['id'])->first();
                if ($matchResult){
                    $matchResult->match_id = $match['id'];
                    $matchResult->home_score = $match['home'];
                    $matchResult->away_score = $match['away'];
                    $matchResult->save();
                }
                else{
                    $matchResult = new MatchResult;
                    $matchResult->match_id = $match['id'];
                    $matchResult->home_score = $match['home'];
                    $matchResult->away_score = $match['away'];
                    $matchResult->save();
                }
            }
        }
        //return $request['match'];
        $notification = array(
            'message' => 'Updated match results',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }
}

