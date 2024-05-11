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
            $table->enum('type', ['article', 'post']);
            $table->string('slug')->unique();
            $table->string('brosur_url')->nullable();
            $table->string('author');
            $table->date('publication_date');
            $table->string('summary');
            $table->string('link')->nullable();
            $table->string('tags')->nullable();
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
