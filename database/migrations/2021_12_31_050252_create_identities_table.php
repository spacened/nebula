<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
            Schema::create('identities', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('slug');
                $table->foreignId('location_id');
                $table->tinyText('intro')->nullable();
                $table->text('description')->nullable();
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
        Schema::dropIfExists('identities');
    }
}
