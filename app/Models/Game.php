<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    /**
     * Get the bracket related to the game match
     */
    public function bracket()
    {   
        return $this->hasOne(Bracket::class);
    }
    /**
     * Get the team tournament related to the game
     */
    public function team_tournament_game()
    {
        return $this->hasMany(TeamTournamentGame::class);
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
