<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormsTable extends Migration {

    public function up()
    {
        Schema::create('forms', function (Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('user_id')->unsigned()->references('id')->on('users');
            $table->string('title');
            $table->text('description');
            $table->boolean('public');
        });
    }

    public function down()
    {
        Schema::drop('forms');
    }

}