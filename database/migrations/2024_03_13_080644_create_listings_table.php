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

        if (!Schema::hasTable('listings')) {
            Schema::create('listings', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->longText('description')->nullable();
                $table->unsignedBigInteger('price')->nullable();
                $table->string('type')->nullable();
                $table->unsignedBigInteger('bedroom_id')->nullable();
                $table->foreign('bedroom_id')->references('id')->on('bedrooms');
                $table->unsignedBigInteger('bathroom_id')->nullable();
                $table->foreign('bathroom_id')->references('id')->on('bathrooms');
                $table->string('status')->default('active');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
