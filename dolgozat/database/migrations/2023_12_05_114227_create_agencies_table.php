<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Agencies;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agencies', function (Blueprint $table) {
            $table->id('agency_id');
            $table->string('name', 32)->unique();
            $table->string('country', 32)->unique();
            $table->string('type', 32)->unique();
            $table->timestamps();
        });

        Agencies::create([
            'name' => 'Horta',
            'country' => 'Magyar', 
            'type' => 'Real Estate'
        ]);

        Agencies::create([
            'name' => 'Véna',
            'country' => 'Német', 
            'type' => 'Advertising agency'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agencies');
    }
};
