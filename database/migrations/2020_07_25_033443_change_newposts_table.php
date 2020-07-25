<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeNewpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('newposts', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->nullable()->change(); //user_id nullable追加//
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('newposts', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->nullable(false)->change(); //nullable取り消し
        });
    }
}
