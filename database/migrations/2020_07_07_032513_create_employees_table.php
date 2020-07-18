<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 16)->unique();
            $table->string('nama');
            $table->string('alamat_domisili');
            $table->string('alamat_ktp');
            $table->string('tempatlhr');
            $table->date('tgllhr');
            $table->string('nohp', 15);
            $table->string('nowa', 15);
            $table->string('npwp',15);
            $table->string('rekening',30);
            $table->string('namabank');
            $table->string('namacabang');
            $table->string('namarekening');
            $table->string('alamatemail');
            $table->string('status');
            $table->string('nip');
            $table->string('jabatan');
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
        Schema::dropIfExists('employees');
    }
}
