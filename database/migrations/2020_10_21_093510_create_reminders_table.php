<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemindersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reminders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('email');
            $table->string('mobile_number');
            $table->string('est_contract_due_date');
            $table->string('last_name')->nullable();
            $table->string('company')->nullable();
            $table->string('current_spend')->nullable();
            $table->string('no_of_phones')->nullable();
            $table->string('current_network')->nullable();
            $table->string('phone_type')->nullable();
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
        Schema::dropIfExists('reminders');
    }
}
