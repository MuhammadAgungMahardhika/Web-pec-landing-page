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
        Schema::table('news_images', function (Blueprint $table) {
            $table->foreign('id_news', 'id_news_news_image')->references('id')->on('news')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('news_images', function (Blueprint $table) {
            $table->dropForeign('id_news_news_image');
        });
    }
};
