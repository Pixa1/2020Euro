<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Match extends Model
{
    //
    protected $dates = ['Date'];
    public function bet()
    {
        return $this->hasOne(Bet::class);
    }
    public function matchResult()
    {
        return $this->hasOne(MatchResult::class);
    }
    public function started()
    {
        //if ($this->Date < Carbon::now()->addHours(-1)){
        if ($this->Date < Carbon::parse('2020-06-11 21:34')->addHours(-1)){
            return "True";
        }
        
    }
}
