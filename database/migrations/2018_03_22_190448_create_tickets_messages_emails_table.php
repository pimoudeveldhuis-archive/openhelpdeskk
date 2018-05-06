<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsMessagesEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets_messages_emails', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('from_name');
            $table->string('from_email');
            $table->json('to');
            $table->string('subject');
            $table->text('body');
            $table->dateTime('sent_on');
            $table->json('data');
            
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
        Schema::dropIfExists('tickets_messages_emails');
    }
}
