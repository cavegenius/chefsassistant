<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Recipe;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $user = Auth::id();
        $recipes = Recipe::index($user);
        return view('recipes')->with('recipes', $recipes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);

        $user = Auth::id();

        $recipe = new Recipe;
        $recipe->name = $request->input('name');
        $recipe->prepTime = $request->input('prepTime').$request->input('prepTimeUnit');
        $recipe->cookTime = $request->input('cookTime').$request->input('cookTimeUnit');
        $recipe->yield = $request->input('yield');
        $recipe->description = $request->input('description');
        $recipe->nutrition = $request->input('nutrition');
        $recipe->private = $request->input('private') ? 1 : 0;
        $recipe->save();

        $recipeId =  $recipe->id;

        $recipe->saveUserRelationship( $user, $recipeId );
        // Now that I have the ID I need to save the other parts
        // How do I handle the many to many relationships and save them

        /* SAMPLE


        // Create a new message
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        // Save Message
        $message->save();
        dd($message->id);


        // Redirect
        return redirect('/')->with('status', 'Message Sent');
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
