<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    public function ingredients(){
        return $this->hasMany(Ingredient::class);
    }

    public function route(){
        return \route('recipe.show', [
            'recipe' => $this,
        ]);
    }
}
