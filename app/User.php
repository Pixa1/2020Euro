<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function bet()
    {
        return $this->hasMany(Bet::class);
    }
    public function userPoint()
    {
        return $this->hasMany(UserPoint::class);
    }
    public function getRankAttribute() {
        
        $ranks = UserPoint::query()
            ->select('user_id')->selectRaw('SUM(`points`) TotalPoints')
            ->groupBy('user_id')
            ->orderByDesc('TotalPoints')
            ->get();
        return $ranks->search(function($rank) {
            return $rank->user_id == $this->id;
        }) + 1;
    }

}
