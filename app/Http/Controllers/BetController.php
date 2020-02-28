<?php

namespace App\Http\Controllers;

use App\Bet;
use App\Match;
use App\MatchResult;
use App\User;
use App\UserPoint;
use Illuminate\Http\Request;

class BetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        //Find todays matches
        $todaysMatches = Match::whereDate('Date','2020-06-14')->get();

        //for each match find a bet and process the bet to add points to it

        foreach ($todaysMatches as $matches){
            //dd($array);

            echo ("Processing todays match id $matches->id <br />") ;
            $bets = Bet::where('match_id',$matches->id)->get();
            foreach ($bets as $bet) {
                # code...
                $points= 0;
                echo ("Processing bet id $bet->id from user $bet->user_id <br />") ;

                $matchresult = MatchResult::where('match_id',$bet->match_id)->first();
                //echo ("Matchresult is $matchresult <br />");
                //dd($matchresult);
                if($matchresult){
                    if (!$bet->processed){
                        if ($bet->home_score == $matchresult->home_score && $bet->away_score == $matchresult->away_score){
                            $points += 10;
                            echo "user $bet->user_id 10 points <br />";
                        }
    
                        $matchWinner = getWinner($matchresult->home_score,$matchresult->away_score);
                        $betWinner = getWinner($bet->home_score,$bet->away_score);
                        echo "\t\t Match Winner is $matchWinner, Bet Winner is $betWinner <br />";
                        if ( $matchWinner == $betWinner ){
                            echo ("Bet ID=$bet->id 5 points <br />") ;
                            $points += 5;
                            }else{
                                echo ("Bet ID=$bet->id no points <br />") ;
                            }
    
                        //print_r("$matchresult->match_id - $matchWinner");
                        $userPoint = new UserPoint();
                        $userPoint->user_id = $bet->user_id;
                        $userPoint->bet_id = $bet->id;
                        $userPoint->points = $points;
                        $userPoint->save();
    
                        $bet->processed = "1";
                        $bet->save();
    
                        echo "user $bet->user_id win $points points on bet $bet->id  <br /> <br />";
                    }
                    
                }

            }
            #dd($array);

        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bet  $bet
     * @return \Illuminate\Http\Response
     */
    public function show(Bet $bet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bet  $bet
     * @return \Illuminate\Http\Response
     */
    public function edit(Bet $bet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bet  $bet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bet $bet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bet  $bet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bet $bet)
    {
        //
    }
}
