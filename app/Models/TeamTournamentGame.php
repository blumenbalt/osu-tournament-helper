<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamTournamentGame extends Model
{
    use HasFactory;

    /** 
     * the tournament games that the team played
     */

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    /**
     * the team on the tournament that has played the game 
     */

    public function team_tournament()
    {
        return $this->belongsTo(TeamTournament::class);
    }
}
