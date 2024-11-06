<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Writer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function materi(){
        return $this->hasMany(Materi::class);
    }
}
