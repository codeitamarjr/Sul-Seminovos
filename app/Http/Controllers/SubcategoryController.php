<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SubcategoryFormRequest;
use App\Http\Requests\SubcategoryUpdateRequest;
use App\Models\Subcategory;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.subcategory.index', [
            'subcategories' => Subcategory::with('category')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.subcategory.create', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubcategoryFormRequest $request)
    {

        $Subcategory = Subcategory::create(
            [
                'name' => $request->name,
                'category_id' => $request->category_id,
                'slug' => $request->slug,
            ]
        );

        if ($request->file('image')) {
            Storage::putFile(
                'public/categories/subcategories',
                $request->file('image')
            );
            $Subcategory->image = $request->file('image')->hashName();
            $Subcategory->save();
        }

        return redirect()->route('admin.subcategory.index')
            ->with('success', 'Subcategoria criada com sucesso.');
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
        return view('backend.subcategory.edit', [
            'subcategory' => Subcategory::findOrFail($id),
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubcategoryUpdateRequest $request, string $id)
    {
        $subcategory = Subcategory::findOrFail($id);

        $subcategory->update(
            [
                'name' => $request->name,
                'category_id' => $request->category_id,
                'slug' => $request->slug,
            ]
        );

        if ($request->file('image')) {
            Storage::putFile(
                'public/categories/subcategories',
                $request->file('image')
            );
            $subcategory->image = $request->file('image')->hashName();
            $subcategory->save();
        }

        return redirect()->route('admin.subcategory.index')
            ->with('success', 'Subcategoria atualizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subcategory = Subcategory::findOrFail($id);

        Storage::delete('public/categories/subcategories/' . $subcategory->image);

        $subcategory->delete();

        return redirect()->route('admin.subcategory.index')
            ->with('success', 'Categoria deletada com sucesso.');
    }
}
