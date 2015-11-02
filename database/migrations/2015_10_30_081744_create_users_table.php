<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('user', function (Blueprint $table) {
		$table->increments('user_id');
/*		$table->primary('user_id');*/
 		$table->string('username');
		$table->string('password');
		$table->string('email');
		$table->string('phonenumber');
/*            $table->timestamps(); */

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {	
	if(Schema::hasTable('user')){
	 Schema::drop('user');
	}
    }
}
