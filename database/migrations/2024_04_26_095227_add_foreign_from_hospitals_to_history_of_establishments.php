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
        Schema::table('history_of_establishments', function (Blueprint $table) {
            $table->foreign('id_hospital', 'id_hospital_history_of_establishment')->references('id')->on('hospitals')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('history_of_establishments', function (Blueprint $table) {
            $table->dropForeign('id_hospital_history_of_establishment');
        });
    }
};
