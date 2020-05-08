<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('foods', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('slug');
      $table->unsignedInteger('category_id');
      $table->string('video');
      $table->longtext('food_groups');
      $table->longtext('recipes')->nullable();
      $table->longtext('tips')->nullable();
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
    Schema::dropIfExists('foods');
  }
}
