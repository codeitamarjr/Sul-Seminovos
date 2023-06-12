@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('sidebar')
            </div>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        Editar/Concluir Anúncio
                    </div>
                    <div class="card-body">

                        <div class="alert alert-primary" role="alert">
                            Finalize seu anúncio para que ele seja publicado.
                        </div>

                        <x-edit-ad :ad="$ad" />

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
