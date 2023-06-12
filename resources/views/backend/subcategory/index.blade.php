@extends('backend.layouts.master')
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">

            <h3>Subcategorias</h3>

            <div class="row justify-content-center">
                <div class="col">

                    <div class="card">
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table-hover table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Categorias</th>
                                            <th>Subategorias</th>
                                            <th>Atalho(Slug)</th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($subcategories as $subcategory)
                                            <tr>
                                                <td>
                                                    @if ($subcategory->image)
                                                        <img src="{{ Storage::url('categories/subcategories/' . $subcategory->image) }}"
                                                            width="100">
                                                    @endif
                                                </td>
                                                <td>{{ $subcategory->category->name }}</td>
                                                <td>{{ $subcategory->name }}</td>
                                                <td>{{ $subcategory->slug }}</td>
                                                <td>
                                                    <a href="{{ route('admin.subcategory.edit', $subcategory->id) }}"
                                                        class="btn btn-info">Editar</a>
                                                    <a href="#deleteModal{{ $subcategory->id }}" data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal{{ $subcategory->id }}"
                                                        class="btn btn-danger">Apagar</a>
                                                </td>

                                                <!-- Modal -->
                                                <div class="modal fade" id="deleteModal{{ $subcategory->id }}"
                                                    tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Deletar
                                                                    Categoria
                                                                    {{ $subcategory->name }}
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Você tem certeza que deseja deletar a categoria
                                                                {{ $subcategory->name }}?<br>
                                                                <span class="text-danger">Todos os produtos
                                                                    relacionados a esta categoria serão deletados
                                                                    também! Esta ação não pode ser desfeita!</span>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <form
                                                                    action="{{ route('admin.subcategory.destroy', $subcategory->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-danger">Deletar</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


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
    </div>
@endsection
