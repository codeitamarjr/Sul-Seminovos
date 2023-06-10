@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div id="carrosDestaque" class="carousel slide" data-bs-ride="carousel" data-interval="20">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://p2.trrsf.com/image/fget/cf/774/0/images.terra.com/2022/05/30/novo-gol_estudio_01-1iepyhq6isbp1.jpg"
                        alt="..." class="d-block w-100" style="height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://s2.glbimg.com/lPqxo0dSn6gJMPX3nXuCXwX-EdY=/0x0:1203x792/924x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_cf9d035bf26b4646b105bd958f32089d/internal_photos/bs/2021/f/G/EwdX3BRyyzc5Pxx51eWw/catseddddd.jpg"
                        alt="..." class="d-block w-100" style="height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carrosDestaque" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carrosDestaque" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Proximo</span>
            </button>
        </div>
    </div>
    <div class="container mt-5">
        <span>
            <h1>Carros em Destaque</h1>
            <div class="d-flex flex-row-reverse">
                <a href="#" class="p-2">Ver todos os destaques</a>
            </div>

        </span>

        <div id="carrosDetaqueBar" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-3">
                            <img src="https://braziljournal.com/wp-content/uploads/2022/09/porsche.jpg" alt="..."
                                class="img-thumbnail">
                            <p class="card-footer text-center">Name of the product/5000</p>
                        </div>
                        <div class="col-3">
                            <img src="https://braziljournal.com/wp-content/uploads/2022/09/porsche.jpg" alt="..."
                                class="img-thumbnail">
                            <p class="card-footer text-center">Name of the product/5000</p>
                        </div>
                        <div class="col-3">
                            <img src="https://braziljournal.com/wp-content/uploads/2022/09/porsche.jpg" alt="..."
                                class="img-thumbnail">
                            <p class="card-footer text-center">Name of the product/5000</p>
                        </div>
                        <div class="col-3">
                            <img src="https://braziljournal.com/wp-content/uploads/2022/09/porsche.jpg" alt="..."
                                class="img-thumbnail">
                            <p class="card-footer text-center">Name of the product/5000</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-3">
                            <img src="https://braziljournal.com/wp-content/uploads/2022/09/porsche.jpg" alt="..."
                                class="img-thumbnail">
                            <p class="card-footer text-center">Name of the product/5000</p>
                        </div>
                        <div class="col-3">
                            <img src="https://braziljournal.com/wp-content/uploads/2022/09/porsche.jpg" alt="..."
                                class="img-thumbnail">
                            <p class="card-footer text-center">Name of the product/5000</p>
                        </div>
                        <div class="col-3">
                            <img src="https://braziljournal.com/wp-content/uploads/2022/09/porsche.jpg" alt="..."
                                class="img-thumbnail">
                            <p class="card-footer text-center">Name of the product/5000</p>
                        </div>
                        <div class="col-3">
                            <img src="https://braziljournal.com/wp-content/uploads/2022/09/porsche.jpg" alt="..."
                                class="img-thumbnail">
                            <p class="card-footer text-center">Name of the product/5000</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carrosDetaqueBar" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carrosDetaqueBar" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Proximo</span>
            </button>
        </div>
    </div>
@endsection
