<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The teams that the user has.
     */
    public function teams()
    {
        return $this->belongsToMany(Team::class, 'team_member');
    }

    /**
     * Get the userSkill related to the user
     */
    public function userSkill()
    {
        $this->hasMany(UserSkill::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'osu_id',
        'pp',
        'updated_rank',
        'country',
        'mod_preference',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'created_at', 
        'updated_at',
    ];
}
