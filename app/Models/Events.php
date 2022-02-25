<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Guest;


class Events extends Model
{
    use HasFactory;
    protected $fillable = ['event','date','description','picture','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function guest(){
        return $this->hasMany(Guest::class);
    }
}
