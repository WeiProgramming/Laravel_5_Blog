<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoryIdToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table -> integer('category_id')->nullable()->after('slug')->unsigned(); //nullable means optional, no penalty, in production we may worry about it,unsigned means only positive
            // $table->foreign('category_id')->references('id')->on('categories');//this is were we manually assigned at the db level we are creating a forein key, becareful not ever db supports this sort of feature
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('category_id'); //drops category id column
        });
    }
}
