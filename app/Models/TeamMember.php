<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;

    /**
     * the team tournaments that the team member has.
     */
    public function team_tournament()
    {
        return $this->belongsToMany(TeamTournament::class, 'team_member_tournament');
    }
}
