<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPoint extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function bet()
    {
        return $this->belongsTo(Bet::class);
    }
}
