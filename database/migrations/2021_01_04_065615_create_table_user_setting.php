<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUserSetting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_setting', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned()->nullable(false);
            $table->string('fb_access_token', 255)->nullable(true);
            $table->string('fb_account_id', 50)->nullable(true);
            $table->string('fb_avatar', 255)->nullable(true);
            $table->string('fb_name', 150)->nullable(true);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_setting');
    }
}
