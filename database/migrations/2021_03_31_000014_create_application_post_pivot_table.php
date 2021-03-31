<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationPostPivotTable extends Migration
{
    public function up()
    {
        Schema::create('application_post', function (Blueprint $table) {
            $table->unsignedBigInteger('application_id');
            $table->foreign('application_id', 'application_id_fk_3566984')->references('id')->on('applications')->onDelete('cascade');
            $table->unsignedBigInteger('post_id');
            $table->foreign('post_id', 'post_id_fk_3566984')->references('id')->on('posts')->onDelete('cascade');
        });
    }
}
