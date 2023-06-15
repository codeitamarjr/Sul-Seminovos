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
                        Extras
                    </div>
                    <div class="card-body">

                        @if ($ad->extras)
                            <form
                                action="{{ route('extras.update', [
                                    'extra' => $ad->extras,
                                ]) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="advertisement_id" value="{{ $ad->id }}">
                                <x-extras :extras="$ad->extras" />
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <button type="submit" class="btn btn-primary">Salvar Extras</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @else
                            <form action="{{ route('extras.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="advertisement_id" value="{{ $ad->id }}">
                                <x-extras />
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
