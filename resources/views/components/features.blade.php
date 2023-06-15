<div class="form-group">
    <div class="row">
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="abs" name="abs" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="abs" name="abs"
                    @if ($features->abs) checked @endif>
                <label class="form-check-label" for="abs">Freio ABS</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="air_conditioning" name="air_conditioning" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="air_conditioning"
                    name="air_conditioning" @if ($features->air_conditioning) checked @endif>
                <label class="form-check-label" for="air_conditioning">Ar Condicionado</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="air_heater" name="air_heater" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="air_heater" name="air_heater"
                    @if ($features->air_heater) checked @endif>
                <label class="form-check-label" for="air_heater">Ar Quente</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="airbags" name="airbags" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="airbags" name="airbags"
                    @if ($features->airbags) checked @endif>
                <label class="form-check-label" for="airbags">Airbags</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="alarm" name="alarm" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="alarm" name="alarm"
                    @if ($features->alarm) checked @endif>
                <label class="form-check-label" for="alarm">Alarme</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="alloy_wheels" name="alloy_wheels" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="alloy_wheels" name="alloy_wheels"
                    @if ($features->alloy_wheels) checked @endif>
                <label class="form-check-label" for="alloy_wheels">Rodas de Liga Leve</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="am_fm_radio" name="am_fm_radio" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="am_fm_radio" name="am_fm_radio"
                    @if ($features->am_fm_radio) checked @endif>
                <label class="form-check-label" for="am_fm_radio">Rádio AM/FM</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="cd_player" name="cd_player" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="cd_player" name="cd_player"
                    @if ($features->cd_player) checked @endif>
                <label class="form-check-label" for="cd_player">CD Player</label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="central_locking" name="central_locking" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="central_locking"
                    name="central_locking" @if ($features->central_locking) checked @endif>
                <label class="form-check-label" for="central_locking">Travas Elétricas</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="child_safety_locks" name="child_safety_locks" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="child_safety_locks"
                    name="child_safety_locks" @if ($features->child_safety_locks) checked @endif>
                <label class="form-check-label" for="child_safety_locks">Travas de Segurança para Crianças</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="climate_control" name="climate_control" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="climate_control"
                    name="climate_control" @if ($features->climate_control) checked @endif>
                <label class="form-check-label" for="climate_control">Controle de Temperatura</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="cruise_control" name="cruise_control" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="cruise_control"
                    name="cruise_control" @if ($features->cruise_control) checked @endif>
                <label class="form-check-label" for="cruise_control">Piloto Automático</label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="cup_holders" name="cup_holders" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="cup_holders" name="cup_holders"
                    @if ($features->cup_holders) checked @endif>
                <label class="form-check-label" for="cup_holders">Porta Copos</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="driver_airbag" name="driver_airbag" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="driver_airbag"
                    name="driver_airbag" @if ($features->driver_airbag) checked @endif>
                <label class="form-check-label" for="driver_airbag">Airbag do Motorista</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="fog_lights" name="fog_lights" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="fog_lights" name="fog_lights"
                    @if ($features->fog_lights) checked @endif>
                <label class="form-check-label" for="fog_lights">Faróis de Neblina</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="front_fog_lights" name="front_fog_lights" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="front_fog_lights"
                    name="front_fog_lights" @if ($features->front_fog_lights) checked @endif>
                <label class="form-check-label" for="front_fog_lights">Faróis de Neblina Dianteiros</label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="heated_seats" name="heated_seats" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="heated_seats"
                    name="heated_seats" @if ($features->heated_seats) checked @endif>
                <label class="form-check-label" for="heated_seats">Bancos Aquecidos</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="immobilizer" name="immobilizer" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="immobilizer" name="immobilizer"
                    @if ($features->immobilizer) checked @endif>
                <label class="form-check-label" for="immobilizer">Imobilizador de Motor</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="keyless_entry" name="keyless_entry" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="keyless_entry"
                    name="keyless_entry" @if ($features->keyless_entry) checked @endif>
                <label class="form-check-label" for="keyless_entry">Entrada sem Chave</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="leather_seats" name="leather_seats" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="leather_seats"
                    name="leather_seats" @if ($features->leather_seats) checked @endif>
                <label class="form-check-label" for="leather_seats">Bancos de Couro</label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="onboard_computer" name="onboard_computer" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="onboard_computer"
                    name="onboard_computer" @if ($features->onboard_computer) checked @endif>
                <label class="form-check-label" for="onboard_computer">Computador de Bordo</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="power_mirrors" name="power_mirrors" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="power_mirrors"
                    name="power_mirrors" @if ($features->power_mirrors) checked @endif>
                <label class="form-check-label" for="power_mirrors">Retrovisores Elétricos</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="power_steering" name="power_steering" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="power_steering"
                    name="power_steering" @if ($features->power_steering) checked @endif>
                <label class="form-check-label" for="power_steering">Direção Hidráulica</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="power_windows" name="power_windows" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="power_windows"
                    name="power_windows" @if ($features->power_windows) checked @endif>
                <label class="form-check-label" for="power_windows">Vidros Elétricos</label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="rear_defogger" name="rear_defogger" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="rear_defogger"
                    name="rear_defogger" @if ($features->rear_defogger) checked @endif>
                <label class="form-check-label" for="rear_defogger">Desembaçador Traseiro</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="rear_parking_sensors" name="rear_parking_sensors" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="rear_parking_sensors"
                    name="rear_parking_sensors" @if ($features->rear_parking_sensors) checked @endif>
                <label class="form-check-label" for="rear_parking_sensors">Sensores de Estacionamento Traseiro</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="rear_seat_headrest" name="rear_seat_headrest" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="rear_seat_headrest"
                    name="rear_seat_headrest" @if ($features->rear_seat_headrest) checked @endif>
                <label class="form-check-label" for="rear_seat_headrest">Encosto de Cabeça Traseiro</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="remote_boot_fuel_lid" name="remote_boot_fuel_lid" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="remote_boot_fuel_lid"
                    name="remote_boot_fuel_lid" @if ($features->remote_boot_fuel_lid) checked @endif>
                <label class="form-check-label" for="remote_boot_fuel_lid">Abertura Interna do Porta Malas e
                    Tanque</label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="seat_belt_warning" name="seat_belt_warning" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="seat_belt_warning"
                    name="seat_belt_warning" @if ($features->seat_belt_warning) checked @endif>
                <label class="form-check-label" for="seat_belt_warning">Aviso Sonoro de Cinto de Segurança</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="steering_adjustment" name="steering_adjustment" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="steering_adjustment"
                    name="steering_adjustment" @if ($features->steering_adjustment) checked @endif>
                <label class="form-check-label" for="steering_adjustment">Ajuste de Altura do Volante</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="sun_roof" name="sun_roof" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="sun_roof" name="sun_roof"
                    @if ($features->sun_roof) checked @endif>
                <label class="form-check-label" for="sun_roof">Teto Solar</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="turn_indicator_on_orvm" name="turn_indicator_on_orvm" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="turn_indicator_on_orvm"
                    name="turn_indicator_on_orvm" @if ($features->turn_indicator_on_orvm) checked @endif>
                <label class="form-check-label" for="turn_indicator_on_orvm">Indicador de Direção nos Retrovisores
                    Externos</label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="usb_and_auxiliary_input" name="usb_and_auxiliary_input" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="usb_and_auxiliary_input"
                    name="usb_and_auxiliary_input" @if ($features->usb_and_auxiliary_input) checked @endif>
                <label class="form-check-label" for="usb_and_auxiliary_input">Entrada USB e Auxiliar</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="wheel_covers" name="wheel_covers" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="wheel_covers"
                    name="wheel_covers" @if ($features->wheel_covers) checked @endif>
                <label class="form-check-label" for="wheel_covers">Calotas</label>
            </div>
        </div>
    </div>
</div>
