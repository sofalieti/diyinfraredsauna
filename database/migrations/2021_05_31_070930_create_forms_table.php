<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('header_text')->nullable();
            $table->string('footer_text')->nullable();
            $table->boolean('active')->nullable();;
            $table->boolean('use_captcha')->nullable();;
            $table->string('css_class', 100)->nullable();
            $table->text('success_text');
            $table->string('title');
            $table->string('button_text')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms');
    }
}
