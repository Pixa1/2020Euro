<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\UserPoint;
use App\Bet;

class UserPointController extends Controller
{
    //
    public function index()
    {

        $userpoints = DB::table('user_points')
                            ->select('user_id',DB::raw('SUM(points) as TotalPoints'),'users.name')
                            ->leftJoin('users','users.id','=','user_points.user_id')
                            ->groupBy('user_id')
                            ->orderBy('TotalPoints','desc')
                            ->get();

        return view('standings',compact('userpoints'));


    }
    public function show()
    {
        $user = Auth::user();
        $totalPoints = DB::table('user_points')->where('user_id',$user->id)->sum('points');

        $mybets = Bet::where('user_id',$user->id)->get();
       // dd($mybets);
        
        return view('profile',compact(['user','totalPoints','mybets']));
    }

}
