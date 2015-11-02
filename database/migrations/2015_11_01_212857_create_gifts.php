<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGifts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gifts', function (Blueprint $table) {
		$table->increments('gift_id');
/*		$table->primary('gift_id');*/
		$table->string('category');
		$table->string('giftname');
		$table->integer('giftcost');
		$table->string('description');
		$table->integer('quantity');
		$table->string('giftlocation');	
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	if(Schema::hasTable('gifts')){
		Schema::drop('gifts');
	}
    }
}
