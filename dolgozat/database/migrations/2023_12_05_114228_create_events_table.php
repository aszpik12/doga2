<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Event;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id('event_id');
            $table->date('date');
            $table->foreignId('agency_id')->references('agency_id')->on('agencies');
            $table->integer('limit')->default(0);
            $table->timestamps();
        });

        Event::create([
            'date' => '2023-01-05',
            'agency_id' => 1, 
            'limit' => 200
        ]);

        Event::create([
            'date' => '2002-04-15',
            'agency_id' => 2, 
            'limit' => 200
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
