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
        Schema::create('rsvp', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('is_attend')->default(true);
            $table->integer('pax')->default(0); // Add pax column
            $table->unsignedBigInteger('time_slot'); // time_slot as unsignedBigInteger
            $table->longText('wishes');
            $table->softDeletes();
            $table->timestamps();

            // Add foreign key constraint to time_slot column
            $table->foreign('time_slot')->references('id')->on('slots');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('RSVP');
    }
};
