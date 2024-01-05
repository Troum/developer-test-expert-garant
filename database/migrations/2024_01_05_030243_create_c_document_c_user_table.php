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
        Schema::create('c_document_c_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('c_user_id')->nullable();
            $table->unsignedBigInteger('c_document_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_document_user');
    }
};
