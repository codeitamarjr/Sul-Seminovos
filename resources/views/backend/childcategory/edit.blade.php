@extends('backend.layouts.master')
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">

            <h3>Editar Categoria Filho</h3>
            <div class="row justify-content-center">
                <div class="col-md-8">

                    <div class="card">
                        <div class="card-body">

                            <form class="form-sample" action="{{ route('admin.childcategory.update', [$childcategory->id]) }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <x-childcategory :childcategory="$childcategory" />

                                <div class="form-group">
                                    <label for="category_id">Categoria</label>
                                    <select class="form-control @error('category_id') is-invalid @enderror"
                                        name="category_id" id="category_id">
                                        <option value="{{ $childcategory->subcategory->category->id }}">
                                            {{ $childcategory->subcategory->category->name }}</option>
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
                                        <option value="{{ $childcategory->subcategory->id }}">
                                            {{ $childcategory->subcategory->name }}</option>
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
                                    <button type="submit" class="btn btn-primary">Alterar Subategoria</button>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
@endsection
