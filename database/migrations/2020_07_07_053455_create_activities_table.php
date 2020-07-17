<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('jenis');
            $table->string('kategorijenis');
            $table->string('subjectmatter');
            $table->string('nama');
            $table->string('namatarget');
            $table->string('kettarget');
            $table->double('jmltarget',8);
            $table->integer('jmlpmlorg',6);
            $table->integer('jmlpmlnon',6);
            $table->integer('jmlpclorg',6);
            $table->integer('jmlpclnon',6);
            $table->date('tglmulai');
            $table->date('tglselesai');
            $table->string('mak', 50);
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
        Schema::dropIfExists('activities');
    }
}
