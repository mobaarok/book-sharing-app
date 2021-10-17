<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookWantRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_want_requests', function (Blueprint $table) {
            $table->id();
            $table->integer('book_id');
            $table->integer('donor_user_id');
            $table->integer('receiver_user_id');
            $table->string('receiver_need');
            $table->string('receiver_address');
            $table->string('receiver_study')->nullable();
            $table->string('receiver_contact_number');
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('book_want_requests');
    }
}
