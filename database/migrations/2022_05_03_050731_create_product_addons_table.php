<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('product_addons', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->foreignId('product_id')->constrained();
      $table->string('name');
      $table->foreignId('photo_id')->nullable();
      $table->string('price');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('product_addons');
  }
};
