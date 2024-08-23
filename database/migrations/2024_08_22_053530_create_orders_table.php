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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('checkout_id');
            $table->string('address');
            $table->decimal('subtotal', 10, 2);
            $table->decimal('gst', 10, 2);
            $table->decimal('total', 10, 2);
            $table->string('payment_status');
            $table->string('charge_id');
            $table->string('trx_id');
            $table->string('payment_type');
            $table->string('card_brand');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
