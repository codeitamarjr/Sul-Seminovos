<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Advertisements;
use App\Http\Requests\AdvertisementsFormRequest;
use App\Http\Requests\AdvertisementsUpdateRequest;
use Illuminate\Auth\Access\AuthorizationException;

class AdvertisementsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ads = auth()->user()->ads()->with('category')->get();
        return view('ads.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menus = Category::with('subcategories')->get();
        return view('ads.create', compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdvertisementsFormRequest $request)
    {
        $data = $request->validated();

        $data['user_id'] = auth()->user()->id;
        /* Normalize and fills data from FIPE API */
        $data['car_brand'] = $data['fipe_brand'];
        $data['car_model'] = $data['fipe_model'];
        $data['car_fuel_type'] = $data['fipe_fuel'];
        $data['car_year_model'] = substr($data['car_year_model'], 0, 4);

        $ad = Advertisements::create($data);

        return redirect()->route('ads.index')->with('success', 'Anúncio criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Advertisements $advertisements)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Advertisements $ad)
    {
        try {
            $this->authorize('edit-ad', $ad);
        } catch (AuthorizationException $e) {
            throw new AuthorizationException('Você não tem permissão para editar este anúncio!');
        }

        return view('ads.edit', compact('ad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdvertisementsUpdateRequest $request, Advertisements $ad)
    {
        try {
            $this->authorize('edit-ad', $ad);
        } catch (AuthorizationException $e) {
            throw new AuthorizationException('Você não tem permissão para editar este anúncio!');
        }

        $data = $request->validated();

        // Fix decimal separator
        $price = str_replace(',', '.', $request->price);
        $data['price'] = $price;
        // Add date to the published_date field
        $data['published'] = 1;
        $data['published_date'] = date('Y-m-d');

        $ad = Advertisements::findOrFail($ad->id);

        if ($ad->update($data)) {
            return redirect()->route('ads.index')->with('success', 'Anúncio atualizado com sucesso!');
        } else {
            return redirect()->route('ads.index')->with('error', 'Erro ao atualizar o anúncio!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Advertisements $ad)
    {
        if ($ad->user_id != auth()->user()->id) {
            return redirect()->route('ads.index')->with('error', 'Você não tem permissão para excluir este anúncio!');
        }
        $ad = Advertisements::findOrFail($ad->id);
        $ad->delete();
        return redirect()->route('ads.index')->with('success', 'Anúncio excluído com sucesso!');
    }
}
