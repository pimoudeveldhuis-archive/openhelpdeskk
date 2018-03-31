<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsEmailServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings_emailservers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->boolean('delete_original');

            $table->unsignedInteger('emailserverable_id');
            $table->string('emailserverable_type');
            $table->index(['emailserverable_type', 'emailserverable_id'], "emailserverable_index");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings_emailservers');
    }
}
