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
                        Meus Anúncios
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table-striped table-hover table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Veículo</th>
                                        <th>Preço</th>
                                        <th>Status</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ads as $ad)
                                        <tr>
                                            <td>
                                                @if ($ad->image)
                                                    <img src="{{ asset('storage/' . $ad->image) }}"
                                                        alt="{{ $ad->fipe_model }}" class="d-block img-thumbnail mx-auto"
                                                        width="130">
                                                @else
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                        fill="currentColor" class="bi bi-car-front img-thumbnail mx-auto"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17 1.247 0 2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276Z" />
                                                        <path
                                                            d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.807.807 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155 1.806 0 4.037-.084 5.592-.155A1.479 1.479 0 0 0 15 9.611v-.413c0-.099-.01-.197-.03-.294l-.335-1.68a.807.807 0 0 0-.43-.563 1.807 1.807 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3H4.82Z" />
                                                    </svg>
                                                @endif
                                            </td>
                                            <td>{{ $ad->fipe_model }}</td>
                                            <td>R$ {{ number_format($ad->price, 2, ',', '.') }}</td>
                                            <td>
                                                @if ($ad->published == 1)
                                                    <span class="badge badge-pill text-bg-success">Ativo</span>
                                                @else
                                                    <span class="badge badge-pill text-bg-warning">Inativo</span>
                                                @endif
                                            <td>

                                                <!-- Modal -->
                                                <div class="modal fade" id="deleteModal{{ $ad->id }}" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                    Excluir Anúncio
                                                                </h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Você tem certeza que deseja excluir este anúncio?<br>
                                                                Veículo {{ $ad->fipe_model }}<br>
                                                                <small>Esta ação não poderá ser desfeita.</small>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <form action="{{ route('ads.destroy', $ad->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="button" class="btn btn-secondary btn-sm"
                                                                        data-bs-dismiss="modal">
                                                                        Cancelar</button>
                                                                    <button type="submit"
                                                                        class="btn btn-danger btn-sm">Excluir</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                @if ($ad->published == 1)
                                                    <a href="{{ route('ads.edit', $ad) }}"
                                                        class="btn btn-primary btn-sm">Editar</a>
                                                @else
                                                    <a href="{{ route('ads.edit', $ad) }}"
                                                        class="btn btn-primary btn-sm">Concluir Anúncio</a>
                                                @endif
                                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal{{ $ad->id }}">
                                                    Excluir
                                                </button>


                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
