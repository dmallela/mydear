<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

/*
create table purchase(purchase_id int not null auto_increment primary key,user_id int not null,gift_id int not null,costofpurchase int not null,purchasedon date not null, creditcardnumber varchar(50),billing varchar(50),foreign key(user_id) references user(user_id),foreign key(gift_id) references gifts(gift_id));

*/
    public function up()
    {

        Schema::create('purchase', function (Blueprint $table) {
		$table->increments('purchase_id');
/*		 $table->primary('purchase_id'); 
		$table->integer('user_id');
		$table->integer('gift_id');*/
		$table->integer('costofpurchase');
		$table->date('purchasedon');
		$table->string('creditcardnumber');
		$table->string('billing');
                $table->integer('user_id')->references('user_id')->on('user');
                $table->integer('gift_id')->references('user_id')->on('gifts');



	
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	if (Schema::hasTable('purchase'))
	{
		Schema::drop('purchase');
	}
    }
}
