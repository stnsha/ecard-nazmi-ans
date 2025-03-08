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
        Schema::create('RSVP', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('is_attend')->default(true);
            $table->string('time_slot');
            $table->longText('wishes');
            $table->softDeletes();
            $table->timestamps();
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
