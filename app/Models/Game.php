<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    /**
     * gets the team a related to the game match
     */
    public function team_a()
    {
        $this->hasOne(TeamTournament::class);
    }

    /**
     * gets the team b related to the game match
     */
    public function team_b()
    {
        $this->hasOne(TeamTournament::class);
    }

    /**
     * gets the winner team a related to the game match
     */
    public function winner_team()
    {
        $this->hasOne(TeamTournament::class);
    }

    /**
     * Get the bracket related to the game match
     */
    public function bracket()
    {
        $this->hasOne(Bracket::class);
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'osu_match_id',
        'date',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
