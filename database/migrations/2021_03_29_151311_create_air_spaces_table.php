<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirSpacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('air_spaces', function (Blueprint $table) {
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
           $table->string('land_acquired_by')->nullable();
           $table->string('land_acquired_by_2')->nullable();
           $table->string('land_surveyed')->nullable();
           $table->string('land_location')->nullable();
           $table->string('plan_number')->nullable();
           $table->string('beacon_number')->nullable();
           $table->string('surveyor')->nullable();
           $table->string('surveyor_address')->nullable();
           $table->string('no_of_plots')->nullable();
           $table->string('size_in_sq_meters')->nullable();
           $table->string('land_Shape')->nullable();
           $table->string('land_doc_avaliable')->nullable();
           $table->string('property_mode')->nullable();
           $table->string('sell_price')->nullable();
           $table->string('rent_price')->nullable();
           $table->string('landmark')->nullable();
           $table->string('id_card')->nullable();
           $table->string('id_card_no')->nullable();
           $table->string('id_card_issued_date')->nullable();
           $table->string('id_card_exp_date')->nullable();
           $table->string('cover_image')->nullable();
           $table->string('image1')->nullable();
           $table->string('image2')->nullable();
           $table->string('image3')->nullable();
           $table->string('image4')->nullable();
           $table->string('image5')->nullable();
           $table->string('image6')->nullable();


           $table->string('status')->nullable();
           $table->longText('description')->nullable();

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
        Schema::dropIfExists('air_spaces');
    }
}
