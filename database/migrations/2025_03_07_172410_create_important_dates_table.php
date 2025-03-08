<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('important_dates', function (Blueprint $table) {
            $table->id();
            $table->string('event_name');
            $table->dateTime('event_date');
            $table->integer('counting_days');
            $table->softDeletes();
            $table->timestamps();
        });

        $today = Carbon::now();

        $date1 = Carbon::create(2025, 5, 30, 17, 0, 0);
        $date2 = Carbon::create(2025, 5, 31, 11, 0, 0);

        DB::table('important_dates')->insert([
            [
                'event_name' => 'Solemnization',
                'event_date' => $date1->toDateTimeString(),
                'counting_days' => $today->diffInDays($date1, false),
                'created_at' => Carbon::now(),
            ],
            [
                'event_name' => 'Reception',
                'event_date' => $date2->toDateTimeString(),
                'counting_days' => $today->diffInDays($date2, false),
                'created_at' => Carbon::now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('important_dates');
    }
};
