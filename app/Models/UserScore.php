<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserScore extends Model
{
    use HasFactory;

    /**
     * gets the user related to the score
     */
    public function user()
    {
        $this->belongsTo(User::class);
    }
    /**
     * gets the game related to the score
     */
    public function game()
    {
        $this->belongsTo(Game::class);
    }
    /**
     * gets the pool item related to the score
     */
    public function poolItem()
    {
        $this->belongsTo(PoolItem::class);
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'points',
        'max_combo',
        'mods',
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
