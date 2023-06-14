@extends('layouts.app')
@section('content')
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
                        <div class="col-3">
                            <img src="https://via.placeholder.com/500x500.png?text=Anúncio" alt="" class="img-fluid">
                            <h4>{{ $ad->car_model }}</h4>
                            <p>{{ $ad->price }}</p>

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
