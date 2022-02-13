<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['category'];

    public function companies() {
        return $this->hasMany(Company::class);
    }
}