<?php

namespace App\Http\Controllers;

use App\Match;
use App\Bet;
Use App\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$matches = Match::All();
        //dd(Session()->all());
        $matches = Match::with(['bet' =>function ($query){
            $query->where('user_id',auth()->user()->id);
        }])->get()->groupBy(function ($val) {
            return \Carbon\Carbon::parse($val->Date)->format('l d F Y');
        });
        
        return view('mybets',compact('matches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request);
        //dd($request['match']);
        //dd($request->request->get('match',[]));
        //$input = $request->all();
        //dd($input);
        function isInteger($input){
            return(ctype_digit(strval($input)));
        }

        $user = User::where('id',auth()->user()->id)->first();


        foreach ($request['match'] as $match) {
            # code...
                //dd($match);
                if ($match['home'] || $match['away']){
                    $check = Match::where('id',$match['id'])->first();
                    
                    if(isInteger($match['home']) && isInteger($match['away'])){
                    //dd($match);
                        if (!$check->started()){
                            $game = Bet::where('match_id',$match['id'])->where('user_id',$user->id)->first();
                            
                            if($game){
                                // "Postoji, napravi pudate";
                                $game->home_score = $match['home'];
                                $game->away_score = $match['away'];
                                $game->save();
                            // dd($game);
                            }else{

                                $bet = new Bet;
                                $bet->user_id = $user->id;
                                $bet->home_score = $match['home'];
                                $bet->away_score= $match['away'];
                                $bet->match_id=$match['id'];
                                $bet->save();
                                //echo "novi bet, spremi novi";
                            }
                        }
                    }else{
                    $notification = array(
                        'message' => 'Molimo koristite samo brojeve [0-9]',
                        'alert-type' => 'error'
                    );
                    return back()->with($notification);
                }
            }
        }
        //return $request['match'];
        $notification = array(
            'message' => 'Uspješno spremljeno',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function show(Match $match)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function edit(Match $match)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Match $match)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function destroy(Match $match)
    {
        //
    }
}
