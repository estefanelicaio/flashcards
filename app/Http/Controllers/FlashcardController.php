<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Flashcard;
use DomainException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FlashcardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function create()
    {
        $categories = Auth::user()->categories;

        return view('flashcard.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $flashcard = new Flashcard();
        $flashcard->fill($request->all());

        $category = Category::find($request->category_id);

        if ($category == null || $category->user_id !== Auth::user()->id) {
            throw new DomainException("Categoria inválida");
        }

        $flashcard->category_id = $category->id;
        $flashcard->save();

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Flashcard $flashcard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flashcard $flashcard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Flashcard $flashcard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flashcard $flashcard)
    {
        //
    }
}
