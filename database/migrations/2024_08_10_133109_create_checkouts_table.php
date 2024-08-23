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
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('title');
            $table->string('title2');
            $table->string('hour');
            $table->string('add_on_service');
            $table->string('add_on_service_id');
            $table->string('add_on_service_heading');
            $table->string('add_on_service_price');
            $table->string('material');
            $table->string('expert_name');
            $table->string('expert_id');
            $table->string('expert_heading');
            $table->string('expert_price');
            $table->string('frequency');
            $table->string('select_day');
            $table->string('Professional');
            $table->string('date');
            $table->string('time');
            $table->string('instruction');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkouts');
    }
};
