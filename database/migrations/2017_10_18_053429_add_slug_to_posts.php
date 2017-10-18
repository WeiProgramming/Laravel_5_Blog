<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSlugToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts',function($table){//after tac is just OCD stuff its optional
            $table -> string('slug')->unique()->after('id'); //new migration for add column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {//if we revese one migration we want to remove column for slug
        //reversing function up
        Schema::table('posts',function($table){
            $table ->dropColumn('posts');
        });
    }
}
