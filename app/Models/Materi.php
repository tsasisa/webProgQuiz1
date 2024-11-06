<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Materi extends Model
{

    use HasFactory;
    protected $table= 'materi';
    protected $guarded=[];

    public function writer(){
        return $this->belongsTo(Writer::class);
    }
    public function category()
    {
    return $this->belongsTo(Category::class);
    }
}
