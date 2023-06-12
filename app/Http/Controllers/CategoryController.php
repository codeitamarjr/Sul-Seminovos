<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CategoryFormRequest;
use App\Http\Requests\CategoryUpdateRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(10);

        return view('backend.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryFormRequest $request)
    {

        $category = Category::create(
            [
                'name' => $request->name,
                'slug' => $request->slug,
            ]
        );

        if ($request->file('image')) {
            Storage::putFile(
                'public/categories',
                $request->file('image')
            );
            $category->image = $request->file('image')->hashName();
            $category->save();
        }

        return redirect()->route('admin.category.index')
            ->with('success', 'Categoria criada com sucesso.');
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
        $category = Category::findOrFail($id);

        return view('backend.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryUpdateRequest $request, string $id)
    {
        $category = Category::findOrFail($id);

        $category->update(
            [
                'name' => $request->name,
                'slug' => $request->slug,
            ]
        );

        if ($request->file('image')) {
            Storage::delete('public/categories/' . $category->image);
            Storage::putFile(
                'public/categories',
                $request->file('image')
            );
            $category->image = $request->file('image')->hashName();
            $category->save();
        }


        return redirect()->route('admin.category.index')
            ->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);

        Storage::delete('public/categories/' . $category->image);

        $category->delete();

        return redirect()->route('admin.category.index')
            ->with('success', 'Categoria deletada com sucesso.');
    }
}
