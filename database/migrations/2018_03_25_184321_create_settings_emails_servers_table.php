<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsEmailsServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings_emails_servers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->boolean('delete_original');

            $table->unsignedInteger('serverable_id');
            $table->string('serverable_type');
            $table->index(['serverable_type', 'serverable_id'], "serverable_index");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings_emails_servers');
    }
}
