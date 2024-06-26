<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('books', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('title');
        $table->string('slug')->unique();
        $table->text('description');
        $table->unsignedBigInteger('author_id')->index();
        $table->unsignedBigInteger('category_id')->index();
        $table->unsignedBigInteger('image_id')->nullable()->index(); // Nullable since it's not required for every book
        $table->bigInteger('quantity');
        $table->bigInteger('init_price');
        $table->integer('discount_rate')->nullable();
        $table->double('price');
        $table->softDeletes();
        $table->timestamps();

        $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
        $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
