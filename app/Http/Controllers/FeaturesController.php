<?php

namespace App\Http\Controllers;

use App\Models\Features;
use Illuminate\Http\Request;
use App\Http\Requests\FeaturesFormRequest;
use App\Http\Requests\FeaturesUpdateRequest;
use App\Models\Advertisements;
use Illuminate\Auth\Access\AuthorizationException;

class FeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Advertisements $ad)
    {
        return view('features.create', compact('ad'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FeaturesFormRequest $request)
    {
        $data = $request->validated();
        if (auth()->user()->ads()->where('id', $data['advertisement_id'])->doesntExist()) {
            throw new AuthorizationException('Você não tem permissão para adicionar recursos a este anúncio!');
        }

        Features::create($data);

        return redirect()->back()->with('success', 'Opcionais adicionados com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Features $features)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Features $feature, Advertisements $ad)
    {
        return view('features.edit', compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FeaturesUpdateRequest $request, Features $feature)
    {
        /* Check if feature belongs to the ad */
        if (auth()->user()->ads()->where('id', $feature->advertisement_id)->doesntExist()) {
            throw new AuthorizationException('Você não tem permissão para editar recursos deste anúncio!');
        }
        $data = $request->validated();
        $feature->update($data);
        return redirect()->back()->with('success', 'Opcionais atualizados com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Features $features)
    {
        //
    }
}
