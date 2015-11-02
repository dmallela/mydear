<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
/*create table cart(cart_id int not null auto_increment primary key,user_id int not null,gift_id int not null, foreign key(user_id) references user(user_id),foreign key(gift_id) references gifts(gift_id));
*/
        Schema::create('cart', function (Blueprint $table) {
		$table->increments('cart_id');
/*		$table->primary('cart_id');*/
/*		$table->integer('user_id')->unsigned();
		$table->integer('gift_id')->unsigned();
*/
		$table->integer('gift_id')->references('gift_id')->on('gifts');
                $table->integer('user_id')->references('user_id')->on('user');

	
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	if (Schema::hasTable('cart'))
	{
		Schema::drop('cart');
	}

    }
}
