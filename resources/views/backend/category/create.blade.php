@extends('backend.layouts.master')
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">

            <h3>Adicionar Categoria</h3>
            <div class="row justify-content-center">
                <div class="col-md-8">

                    <div class="card">
                        <div class="card-body">

                            <form class="form-sample" action="{{ route('admin.category.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <x-category />

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Adicionar Categoria</button>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
@endsection
