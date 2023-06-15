<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('advertisement_id');

            /* Features of the advertisement(Vehicle) */
            $table->string('abs')->default(false); // Freio ABS(Anti-lock Braking System ou Sistema de Freio Antitravamento)
            $table->string('air_conditioning')->default(false); // Ar condicionado
            $table->string('air_heater')->default(false); // Aquecedor de ar
            $table->string('airbags')->default(false); // Airbags
            $table->string('alarm')->default(false); // Alarme
            $table->string('alloy_wheels')->default(false); // Rodas de liga leve
            $table->string('am_fm_radio')->default(false); // Rádio AM/FM
            $table->string('cd_player')->default(false); // CD Player
            $table->string('central_locking')->default(false); // Travas elétricas
            $table->string('child_safety_locks')->default(false); // Travas de segurança para crianças
            $table->string('climate_control')->default(false); // Controle de clima
            $table->string('cruise_control')->default(false); // Controle de cruzeiro
            $table->string('cup_holders')->default(false); // Porta-copos
            $table->string('driver_airbag')->default(false); // Airbag do motorista
            $table->string('fog_lights')->default(false); // Faróis de neblina
            $table->string('front_fog_lights')->default(false); // Faróis de neblina dianteiros
            $table->string('heated_seats')->default(false); // Bancos aquecidos
            $table->string('immobilizer')->default(false); // Imobilizador de motor, para evitar roubo
            $table->string('keyless_entry')->default(false); // Entrada sem chave
            $table->string('leather_seats')->default(false); // Bancos de couro
            $table->string('onboard_computer')->default(false); // Computador de bordo
            $table->string('power_mirrors')->default(false); // Espelhos elétricos
            $table->string('power_steering')->default(false); // Direção hidráulica
            $table->string('power_windows')->default(false); // Vidros elétricos
            $table->string('rear_defogger')->default(false); // Desembaçador traseiro
            $table->string('rear_parking_sensors')->default(false); // Sensores de estacionamento traseiros
            $table->string('rear_seat_headrest')->default(false); // Encosto de cabeça traseiro
            $table->string('remote_boot_fuel_lid')->default(false); // Porta-malas remoto
            $table->string('seat_belt_warning')->default(false); // Aviso de cinto de segurança
            $table->string('steering_adjustment')->default(false); // Ajuste de direção
            $table->string('sun_roof')->default(false); // Teto solar
            $table->string('turn_indicator_on_orvm')->default(false); // Indicador de direção no ORVM(Outside Rear View Mirror ou Espelho retrovisor externo)
            $table->string('usb_and_auxiliary_input')->default(false); // Entrada USB e auxiliar
            $table->string('wheel_covers')->default(false); // Calotas
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('features');
    }
};
