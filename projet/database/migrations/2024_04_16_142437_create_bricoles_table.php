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
        Schema::create('bricoles', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();

            $table->string('titre');
            $table->text('description');
            $table->decimal('budget');
            $table->decimal('nde');
            $table->enum('priorite', ['Urgence', 'Haute importance', 'Routine']);
            $table->foreignId('profession_id')->constrained();
            $table->foreignId('client_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bricoles');
    }
};
