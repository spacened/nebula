<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agency_id');
            $table->string('title');
            $table->tinyText('intro')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('location_id');
            $table->decimal('price', '11', '0');
            $table->enum('category', ['sell', 'rent']);
            $table->enum('property_type', ['house', 'condo', 'land', 'commercial']);
            $table->boolean('offplan')->default(false);
            $table->foreignId('created_by');
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
        Schema::dropIfExists('properties');
    }
}
