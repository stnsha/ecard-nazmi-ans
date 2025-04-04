<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('rsvp', function (Blueprint $table) {
            $table->dropForeign(['time_slot']);
            $table->dropColumn('time_slot');
        });

        Schema::table('rsvp', function (Blueprint $table) {
            $table->unsignedBigInteger('time_slot');
            $table->foreign('time_slot')->references('id')->on('slots');

            $table->integer('pax')->default(0);
        });
    }

    public function down(): void
    {
        Schema::table('rsvp', function (Blueprint $table) {
            $table->dropForeign(['time_slot']);
            $table->dropColumn('time_slot');
            $table->dropColumn('pax');
        });

        Schema::table('rsvp', function (Blueprint $table) {
            $table->unsignedBigInteger('time_slot');
            $table->foreign('time_slot')->references('id')->on('slots');
        });
    }
};
