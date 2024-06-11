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
        Schema::create('profiles', function (Blueprint $table) {
                $table->id();
                $table->string('site_name');
                $table->string('specialized');
                $table->text('experience');
                $table->text('about_me');
                $table->string('first_address');
                $table->string('second_address')->nullable();
                $table->string('third_address')->nullable();
                $table->string('first_phone');
                $table->string('second_phone')->nullable();
                $table->string('domain');
                $table->string('photo_path');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
