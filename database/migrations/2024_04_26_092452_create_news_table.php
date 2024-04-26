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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_hospital', false, true);
            $table->bigInteger('id_category', false, true);
            $table->string('title');
            $table->string('author');
            $table->date('publication_date');
            $table->string('summary');
            $table->string('source');
            $table->string('link');
            $table->string('tags');
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
        Schema::dropIfExists('news');
    }
};
