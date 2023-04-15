<?php

namespace App\Models;

use App\Models\Position;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    protected $fillable= [
        'title',
        'experience',
        'position_id',
        'place',
        'description'
    ];

    public function position(){
        return $this->belongsTo(Position::class);
    }

    public function applications(){
        return $this->hasMany(Application::class);
    }
}
