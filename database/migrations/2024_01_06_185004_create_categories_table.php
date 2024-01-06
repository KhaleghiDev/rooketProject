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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title',220);
            $table->string('slug',400);
            $table->string('icon')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('status')->default(100)->comment('100 =>nil 105=>view 110=>checket');
            $table->boolean('is_published')->default(0);
            $table->string('meta_key')->nullable();
            $table->tinyText('meta_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
