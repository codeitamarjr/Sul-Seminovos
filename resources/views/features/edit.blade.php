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

                        <form
                            action="{{ route('features.update', [
                                'feature' => $feature,
                            ]) }}"
                            method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="advertisement_id" value="{{ $feature->advertisement->id }}">

                            <x-feature :features="$feature" />

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
