<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('book_name');
            $table->string('slug');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->string('study_class')->nullable();
            $table->string('donation_division');
            $table->string('donation_district');
            $table->string('donation_address');
            $table->string('donation_contact_number');
            $table->string('book_photo')->nullable();
            $table->boolean('is_donated')->default(false); //donate hoye gele archive hoye jabe
            $table->boolean('is_wrong_info')->default(false); // newsfeed theke off hoye jabe
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
        Schema::dropIfExists('books');
    }
}
