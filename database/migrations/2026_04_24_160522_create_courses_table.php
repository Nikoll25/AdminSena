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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('day');

            //creo la llave foranea para area
            $table->unsignedBigInteger('area_id')->nullable()->unique();

            $table->foreign('area_id')
                ->references('id')
                ->on('areas')
                ->onDelete('set null')
                ->onUpdate('set null');

            //creo la llave foranea para training_Center
            $table->unsignedBigInteger('training_center_id')->nullable()->unique();

            $table->foreign('training_center_id')
                ->references('id')
                ->on('training_centers')
                ->onDelete('set null')
                ->onUpdate('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
