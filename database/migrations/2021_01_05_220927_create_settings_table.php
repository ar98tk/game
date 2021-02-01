<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->default('Glory Conquer');
            $table->string('client_link')->default('#');
            $table->string('patch_link')->default('#');
            $table->string('facebook')->default('#');
            $table->string('twitter')->default('#');
            $table->string('instagram')->default('#');
            $table->string('skype')->default('#');
            $table->string('youtube')->default('#');
            $table->string('email')->default('info@gmail.com');
            $table->string('url')->default('google.com');
            $table->string('phone')->default('0111111111');
            $table->integer('cup_price')->default('25');
            $table->integer('vip_7_price')->default('25');
            $table->integer('full_perfection_price')->default('150');
            $table->integer('billion_cps_price')->default('5');
            $table->integer('ten_billion_cps_price')->default('50');
            $table->integer('king_month')->default('150');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
