<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use App\Models\Extras;
use Illuminate\Http\Request;
use App\Models\Advertisements;
use App\Http\Requests\ExtrasFormRequest;
use App\Http\Requests\ExtrasUpdateRequest;
use Carbon\Carbon;
use Illuminate\Auth\Access\AuthorizationException;

class ExtraController extends Controller
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
        return view('extras.create', compact('ad'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExtrasFormRequest $request)
    {
        $data = $request->validated();
        if (auth()->user()->ads()->where('id', $data['advertisement_id'])->doesntExist()) {
            throw new AuthorizationException('Você não tem permissão para adicionar extras a este anúncio!');
        }

        Extras::create($data);

        $ad = Advertisements::find($data['advertisement_id']);
        $ad['published'] = 1;
        $ad['published_date'] = date('Y-m-d');
        $ad->save();

        return redirect()->route('ads.index')->with('success', 'Extras adicionados com sucesso! O seu anúncio foi publicado.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Extra $extra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Extra $extra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExtrasUpdateRequest $request, Extras $extra)
    {
        if (auth()->user()->extras()->where('extras.id', $extra->id)->doesntExist()) {
            throw new AuthorizationException('Você não tem permissão para editar este extra!');
        }
        $ad = Advertisements::find($extra->advertisement_id);
        $data = $request->validated();
        $extra->update($data);

        return redirect()->route('ads.index')->with('success', 'Anúncio finalizado com sucesso! A data de publicação mantém a mesma: ' .
            Carbon::parse($ad->published_date)->format('d/m/Y'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Extra $extra)
    {
        //
    }
}
