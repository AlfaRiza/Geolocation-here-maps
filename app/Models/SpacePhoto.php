<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Space;
class SpacePhoto extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function space(){
        return $this->belongsTo(Space::class, 'space_id', 'id');
    }
}
