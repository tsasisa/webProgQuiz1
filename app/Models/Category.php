<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Materi;


class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function materis()
    {
    return $this->hasMany(Materi::class);
    }
}
