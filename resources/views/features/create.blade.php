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
                        Opcionais
                    </div>
                    <div class="card-body">

                        @if ($ad->features)
                            <form
                                action="{{ route('features.update', [
                                    'feature' => $ad->features,
                                ]) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="advertisement_id" value="{{ $ad->id }}">
                                <x-feature :features="$ad->features" />
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <button type="submit" class="btn btn-primary">Salvar Opcionais</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @else
                            <form action="{{ route('features.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="advertisement_id" value="{{ $ad->id }}">
                                <x-feature />
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <button type="submit" class="btn btn-primary">Continuar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
