<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->comment('The owner of the listing');
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->integer('manufactured_year');
            $table->decimal('hourly_price')->default(0);
            $table->decimal('daily_price')->default(0);
            $table->decimal('weekly_price')->default(0);
            $table->decimal('monthly_price')->default(0);
            $table->decimal('annual_price')->default(0);
            $table->boolean('blocked')->default(FALSE);
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
        Schema::dropIfExists('listings');
    }
}
