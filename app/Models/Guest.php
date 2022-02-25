<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Events;


class guest extends Model
{
    use HasFactory;
    protected $fillable =['name','email','phone','status','events_id'];

    public function events(){
        return $this->belongsTo(Events::class);
    }
}
