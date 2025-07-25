<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_fields', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('form_id');
            $table->string('type', 50);
            $table->string('css_class', 100)->nullable();
            $table->integer('position')->nullable();;
            $table->string('select_and_radio_values', 1000)->nullable();
            $table->boolean('required')->nullable();
            $table->string('placeholder')->nullable();
            $table->string('zoho_field_type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_fields');
    }
}
