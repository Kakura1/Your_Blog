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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->longText('content');
            $table->binary('banner_image');
            $table->binary('content_image');
            $table->enum('presentation', ['Formal', 'Informal']);
            $table->boolean('isPublic');
            $table->foreignId('user_id')->constrained(
                table: 'users', indexName: 'categories_user_id'
            );
            $table->foreignId('category_id')->constrained(
                table: 'users', indexName: 'categories_user_id'
            );
            $table->foreignId('tag_id')->constrained(
                table: 'users', indexName: 'categories_user_id'
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
