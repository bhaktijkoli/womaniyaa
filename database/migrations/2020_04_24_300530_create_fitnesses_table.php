<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFitnessesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('fitnesses', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('slug');
      $table->unsignedInteger('category_id');
      $table->string('video');
      $table->longtext('description');
      $table->longtext('benefits')->nullable();
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
    Schema::dropIfExists('fitnesses');
  }
}
