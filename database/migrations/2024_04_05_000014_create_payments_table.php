<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('date')->nullable();
            $table->string('name')->nullable();
            $table->string('product')->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->string('payment_method')->nullable();
            $table->decimal('total_price', 15, 2)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}