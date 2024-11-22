<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRewardActivationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reward_activations', function (Blueprint $table) {
            $table->id();
            $table->string('user_id',255)->nullable();
            $table->string('payment_id',255)->nullable();
            $table->string('amount',255)->nullable();
            $table->string('activated_at',255)->nullable();
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
        Schema::dropIfExists('reward_activations');
    }
}
