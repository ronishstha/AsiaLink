<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('required_no');
            $table->string('salary');
            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->integer('jobcategory_id')->unsigned();
            $table->foreign('jobcategory_id')->references('id')->on('jobcategories')->onDelete('cascade');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->enum('status', ['published', 'unpublished', 'trash'])->default('published');
            $table->string('user_id');
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
        Schema::dropIfExists('demands');
    }
}
