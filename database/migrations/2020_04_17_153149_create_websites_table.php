<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 200);
            $table->string('url_site', 200);
            $table->string('url_logo', 200);
            $table->string('timezone', 100);
            $table->string('best_time', 100);
            $table->string('url_time', 200);
            $table->integer('best_day');
            $table->string('url_day', 200);
            $table->softDeletes();
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
        Schema::dropIfExists('websites');
    }
}
