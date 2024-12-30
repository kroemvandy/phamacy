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
            Schema::create('tblMedicines', function (Blueprint $table) {
                $table->id();
                $table->string("MedicineName");
                $table->text("MedicineDescription");
                $table->double("Price");
                $table->integer("Qty");
                $table->unsignedBigInteger("CategoryId");
                $table->date("ExpDate");
                $table->string("Image");
                $table->timestamps();

                //add ForingKey 
                $table->foreign("CategoryId")->references("id")->on("tblCategories")->onDelete('cascade'); 
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblMedicines');
    }
};
