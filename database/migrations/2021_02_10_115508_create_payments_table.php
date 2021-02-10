<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();

                $table->string('amount')->nullable();
             $table->string('currency')->nullable();
             $table->string('cus_name')->nullable();
            $table->string('cus_email')->nullable();
            $table->string('cus_phone_number')->nullable();
            $table->string('flw_ref')->nullable();
            $table->string('status')->nullable();
            $table->string('tx_ref')->nullable();
            $table->string('transaction_id')->nullable();
            
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
        Schema::dropIfExists('payments');
    }
}
