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
        Schema::create('component_files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('component_id')->constrained('components')->onDelete('cascade');
            $table->string('locale')->nullable();
            $table->string('file')->nullable();
            $table->string('name')->nullable();
            $table->text('video_link')->nullable();
            $table->string('alt')->nullable();
            $table->enum('type', ['cover', 'image', 'video', 'file'])->default('image');
            $table->integer('sort')->default('0');
            $table->integer('main')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('component_files');
    }
};
