@extends('backend.layouts.master')
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">

            <h3>Adicionar Categoria Filho</h3>
            <div class="row justify-content-center">
                <div class="col-md-8">

                    <div class="card">
                        <div class="card-body">

                            <form class="form-sample" action="{{ route('admin.childcategory.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <x-childcategory />

                                <div class="form-group">
                                    <label for="category_id">Categoria</label>
                                    <select class="form-control @error('category_id') is-invalid @enderror"
                                        name="category_id" id="category_id">
                                        <option value="">Selecione uma Categoria</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="subcategory_id">Subcategoria</label>
                                    <select class="form-control @error('subcategory_id') is-invalid @enderror"
                                        name="subcategory_id" id="subcategory_id">
                                        <option value="">Selecione uma Subcategoria</option>
                                        @foreach ($subcategories as $childcategory)
                                            <option value="{{ $childcategory->id }}"
                                                {{ old('subcategory_id') == $childcategory->id ? 'selected' : '' }}>
                                                {{ $childcategory->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('subcategory_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Adicionar Subategoria</button>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
@endsection
