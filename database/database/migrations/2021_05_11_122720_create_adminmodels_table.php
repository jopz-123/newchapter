<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminmodels', function (Blueprint $table) {
            $table->id();

            $table->string('uname');

            $table->string('usname');

            $table->string('uadd');

            $table->string('uemail');

            $table->string('usmob');

            $table->string('ugend');

            $table->string('upass');

            
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
        Schema::dropIfExists('adminmodels');
    }
}
