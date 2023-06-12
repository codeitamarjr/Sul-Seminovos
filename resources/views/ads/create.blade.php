@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">

                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="{{ Auth::user()->name }}"
                            class="d-block img-thumbnail mx-auto" width="130">
                        <p class="text-center"><b>{{ Auth::user()->name }}</b></p>
                    </div>

                    <hr style="border:2px solid blue;">

                    <div class="vertical-menu">
                        <a href="{{ route('ads.index') }}" class="nav-link">Dashboard</a>
                        <a href="{{ route('ads.index') }}" class="nav-link">Profile</a>
                        <a href="{{ route('ads.index') }}" class="nav-link">Meus Anúncios</a>
                        <a href="{{ route('ads.index') }}" class="nav-link">Meus Anúncios</a>
                        <a href="{{ route('ads.index') }}" class="nav-link">Meus Anúncios</a>

                        <a href="{{ route('ads.create') }}" class="nav-link">Criar Anúncio</a>
                        <a href="{{ route('ads.index') }}" class="nav-link">Meus Anúncios</a>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        Criar Anúncio
                    </div>
                    <div class="card-body">

                        <x-create-ad />

                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .vertical-menu a {
            width: 100%;
            height: 100%;
            overflow-y: auto;
            color: black;
            text-decoration: none;
            display: block;
            padding: 12px;
            background-color: #eee;
        }

        .vertical-menu a:hover {
            background-color: #ccc;
        }

        .vertical-menu a.active {
            background-color: blue;
            color: white;
        }
    </style>
@endsection
