<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // First, drop the existing foreign key and column
        Schema::table('rsvp', function (Blueprint $table) {
            $table->dropForeign(['time_slot']); // This drops any foreign key associated with the `time_slot` column
            $table->dropColumn('time_slot');
        });

        // Now, re-add the `time_slot` column and the foreign key constraint
        Schema::table('rsvp', function (Blueprint $table) {
            $table->unsignedBigInteger('time_slot');
            $table->foreign('time_slot')->references('id')->on('slots');
            $table->integer('pax')->default(0);
        });
    }

    public function down(): void
    {
        // In the down method, reverse the changes: drop the foreign key and column
        Schema::table('rsvp', function (Blueprint $table) {
            $table->dropForeign(['time_slot']);
            $table->dropColumn('time_slot');
            $table->dropColumn('pax');
        });

        // Re-add the original `time_slot` column and foreign key constraint
        Schema::table('rsvp', function (Blueprint $table) {
            $table->unsignedBigInteger('time_slot');
            $table->foreign('time_slot')->references('id')->on('slots');
        });
    }
};
