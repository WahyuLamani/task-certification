<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('usia');
            $table->string('pendidikan');
            $table->string('photo_profile')->nullable();
            $table->string('dok_kesehatan')->nullable();
            $table->string('dok_certif_training')->nullable();
            $table->string('dok_certif_competention_one')->nullable();
            $table->string('dok_other')->nullable();
            $table->text('desc')->nullable();
            $table->enum('status',['pending','proses','accept'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certifications');
    }
};
