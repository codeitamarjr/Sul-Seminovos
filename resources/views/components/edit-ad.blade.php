<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>

<!-- CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<form action="{{ route('ads.update', ['ad' => $ad->id]) }}" method="POST">
    @csrf
    @method('PUT')

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
                <label for="price">Preço para anunciar em reais:</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                    name="price"
                    value="{{ $ad->price ? number_format($ad->price, 2, ',', '.') : old('price') }}">
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
                    <input type="text" class="form-control @error('car_mileage') is-invalid @enderror"
                        id="car_mileage" name="car_mileage"
                        value="{{ $ad->car_mileage ? $ad->car_mileage : old('car_mileage') }}" id="km">
                    @error('car_mileage')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <label for="car_color">Cor</label>
                    <select class="form-control @error('car_color') is-invalid @enderror" id="car_color"
                        name="car_color">
                        <option
                            value="{{ $ad->car_color ? $ad->car_color : (old('car_color') ? old('car_color') : '') }}"
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

        <div class="form-group">
            <label for="features" class="form-label">Opcionais</label>
            <select class="form-control" id="features" name="features[]" multiple="multiple">
                <option value="1">Air Bag</option>
                <option value="2">Alarme</option>
                <option value="3">Ar condicionado</option>
                <option value="4">Ar quente</option>
                <option value="5">Banco do motorista com ajuste de altura</option>
                <option value="6">Bancos de couro</option>
                <option value="7">CD Player</option>
                <option value="8">Computador de bordo</option>
                <option value="9">Controle automático de velocidade</option>
                <option value="10">Controle de tração</option>
                <option value="11">Desembaçador traseiro</option>
                <option value="12">Direção hidráulica</option>
                <option value="13">Encosto de cabeça traseiro</option>
                <option value="14">Freio ABS</option>
                <option value="15">GPS</option>
                <option value="16">Limpador traseiro</option>
                <option value="17">Rádio</option>
                <option value="18">Retrovisores elétricos</option>
                <option value="19">Rodas de liga leve</option>
                <option value="20">Sensor de estacionamento</option>
                <option value="21">Teto solar</option>
                <option value="22">Travas elétricas</option>
                <option value="23">Tração 4x4</option>
                <option value="24">Vidros elétricos</option>
                <option value="25">Volante com regulagem de altura</option>
            </select>
        </div>

        <hr>

        <div class="form-group">
            <label for="extra" class="form-label">Destaques</label>
            <select class="form-control" id="extra" name="extra[]" multiple="multiple">
                <option value="1">Único Dono</option>
                <option value="2">IPVA Pago</option>
                <option value="3">Não aceito troca</option>
                <option value="4">Veículo financiado</option>
                <option value="5">Licenciado</option>
                <option value="6">Garantia de Fábrica</option>
                <option value="7">Veículo de Colecionador</option>
                <option value="8">Todas as revisões em concessionária</option>
                <option value="9">Adaptada para pessoas com deficiência</option>
            </select>
        </div>

        <hr>

        <div class="form-group">
            <label for="confirm" class="form-label">Confirmar</label>
            <button type="submit" class="form-control btn btn-primary">Salvar</button>
        </div>

</form>

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

    // Select2 for features
    $(document).ready(function() {
        $('#features').select2({
            tokenSeparators: [',', ' ']
        });
    });

    // Select2 for extra
    $(document).ready(function() {
        $('#extra').select2({
            tokenSeparators: [',', ' ']
        });
    });
</script>
