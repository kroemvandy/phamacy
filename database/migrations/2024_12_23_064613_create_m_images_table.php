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
        Schema::create('tblImages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('MedicineId');
            $table->string('ImagePath');
            $table->timestamps();

            $table->foreign('MedicineId')->references('Id')->on('tblMedicines')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblImages');
    }
};
