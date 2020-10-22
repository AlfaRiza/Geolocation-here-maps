<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\SpacePhoto;
class Space extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function photos(){
        return $this->hasMany(SpacePhoto::class, 'space_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getSpaces($latitude, $longitude, $radius)
    {
        return $this->select('*')
            ->selectRaw(
                '( 6371 *
                    acos( cos( radians(?) ) *
                        cos( radians( latitude ) ) *
                        cos( radians(longitude ) - radians(?)) +
                        sin( radians(?) ) *
                        sin( radians( latitude ) )
                    )
                ) AS distance', [$latitude, $longitude, $latitude]
            )
            ->havingRaw("distance < ?", [$radius])
            ->orderBy('distance', 'asc');
    }
}
