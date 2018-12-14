<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
             $table->string('name');
              $table->string('file');
               $table->unsignedInteger('user_id')->nullable();
               $table->unsignedInteger('folder_id')->nullable();
               $table->unsignedInteger('admin_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           //$table->foreign('folder_id')->references('id')->on('folders')->onDelete('cascade');
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
        Schema::dropIfExists('files');
    }
}
