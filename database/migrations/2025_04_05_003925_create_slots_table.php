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
        Schema::create('slots', function (Blueprint $table) {
            $table->id();
            $table->string('time_slot');
            $table->integer('pax')->default(0);
            $table->boolean('status')->default(0); //sold out
            $table->softDeletes();
            $table->timestamps();
        });

        DB::table('slots')->insert([
            [
                'time_slot' => '11:00 pagi - 12:00 t/hari',
                'pax' => 320,
                'status' => 1, //availanle
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'time_slot' => '12:00 t/hari - 2:00 petang',
                'pax' => 360,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'time_slot' => '2:00 petang - 3.50 petang',
                'pax' => 320,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slots');
    }
};
