<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Form1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('login', function (Blueprint $form1) {
            $form1->string('name');
            $form1->integer('Date of birth');
            $form1->integer('Telephone No.');
            $form1->string('NIC No.');
            $form1->string('gender');

            $form1->timestamps();
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
        Schema::dropIfExists('login');
    }
}
