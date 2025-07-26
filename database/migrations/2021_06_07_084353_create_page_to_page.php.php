<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageToPage extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('page_to_pages', function (Blueprint $table) {
            $table->unsignedBigInteger('parent_page_id');
            $table->unsignedBigInteger('child_page_id');
            
            $table->foreign('parent_page_id')->references('id')->on('pages')->onDelete('cascade');
            $table->foreign('child_page_id')->references('id')->on('pages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('page_to_pages');
    }
}
