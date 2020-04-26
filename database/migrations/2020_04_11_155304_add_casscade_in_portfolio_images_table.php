<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCasscadeInPortfolioImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('portfolio_images', function (Blueprint $table) {
            $table->dropForeign(['portfolio_id']);
            $table->foreign('portfolio_id')->references('id')->on('portfolios')->onDelete('cascade')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('portfolio_images', function (Blueprint $table) {
            $table->dropForeign(['portfolio_id']);
            $table->foreign('portfolio_id')->references('id')->on('portfolios')->change();
        });
    }
}
