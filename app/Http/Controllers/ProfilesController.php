<?php

namespace App\Http\Controllers;

use App\Models\Profiles;
use Illuminate\Http\Request;
use App\Http\Requests\ProfilesFormRequest;
use App\Http\Requests\ProfilesUpdateRequest;
use Illuminate\Auth\Access\AuthorizationException;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!auth()->user()->profiles) {
            return redirect()->route('profiles.create')->with('info', 'Você ainda não possui um perfil, crie um para continuar.');
        }
        return view('profiles.index', [
            'profiles' => auth()->user()->profiles,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProfilesFormRequest $request)
    {
        $data = $request->validated();

        $data['user_id'] = auth()->user()->id;

        Profiles::create($data);

        return redirect()->route('profiles.index')->with('success', 'Perfil criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profiles $profiles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profiles $profile)
    {
        try {
            $this->authorize('edit-profile', $profile);
        } catch (AuthorizationException $e) {
            throw new AuthorizationException('Você não tem permissão para editar este anúncio!');
        }

        return view('profiles.edit', [
            'profiles' => $profile,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfilesUpdateRequest $request, Profiles $profile)
    {
        try {
            $this->authorize('edit-profile', $profile);
        } catch (AuthorizationException $e) {
            throw new AuthorizationException('Você não tem permissão para editar este anúncio!');
        }

        $profile->update($request->validated());

        return redirect()->route('profiles.index')->with('success', 'Perfil atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profiles $profiles)
    {
        //
    }
}
