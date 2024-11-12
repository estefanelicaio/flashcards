<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Flashcard;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Auth::user()->categories;

        return view('category.index', ['categories' => $categories]);
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        Auth::user()->categories()->save(new Category($request->all()));

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function answer(string $id)
    {
        $flashcards = Flashcard::where('category_id', $id)->where(function ($query) {
            $query->where('answered_at', '<', Carbon::now()->subDays(1))
                ->orWhereNull('answered_at');
        });

        return view('category.answer', ['flashcards' => $flashcards->paginate(1), 'categoryId' => $id]);
    }

    public function finish(Category $category)
    {
        $flashcards = Flashcard::where('category_id', $category->id)
            ->where(function ($query) {
                $query->where('answered_at', '<', Carbon::now()->subDays(1))
                    ->orWhereNull('answered_at');
            })
            ->get();

        foreach ($flashcards as $flashcard) {
            $flashcard->answered_at = now();
            $flashcard->save();
        }

        return redirect()->route('category.index');
    }
}
