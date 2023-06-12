<div class="form-group">
    <label for="name">Nome da Categoria Filho</label>
    <input type="text" class="form-control{{ $form ? '-plaintext' : '' }} @error('name') is-invalid @enderror"
        id="name" name="name" placeholder="Nome da Categoria"
        value="{{ $childcategory ? $childcategory->name : old('name') }}">
    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="slug">Slug da Categoria Filho</label>
    <input type="text" class="form-control{{ $form ? '-plaintext' : '' }} @error('slug') is-invalid @enderror"
        id="slug" name="slug" placeholder="Slug da Categoria"
        value="{{ $childcategory ? $childcategory->slug : old('slug') }}">
    @error('slug')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="image">Imagem da Categoria Filho</label>
    @if ($childcategory)
        @if ($childcategory->image)
            <img src="{{ Storage::url('categories/' . $childcategory->image) }}" alt="{{ $childcategory->name }}"
                width="100" class="img-thumbnail m-4">
        @endif
    @endif
    <input type="file" class="form-control{{ $form ? '-plaintext' : '' }} @error('image') is-invalid @enderror"
        id="image" name="image" placeholder="Imagem da Categoria">
    @error('image')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
