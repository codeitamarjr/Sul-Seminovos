<div class="form-group">
    <label for="name">Nome Completo</label>
    <input type="text"
        class="{{ $form ? 'form-control-plaintext' : 'form-control' }} @error('name') is-invalid @enderror"
        value="{{ auth()->user()->profiles ? auth()->user()->profiles->name : auth()->user()->name }}" name="name"
        id="name">
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <div class="row">
        <div class="col mt-2">
            <label for="postal_code">CEP</label>
            <input type="text"
                class="{{ $form ? 'form-control-plaintext' : 'form-control' }} @error('postal_code') is-invalid @enderror"
                value="{{ auth()->user()->profiles ? auth()->user()->profiles->postal_code : old('postal_code') }}"
                name="postal_code" id="postal_code">
            @error('postal_code')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col mt-2">
            <label for="state">Estado</label>
            <select name="state" id="state"
                class="{{ $form ? 'form-control-plaintext' : 'form-control' }} @error('state') is-invalid @enderror">
                <option value="">Selecione o estado</option>
                <option value="AC"
                    {{ auth()->user()->profiles && auth()->user()->profiles->state === 'AC' ? 'selected' : '' }}>Acre
                </option>
                <option value="AL"
                    {{ auth()->user()->profiles && auth()->user()->profiles->state === 'AL' ? 'selected' : '' }}>Alagoas
                </option>
                <option value="AP"
                    {{ auth()->user()->profiles && auth()->user()->profiles->state === 'AP' ? 'selected' : '' }}>Amapá
                </option>
                <option value="AM"
                    {{ auth()->user()->profiles && auth()->user()->profiles->state === 'AM' ? 'selected' : '' }}>
                    Amazonas
                </option>
                <option value="BA"
                    {{ auth()->user()->profiles && auth()->user()->profiles->state === 'BA' ? 'selected' : '' }}>Bahia
                </option>
                <option value="CE"
                    {{ auth()->user()->profiles && auth()->user()->profiles->state === 'CE' ? 'selected' : '' }}>Ceará
                </option>
                <option value="DF"
                    {{ auth()->user()->profiles && auth()->user()->profiles->state === 'DF' ? 'selected' : '' }}>
                    Distrito
                    Federal</option>
                <option value="ES"
                    {{ auth()->user()->profiles && auth()->user()->profiles->state === 'ES' ? 'selected' : '' }}>
                    Espírito
                    Santo</option>
                <option value="GO"
                    {{ auth()->user()->profiles && auth()->user()->profiles->state === 'GO' ? 'selected' : '' }}>Goiás
                </option>
                <option value="MA"
                    {{ auth()->user()->profiles && auth()->user()->profiles->state === 'MA' ? 'selected' : '' }}>
                    Maranhão
                </option>
                <option value="MT"
                    {{ auth()->user()->profiles && auth()->user()->profiles->state === 'MT' ? 'selected' : '' }}>Mato
                    Grosso</option>
                <option value="MS"
                    {{ auth()->user()->profiles && auth()->user()->profiles->state === 'MS' ? 'selected' : '' }}>Mato
                    Grosso do Sul</option>
                <option value="MG"
                    {{ auth()->user()->profiles && auth()->user()->profiles->state === 'MG' ? 'selected' : '' }}>Minas
                    Gerais</option>
                <option value="PA"
                    {{ auth()->user()->profiles && auth()->user()->profiles->state === 'PA' ? 'selected' : '' }}>Pará
                </option>
                <option value="PB"
                    {{ auth()->user()->profiles && auth()->user()->profiles->state === 'PB' ? 'selected' : '' }}>
                    Paraíba
                </option>
                <option value="PR"
                    {{ auth()->user()->profiles && auth()->user()->profiles->state === 'PR' ? 'selected' : '' }}>Paraná
                </option>
                <option value="PE"
                    {{ auth()->user()->profiles && auth()->user()->profiles->state === 'PE' ? 'selected' : '' }}>
                    Pernambuco</option>
                <option value="PI"
                    {{ auth()->user()->profiles && auth()->user()->profiles->state === 'PI' ? 'selected' : '' }}>Piauí
                </option>
                <option value="RJ"
                    {{ auth()->user()->profiles && auth()->user()->profiles->state === 'RJ' ? 'selected' : '' }}>Rio de
                    Janeiro</option>
                <option value="RN"
                    {{ auth()->user()->profiles && auth()->user()->profiles->state === 'RN' ? 'selected' : '' }}>Rio
                    Grande do Norte</option>
                <option value="RS"
                    {{ auth()->user()->profiles && auth()->user()->profiles->state === 'RS' ? 'selected' : '' }}>Rio
                    Grande do Sul</option>
                <option value="RO"
                    {{ auth()->user()->profiles && auth()->user()->profiles->state === 'RO' ? 'selected' : '' }}>
                    Rondônia
                </option>
                <option value="RR"
                    {{ auth()->user()->profiles && auth()->user()->profiles->state === 'RR' ? 'selected' : '' }}>
                    Roraima
                </option>
                <option value="SC"
                    {{ auth()->user()->profiles && auth()->user()->profiles->state === 'SC' ? 'selected' : '' }}>Santa
                    Catarina</option>
                <option value="SP"
                    {{ auth()->user()->profiles && auth()->user()->profiles->state === 'SP' ? 'selected' : '' }}>São
                    Paulo</option>
                <option value="SE"
                    {{ auth()->user()->profiles && auth()->user()->profiles->state === 'SE' ? 'selected' : '' }}>
                    Sergipe
                </option>
                <option value="TO"
                    {{ auth()->user()->profiles && auth()->user()->profiles->state === 'TO' ? 'selected' : '' }}>
                    Tocantins</option>
            </select>
            @error('state')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col mt-2">
            <label for="city">Cidade</label>
            <input type="text"
                class="{{ $form ? 'form-control-plaintext' : 'form-control' }} @error('city') is-invalid @enderror"
                value="{{ auth()->user()->profiles ? auth()->user()->profiles->city : old('city') }}" name="city"
                id="city">
            @error('city')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col mt-2">
            <label for="neighborhood">Bairro</label>
            <input type="text"
                class="{{ $form ? 'form-control-plaintext' : 'form-control' }} @error('neighborhood') is-invalid @enderror"
                value="{{ auth()->user()->profiles ? auth()->user()->profiles->neighborhood : old('neighborhood') }}"
                name="neighborhood" id="neighborhood">
            @error('neighborhood')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col mt-2">
            <label for="street">Rua</label>
            <div class="col">
                <input type="text"
                    class="{{ $form ? 'form-control-plaintext' : 'form-control' }} @error('street') is-invalid @enderror"
                    value="{{ auth()->user()->profiles ? auth()->user()->profiles->street : old('street') }}"
                    name="street" id="street">
            </div>
            @error('street')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col mt-2">
            <label for="number">Número</label>
            <div class="col">
                <input type="text"
                    class="{{ $form ? 'form-control-plaintext' : 'form-control' }} @error('number') is-invalid @enderror"
                    value="{{ auth()->user()->profiles ? auth()->user()->profiles->number : old('number') }}"
                    name="number" id="number">
            </div>
            @error('number')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col mt-2">
            <label for="phone">Telefone Celular</label>
            <input type="text"
                class="{{ $form ? 'form-control-plaintext' : 'form-control' }} @error('phone') is-invalid @enderror"
                value="{{ auth()->user()->profiles ? auth()->user()->profiles->phone : old('phone') }}" name="phone"
                id="phone">
            <div class="form-text text-success"><i class="bi bi-whatsapp"></i> Se você tiver WhatsApp, coloque o número
                com o DDD
                neste campo.</div>
            @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col mt-2">
            <label for="phone_additional">Telefone Adicional</label>
            <input type="text"
                class="{{ $form ? 'form-control-plaintext' : 'form-control' }} @error('phone_additional') is-invalid @enderror"
                value="{{ auth()->user()->profiles ? auth()->user()->profiles->phone_additional : old('phone_additional') }}"
                name="phone_additional" id="phone_additional">
            @error('phone_additional')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Máscara do CEP
        $('#postal_code').inputmask({
            mask: "99999-999",
            removeMaskOnSubmit: true
        });

        // Máscara do Telefone
        $('#phone').inputmask({
            mask: ["(99) 9999-9999", "(99) 99999-9999"],
            removeMaskOnSubmit: true
        });

        $('#phone_additional').inputmask({
            mask: ["(99) 9999-9999", "(99) 99999-9999"],
            removeMaskOnSubmit: true
        });

        // Atualiza os campos com base no CEP
        $('#postal_code').change(function() {
            let cep = $(this).val().replace('-', '');
            if (cep.length === 8) {
                $.get('https://brasilapi.com.br/api/cep/v1/' + cep, function(data) {
                    if (data) {
                        $('#state').val(data.state);
                        $('#city').val(data.city);
                        $('#neighborhood').val(data.neighborhood);
                        $('#street').val(data.street);
                    }
                });
            }
        });
    });
</script>
