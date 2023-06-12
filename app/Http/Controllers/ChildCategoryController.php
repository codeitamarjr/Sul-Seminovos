<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Models\ChildCategory;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ChildCategoryFormRequest;
use App\Http\Requests\ChildCategoryUpdateRequest;

class ChildCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'backend.childcategory.index',
            [
                'childcategories' => ChildCategory::with('category', 'subcategory')->get(),
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(
            'backend.childcategory.create',
            [
                'categories' => Category::all(),
                'subcategories' => Subcategory::all(),
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ChildCategoryFormRequest $request)
    {
        $childCategory = ChildCategory::create(
            [
                'name' => $request->name,
                'category_id' => $request->category_id,
                'subcategory_id' => $request->subcategory_id,
                'slug' => $request->slug,
            ]
        );

        if ($request->file('image')) {
            Storage::putFile(
                'public/categories/subcategories/child',
                $request->file('image')
            );
            $childCategory->image = $request->file('image')->hashName();
            $childCategory->save();
        }

        return redirect()->route('admin.childcategory.index')
            ->with('success', 'Categoria filho criada com sucesso.');
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
        return view(
            'backend.childcategory.edit',
            [
                'childcategory' => ChildCategory::findOrFail($id),
                'categories' => Category::all(),
                'subcategories' => Subcategory::all(),
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ChildCategoryUpdateRequest $request, string $id)
    {
        $childCategory = ChildCategory::findOrFail($id);

        $childCategory->update(
            [
                'name' => $request->name,
                'category_id' => $request->category_id,
                'subcategory_id' => $request->subcategory_id,
                'slug' => $request->slug,
            ]
        );

        if ($request->file('image')) {
            Storage::putFile(
                'public/categories/subcategories/child',
                $request->file('image')
            );
            $childCategory->image = $request->file('image')->hashName();
            $childCategory->save();
        }

        return redirect()->route('admin.childcategory.index')
            ->with('success', 'Categoria filho atualizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $childCategory = ChildCategory::findOrFail($id);
        Storage::delete('public/categories/subcategories/child/' . $childCategory->image);
        $childCategory->delete();

        return redirect()->route('admin.childcategory.index')
            ->with('success', 'Categoria filho deletada com sucesso.');
    }
}
