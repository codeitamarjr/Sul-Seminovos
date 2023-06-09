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

                        <form action="{{ route('ads.update', ['ad' => $ad->id]) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <x-edit-ad :ad="$ad" />

                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary">Continuar</button>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
