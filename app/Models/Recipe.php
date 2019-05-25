<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\UserRecipe;

class Recipe extends Model
{
    public function users() {
        return $this->belongsToMany( 'App\Models\User', 'userRecipes', 'recipeId', 'userId' );
    }

    public static function index( $user ) {
        //get all the recipes for that user from the userRecipes table then get the recipe names and ids (other items TBD) from the recipes table
        $recipes = DB::table('recipes')
            ->join('userRecipes', 'userRecipes.recipeId', '=', 'recipes.id')
            ->where('userRecipes.userId', $user )
            ->get();
        
        return $recipes;
    }

    public function saveUserRelationship( $userId, $recipeId ) {
        $userRecipe = new UserRecipe;
        $userRecipe->userId = $userId;
        $recipeId->recipeId = $recipeId;
        $recipe->save();
    }

}
