<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapPool extends Model
{
    use HasFactory;

    /**
     * Get the bracket associated with the mappool.
     */
    public function bracket()
    {
        return $this->hasOne(Bracket::class);
    }
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
