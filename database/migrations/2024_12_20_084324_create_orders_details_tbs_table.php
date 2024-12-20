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
        Schema::create('orders_details_tbs', function (Blueprint $table) {
            $table->id("id");
            $table->foreignId("order_id")->constrained('orders_tb')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId("medicine_id")->constrained('medicine_tbs')->onDelete('cascade')->onUpdate('cascade');
            $table->date("order_date");
            $table->integer("amount");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders_details_tbs');
    }
};
