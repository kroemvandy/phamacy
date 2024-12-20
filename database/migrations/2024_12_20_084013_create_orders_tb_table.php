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
        Schema::create('orders_tb', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId("user_id")->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->integer("total_amount");
            $table->date("order_date");
            $table->boolean("payment_status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders_tbs');
    }
};
