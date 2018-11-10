<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscribesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribes', function (Blueprint $table) {
            $table->increments('subscribes_id');
            $table->integer('subscribes_user_id')->index();
            $table->integer('subscribes_plan_id')->index();
            $table->integer('subscribes_download_limit');
            $table->integer('subscribes_download_count');
            $table->integer('subscribes_id_payment_amount');
            $table->dateTime('subscribes_expired_at')->index();
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
        Schema::dropIfExists('subscribes');
    }
}
