<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_tables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        // Users table
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('reservation_id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->timestamps();
        });
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('capacity');
            $table->boolean('isActive');
            $table->decimal('price');
            $table->string('room_number');
            $table->timestamps();
        });
        // Reservations table
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('room_id');
            $table->boolean('isActive');
            $table->date('check_in_date');
            $table->date('check_out_date');
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
        Schema::dropIfExists('all_tables');
    }
}
