<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bet extends Model
{
    public function match()
    {
        return $this->belongsTo(Match::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function userpoint()
    {
        return $this->hasOne(UserPoint::class);
    }
}
