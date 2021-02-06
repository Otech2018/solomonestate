<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutoSavingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auto_savings', function (Blueprint $table) {
            $table->id();


              $table->string('fname')->nullable();
             $table->string('mname')->nullable();
             $table->string('lname')->nullable();
            $table->string('email')->nullable();
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('kindred')->nullable();
            $table->string('village')->nullable();
            $table->string('town')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('state1')->nullable();
            $table->string('lga')->nullable();
            $table->string('lga1')->nullable();
            $table->string('office_address')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('passport')->nullable();

            $table->string('acc_num')->nullable();
            $table->string('acc_name')->nullable();
            $table->string('acc_bank_name')->nullable();

            $table->string('next_of_kin_name')->nullable();
            $table->string('next_of_kin_reln')->nullable();
            $table->string('next_of_kin_phone')->nullable();

            $table->string('saving_purpose')->nullable();
            $table->string('saving_purpose1')->nullable();
            $table->string('saving_budget')->nullable();
            $table->string('saving_interval')->nullable();
            $table->string('saving_interval_no')->nullable();
            $table->string('saving_start_date')->nullable();
            $table->string('saving_interval_amt')->nullable();

            $table->string('buy_for_us')->nullable();
            $table->string('status')->nullable();


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
        Schema::dropIfExists('auto_savings');
    }
}
