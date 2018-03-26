<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsEmailImap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings_email_imap', function (Blueprint $table) {
            $table->increments('id');
            $table->string('host');
            $table->integer('port');
            $table->enum('encryption', ['ssl', 'tls']);
            $table->boolean('validate_cert');
            $table->string('username');
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings_email_imap');
    }
}
