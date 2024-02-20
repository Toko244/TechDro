<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('section_id')->nullable();
            $table->text('additional')->nullable();
            $table->string('active_on_home')->nullable();
            $table->string('thumb')->nullable();
            $table->foreignId('author_id')->constrained('users');
            $table->string('date')->useCurrent()->nullable();
            $table->timestamps();

            $table->foreign('section_id')->references('id')->on('sections')
                ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
