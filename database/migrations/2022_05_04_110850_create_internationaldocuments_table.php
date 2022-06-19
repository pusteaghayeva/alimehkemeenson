<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternationaldocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internationaldocuments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('pdf_az')->nullable();
            $table->string('pdf_ru')->nullable();
            $table->string('pdf_en')->nullable();
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
        Schema::dropIfExists('internationaldocuments');
    }
}
