<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->text('fname');
            $table->text('lname');
            $table->text('address');
            $table->integer('userId');
            $table->integer('departmentId');
            $table->integer('description');
            $table->integer('status');
            $table->integer('socialId');
            $table->integer('galleryId');
            $table->integer('eventId');
            $table->integer('locationId');
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
        Schema::dropIfExists('members');
    }
}
