<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
/*
create table recipient(user_id int not null,receivername varchar(50) not null,rphonenumber varchar(15),deliverydate date not null,relation varchar(50),occasion varchar(50),address varchar(50) not null,city varchar(20) not null,state varchar(20),zipcode varchar(10) not null,messageongift varchar(50),foreign key(user_id) references user(user_id)); 
*/

    public function up()
    {
        Schema::create('recipient', function (Blueprint $table) {
/*		$table->integer('user_id');*/
		$table->string('receivername');
		$table->string('rphonenumber');
		$table->date('deliverydate');
		$table->string('relation');
		$table->string('occasion');
		$table->string('address');
		$table->string('city');
		$table->string('state');
		$table->string('zipcode');
		$table->string('messageongift');
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
	if(Schema::hasTable('recipient')){
		Schema::drop('recipient');
	}
    }
}
