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
       
        if (!Schema::hasTable('listing_portals')) {
            Schema::create('listing_portals', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('listing_id');
                $table->foreign('listing_id')->references('id')->on('listings')->onDelete('cascade');
                $table->unsignedBigInteger('portal_id');
                $table->foreign('portal_id')->references('id')->on('portals')->onDelete('cascade');
    
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listing_portals');
    }
};
