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
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id'); // user who posted the ad
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->unsignedBigInteger('childcategory_id')->nullable();

            $table->string('description')->nullable(); // description of the ad
            $table->decimal('price', 10, 2)->nullable(); // price of the ad
            $table->boolean('is_negotiable')->default(false); // 0 = not negotiable, 1 = negotiable
            $table->string('condition')->nullable(); // new, used
            $table->string('listing_location')->nullable(); // location of the ad

            $table->integer('state_id')->nullable(); // state where the ad is posted
            $table->integer('city_id')->nullable(); // city where the ad is posted

            $table->integer('published')->default(0); // 0 = not published, 1 = pending, 2 = published, 3 = rejected
            $table->date('published_date')->nullable(); // date when the ad was published
            $table->string('seller_type')->nullable(); // owner, dealer
            $table->string('link')->nullable();

            /* Car Details */
            $table->string('car_brand')->nullable(); // Brand like Toyota, Honda, Suzuki
            $table->string('car_model')->nullable(); // Model like Corolla, Civic, Mehran
            $table->string('car_year_model')->nullable(); // Year Model
            $table->string('car_year_reg')->nullable(); // Year Registered
            $table->string('car_model_detail')->nullable(); // Model Detail
            $table->integer('car_mileage')->nullable(); // Mileage like 10000 km
            $table->string('car_transmission')->nullable(); // automatic, manual
            $table->string('car_fuel_type')->nullable(); // petrol, diesel, electric, hybrid
            $table->string('car_engine_size')->nullable(); // Engine Size like 1.6L or 2.0L
            $table->string('car_color')->nullable(); // Color like red, blue, black
            $table->string('car_body_type')->nullable(); // sedan, hatchback, suv, crossover, coupe, convertible, minivan, van, pickup, truck, bus
            $table->string('car_drive_type')->nullable(); // 4wd, awd, fwd, rwd
            // $table->string('car_features')->nullable(); // abs, airbags, air conditioning, alarm, audio player, bluetooth system, cd player, dvd player, fog lights, front camera, keyless entry, leather seats, navigation system, parking sensors, power locks, power mirrors, power steering, power windows, rear camera, sunroof, winch, xenon lights
            $table->string('car_license_plate')->nullable(); // License Plate like ABC-123

            $table->string('fipe_price')->nullable(); // FIPE Price like Valor: "R$ 15.000,00"
            $table->string('fipe_brand')->nullable(); // FIPE Make like Marca: "GM - Chevrolet"
            $table->string('fipe_model')->nullable(); // FIPE Model like Modelo: "Celta Life/ Spirit 1.0 MPFI 8V Flexpower 3p"
            $table->integer('fipe_year_model')->nullable(); // FIPE Year Model like AnoModelo: "2007 Gasolina"
            $table->string('fipe_fuel')->nullable(); // FIPE Fuel like Combustivel: "Gasolina"
            $table->string('fipe_code')->nullable(); // FIPE Code like CodigoFipe: "005340-6"
            $table->string('fipe_reference_month')->nullable(); // FIPE Reference Month like MesReferencia: "maio de 2021 "
            $table->string('fipe_fuel_code')->nullable(); // FIPE Fuel Code like CodigoTipoCombustivel: "1"

            /* Indexes to speed up searching */
            $table->index('state_id');
            $table->index('city_id');
            $table->index('car_brand');
            $table->index('car_model');
            $table->index('car_year_model');
            $table->index('car_year_reg');
            $table->index('car_transmission');
            $table->index('car_fuel_type');
            $table->index('car_mileage');
            $table->index('price');
            $table->index('condition');
            $table->index('published');
            $table->index('seller_type');
            $table->index('car_engine_size');
            $table->index('car_color');
            $table->index('car_license_plate');

            /* Foreign keys */
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('childcategory_id')->references('id')->on('childcategories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advertisements');
    }
};
