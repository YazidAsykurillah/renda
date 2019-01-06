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

            //General Information
            $table->integer('brand_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->integer('manufactured_year');
            $table->string('feature_image')->nullable();
            $table->enum('transmission', ['manual', 'automatic', 'other'])->default('other');
            $table->integer('cylinder_capacity')->nullable();

            //Address
            $table->integer('city_id')->nullable();


            $table->boolean('is_hourly')->default(TRUE)->comment('Available for hourly rental');
            $table->decimal('hourly_price',20,2)->default(0);

            $table->boolean('is_daily')->default(TRUE)->comment('Available for daily rental');
            $table->decimal('daily_price',20,2)->default(0);

            $table->boolean('is_weekly')->default(TRUE)->comment('Available for weekly rental');
            $table->decimal('weekly_price',20,2)->default(0);

            $table->boolean('is_monthly')->default(TRUE)->comment('Available for monthly rental');
            $table->decimal('monthly_price',20,2)->default(0);

            $table->boolean('is_annual')->default(TRUE)->comment('Available for annual rental');
            $table->decimal('annual_price',20,2)->default(0);

            $table->boolean('is_blocked')->default(FALSE)->comment('Define is this listing is blocked by system or not');
            $table->boolean('is_booked')->default(FALSE)->comment('Define is this listing is on booking (set by the owner)');
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
