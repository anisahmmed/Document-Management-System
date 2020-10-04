<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('author_name');
            $table->integer('category_id');
            $table->string('title');
            $table->longText('description');
            $table->string('file');
            $table->boolean('approval_status')->nullable();
            $table->date('published_date')->nullable();
            $table->string('technical_quality')->nullable();
            $table->string('presentaion_quality')->nullable();
            $table->string('clarity')->nullable();
            $table->string('reference_survey')->nullable();
            $table->string('relevance')->nullable();
            $table->longText('author_message')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('documents');
    }
}
