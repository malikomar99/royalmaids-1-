<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateMobileRegistrationsTable extends Migration
{
    public function up()
    {
        Schema::create('mobile_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('mobile_number');
            $table->string('otp');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mobile_registrations');
    }
}