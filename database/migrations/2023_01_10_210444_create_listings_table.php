<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->enum('contract', ['Sale', 'Rent']);
            $table->string('property_type');
            $table->string('property_description');
            $table->string('floor_area')->nullable();
            $table->string('lot_area')->nullable();
            $table->decimal('price', 13, 2);
            $table->string('address_region');
            $table->string('address_province')->nullable();
            $table->string('address_city');
            $table->string('address_barangay');
            $table->string('address_street')->nullable();
            $table->string('address_number')->nullable();
            $table->string('address_floor')->nullable();
            $table->string('address_unit')->nullable();
            $table->date('available_at');
            $table->string('owner_name');
            $table->string('phone_number');
            $table->string('phone_number2')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->string('photos');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->boolean('publish');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listings');
    }
};
