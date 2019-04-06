<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Recipe extends Model
{
    
    public static function index( $user ) {
        //get all the recipes for that user from the userRecipes table then get the recipe names and ids (other items TBD) from the recipes table
        $recipes = DB::table('recipes')
            ->join('userRecipes', 'userRecipes.recipeId', '=', 'recipes.id')
            ->where('userRecipes.userId', $user )
            ->get();
        
        return $recipes;
    }

}
