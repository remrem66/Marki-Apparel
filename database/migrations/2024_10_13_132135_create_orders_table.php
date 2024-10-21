<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->integer('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('province');
            $table->string('municipality');
            $table->string('barangay');
            $table->string('address_information')->nullable();
            $table->string('contact_number');
            $table->string('total');
            $table->string('payment_type');
            $table->string('payment_status')->nullable();
            $table->longText('payment_url')->nullable();
            $table->string('order_status');
            $table->timestamp('order_date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
