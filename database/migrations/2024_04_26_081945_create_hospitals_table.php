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
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('address')->nullable();
            $table->text('about')->nullable();
            $table->string('moto')->nullable();
            $table->string('logo_url')->nullable();
            $table->string('video_profile_url')->nullable();
            $table->time('open')->nullable();
            $table->time('close')->nullable();
            $table->enum('root_status', ['main', 'branch'])->nullable();
            $table->enum('ownership_classification', ['swasta', 'negri'])->nullable();
            $table->integer('total_employe')->default(0);
            $table->year('year_of_establishment')->nullable();
            $table->geometry('geom_area')->nullable();
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
        Schema::dropIfExists('hospitals');
    }
};
