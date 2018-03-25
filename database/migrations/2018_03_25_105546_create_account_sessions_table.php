<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_sessions', function (Blueprint $table) {
            $table->increments('id');
            
            $table->unsignedInteger('account_id')->index();
            $table->boolean('twofactor')->nullable();
            $table->uuid('token')->index();
            $table->ipAddress('ip_address');
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_sessions');
    }
}
