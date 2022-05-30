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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('mname')->nullable();
            $table->string('lname');
            $table->date('bday');
            $table->string('age');
            $table->string('suffix')->nullable();
            $table->string('gender');
            $table->string('title');
            $table->string('country');
            $table->string('province');
            $table->string('municipality');
            $table->string('brgy');
            $table->string('houseNo_streetName');
            $table->integer('postal_code')->nullable();
            $table->string('status');
            $table->string('patient_id')->nullable();
            $table->string('id_type');
            $table->string('id_no');
            $table->string('upload_id');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
