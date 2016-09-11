<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
      Schema::create('skills', function(Blueprint $table){
        $table->increments('id');
        $table->string('name');
        $table->integer('internship_field_id')->unsigned();
        $table->foreign('internship_field_id')->references('id')
          ->on('internship_fields')
          ->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
      Schema::table('skills', function(Blueprint $table){
        $table->dropForeign(['internship_field_id']);
      });
      Schema::drop('skills');
    }
}
