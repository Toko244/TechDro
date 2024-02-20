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
        Schema::create('componentables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('component_id');
            $table->morphs('componentable');
            $table->boolean('list')->default(false);
            $table->boolean('detail')->default(false);
            $table->integer('active')->default(true);
            $table->integer('sort')->default(0);
            $table->timestamps();

            $table->foreign('component_id')->references('id')->on('components')
                ->onDelete('cascade');
        });

        Schema::create('componentable_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('componentable_id')->constrained('componentables')->onDelete('cascade');
            $table->string('locale');
            $table->string('title')->nullable();
            $table->string('short_title')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('componentable_translations');
        Schema::dropIfExists('componentables');
    }
};
