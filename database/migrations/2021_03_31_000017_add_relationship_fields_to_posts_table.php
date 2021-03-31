<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPostsTable extends Migration
{
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_3566844')->references('id')->on('users');
            $table->unsignedBigInteger('institution_id');
            $table->foreign('institution_id', 'institution_fk_3567016')->references('id')->on('institutions');
        });
    }
}
