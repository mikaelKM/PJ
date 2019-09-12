<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hires', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user');
            $table->string('project')->nullable();
            $table->string('project_name')->nullable();
            $table->string('type');
            $table->string('framework');
            $table->integer('phone')->unsigned();
            $table->string('mode');
            $table->string('location')->nullable();
            $table->string('attachment')->nullable();
            $table->LongText('Description');
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
        Schema::dropIfExists('hires');
    }
}
