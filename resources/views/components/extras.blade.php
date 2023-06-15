<div class="form-group">
    <div class="row">
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="single_owner" name="single_owner" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="single_owner" name="single_owner"
                    @if ($extras->single_owner) checked @endif>
                <label class="form-check-label" for="single_owner">Único Dono</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="paid_vehicle_tax" name="paid_vehicle_tax" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="paid_vehicle_tax"
                    name="paid_vehicle_tax" @if ($extras->paid_vehicle_tax) checked @endif>
                <label class="form-check-label" for="paid_vehicle_tax">IPVA Pago</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="no_trade" name="no_trade" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="no_trade" name="no_trade"
                    @if ($extras->no_trade) checked @endif>
                <label class="form-check-label" for="no_trade">Não Aceita Troca</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="with_leasing" name="with_leasing" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="with_leasing" name="with_leasing"
                    @if ($extras->with_leasing) checked @endif>
                <label class="form-check-label" for="with_leasing">Com Leasing</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="licensed" name="licensed" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="licensed" name="licensed"
                    @if ($extras->licensed) checked @endif>
                <label class="form-check-label" for="licensed">Licenciado</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="factory_warranty" name="factory_warranty" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="factory_warranty"
                    name="factory_warranty" @if ($extras->factory_warranty) checked @endif>
                <label class="form-check-label" for="factory_warranty">Garantia de Fábrica</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="collector" name="collector" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="collector" name="collector"
                    @if ($extras->collector) checked @endif>
                <label class="form-check-label" for="collector">Veículo de Colecionador</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="all_maintenance_at_dealer" name="all_maintenance_at_dealer" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="all_maintenance_at_dealer"
                    name="all_maintenance_at_dealer" @if ($extras->all_maintenance_at_dealer) checked @endif>
                <label class="form-check-label" for="all_maintenance_at_dealer">Todas as Revisões na
                    Concessionária</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="service_book" name="service_book" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="service_book"
                    name="service_book" @if ($extras->service_book) checked @endif>
                <label class="form-check-label" for="service_book">Manual do Proprietário</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="guarantee" name="guarantee" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="guarantee" name="guarantee"
                    @if ($extras->guarantee) checked @endif>
                <label class="form-check-label" for="guarantee">Garantia de Fábrica</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-switch mb-3">
                <input type="hidden" id="adapted_for_disabled" name="adapted_for_disabled" value="0">
                <input class="form-check-input" type="checkbox" role="switch" id="adapted_for_disabled"
                    name="adapted_for_disabled" @if ($extras->adapted_for_disabled) checked @endif>
                <label class="form-check-label" for="adapted_for_disabled">Adaptado para Deficientes</label>
            </div>
        </div>
    </div>
</div>
