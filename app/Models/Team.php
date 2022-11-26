<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    /**
     * The team leader. 
     */
    public function leader()
    {
        return $this->hasOne(User::class);
    }
    /**
     * the users that the team has.
     */

    public function users()
    {
        return $this->belongsToMany(User::class, 'team_member');
    }
    /**
     * The tournaments that the teams are into.
     */
    public function tournaments()
    {
        return $this->belongsToMany(Tournament::class, 'team_tournament');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'leader',
        // 'icon',
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
