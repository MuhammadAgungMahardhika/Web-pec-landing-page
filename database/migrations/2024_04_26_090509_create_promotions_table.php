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
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_hospital', false, true);
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('brosur_url');
            $table->date('from');
            $table->date('to');
            $table->text('description')->nullable();
            $table->string('link');
            $table->integer('price');
            $table->string('term_and_conditions')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotions');
    }
};
