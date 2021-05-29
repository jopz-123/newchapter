<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_books', function (Blueprint $table) {
            $table->id();
            $table->string('bname');

            $table->string('Aname');

            $table->string('phouse');
            
            $table->string('pyear');

            $table->string('bdesc',1000);

            $table->string('bprice');

            $table->integer('cat_id');
            $table->longtext('bimage');
           
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
        Schema::dropIfExists('add_books');
    }
}
