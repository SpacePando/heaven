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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('type');
            $table->string('name');
            $table->string('LastName');
            $table->date('ArivalDate');
            $table->date('DepartureDate');
            $table->integer('NumAdults');
            $table->integer('NumChild');
            $table->string('Email')->unique();
            $table->integer('Postcode');
            $table->string('City');
            $table->string('Country');
            $table->string('Street');
            $table->integer('HouseNo');
            $table->json('Needs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
