<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
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
            $table->text('resident_address')->nullable();
            $table->string('landmark')->nullable();

            $table->string('landlord_name')->nullable();
            $table->string('landlord_acc_name')->nullable();
            $table->string('landlord_acc_num')->nullable();
            $table->string('landlord_bank')->nullable();
            $table->string('landlord_phone')->nullable();
            
            $table->string('start_date')->nullable();
            $table->string('rent_amt')->nullable();
            $table->string('rent_interval')->nullable();
            $table->string('rent_interval_amt')->nullable();
            $table->string('user_id')->nullable();
            
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
        Schema::dropIfExists('rents');
    }
}
