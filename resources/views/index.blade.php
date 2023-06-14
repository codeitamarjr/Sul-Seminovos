@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <div id="carrosDestaque" class="carousel slide" data-bs-ride="carousel" data-interval="20">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://quatrorodas.abril.com.br/wp-content/uploads/2023/05/2024-Honda-Inspire-China-2-1536x864-1-e1685555354541.webp?w=1280&h=720&crop=1"
                        alt="..." class="d-block w-100" style="height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://quatrorodas.abril.com.br/wp-content/uploads/2023/06/mitsubishi_colt_hybrid_92-e1686595206334.jpeg?quality=70&strip=info&w=1280&h=720&crop=1"
                        alt="..." class="d-block w-100" style="height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-overlay search-container">
                <form class="d-flex justify-content-between form-sm search-form-container">
                    <input class="form-control form-control-sm" type="text" placeholder="Marca" aria-label="Search">
                    <input class="form-control form-control-sm ml-3" type="text" placeholder="Modelo"
                        aria-label="Search">
                    <button class="btn btn-outline-success btn-rounded" type="submit">Pesquisar</button>
                </form>
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
    <style>
        .search-form-container {
            border-radius: 10px;
            padding: 10px;
        }

        .search-container {
            position: absolute;
            width: 60%;
            bottom: 10%;
            left: 10%;
            background-color: rgba(255, 255, 255, 0.892);
            border-radius: 5px;
        }
    </style>



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
            <button class="carousel-control-next" type="button" data-bs-target="#carrosDetaqueBar"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Proximo</span>
            </button>
        </div>
    </div>
@endsection
