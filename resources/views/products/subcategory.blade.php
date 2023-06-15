@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Subcategories</div>
                    <div class="card-body">

                        ddd
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    @forelse ($ads as $ad)
                        <div class="card" style="width: 18rem;">
                            <img src="https://via.placeholder.com/500x500.png?text=Anúncio" class="card-img-top"
                                alt="{{ $ad->car_model }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $ad->car_model }}</h5>
                                <h6 class="card-subtitle text-muted mb-2">R${{ $ad->price }}</h6>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fas fa-tachometer-alt"></i>
                                        Milhagem:{{ $ad->car_mileage }}</li>
                                    <li class="list-group-item"><i class="fas fa-gas-pump"></i> Combustível:
                                        {{ $ad->car_fuel_type }}</li>
                                    <li class="list-group-item"><i class="fas fa-cogs"></i> Transmissão:
                                        {{ $ad->car_transmission }}</li>
                                    <li class="list-group-item"><i class="fas fa-calendar-alt"></i> Final da Placa:
                                        {{ $ad->car_license_plate }}</li>
                                </ul>
                                <div class="card-body">
                                    <a href="#" class="card-link">Detalhes</a>
                                    <a href="#" class="card-link">Contato</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-md-12">
                            <div class="alert alert-warning">Sem anúncios para esta categoria</div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
