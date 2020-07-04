<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkAnswers extends Migration
{
    /**
     * Membuat foreign key antar tabel questions dan answers
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->unsignedInteger('jawaban_terbaik_id')->nullable();
            $table->foreign('jawaban_terbaik_id')->references('id')->on('answers');
        });
        Schema::table('answers', function (Blueprint $table) {
            $table->unsignedInteger('pertanyaan_id');
            $table->foreign('pertanyaan_id')->references('id')->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->dropForeign(['jawaban_terbaik_id']);
            $table->dropForeign(['pertanyaan_id']);
        });
    }
}
