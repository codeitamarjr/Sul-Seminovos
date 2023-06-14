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

                        <x-edit-ad :ad="$ad" />

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
