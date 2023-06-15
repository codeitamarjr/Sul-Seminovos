<!-- JQuery -->
{{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
{{-- <script src="{{ asset('jquery-3.7.0.min.js') }}"></script> --}}


<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>

@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <strong>Ops!</strong> Verifique os erros abaixo:<br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

        </ul>
    </div>
@endif

<div class="form-group">
    <div class="row">
        <div class="col">
            <label for="car_model">Modelo do Carro</label>
            <select class="form-control" disabled>
                <option value="{{ $ad->fipe_model }}">{{ $ad->fipe_model }}</option>
            </select>
        </div>
        <div class="col">
            <label for="car_year">Ano do Modelo</label>
            <select class="form-control" disabled>
                <option value="{{ $ad->fipe_year_model }}">{{ $ad->fipe_year_model }}</option>
            </select>
        </div>
        <div class="col">
            <label for="car_year_reg">Ano de Fabricação</label>
            <select class="form-control @error('car_year_reg') is-invalid @enderror" id="car_year_reg"
                name="car_year_reg">
                <option value="{{ $ad->fipe_year_model }}">{{ $ad->fipe_year_model }}</option>
                <option value="{{ $ad->fipe_year_model - 1 }}">{{ $ad->fipe_year_model - 1 }}</option>
            </select>
        </div>

    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col">
            <label for="price">Preço para anunciar:</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                name="price" value="{{ $ad->price ? number_format($ad->price, 2, ',', '.') : old('price') }}">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col">
            <label for="is_negotiable">Negociável?</label>
            <select class="form-control @error('is_negotiable') is-invalid @enderror" id="is_negotiable"
                name="is_negotiable">
                <option value="0" @if (!$ad->is_negotiable && old('is_negotiable') == null) selected @endif>Não</option>
                <option value="1" @if ($ad->is_negotiable || old('is_negotiable') == 1) selected @endif>Sim</option>
            </select>
            @error('is_negotiable')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="car_mileage">Quilometragem</label>
                <input type="text" class="form-control @error('car_mileage') is-invalid @enderror" id="car_mileage"
                    name="car_mileage" value="{{ $ad->car_mileage ? $ad->car_mileage : old('car_mileage') }}"
                    id="km">
                @error('car_mileage')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="car_transmission">Câmbio</label>
                <select class="form-control @error('car_transmission') is-invalid @enderror" id="car_transmission"
                    name="car_transmission">
                    <option
                        value="{{ $ad->car_transmission ? $ad->car_transmission : (old('car_transmission') ? old('car_transmission') : '') }}"
                        selected>
                        {{ $ad->car_transmission ? $ad->car_transmission : (old('car_transmission') ? old('car_transmission') : 'Selecione') }}
                    </option>
                    <option value="Automático">Automático</option>
                    <option value="Manual">Manual</option>
                </select>
                @error('car_transmission')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="car_license_plate">Placa</label>
                <input type="text" class="form-control @error('car_license_plate') is-invalid @enderror"
                    id="car_license_plate" name="car_license_plate"
                    value="{{ $ad->car_license_plate ? $ad->car_license_plate : old('car_license_plate') }}">
                @error('car_license_plate')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col">
                <label for="car_color">Cor</label>
                <select class="form-control @error('car_color') is-invalid @enderror" id="car_color" name="car_color">
                    <option value="{{ $ad->car_color ? $ad->car_color : (old('car_color') ? old('car_color') : '') }}"
                        selected>
                        {{ $ad->car_color ? $ad->car_color : (old('car_color') ? old('car_color') : 'Selecione') }}
                    </option>

                    <option value="Amarelo">Amarelo</option>
                    <option value="Azul">Azul</option>
                    <option value="Bege">Bege</option>
                    <option value="Branco">Branco</option>
                    <option value="Bronze">Bronze</option>
                    <option value="Cinza">Cinza</option>
                    <option value="Dourado">Dourado</option>
                    <option value="Indefinida">Indefinida</option>
                    <option value="Laranja">Laranja</option>
                    <option value="Marrom">Marrom</option>
                    <option value="Prata">Prata</option>
                    <option value="Preto">Preto</option>
                    <option value="Rosa">Rosa</option>
                    <option value="Roxo">Roxo</option>
                    <option value="Verde">Verde</option>
                    <option value="Vermelho">Vermelho</option>
                    <option value="Vinho">Vinho</option>
                </select>

                @error('car_color')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>


        <div class="form-group">
            <label for="description" class="form-label">Descrição</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                rows="3">{{ $ad->description ? $ad->description : old('description') }}</textarea>
            <div class="small text-muted">Descreva o estado geral do veículo, se possui algum detalhe, etc.</br>
                Este campo não é obrigatório.
            </div>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <hr>

    <script>
        // Inputmask for price and mileage
        $(document).ready(function() {
            $('#price').inputmask({
                alias: "currency",
                prefix: 'R$ ',
                radixPoint: ',',
                groupSeparator: '.',
                autoGroup: true,
                digits: 2,
                digitsOptional: false,
                placeholder: '0',
                rightAlign: false,
                removeMaskOnSubmit: true
            });
            $('#car_mileage').inputmask({
                alias: "integer",
                prefix: '',
                groupSeparator: '.',
                autoGroup: true,
                digits: 0,
                digitsOptional: false,
                placeholder: '0',
                rightAlign: false,
                removeMaskOnSubmit: true,
                suffix: ' KM'
            });
        });
    </script>
