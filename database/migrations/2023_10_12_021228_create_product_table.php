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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('product_Name');
            $table->string('category');
            $table->string('brand');
            $table->string('model');
            $table->string('frame_colour') ->nullable();
            $table->string('dial Size') ->nullable();
            $table->string('watch Type');
            $table->string('movement') ->nullable();
            $table->string('strap Material') ->nullable();
            $table->string('water Resistance');
            $table->string('waterproof');
            $table->string('watch Feature') ->nullable();
            $table->string('description');
            $table->string('in_box') ->nullable();
            $table->string('price');
            $table->string('quantity');
            $table->string('sku')->unique();
            $table->string('colour') ->nullable();
            $table->string('cost');
            $table->string('warranty') ->nullable();
            $table->string('trash') ->default(false);
            $table->string('status') ->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
