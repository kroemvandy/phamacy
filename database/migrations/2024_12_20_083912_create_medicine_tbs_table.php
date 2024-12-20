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
        Schema::create('medicine_tbs', function (Blueprint $table) {
            $table->id("id");
            $table->string("medicine_name");
            $table->string("description");
            $table->double("price");
            $table->integer("qty");
            $table->date("expire_date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicine_tbs');
    }
};
