<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminModelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_model', function (Blueprint $table) {
            $table->id("admin_id");
            $table->string("admin_username");
            $table->string("admin_password");
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('admin_model')->insert(
            array(
                'admin_username' => 'admin',
                'admin_password' => 'admin'
            )
        );
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_model');
    }
}
