<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table)
        {
            $table->integer('gift_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('target_id', 45)->nullable();
            $table->string('description', 45)->nullable();
            $table->string('user_name', 45)->nullable();
//            $table->text('user_agent')->nullable();
//            $table->text('payload');
//            $table->integer('last_activity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sessions');
    }
}
