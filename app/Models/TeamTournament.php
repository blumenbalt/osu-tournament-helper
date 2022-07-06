<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamTournament extends Model
{
    use HasFactory;
    /**
     * the team members that the team tournament has.
     */
    public function team_members()
    {
        return $this->belongsToMany(TeamMember::class, 'team_member_tournament');
    }
}
