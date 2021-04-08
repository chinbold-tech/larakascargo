<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('shipper_name');
            $table->string('shipper_number');
            $table->string('shipper_address')->nullable();
            $table->string('receiver_name');
            $table->integer('receiver_number');
            $table->string('receiver_address')->nullable();
            $table->text('description');
            $table->integer('item_count');
            $table->decimal('weight');
            $table->tinyInteger('is_delivery')->default(0);
            $table->integer('ship_price')->default(0);
            $table->tinyInteger('payment_method')->nullable();
            $table->tinyInteger('ship_status')->default(1);
            $table->string('shipping_box')->nullable();
            $table->date('shipping_date')->nullable();
            $table->decimal('kr_cash')->default(0);
            $table->decimal('kr_bank')->default(0);
            $table->string('kr_detail')->nullable();
            $table->decimal('kr_total')->default(0);
            $table->decimal('mn_cash')->default(0);
            $table->decimal('mn_bank')->default(0);
            $table->string('mn_detail')->nullable();
            $table->decimal('mn_total')->default(0);
            $table->decimal('total')->default(0);
            $table->string('recieved_name')->nullable();
            $table->integer('recieved_phone')->nullable();
            $table->text('recieved_description')->nullable();
            $table->date('recieved_date')->nullable();
            $table->tinyInteger('is_active')->default(1);
            $table->tinyInteger('step')->default(0);
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('customer_id')->nullable();
            $table->timestamps();
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
}
