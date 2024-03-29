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
        Schema::create('profile_infos', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();;
            $table->string('lastname')->nullable();;
            $table->string('middlename')->nullable();
            $table->string('firstname')->nullable();;
            $table->string('suffix')->nullable();
            $table->string('telno')->nullable();
            $table->string('mobile_no')->nullable();
            $table->date('bday')->nullable();;
            $table->string('age')->nullable();;
            $table->string('gender')->nullable();;
            $table->string('country')->nullable();;
            $table->string('province')->nullable();;
            $table->string('municipality')->nullable();;
            $table->string('brgy')->nullable();;
            $table->string('houseNo_streetName')->nullable();;
            $table->string('postal_code')->nullable();;
            $table->string('status')->nullable();;
            $table->string('patient_id')->nullable();
            $table->float('centimeter')->nullable();;
            $table->float('inches')->nullable();;
            $table->float('kilogram')->nullable();;
            $table->float('pounds')->nullable();
            $table->float('bmi')->nullable();
            $table->bigInteger('philhealth_no')->nullable();
            $table->string('member_category')->nullable();
            $table->bigInteger('health_insurance')->nullable();
            $table->bigInteger('membership_no')->nullable();
            $table->string('plan_name')->nullable();
            $table->string('id_type')->nullable();;
            $table->string('id_no')->nullable();;
            $table->string('user_role')->nullable();
            $table->string('avatar')->default('user.jpg');
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
        Schema::dropIfExists('profile_infos');
    }
};
