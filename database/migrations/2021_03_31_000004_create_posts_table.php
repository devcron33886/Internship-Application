<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->integer('positions');
            $table->date('opening_date');
            $table->date('closing_date');
            $table->string('status');
            $table->longText('description');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
