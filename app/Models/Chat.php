<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function owner()
    {
        return $this->belongsTo(User::class,'nombre');
    }

}
