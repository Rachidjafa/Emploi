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
        Schema::create('group_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_group');
            $table->foreign('id_group')->references('id')->on('groupes');

            $table->unsignedBigInteger('id_module');
            $table->foreign('id_module')->references('id')->on('modules');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_models');
    }
};
