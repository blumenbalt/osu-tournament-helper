<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoolItem extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'type_number'
    ];
    /**
     * Get the music associated with the poolItem.
     */
    public function music()
    {
        return $this->hasOne(Music::class);
    }
    /**
     * Get the mapPool that owns the poolItem.
     */
    public function mapPool()
    {
        return $this->belongsTo(MapPool::class);
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
