<div class="form-group">
    <div class="row">
        <div class="col">
            <label for="category_id">Categoria</label>
            <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
                @foreach ($menus as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <label for="subcategory_id">Subcategoria</label>
            <select class="form-control @error('subcategory_id') is-invalid @enderror" id="subcategory_id"
                name="subcategory_id">
                @foreach ($menus as $category)
                    @foreach ($category->subcategories as $subcategory)
                        <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                    @endforeach
                @endforeach
            </select>
        </div>
        <div class="col">
            <label for="condition">Condição</label>
            <select class="form-control @error('condition') is-invalid @enderror" id="condition" name="condition">
                <option value="1">Usado</option>
                <option value="0">Novo</option>
            </select>
        </div>
    </div>
</div>
<div class="form-group">
    <label for="car_brand">Marca do Carro</label>
    <select class="form-control @error('car_brand') is-invalid @enderror" id="car_brand" name="car_brand">
        @foreach ($carBrands as $brand)
            <option value="{{ $brand->codigo }}">{{ $brand->nome }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="car_model">Modelo do Carro</label>
    <select class="form-control" id="car_model" name="car_model" disabled>
        <!-- As opções serão preenchidas pelo JavaScript -->
    </select>
</div>
<div class="form-group">
    <label for="car_year">Ano do Carro</label>
    <select class="form-control" id="car_year" name="car_year_model" disabled>
        <!-- As opções serão preenchidas pelo JavaScript -->
    </select>
</div>

<div class="form-group car-details">
    <div class="mx-auto" style="width: 80%;">
        <legend>Dados da FIPE:</legend>
        <!-- Os campos de detalhes do carro -->
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="TipoVeiculo">Tipo Veículo</label>
                    <input type="text" id="TipoVeiculo" class="form-control" readonly>
                </div>
                <div class="col">
                    <label for="Valor">Valor</label>
                    <input type="text" id="Valor" name="fipe_price" class="form-control" readonly>
                </div>
                <div class="col">
                    <label for="Marca">Marca</label>
                    <input type="text" id="Marca" name="fipe_brand" class="form-control" readonly>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="Modelo">Modelo</label>
            <input type="text" id="Modelo" name="fipe_model" class="form-control" readonly>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="AnoModelo">Ano Modelo</label>
                    <input type="text" id="AnoModelo" name="fipe_year_model" class="form-control" readonly>
                </div>
                <div class="col">
                    <label for="Combustivel">Combustível</label>
                    <input type="text" id="Combustivel" name="fipe_fuel" class="form-control" readonly>
                </div>
                <div class="col">
                    <label for="CodigoFipe">Código Fipe</label>
                    <input type="text" id="CodigoFipe" name="fipe_code" class="form-control" readonly>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="MesReferencia">Mês Referência</label>
                    <input type="text" id="MesReferencia" name="fipe_reference_month" class="form-control" readonly>
                </div>
                <div class="col">
                    <label for="SiglaCombustivel">Sigla Combustível</label>
                    <input type="text" id="SiglaCombustivel" name="fipe_fuel_code" class="form-control" readonly>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="MesReferencia">Continuar</label>
                <button type="submit" class="btn btn-primary form-control">Próximo</button>
            </div>
        </div>
    </div>
</div>

<style>
    .car-details {
        display: none;
    }
</style>

<script>
    // API Interna FIPE
    document.getElementById('car_brand').addEventListener('change', function() {
        var brand = this.value;
        fetch('/api/car-models/' + brand)
            .then(response => response.json())
            .then(data => {
                var select = document.getElementById('car_model');
                select.innerHTML = '';
                data.modelos.forEach(function(model) {
                    var option = document.createElement('option');
                    option.value = model.codigo;
                    option.text = model.nome;
                    select.appendChild(option);
                });
                select.disabled = false;
            });
    });

    document.getElementById('car_model').addEventListener('change', function() {
        var brand = document.getElementById('car_brand').value;
        var model = this.value;
        fetch('/api/car-years/' + brand + '/' + model)
            .then(response => response.json())
            .then(data => {
                var select = document.getElementById('car_year');
                select.innerHTML = '';
                data.forEach(function(year) {
                    var option = document.createElement('option');
                    option.value = year.codigo;
                    option.text = year.nome;
                    select.appendChild(option);
                });
                select.disabled = false;
            });
    });

    document.getElementById('car_year').addEventListener('change', function() {
        var brand = document.getElementById('car_brand').value;
        var model = document.getElementById('car_model').value;
        var year = this.value;
        fetch('/api/car-details/' + brand + '/' + model + '/' + year)
            .then(response => response.json())
            .then(data => {
                // Mostra os campos de detalhes do carro
                var carDetails = document.querySelectorAll('.car-details');
                carDetails.forEach(function(element) {
                    element.style.display = 'block';
                });

                document.getElementById('TipoVeiculo').value = data.TipoVeiculo;
                document.getElementById('Valor').value = data.Valor;
                document.getElementById('Marca').value = data.Marca;
                document.getElementById('Modelo').value = data.Modelo;
                document.getElementById('AnoModelo').value = data.AnoModelo;
                document.getElementById('Combustivel').value = data.Combustivel;
                document.getElementById('CodigoFipe').value = data.CodigoFipe;
                document.getElementById('MesReferencia').value = data.MesReferencia;
                document.getElementById('SiglaCombustivel').value = data.SiglaCombustivel;
            });
    });
</script>
