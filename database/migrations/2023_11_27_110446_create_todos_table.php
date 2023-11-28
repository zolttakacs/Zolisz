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
        Schema::create('todos', function (Blueprint $table) {
            $table->id(); // id mező pk ai not null
            $table->string('name', 500);
            $table->text('description');
            $table->softDeletes(); // csak logikai törlés fog leképződni fizikai nem fog megvalósulni
            $table->timestamps(); // created_at , updated_at

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todos');
    }
};
