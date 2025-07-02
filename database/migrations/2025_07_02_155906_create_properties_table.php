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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->integer('surface');
            $table->integer('rooms');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('floor');
            $table->integer('price');
            $table->string('city');
            $table->string('address');
            $table->string('type');
            $table->enum('status', ['vente', 'location']);
            $table->enum('property_type', ['appartement', 'maison', 'villa', 'studio', 'terrain']);
            $table->boolean('sold');
            $table->foreignIdFor(\App\Models\Owner::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('properties');
    }
};
