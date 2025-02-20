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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->enum('status', ['في الانتضار', 'تم التأكيد', 'مرفوض'])->default('في الانتضار'); // حالة الحجز
            $table->text('notes')->nullable(); 
            $table->dateTime('reservation')->nullable();

            $table->foreignId('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
            $table->foreignId('section_id')->references('id')->on('sections')->onDelete('cascade');
            // $table->foreign('appointment_id')->references('id')->on('appointments')->onDelete('cascade')->nullable();
            $table->timestamps(); // الحقول created_at و updated_at


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};




