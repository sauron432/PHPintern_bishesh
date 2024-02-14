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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps(6);
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->softDeletes('deleted at',6);
            $table->string('created by')->nullable();
            $table->string('updated by')->nullable();
            $table->string('deleted by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};
