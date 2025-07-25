<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PageToPages extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('page_to_pages', function (Blueprint $table) {
            $table->foreignId('parent_page_id')->constrained()->cascadeOnDelete();
            $table->foreignId('child_page_id')->constrained()->cascadeOnDelete();
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
