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
        Schema::create('tblSalesDetails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('SaleId');
            $table->unsignedBigInteger('MedicinceId');
            $table->integer('Quantity');
            $table->double('Price');
            $table->timestamps();

            $table->foreign('SaleId')->references('Id')->on('tblSales')->onDelete('cascade');
            $table->foreign('MedicinceId')->references('Id')->on('tblMedicines')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblSalesDetails');
    }
};
