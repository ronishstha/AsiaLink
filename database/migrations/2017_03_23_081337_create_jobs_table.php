<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title');
            $table->string('company');
            $table->string('location');
            $table->string('country');
            $table->string('image')->nullable();
            $table->string('required_no');
            $table->string('salary');
            $table->string('slug');
            $table->text('requirement');
            $table->text('description')->nullable();
            $table->enum('status', ['published', 'unpublished', 'trash'])->default('published');
            $table->string('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
