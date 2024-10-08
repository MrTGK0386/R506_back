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
        Schema::create('pokemon_learn_moves', function (Blueprint $table) {
            $table->id();
            $table->ForeignIdFor(App\Models\Pokemon::class);
            $table->ForeignIdFor(App\Models\Move::class);
            $table->ForeignIdFor(App\Models\MoveLearnMethod::class);
            $table->ForeignIdFor(App\Models\GameVersion::class);
            $table->integer('level');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemon_learn_moves');
    }
};
