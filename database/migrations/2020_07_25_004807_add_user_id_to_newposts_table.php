<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToNewpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('newposts', function (Blueprint $table) {
            $table->integer('user_id')->unsigned(); //user_idカラム追加
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
           $table->dropColumn('user_id'); //user_idカラムの削除
        });
    }
}
