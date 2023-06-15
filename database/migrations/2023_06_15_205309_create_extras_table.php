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
        Schema::create('extras', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('advertisement_id');

            $table->string('single_owner')->nullable();
            $table->string('paid_vehicle_tax')->nullable();
            $table->string('no_trade')->nullable();
            $table->string('with_leasing')->nullable();
            $table->string('licensed')->nullable();
            $table->string('factory_warranty')->nullable();
            $table->string('collector')->nullable();
            $table->string('all_maintenance_at_dealer')->nullable();
            $table->string('service_book')->nullable();
            $table->string('guarantee')->nullable();
            $table->string('adapted_for_disabled')->nullable();

            $table->foreign('advertisement_id')->references('id')->on('advertisements')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extras');
    }
};
