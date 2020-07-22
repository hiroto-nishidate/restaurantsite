<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newposts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('store_name'); // 店名を保存するカラム
            $table->string('station')->nullable();  // 駅を保存するカラム
            $table->string('image_path');  // 画像のパスを保存するカラム
            $table->string('phone')->nullable();//電話を保存するカラム
            $table->string('address')->nullable();//住所を保存するカラム
            $table->string('holiday')->nullable();//定休日を保存するカラム
            $table->string('url')->nullable();//urlを保存するカラム
            $table->string('price')->nullable();//料金単価を保存するカラム
            $table->string('hours')->nullable();//営業時間を保存するカラム
            $table->string('evaluation')->nullable();//評価を保存するカラム
            $table->string('reviews')->nullable();//口コミを保存するカラム
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
        Schema::dropIfExists('newposts');
    }
}
