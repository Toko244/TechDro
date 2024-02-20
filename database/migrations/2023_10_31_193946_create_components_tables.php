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
        Schema::create('components', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('section_id')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->integer('type_id')->index();
            $table->enum('component_data_type', ['manual', 'connected'])->default('manual');
            $table->enum('section_data_type', ['manual', 'automate'])->default('manual');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('section_id')->references('id')->on('sections')
                ->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade');
        });

        Schema::create('component_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('component_id')->constrained('components')->onDelete('cascade');
            $table->string('locale');
            $table->string('title')->nullable();
            $table->string('short_title')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('components');
        Schema::dropIfExists('component_translations');
    }
};
