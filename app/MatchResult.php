<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MatchResult extends Model
{
    //
    public function match()
    {
        return $this->belongsTo(Match::class);
    }

}
