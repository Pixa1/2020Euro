<?php

function getWinner($home_score,$away_score)
{
    //return $this->$home_score > $this->$away_score;
    if ($home_score > $away_score) {
        return "home_winner";
    }
    elseif ($home_score < $away_score)
    {
        return "away_winner";
    }
    else{
        return "tie";
    }

}
